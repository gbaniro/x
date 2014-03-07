<?
	if ( ! ms::admin() ) {
		echo "You are not admin";
		return;
	}
	if ( $in['mode'] == 'forum_setting' ) include_once x::dir() . '/module/multisite/forum_setting.php';
	else {
			/* 생성된 게시판 정보를 가저온다 */
			$board_id = ms::board_id( etc::domain() ).'\_';
			$qb = "bo_table LIKE '{$board_id}%'";
			$q = "SELECT bo_table, bo_subject, bo_count_write FROM $g5[board_table] WHERE $qb";
			$rows = db::rows( $q );
			$no_of_board = count($rows);
		?>
	<link rel='stylesheet' type='text/css' href='<?=x::url()?>/module/multisite/subsite.css' />
	<div class='config config_forum'>
	<?include ms::site_menu();?>
	<div class='config-main-title'>
		<div class='inner'>
			<span class='config-title-info'><img src='<?=x::url().'/module/multisite/img/direction.png'?>'> 게시판은 게시판 제목을 입력하시면 생성이 됩니디.</span>
			<span class='config-title-notice'><span class='user-google-guide-button inner-title' page = 'google_doc_1'>[도움말]</span></span>
			<div style='clear: both'></div>
		</div>
	</div>
		<div class='hidden-google-doc google_doc_1'>	
			<div>필고 사이트 서비스 설명서:</div>
			<iframe src="https://docs.google.com/document/d/1hiM2OIFlCkASMOgnyBsrTVcvICZz26oIze9Cz7p9BI8/pub#h.5bu4gi87qhep" style='width:99.5%; height: 400px;'></iframe>	
		</div>
		<div class='config-wrapper'>
			<div class='config-title'><span class='config-title-info'><span class='title-forum'>게시판 목록</span>게시판 수 : <b><?=count($rows)?></span><span class='config-title-notice'><img src='<?=x::url().'/module/multisite/img/setting_2.png'?>'></span></div>	
			<div class='config-container'>
		<form class='create-forum' target='hidden_iframe' autocomplete='off'>
			<input type='hidden' name='module' value='multisite' />
			<input type='hidden' name='action' value='config_forum_submit' />
			<input type='hidden' name='no_of_board' value=<?=$no_of_board?> />
			<input class='create-forum-input' type='text' name='subject' placeholder='게시판 제목을 입력하세요.' />
			<input type='submit' value='생성' class='config-forum-submit'/>
		</form>
		<!--<div class='no_of_board'>게시판 수 : <b><?=count($rows)?></b></div>-->
		<div style='clear:right;'></div>
		
		<table class='board_list' cellpadding=0 cellspacing=0 width='100%'>
			<tr class='header1'>
				<td width=25%>게시판 아이디</td>
				<td width=25%>게시판 제목</td>
				<td width=25% align='center'>글 수</td>
				<td width=25% class='padding-extra1'>설정</td>
			</tr>
		<?php
		$i = 0;
		foreach ( $rows as $row ) {
			if ( $i % 2 ) $background="background";
			else $background = null;
			$i++;
			echo "
				<tr  class='row $background' >
					<td width=20%>$row[bo_table]</td>
					<td width=20%>$row[bo_subject]</td>
					<td width=20% align='center'>".number_format($row['bo_count_write'])."</td>
					<td width=25% class='padding-extra2' align='left'>
						<a href='?module=multisite&action=config_forum&mode=forum_setting&bo_table=$row[bo_table]'><img class='setting-icon' src='".x::url()."/module/multisite/img/setting.png' /></a>
					</td>
				</tr>
			";
		}
		?>
		</table>	
		</div></div>
	</div>
<?}?>
