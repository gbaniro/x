<? 
	if ( ms::meta('forum_no_6') ) {
		$menu_row1 = db::row("SELECT bo_subject FROM $g5[board_table] WHERE bo_table='".ms::meta('forum_no_6')."'");
	}
	if ( ms::meta('forum_no_7') ) {
		$menu_row2 = db::row("SELECT bo_subject FROM $g5[board_table] WHERE bo_table='".ms::meta('forum_no_7')."'");
	}
	
?>

<link rel='stylesheet' type='text/css' href='<?=x::url_theme()?>/css/theme.css' />
<link rel='stylesheet' type='text/css' href='<?=x::url_theme()?>/css/head.css' />
<link rel='stylesheet' type='text/css' href='<?=x::url_theme()?>/css/tail.css' />
<div class='layout'>
	<div class='top'>
		<div class='inner'>
			<? 
				$page_uri = $_SERVER['REQUEST_URI'];
				if ( $member['mb_id'] ) {
			
				$do_log = "<a href='".G5_BBS_URL."/logout.php'>로그아웃</a>";
				$profile = "<a href='".G5_BBS_URL."/member_confirm.php?url=register_form.php'>회원정보수정</a>";
			} 
				else {
				
				$do_log = "<a href='".G5_BBS_URL."/login.php'>로그인</a>";
				$profile = "<a href='".G5_URL."/".G5_BBS_DIR."/register.php'>회원가입</a>";
			}?>
			<?
			?>
			<div class='left'>
				<a href='<?=g::url()?>'>홈</a><?=$do_log?><?=$profile?>
				<? if ( $menu_row1['bo_subject'] ) {?>
					
					<a page = '<?=ms::meta('forum_no_6')?>' href='<?=G5_BBS_URL?>/board.php?bo_table=<?=ms::meta('forum_no_6')?>'><?=cut_str($menu_row1['bo_subject'],15,'...')?></a>
				<? }?>
				<? if ( $menu_row2['bo_subject'] ) {?>
					
					<a page = '<?=ms::meta('forum_no_7')?>' href='<?=G5_BBS_URL?>/board.php?bo_table=<?=ms::meta('forum_no_7')?>'><?=cut_str($menu_row2['bo_subject'],15,'...')?></a>
				<? }?>
			</div>
			
			<div class='right'>
				<? if ( !$com3_contact_number = ms::meta('com3contact_num') ) $com3_contact_number = '+82 070 7529 1749'?>
				<a href='javascript:void(0)'>전화번호: <?=$com3_contact_number?></a>
				
				<a href='<?=g::url()?>?device=mobile'>모바일</a>
			</div>
			
			
			
			
		</div>
	</div>
	<div class='header'>

	<table width='100%' cellpadding=0 cellspacing=0><tr valign='top'>
		<td width=400>
			<div id="comm3_logo">
				<a href="<?php echo G5_URL ?>">
				<?if( ms::meta('header_logo') ) { ?>
					<img src="<?=ms::meta('img_url').ms::meta('header_logo')?>">
				<?} else {?>
					<img src='<?=x::url_theme()?>/img/banner.png'>
				<?}?>
				</a>
			</div>
		</td>
		<td>
			<fieldset id="search_field">
				<legend>사이트 내 전체검색</legend>
				<form name="comm3_search_form" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
				<input type="hidden" name="sfl" value="wr_subject||wr_content">
				<input type="hidden" name="sop" value="and">
				<label for="sch_stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="stx" id="comm3_search_text" maxlength="20" placeholder='검색어를 입력해 주세요.' autocomplete='off'><input type="submit" value='검색' id="comm3_search_submit">

				</form>
			</fieldset>
		</td>
		</tr>
	</table>
	</div><!--header-->

	<div class='main-menu'>	
			<?include x::theme('main-menu')?>
	</div>

	<div class='body-wrapper'>
		<div class='main-content'>
			<div class='sidebar'>	
				<? include x::theme('sidebar'); ?>
			</div>
			<div class='content'>
				<?if (preg_match('/^config/', $action ) ) include ms::site_menu();?>
