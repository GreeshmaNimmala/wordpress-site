<?php

class SwpmShortcodesHandler {

    public function __construct() {
        //Register all the shortcodes here
        add_shortcode('swpm_payment_button', array(&$this, 'swpm_payment_button_sc'));
        add_shortcode('swpm_thank_you_page_registration', array(&$this, 'swpm_ty_page_rego_sc'));

        add_shortcode('swpm_show_expiry_date', array(&$this, 'swpm_show_expiry_date_sc'));
        
        add_shortcode('swpm_mini_login', array(&$this, 'swpm_show_mini_login_sc'));
    }

    public function swpm_payment_button_sc($args) {
        extract(shortcode_atts(array(
            'id' => '',
            'button_text' => '',
            'new_window' => '',
            'class' => '',
                        ), $args));

        if (empty($id)) {
            return '<p class="swpm-red-box">Error! You must specify a button ID with this shortcode. Check the usage documentation.</p>';
        }

        $button_id = $id;
        //$button = get_post($button_id); //Retrieve the CPT for this button
        $button_type = get_post_meta($button_id, 'button_type', true);
        if(empty($button_type)){
            $error_msg = '<p class="swpm-red-box">';
            $error_msg .= 'Error! The button ID ('.$button_id.') you specified in the shortcode does not exist. You may have deleted this payment button. ';
            $error_msg .= 'Go to the Manage Payment Buttons interface then copy and paste the correct button ID in the shortcode.';
            $error_msg .= '</p>';
            return $error_msg;
        }
    
        include_once(SIMPLE_WP_MEMBERSHIP_PATH . 'views/payments/payment-gateway/paypal_button_shortcode_view.php');
        include_once(SIMPLE_WP_MEMBERSHIP_PATH . 'views/payments/payment-gateway/stripe_button_shortcode_view.php');
        include_once(SIMPLE_WP_MEMBERSHIP_PATH . 'views/payments/payment-gateway/stripe_sca_button_shortcode_view.php');
        include_once(SIMPLE_WP_MEMBERSHIP_PATH . 'views/payments/payment-gateway/braintree_button_shortcode_view.php');
        include_once(SIMPLE_WP_MEMBERSHIP_PATH . 'views/payments/payment-gateway/paypal_smart_checkout_button_shortcode_view.php');

        $button_code = '';
        $button_code = apply_filters('swpm_payment_button_shortcode_for_' . $button_type, $button_code, $args);

        $output = '';
        $output .= '<div class="swpm-payment-button">' . $button_code . '</div>';

        return $output;
    }

    public function swpm_ty_page_rego_sc($args) {
        $output = '';
        $settings = SwpmSettings::get_instance();

        //If user is logged in then the purchase will be applied to the existing profile
        if (SwpmMemberUtils::is_member_logged_in()) {
            $username = SwpmMemberUtils::get_logged_in_members_username();
            $output .= '<div class="swpm-ty-page-registration-logged-in swpm-yellow-box">';
            $output .= '<p>' . SwpmUtils::_('Your membership profile will be updated to reflect the payment.') . '</p>';
            $output .= SwpmUtils::_('Your profile username: ') . $username;
            $output .= '</div>';
            return $output;
        }

        $output .= '<div class="swpm-ty-page-registration">';
        $member_data = SwpmUtils::get_incomplete_paid_member_info_by_ip();
        if ($member_data) {
            //Found a member profile record for this IP that needs to be completed
            $reg_page_url = $settings->get_value('registration-page-url');
            $rego_complete_url = add_query_arg(array('member_id' => $member_data->member_id, 'code' => $member_data->reg_code), $reg_page_url);
            $output .= '<div class="swpm-ty-page-registration-link swpm-yellow-box">';
            $output .= '<p>' . SwpmUtils::_('Click on the following link to complete the registration.') . '</p>';
            $output .= '<p><a href="' . $rego_complete_url . '">' . SwpmUtils::_('Click here to complete your paid registration') . '</a></p>';
            $output .= '</div>';
        } else {
            //Nothing found. Check again later.
            $output .= '<div class="swpm-ty-page-registration-link swpm-yellow-box">';
            $output .= SwpmUtils::_('If you have just made a membership payment then your payment is yet to be processed. Please check back in a few minutes. An email will be sent to you with the details shortly.');
            $output .= '</div>';
        }

        $output .= '</div>'; //end of .swpm-ty-page-registration

        return $output;
    }

    public function swpm_show_expiry_date_sc($args) {
        $output = '<div class="swpm-show-expiry-date">';
        if (SwpmMemberUtils::is_member_logged_in()) {
            $auth = SwpmAuth::get_instance();
            $expiry_date = $auth->get_expire_date();
            $output .= SwpmUtils::_('Expiry: '). $expiry_date;
        } else {
            $output .= SwpmUtils::_('You are not logged-in as a member');
        }
        $output .= '</div>';
        return $output;
    }

    public function swpm_show_mini_login_sc($args) {
        
        $login_page_url = SwpmSettings::get_instance()->get_value('login-page-url');
        $join_page_url = SwpmSettings::get_instance()->get_value('join-us-page-url');
        $profile_page_url = SwpmSettings::get_instance()->get_value('profile-page-url');
        $logout_url = SIMPLE_WP_MEMBERSHIP_SITE_HOME_URL . '?swpm-logout=true';
        
        $output = '<div class="swpm_mini_login_wrapper">';
        
        //Check if the user is logged in or not
        $auth = SwpmAuth::get_instance();
        if ($auth->is_logged_in()) {
            //User is logged in
            $username = $auth->get('user_name');
            $output .= '<span class="swpm_mini_login_label">'.SwpmUtils::_('Logged in as: ').'</span>';
            $output .= '<span class="swpm_mini_login_username">'.$username.'</span>';
            $output .= '<span class="swpm_mini_login_profile"> | <a href="'.$profile_page_url.'">'.SwpmUtils::_('Profile').'</a></span>';
            $output .= '<span class="swpm_mini_login_logout"> | <a href="'.$logout_url.'">'.SwpmUtils::_('Logout').'</a></span>';
        } else {
            //User not logged in.
            $output .= '<span class="swpm_mini_login_login_here"><a href="'.$login_page_url.'">'.SwpmUtils::_('Login Here').'</a></span>';
            $output .= '<span class="swpm_mini_login_no_membership"> | '.SwpmUtils::_('Not a member? ').'</span>';
            $output .= '<span class="swpm_mini_login_join_now"><a href="'.$join_page_url.'">'.SwpmUtils::_('Join Now').'</a></span>';
        }
        
        $output .= '</div>';
        return $output;
    }
}