( function( api ) {

	// Extends our custom "suraksha-security-guard" section.
	api.sectionConstructor['suraksha-security-guard'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );