$(function() {
	/* config.php */
	$(".support .tab-menu .tab-button").click(function() {
		//$(".support .tab-menu .tab-button").removeClass('tab-button-selected'); --> 적용이 안 되는 듯 함.
		//$(".support .tab-menu .tab-button").css("background-color", "#53749c");
		$(".support-content .inner").hide();
		//$(this).addClass('tab-button-selected'); --> 적용이 안 되는 듯함
		//$(this).css("background-color", "#314258");
		
		var menu_name = $(this).attr('menu_name');
		$(".support-content ."+menu_name ).show();
		$(".support span").removeClass('tab-button-selected');
		$("span[menu_name='"+menu_name+"']").addClass('tab-button-selected');
	});
	
	/*config_theme.php*/
	$(".theme-thumb.inactive").click(function() {
		$confirm = confirm('Do you really want to change Theme?');
		if( $confirm == true ) {
			var theme_val = $(this).attr('theme_value');
			$("#theme_value").val(theme_val);
			$(".config_theme").submit();
		}
	});
	
var iframe_visible = false;	
var page;
	$('span.user-google-guide-button').click(function(){
	
		page = $(this).attr('page');			
		$(".hidden-google-doc."+page).slideToggle( 500 );		
	});	
});