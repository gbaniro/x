<?php
for ( $i=1; $i <=5; $i++ ) {
	if ( $in['forum_no_'.$i.'_bo_table'] ) ms::meta('forum_no_'.$i, $in['forum_no_'.$i.'_bo_table']);
	else ms::meta('forum_no_'.$i, $in['forum_no_'.$i] );
}	
	ms::meta('travel2banner_1_text1',$in['travel2banner_1_text1']);
	ms::meta('travel2banner_2_text1',$in['travel2banner_2_text1']);
	ms::meta('travel2banner_3_text1',$in['travel2banner_3_text1']);
	ms::meta('travel2banner_4_text1',$in['travel2banner_4_text1']);
	ms::meta('travel2banner_5_text1',$in['travel2banner_5_text1']);
	ms::meta('travel2banner_1_text2',$in['travel2banner_1_text2']);
	ms::meta('travel2banner_2_text2',$in['travel2banner_2_text2']);
	ms::meta('travel2banner_3_text2',$in['travel2banner_3_text2']);
	ms::meta('travel2banner_4_text2',$in['travel2banner_4_text2']);
	ms::meta('travel2banner_5_text2',$in['travel2banner_5_text2']);
	ms::meta('com3contact_num',$in['com3contact_num']);
	
	ms::meta('travel2contact_num1',$in['travel2contact_num1']);
	ms::meta('travel2contact_num2',$in['travel2contact_num2']);	
	ms::meta('travel2contact_hours1',$in['travel2contact_hours1']);
	ms::meta('travel2contact_hours2',$in['travel2contact_hours2']);
	
	ms::meta('travel2banner1_sidebar_text1',$in['travel2banner1_sidebar_text1']);
	ms::meta('travel2banner2_sidebar_text1',$in['travel2banner2_sidebar_text1']);
	ms::meta('travel2banner3_sidebar_text1',$in['travel2banner3_sidebar_text1']);
	ms::meta('travel2banner4_sidebar_text1',$in['travel2banner4_sidebar_text1']);
	ms::meta('travel2banner_bottom_text1',$in['travel2banner_bottom_text1']);
	ms::meta('travel2banner_right_text1',$in['travel2banner_right_text1']);
	ms::meta('travel2banner1_floating_text1',$in['travel2banner1_floating_text1']);
	ms::meta('travel2banner2_floating_text1',$in['travel2banner2_floating_text1']);
	ms::meta('travel2banner3_floating_text1',$in['travel2banner3_floating_text1']);
	
	ms::meta('travel2footer_tagline',$in['travel2footer_tagline']);
	
	ms::meta('travel2email_num1',$in['travel2email_num1']);
	ms::meta('travel2email_num2',$in['travel2email_num2']);

	ms::meta('travel2permit_1',$in['travel2permit_1']);
	ms::meta('travel2plate_1',$in['travel2plate_1']);