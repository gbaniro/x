<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<link rel="stylesheet" href="<?php echo $latest_skin_url ?>/style.css">
<? if( $list ) { ?>
<div class="my-posts" >
		<div class='title'>
			<table width='100%'>
				<tr valign='top'>
					<td align='left' class='title-left'>
					<?
					if( $options ) $img_src = $options;
					else $img_src = $latest_skin_url."/img/my-posts.png";
					?>
						<img class='icon' src='<?=$img_src?>'/>
						<span class='label'>내 글</div>
					</td>
					<td align='right'>
						<div class='posts-more'><a href="<?=g::url()?>/bbs/board.php?bo_table=<?=$bo_table?>">자세히 <img src="<?=$latest_skin_url?>/img/more-icon.png"></a></div>
					</td>
				</tr>
			</table>
		</div>
	<div class='posts-items'>
		<ul>
		<?php
			
			foreach ( $list as $li ) {
				$subject = $li['subject'];				
				$url = $li['href'];
				$no_comment = '';
				if ( !$comment_count = strip_tags($li['comment_cnt'])) {
						$comment_count = 0;
						$no_comment = 'no-comment';
					}
		?>	
			<li>
				<a href='<?=$url?>'>					
				<?
					echo "<img src='".$latest_skin_url."/img/bullet.png'/><div class='comments-info'><span class='subject'>$subject</span> <span class='no-of-comments ".$no_comment."'>[$comment_count]</span></div>";
				?>
				</a>
			</li>		
		<?}?>
		</ul>
	</div>
</div>
<? } ?>

