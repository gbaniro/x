<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<link rel="stylesheet" href="<?php echo $latest_skin_url ?>/style.css">
<table width='100%' class='travel-table' cellpadding='5px'>
	<tr valign='top'>
	<?php
		foreach( $list as $li ) {
			if( !$li['wr_subject'] == '' ) {
			if( !$li['file']['count'] == 0 ) { /**checks if there is a file on the post */
				$i = 0;
				$li['file']['meta'] = db::rows("SELECT * FROM $g5[board_file_table] WHERE bo_table='$bo_table' AND wr_id='".$li['wr_id']."'");
				$li['file']['path'] = G5_URL.'/'.G5_DATA_DIR.'/file/'.$bo_table.'/';	
			}}
			?>
			<td width='20%'>
				<a href='<?=$li['href']?>'>
					<div class='travel-package'>
						<?
							if ( $li['file']['meta'][$i]['bf_file'] != '' ) {?>
								<img src="<?=$li['file']['path'].$li['file']['meta'][$i]['bf_file']?>" width=180px height=100px>
						<?}?>
						<div class='travel-title'><?=conv_subject( $li['wr_subject'], 25, '...' )?></div>
						<div class='travel-content'><?=cut_str( $li['wr_content'], 50, '...' )?></div>
						<div class='travel-price'>
						<?
							if ( !empty($li['wr_1']) ) echo $li['wr_1'];
							else echo "<b>clone x-board-travel<br>to input price</b>";					
						?>
						</div>
					</div>	
				</a>
			</td>
			<?
		}
	?>
	</tr>
</table>


