<div class='config-wrapper'>
	<div class='config-title'>
		<span class='config-global-info'>사이트로고 배너</span>
		<span class='user-google-guide-button' page = 'google_doc_community_2_1'>[도움말]</span>
		<span class='config-title-notice'>
			<img src='<?=x::url().'/module/multisite/img/setting_2.png'?>'>
		</span>
		</div>	
<div class='config-container'>
<div class='hidden-google-doc google_doc_community_2_1'>	
		<div>필고 사이트 서비스 설명서:</div>
		<iframe src="https://docs.google.com/document/d/1hiM2OIFlCkASMOgnyBsrTVcvICZz26oIze9Cz7p9BI8/pub#h.5bu4gi87qhep" style='width:99.5%; height: 400px;'></iframe>	
	</div>
<table cellspacing='0' cellpadding='10' width='100%' class='image-config'>
	<tr valign='top'>
		<td>
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>사이트 로고</div>
			<div class='image-upload'>
			<?if( ms::meta('header_logo') ) {
				echo "<img src=".ms::meta('img_url').ms::meta('header_logo').">"; 
			} else echo "<div class='setting-no-image'>이미지가 없습니다. [가로 330px X 세로 50px]</div>"; ?>
				<input type='file' name='header_logo'><br>
				<?if( ms::meta('header_logo') != '' ) { ?>
					<input type='hidden' name='header_logo_remove' value='n'>
					<input type='checkbox' name='header_logo_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
			</div>
		</td>

		<td>
				<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>메인 배너</div>
			<div class='image-upload'>
			<?if( ms::meta('com2banner_main') ) {
				echo "<img src=".ms::meta('img_url').ms::meta('com2banner_main').">"; 
			} else echo "<div class='setting-no-image'>이미지가 없습니다. [가로 760px X 세로 250px]</div>"; ?>
				<input type='file' name='com2banner_main'><br>
				<?if( ms::meta('com2banner_main') != '' ) { ?>
					<input type='hidden' name='com2banner_main_remove' value='n'>
					<input type='checkbox' name='com2banner_main_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
			</div>
		</td>

		<td>
			<div class='image-title'><img src='<?=x::url()?>/module/multisite/img/img-icon.png'>하단 배너</div>
			<div class='image-upload'>
			<?if( ms::meta('com2banner_bottom') ) {
				echo "<img src=".ms::meta('img_url').ms::meta('com2banner_bottom').">"; 
			} else echo "<div class='setting-no-image'>이미지가 없습니다. [가로 760px X 세로 130px]</div>"; ?>
				<input type='file' name='com2banner_bottom'><br>
				<?if( ms::meta('com2banner_bottom') != '' ) { ?>
					<input type='hidden' name='com2banner_bottom_remove' value='n'>
					<input type='checkbox' name='com2banner_bottom_remove' value='y'><span class='title-small'>이미지 제거</span>
				<?}?>
			</div>
		</td>
	</tr>
</table>
</div>
</div>