// $Id$
/**
 * @file
 * Behaviors for the Contact information settings form.
 */
(function ($) {
  Drupal.behaviors.contactinfo = {
    attach: function() {
      var useSiteNameCheckbox = $('#edit-contactinfo-use-site-name');
      var orgTextField = $('#edit-contactinfo-org');
      var siteName = Drupal.settings.siteName;
      var organizationName = orgTextField.val();

      if (useSiteNameCheckbox.is(':checked')) {
        orgTextField.attr('disabled', 'disabled').val(siteName);
      }
      useSiteNameCheckbox.change(function() {
        if ($(this).is(':checked')) {
          organizationName = orgTextField.val();
          orgTextField.attr('disabled', 'disabled').val(siteName);
        }
        else {
          orgTextField.removeAttr('disabled').val(organizationName);
        }
      });
    }
  };
})(jQuery);
