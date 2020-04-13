(function($) {
  'use strict';

  // CSS and JS editor
	function getEditor($editorID, $textareaID, $mode) {
		if ($('#' + $editorID).length > 0) {
      var editor, textarea;

      editor 	  = ace.edit($editorID, {
        mode: 'ace/mode/' + $mode,
        selectionStyle: 'text'
      });

      textarea 	= $('#' + $textareaID).hide();

			editor.session.setValue(textarea.val());
      editor.setTheme('ace/theme/xcode');

			editor.session.on('change', function () {
				textarea.val(editor.session.getValue());
			});

			editor.session.setUseWrapMode(true);
			editor.renderer.setShowPrintMargin(null);
			editor.session.setUseSoftTabs(null);
    }
  }

  // On DOM ready
  $(document).ready(function () {
    getEditor(wphfcode_meta_l10n.prefix + 'css_editor', '_' + wphfcode_meta_l10n.prefix + 'post_meta_fields_css', 'css');
    getEditor(wphfcode_meta_l10n.prefix + 'js_editor', '_' + wphfcode_meta_l10n.prefix + 'post_meta_fields_js', 'javascript');
  });
})(jQuery);
