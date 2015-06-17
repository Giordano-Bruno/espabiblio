jQuery(document).ready(function($){
	var targetEditor;
	
	$('#sample_text_box').overlay({mask:{ color:'#666666', opacity: 0.5}, top: '20%', left: '25%'});
	var api_overlay = $('#sample_text_box').data("overlay");
		api_overlay.onClose(function(){
			tinymce.get('sample_text_editor').setContent('');//CWG Change 9/25/2014
			$('#category_sample option:selected').removeAttr('selected');
			$("#category_sample option[value='0']").attr('selected', 'selected');
			$('.category_sample_text').hide();
		});
	 
	(function() {
		tinymce.create('tinymce.plugins.tinyplugin', {
			init : function(ed, url){
				ed.addButton('tinySampleText', {
					title : 'Insert Sample Text',
					onclick : function() {
						ed.focus();//CWG 9/25/2014
						targetEditor = tinyMCE.activeEditor.id;
						api_overlay.load();
					},
					image: url + "/custom-tinyMCE.png"
				});
			}
		});
	 
		tinymce.PluginManager.add('tinySampleText', tinymce.plugins.tinyplugin);
	 
	})();
	
	$('#category_sample').change(function(){
		$('.category_sample_text').hide();
		var uniqueID = $(':selected',this).val();
		if(uniqueID) $('#'+ uniqueID).show();
	});
	$('.category_sample_text span').each(function(){
		$(this).click(function(){
			var content = $(this).html();
			
			tinyMCE.get('sample_text_editor').setContent(content); //CWG Change 9/25/2014
		})
	});
	$('.add-tinyMCE-text').click(function(){
		var inserted_content = tinymce.get('sample_text_editor').getContent(),//CWG Change 9/25/2014
			formatted = inserted_content.replace(/^<p>+|<\/p>+$/g, '')

		tinymce.get( targetEditor ).setContent(formatted);//CWG 9/25/2014
		$('#content').html(function(){ return $(this).html()+formatted});
		
		api_overlay.close();
	});
	$('.cancel-tinyMCE-text').click(function(){
		api_overlay.close();
	});
});