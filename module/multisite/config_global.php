<?php
	if ( ! ms::admin() ) {
		echo "You are not admin";
		return; 
	}
	/* 생성된 게시판 정보를 가저온다 */
	$qb = "bo_table LIKE '" . ms::board_id( etc::domain() ) . "\_%'";
	
	$q = "SELECT bo_table, bo_subject, bo_count_write FROM $g5[board_table] WHERE $qb";
	
	$rows = db::rows( $q );
	
	$no_of_board = count($rows);	
?>
<script src='<?=x::url()?>/module/multisite/subsite.js'></script>
<form action='?' class='config_general' method='POST' enctype='multipart/form-data'>
		<input type='hidden' name='module' value='multisite'>
		<input type='hidden' name='action' value='config_global_submit'>
<div class='config site-global'>
	<div class='config-main-title'><div class='inner'><img src='<?=x::url().'/module/multisite/img/direction.png'?>'> 사이트 정보</div></div>
		<div class='config-wrapper'>
			<div class='config-title'><span class='config-title-info'>기본 사이트 설정</span><span class='config-title-notice'><img src='<?=x::url().'/module/multisite/img/setting_2.png'?>'></span></div>	
			<div class='config-container'>
				<table cellpadding='5' cellspacing='0' width='100%'>
					<tr valign='top'>
						<td width='100'>
							<span>메인 타이틀</span></td><td><input type='text' name='title' value='<?=ms::meta('title')?>'>
						</td>
					</tr>
					<tr valign='top'>
						<td>
							<span>서브 타이틀</span></td><td><input type='text' name='secondary_title' value='<?=ms::meta('secondary_title')?>'>
						</td>
					</tr>
					<tr valign='top'>
						<td>
							<span>하단 문구</span></td><td><textarea name='footer_text' ><?=stripslashes(ms::meta('footer_text'))?></textarea>
						</td>
					</tr>
					<tr valign='top'>
						<td>		<span class='title-small'>사이드 바 위치:</span></td><td>				
							<div>
								<input type="radio" name="theme_sidebar" value="left"  <?if(!ms::meta('theme_sidebar') || ms::meta('theme_sidebar') == 'left') echo "checked"?>><span class='radio-left'>왼쪽</span> 
								<input type="radio" name="theme_sidebar" value="right" <?if(ms::meta('theme_sidebar') =='right') echo "checked"?>><span class='radio-right'>오른쪽</span>
							</div>
						</td>
					</tr>
				</table>
				<input type='submit' value='업데이트'>
				<div style='clear:right;'></div>

			</div>
		</div>


		
		<? if ( ms::meta('theme') ) { ?>
			<?php
				if ( file_exists( ms::theme('setting') ) ) include ms::theme('setting');
			?>
		<? } else { ?>
			<h1>테마를 선택하십시오.</h1>
		<? } ?>
		
		
		
		<input type='submit' value='업데이트'>
		<div style='clear:right;'></div>

</div>
</form>