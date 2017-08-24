(function ($) {
  Drupal.color = {
    logoChanged: false,
    callback: function(context, settings, form, farb, height, width) {
      // Change the logo to be the real one.
      if (!this.logoChanged) {
        $('#preview #logo img').attr('src', Drupal.settings.color.logo);
        this.logoChanged = true;
      }
      // Remove the logo if the setting is toggled off.
      if (Drupal.settings.color.logo == null) {
        $('div').remove('#preview-logo');
      }

      $('#preview .base-color', form).css('color', $('#palette input[name="palette[base]"]', form).val());
      $('#preview .base-color-background', form).css('background-color', $('#palette input[name="palette[base]"]', form).val());
      $('#preview .base-color-border-top', form).css('border-top-color', $('#palette input[name="palette[base]"]', form).val());
      $('#preview .secondary-color', form).css('color', $('#palette input[name="palette[secondary-color]"]', form).val());
      $('#preview .third-color', form).css('color', $('#palette input[name="palette[third-color]"]', form).val());
      $('#preview .text-color', form).css('color', $('#palette input[name="palette[text]"]', form).val());
      $('#preview .border-color', form).css('border-color', $('#palette input[name="palette[border-color]"]', form).val());
      $('#preview .error-background', form).css('background-color', $('#palette input[name="palette[error-background]"]', form).val());
      $('#preview .error-text', form).css('color', $('#palette input[name="palette[error-text]"]', form).val());
      $('#preview .status-background', form).css('background-color', $('#palette input[name="palette[status-background]"]', form).val());
      $('#preview .status-border', form).css('border-color', $('#palette input[name="palette[status-border]"]', form).val());
      $('#preview .status-text', form).css('color', $('#palette input[name="palette[status-text]"]', form).val());
    }
  };
})(jQuery);
