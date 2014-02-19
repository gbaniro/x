<script src='<?=x::url_theme()?>/js/banner_rotation.js'></script>
<div class='top-panel'>
	<div style='border: solid 1px #d9d9d9; padding: 1px'>
		<div class='banner'>
			<?
				for ( $i = 1 ; $i <= 5 ; $i++ ) {
					if( !ms::meta( 'travelbanner_'.$i ) ){
						continue;
					}
					echo "<div class='banner-image image_num_$i'>";
					echo "<img src='".ms::meta('img_url').ms::meta('travelbanner_'.$i)."'>";
					echo "<p class='banner-text'>".ms::meta('travelbanner_'.$i.'_text1')."</p>";
					echo "</div>";
				}
			?>
			<div class='banner-pagination'>
				<?
					$count = 0;
					for ( $i = 1 ; $i <= 5 ; $i++ ) {
					if( !ms::meta( 'travelbanner_'.$i ) ){
						continue;
					}
					$count++ ;
				?>
					<div class='pages' image_meta_num='<?=$i?>'><?=$count?></div>
				<?}?>
			</div>
			<?
				if( $count == 0 ){?>
				<div class='no-banner'>NOBANNER!</div>
			<?}?>
		</div>
	</div>
	
	
	<div class='forum-list'>
		<div class='inner'>
			<?
				$latest_bo_table = ms::board_id(etc::domain()).'_1';
				if ( g::forum_exist($latest_bo_table) ) echo latest('x-latest-travel-right', $latest_bo_table, 2, 21, $cache_time=1, x::url_theme().'/img/discussion.png');
				else echo "<div class='notice'>NO POST AVAILABLE FOR WRITE TABLE ".$latest_bo_table."</div>";
				
				$latest_bo_table = ms::board_id(etc::domain()).'_2';				
				if ( g::forum_exist($latest_bo_table) ) echo latest('x-latest-travel-right', $latest_bo_table, 2, 21, $cache_time=1, x::url_theme().'/img/qna.png');
				else echo "<div class='notice'>NO POST AVAILABLE FOR WRITE TABLE ".$latest_bo_table."</div>";
								
				$latest_bo_table = ms::board_id(etc::domain()).'_3';
				if ( g::forum_exist($latest_bo_table) ) echo latest('x-latest-travel-right', $latest_bo_table, 2, 21, $cache_time=1, x::url_theme().'/img/travel.png');
				else echo "<div class='notice'>NO POST AVAILABLE FOR WRITE TABLE ".$latest_bo_table."</div>";
			?>		
		</div>
	</div>
</div>

<div class='middle-panel'>
	<div class='travel-stories'>
		<h2>Travel Stories</h2>
		<?	
			$latest_bo_table = ms::board_id(etc::domain()).'_1';
			if ( g::forum_exist($latest_bo_table) ) echo latest("x-latest-travel-stories",  $latest_bo_table, 3, 20);
			else echo "<div class='notice'>NO POST AVAILABLE FOR WRITE TABLE ".$latest_bo_table."</div>";
		?>
	</div>
	<div class='photo-gallery'>
		<h2>Photo Gallery</h2>
		<div class='thumb-container'>
			<?php 
				$qb = "bo_table LIKE '" . ms::board_id( etc::domain() ) . "%'";
				$current_date = date('Y-m-d').' 23:59:59';
				$previous_date = date('Y-m-d', strtotime("-7 day", strtotime($current_date))).' 00:00:00';
				$rows = db::rows( "SELECT bo_table, wr_id FROM $g5[board_new_table] WHERE $qb AND bn_datetime BETWEEN '$previous_date' AND '$current_date' ORDER BY bn_datetime DESC" );	
				if( !empty( $rows ) ) {
					foreach ( $rows as $row ) {	
						$board['bo_table'] = $row['bo_table'];
						$images[] = get_file($board['bo_table'],$row['wr_id']);
					}
					
					$count = 1;				
					foreach ( $images as $image ) {
						foreach ( $image as $key => $value ) {
							if ( $count <= 9 ) {					
							if( $value['view'] ) echo "<div class='thumb'>$value[view]</div>";
							if( $value['view'] ) $count++;
							}
						}
					}
				}
			?>
		</div>
	</div>
</div>

<div class='bottom-panel'>
	<div class='travel-packages'>
		<h2> Best Travel Packages </h2>
		<?
			$latest_bo_table = ms::board_id( etc::domain() ).'_1';
			if ( g::forum_exist($latest_bo_table)) echo latest("x-latest-travel-packages",  $latest_bo_table, 5, 20);
			else echo "<div class='notice'>NO POST AVAILABLE FOR WRITE TABLE ".$latest_bo_table."</div>";
		?>
	</div>
</div>