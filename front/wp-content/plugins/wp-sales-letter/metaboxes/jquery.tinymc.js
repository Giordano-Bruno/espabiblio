	function RunTinyMCE(){
		settings = {mode:"specific_textareas", width:"100%", theme:"advanced", skin:"wp_theme", theme_advanced_buttons1:"bold,italic,strikethrough,underline,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,|,link,unlink,|,spellchecker", theme_advanced_buttons2:"formatselect,XXXforecolor,|,pastetext,pasteword,removeformat,|,outdent,indent,|,undo,redo,|,code", theme_advanced_buttons3:"", theme_advanced_buttons4:"", language:"en", spellchecker_languages:"+English=en,Danish=da,Dutch=nl,Finnish=fi,French=fr,German=de,Italian=it,Polish=pl,Portuguese=pt,Spanish=es,Swedish=sv", theme_advanced_toolbar_location:"top", theme_advanced_toolbar_align:"left", theme_advanced_statusbar_location:"bottom", theme_advanced_resizing:"1", theme_advanced_resize_horizontal:"", dialog_type:"modal", relative_urls:"", remove_script_host:"", convert_urls:"", apply_source_formatting:"", remove_linebreaks:"1", gecko_spellcheck:"1", entities:"38,amp,60,lt,62,gt", accessibility_focus:"1", tabfocus_elements:"major-publishing-actions", media_strict:"", paste_remove_styles:"1", paste_remove_spans:"1", paste_strip_class_attributes:"all", wpeditimage_disable_captions:"", plugins:"safari,inlinepopups,spellchecker,paste,wordpress,tabfocus"};
		
		var $ta, id, mceID;
		
		$('.customEditor textarea').each(function(i){
		
			$ta = $(this);
			id = $ta.attr('id');
			//Apply TinyMCE to everyone except the one to copy
			if(!$(this).parents('div.wpa_group').hasClass('tocopy')){
			
				tinyMCE.execCommand('mceAddControl', false, id);
			}
		});
		
		$('.custom_upload_buttons a').each(function() {
		
			$(this).click(function() {
				mceID = $(this).parent().next('textarea').attr('id');
				window.send_to_editor = window.send_to_editor_clone;
			});
			
			window.send_to_editor_clone = function(html){
				tinyMCE.execInstanceCommand(mceID, 'mceInsertContent', false, html);
				tb_remove();
			}
		});
	};
