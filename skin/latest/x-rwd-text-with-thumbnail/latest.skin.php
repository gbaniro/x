<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

	$url_forum = g::url_forum( $bo_table );
	$url_icon = g::url_skin('img/icon.png');
	
?>

<link rel="stylesheet" href="<?php echo $latest_skin_url ?>/style.css">

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div class="x-rwd-text-with-thumbnail">
    <div class="title">
		<?
			if( $options ) {
				echo "<a href='$url_forum'><img class='icon' src='$url_icon'/></a>";
			}
		?>
		<a href='<?=g::url_forum($bo_table)?>'><?php echo $bo_subject; ?></a>
		
		<span class='more-button'><a href='<?=g::url_forum($bo_table)?>'>자세히</a></span>
		<div style='clear:right;'></div>
	</div>
    <table width='100%' cellpadding=0 cellspacing=0>
    <?php
		for ($i=0; $i<count($list); $i++) {
		
	?>
	<tr valign='top'>
		
            <?php			
			$imgsrc = get_list_thumbnail( $bo_table , $list[$i]['wr_id'], 70, 46 );
			
			//if ( !$imgsrc ) $img = $latest_skin_url.'/img/no-image.png';
			//else $img = $imgsrc['src'];
			if( $imgsrc ) $img = $imgsrc['src'];
			else $img = $latest_skin_url.'/img/no-image.png';
			
			
			echo "<td><div class='photo'><a href='".$list[$i]['href']."'><img src='$img'/></a></div></td>";
			        
            echo "<td>
					<div class='subject'><a href='".$list[$i]['href']."'>".conv_subject($list[$i]['subject'], 15, '...')."</a></div>
					<div class='contents_wrapper'><a href='".$list[$i]['href']."'>".cut_str(strip_tags($list[$i]['wr_content']), 50, '...')."</a></div>
			
				</td>";
			
			if( !$list[$i]['comment_cnt'] ) $comment_count = "<span class='comment_count no-comment'>0</span>";
			else $comment_count = "<span class='comment_count'>".strip_tags($list[$i]['comment_cnt'])."</span>";
			
			echo "<td><div class='comment_and_time'>".$comment_count."<br><span class='time'>".$list[$i]['datetime2']."</span></div></td>";
             ?>	
	</tr>	
    <?php }  ?>
    <?php if(count($list) == 0) { //게시물이 없을 때  ?>
		<tr>
			<td width=40><div class='timed_list_image'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=5'><img src='<?=$latest_skin_url?>/img/no-image.png'/></a></div></td>
			 <td width=240>
				<div class='subject'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=5'>사이트 만들기 안내</a></div>
				<div class='contents_wrapper'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=5'>사이트 만들기 안내</a></div>
			 </td>	
			<td><div class='comment_and_time'>10<br><span class='time'><?=date('H:i', time())?></span></div></td>
		</tr>
		<tr>
			<td width=40><div class='timed_list_image'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=4'><img src='<?=$latest_skin_url?>/img/no-image.png'/></a></div></td>
			 <td width=240>
				<div class='subject'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=4'>블로그 만들기</a></div>
				<div class='contents_wrapper'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=4'>블로그 만들기</a></div>
			</td>	
			<td><div class='comment_and_time'>10<br><span class='time'><?=date('H:i', time())?></span></div></td>
		</tr>
		<tr>
			<td width=40><div class='timed_list_image'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=3'><img src='<?=$latest_skin_url?>/img/no-image.png'/></a></div></td>
			 <td width=240>
				<div class='subject'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=3'>커뮤니티 사이트 만들기</a></div>
				<div class='contents_wrapper'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=3'>커뮤니티 사이트 만들기</a></div>
			</td>	
			<td><div class='comment_and_time'>10<br><span class='time'><?=date('H:i', time())?></span></div></td>
		</tr>
		<tr>
			<td width=40><div class='timed_list_image'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=2'><img src='<?=$latest_skin_url?>/img/no-image.png'/></a></div></td>
			 <td width=240>
				<div class='subject'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=2'>여행사 사이트 만들기</a></div>
				<div class='contents_wrapper'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=2'>여행사 사이트 만들기</a></div>
			</td>	
			<td><div class='comment_and_time'>10<br><span class='time'><?=date('H:i', time())?></span></div></td>
		</tr>
    <?php }  ?>
    </table>    
</div>