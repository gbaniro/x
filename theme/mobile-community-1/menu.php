

<ul>
	<li class='menu_item'>
		<a href='/?page=latest_posts'>
			<img src='<?=x::url_theme()?>/img/mobile_icon1.png'/>		
			<span class='label'>Latest Posts</span>
		</a>
	</li>
	<li class='menu_item'>
		<a href='/?page=popular_posts'>
			<img src='<?=x::url_theme()?>/img/mobile_icon2.png'/>		
			<span class='label'>Popular Posts</span>
		</a>
	</li>
	<li class='menu_item write'>
		<a href='/?page=gallery'>
			<img src='<?=x::url_theme()?>/img/mobile_icon3.png'/>		
			<span class='label'>갤러리</span>
		</a>
	</li>
	<li class='menu_item images'>
		<a href='javascrip:void(0)'>
			<img src='<?=x::url_theme()?>/img/mobile_icon4.png'/>		
			<span class='label'>Menu</span>
		</a>
	</li>
	<?
		//this code is from outlogin skins
		$sql = " select count(*) as cnt from {$g5['memo_table']} where me_recv_mb_id = '{$member['mb_id']}' and me_read_datetime = '0000-00-00 00:00:00' ";
        $row = sql_fetch($sql);
        $memo_not_read = $row['cnt'];		
	?>
	<li class='menu_item mobile_message_icon'>
		<a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank" >
			<img src='<?=x::url_theme()?>/img/mobile_icon5.png'/>
			<span class='label'>
				Messages
				<?if( $memo_not_read ){?>
					<div class='exclamation'>!</div>
				<?}?>
			</span>			
		</a>		
	</li>
	<?
		if( $member['mb_id'] ) {
			$login_msg = "Logout";
			$profile_msg = "Profile";
			$profile_msg_url = G5_BBS_URL."/member_confirm.php?url=register_form.php";
		}
		else {
			$login_msg = "Login";
			$profile_msg = "Register";
			$profile_msg_url = G5_BBS_URL."/register.php";
		}
	?>
	<li class='menu_item log-in-button'>
		<a href='javascrip:void(0)'>
			<img src='<?=x::url_theme()?>/img/mobile_icon6.png'/>		
			<span class='label'>
				<?=$login_msg?>
			</span>
		</a>

		
		<div class='pop-up-login'>
			<?=outlogin('x-mobile-1');?>
		</div>
		

	</li>
	<li class='less-padding menu_item'>
		<a href='<?=$profile_msg_url?>'>
			<img src='<?=x::url_theme()?>/img/mobile_icon7.png'/>		
			<span class='label'><?=$profile_msg?></span>
		</a>
	</li>
</ul>