<div class='config-wrapper'>
	<div class='config-title'><span class='config-title-info'>로고</span><span class='config-title-notice'><img src='<?=x::url().'/module/multisite/img/setting_2.png'?>'></span></div>	
	<div class='config-container'>
	<table cellspacing='0' cellpadding='3' width='100%' class='image-config'>
	<tr valign='top' >
		<td width='50%'>
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>사이트 로고</div>
			<div class='image-upload'>
			<?if( ms::meta('header_logo') ) {
				echo "<img src=".ms::meta('img_url').ms::meta('header_logo').">"; 
			} else echo "<div class='setting-no-image'>NO-IMAGE: [310px-width by 60px-height]</div>"; ?>
				<input type='file' name='header_logo'>
				<?if( ms::meta('header_logo') != '' ) { ?>
					<input type='hidden' name='header_logo_remove' value='n'>
					<input type='checkbox' name='header_logo_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
			</div>
		</td>
		<td width='50%'>
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>회사로고</div>
			<div class='image-upload'>
			<?if( ms::meta('companybanner_1') ) {
				echo "<img src=".ms::meta('img_url').ms::meta('companybanner_1').">"; 
			} else echo "<div class='setting-no-image'>NO-IMAGE: [210px-width by 90px-height]</div>"; ?>
				<input type='file' name='companybanner_1'>
				<?if( ms::meta('companybanner_1') != '' ) { ?>
					<input type='hidden' name='companybanner_1_remove' value='n'>
					<input type='checkbox' name='companybanner_1_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
			</div>
		</td>
	</tr>	
</table>
</div>
</div>
<div class='config-wrapper'>
	<div class='config-title'><span class='config-title-info'>롤링 배너(메인 배너)</span><span class='config-title-notice'><img src='<?=x::url().'/module/multisite/img/setting_2.png'?>'></span></div>	
	<div class='config-container'>
<table cellspacing='0' cellpadding='3' width='100%' class='image-config'>
	<tr valign='top' >
		<td width='33%'>
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>롤링배너1</div>		
			<div class='image-upload'>
				<?if( ms::meta('combanner_1') ) {
					echo "<img src=".ms::meta('img_url').ms::meta('combanner_1').">"; 
				} else echo "<div class='setting-no-image'>NO-IMAGE: [750px-width by 230px-height]</div>"; ?>
				<input type='file' name='combanner_1'><br>
				<?if( ms::meta('combanner_1') != '' ) { ?>
					<input type='hidden' name='combanner_1_remove' value='n'>
					<input type='checkbox' name='combanner_1_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
				<div class='title'>배너1 제목</div>
				<input type='text' name='combanner_1_text1' value='<?=ms::meta('combanner_1_text1')?>'>
				<div class='title'>배너1 문구</div>
				<textarea name='combanner_1_text2'><?=stripslashes(ms::meta('combanner_1_text2'))?></textarea>
				<div class='title'>배너1 링크</div>
				<input type='text' name='combanner_1_text3' value='<?=ms::meta('combanner_1_text3')?>'>
			</div>
		</td>
 
		<td width='33%'>
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>롤링배너2</div>
			<div class='image-upload'>
				<?if( ms::meta('combanner_2') ) {
					echo "<img src=".ms::meta('img_url').ms::meta('combanner_2').">"; 
				} else echo "<div class='setting-no-image'>NO-IMAGE: [750px-width by 230px-height]</div>"; ?>
				<input type='file' name='combanner_2'><br>
				<?if( ms::meta('combanner_2') != '' ) { ?>
					<input type='hidden' name='combanner_2_remove' value='n'>
					<input type='checkbox' name='combanner_2_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
				<div class='title'>배너2 제목</div>
				<input type='text' name='combanner_2_text1' value='<?=ms::meta('combanner_2_text1')?>'>
				<div class='title'>배너2 문구</div>
				<textarea name='combanner_2_text2'><?=stripslashes(ms::meta('combanner_2_text2'))?></textarea>
				<div class='title'>배너2 링크</div>
				<input type='text' name='combanner_2_text3' value='<?=ms::meta('combanner_2_text3')?>'>
			</div>
		</td>
		<td width='33%'>
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>롤링배너3</div>
			<div class='image-upload'>
				<?if( ms::meta('combanner_3') ) {
					echo "<img src=".ms::meta('img_url').ms::meta('combanner_3').">"; 
				} else echo "<div class='setting-no-image'>NO-IMAGE: [750px-width by 230px-height]</div>"; ?>
				<input type='file' name='combanner_3'><br>
				<?if( ms::meta('combanner_3') != '' ) { ?>
					<input type='hidden' name='combanner_3_remove' value='n'>
					<input type='checkbox' name='combanner_3_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
				<div class='title'>배너3 제목</div>
				<input type='text' name='combanner_3_text1' value='<?=ms::meta('combanner_3_text1')?>'>
				<div class='title'>배너3 문구</div>
				<textarea name='combanner_3_text2'><?=stripslashes(ms::meta('combanner_3_text2'))?></textarea>
				<div class='title'>배너3 링크</div>
				<input type='text' name='combanner_3_text3' value='<?=ms::meta('combanner_3_text3')?>'>
			</div>
		</td>
</tr>
<tr valign='top'>
		<td>
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>롤링배너4</div>
			<div class='image-upload'>
				<?if( ms::meta('combanner_4') ) {
					echo "<img src=".ms::meta('img_url').ms::meta('combanner_4').">"; 
				} else echo "<div class='setting-no-image'>NO-IMAGE: [750px-width by 230px-height]</div>"; ?>
				<input type='file' name='combanner_4'><br>
				<?if( ms::meta('combanner_4') != '' ) { ?>
					<input type='hidden' name='combanner_4_remove' value='n'>
					<input type='checkbox' name='combanner_4_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
				<div class='title'>배너4 제목</div>
				<input type='text' name='combanner_4_text1' value='<?=ms::meta('combanner_4_text1')?>'>
				<div class='title'>배너4 문구</div>
				<textarea name='combanner_4_text2'><?=stripslashes(ms::meta('combanner_4_text2'))?></textarea>
				<div class='title'>배너4 링크</div>
				<input type='text' name='combanner_4_text3' value='<?=ms::meta('combanner_4_text3')?>'>
			</div>
		</td>
		<td>
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>롤링배너5</div>
			<div class='image-upload'>
				<?if( ms::meta('combanner_5') ) {
					echo "<img src=".ms::meta('img_url').ms::meta('combanner_5').">"; 
				} else echo "<div class='setting-no-image'>NO-IMAGE: [750px-width by 230px-height]</div>"; ?>
				<input type='file' name='combanner_5'><br>
				<?if( ms::meta('combanner_5') != '' ) { ?>
					<input type='hidden' name='combanner_5_remove' value='n'>
					<input type='checkbox' name='combanner_5_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
				<div class='title'>배너5 제목</div>
				<input type='text' name='combanner_5_text1' value='<?=ms::meta('combanner_5_text1')?>'>
				<div class='title'>배너5 문구</div>
				<textarea name='combanner_5_text2'><?=stripslashes(ms::meta('combanner_5_text2'))?></textarea>
				<div class='title'>배너5 링크</div>
				<input type='text' name='combanner_5_text3' value='<?=ms::meta('combanner_5_text3')?>'>
			</div>
		</td>
	</tr>
</table>
</div>
</div>
<div class='config-wrapper'>
	<div class='config-title'><span class='config-title-info'>일반 배너</span><span class='config-title-notice'><img src='<?=x::url().'/module/multisite/img/setting_2.png'?>'></span></div>
	<div class='config-container'>
<table cellspacing='0' cellpadding='3' width='100%' class='image-config'>
	<tr valign='top' >
		<td width='33%'> 
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>중간 위치 배너</div>
			<div class='image-upload'>
				<?if( ms::meta('combanner_middle') ) {
					echo "<img src=".ms::meta('img_url').ms::meta('combanner_middle').">"; 
				} else echo "<div class='setting-no-image'>NO-IMAGE: [750px-width by 110px-height]</div>"; ?>
				<input type='file' name='combanner_middle'><br>
				<?if( ms::meta('combanner_middle') != '' ) { ?>
					<input type='hidden' name='combanner_middle_remove' value='n'>
					<input type='checkbox' name='combanner_middle_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
			</div>
		</td>

		<td width='33%'>
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>하단 위치 배너</div>
			<div class='image-upload'>
				<?if( ms::meta('combanner_bottom') ) {
					echo "<img src=".ms::meta('img_url').ms::meta('combanner_bottom').">"; 
				} else echo "<div class='setting-no-image'>NO-IMAGE: [750px-width by 110px-height]</div>"; ?>
				<input type='file' name='combanner_bottom'><br>
				<?if( ms::meta('combanner_bottom') != '' ) { ?>
					<input type='hidden' name='combanner_bottom_remove' value='n'>
					<input type='checkbox' name='combanner_bottom_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
			</div>
		</td>
		<td>
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>사이드 배너</div>
			<div class='image-upload'>
				<?if( ms::meta('combanner_sidebar') ) {
					echo "<img src=".ms::meta('img_url').ms::meta('combanner_sidebar').">"; 
				} else echo "<div class='setting-no-image'>NO-IMAGE: [190px-width by 160px-height]</div>"; ?>
				<input type='file' name='combanner_sidebar'><br>
				<?if( ms::meta('combanner_sidebar') != '' ) { ?>
					<input type='hidden' name='combanner_sidebar_remove' value='n'>
					<input type='checkbox' name='combanner_sidebar_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
				<div class='title'>사이드 배너 제목</div>
				<input type='text' name='combanner_sidebar_text1' value='<?=ms::meta('combanner_sidebar_text1')?>'>
			</div>
		</td>
	</tr>
	
	<tr valign='top'>
		<td colspan=3>
			<span class='title'>사이트 상단 전화번호</span>
			<input type='text' name='comheader_contact_number' value='<?=ms::meta('comheader_contact_number')?>'>
		</td>
	</tr>
</table>
</div>
</div>