jQuery(document).ready(function($)
	{


		$(document).on('click', '#accordions_metabox .reset-active', function()
			{

				$('input[name="accordions_active_accordion"]').prop('checked', false);
				
			})






		$(document).on('keyup', '#accordions_metabox .section-panel input', function()
			{
				var text = $(this).val();
				
				if(text == '')
					{
						$(this).parent().parent().children('.section-header').children('.accordions-title-preview').html('start typing');
					}
				else
					{
						$(this).parent().parent().children('.section-header').children('.accordions-title-preview').html(text);
					}
				
				
			
			})






		$(document).on('click', '#accordions_metabox .section-header', function()
			{	
				if($(this).parent().hasClass('active'))
					{
					$(this).parent().removeClass('active');
					}
				else
					{
						$(this).parent().addClass('active');
					}
				

			})





		$(document).on('click', '.accordions_icons_custom_plus', function()
			{	
			var icon_id = prompt("font awesome icon id ?","");
			if(icon_id != null && icon_id != '')
				{

					$(this).addClass(icon_id);
					$(".accordions_icons_custom_plus input").val(icon_id);
				}

			})
		
		
		$(document).on('click', '.accordions_icons_custom_minus', function()
			{	
			var icon_id = prompt("font awesome icon id ?","");
			if(icon_id != null && icon_id != '')
				{
		
					
					$(this).addClass(icon_id);
					$(".accordions_icons_custom_minus input").val(icon_id);
				}

			})		
		

		

		$(document).on('click', '.accordions-content-buttons .add-accordions', function()
			{	
				
				var unique_key = $.now();
				
				$("#accordions_metabox .accordions-content").append('<div calss="items" valign="top"><div class="section-header"><div class="accordions-title-preview">Demo Title #'+unique_key+'</div><span class="removeaccordions">X</span><label><input type="checkbox" value="1" name="accordions_hide['+unique_key+']">Hide on Frontend</label></div><div class="section-panel"><input width="100%" placeholder="accordions Header" type="text" name="accordions_content_title['+unique_key+']" value="" /><br /><br /><textarea placeholder="accordions Content" name="accordions_content_body['+unique_key+']" ></textarea></div></div>');
				

				
			})	
		
		
		
		$(document).on('click', '#accordions_metabox .removeaccordions', function()
			{	
				
				if (confirm('Do you really want to delete this section ?')) {
					
					$(this).parent().parent().remove();
				}
				
				
				
			})	
	
 		

	});