<script src='<?=x::url_theme()?>/js/banner_rotation.js'></script>
<div class='top-panel'>
	<div style='border: solid 1px #0d98ba; padding: 1px; border-radius: 3px;'>
		<div class='banner'>
			<?
				for ( $i = 1 ; $i <= 5 ; $i++ ) {
					if( !ms::meta( 'combanner_'.$i ) ){
						continue;
					}
					echo "<a href='".ms::meta('combanner_'.$i.'_text3')."' target='_blank'><div class='banner-image image_num_$i'>";
					echo "<img src='".ms::meta('img_url').ms::meta('combanner_'.$i)."'>";
					echo "<p class='banner-text'><span class='banner-title'>".ms::meta('combanner_'.$i.'_text1')." |</span> <span class='banner-content'>".cut_str(strip_tags(ms::meta('combanner_'.$i.'_text2')),60,'...')."</span></p>";
					echo "<div class='banner-more'>MORE ></div>";
					echo "</div></a>";
				}
			?>

		</div>
	</div>
	<div class='top-posts'>
		<div class='top-posts-1'>
			<?=latest( 'x-latest-community-posts' , ms::board_id(etc::domain()).'_1' , 6, 25)?>		
		</div>
		<div class='top-posts-2'>
				<?=latest( 'x-latest-community-posts' , ms::board_id(etc::domain()).'_2' , 6, 25)?>	
		</div>
		<div class='top-posts-3'>
			<?=latest( 'x-latest-community-posts-images' , ms::board_id(etc::domain()).'_3' , 4, 25)?>
		</div>
	</div>
</div>

<div class='middle-panel'>
	<div class='middle-banner'>
		<?if( ms::meta('combanner_middle') ) {?><img src="<?=ms::meta('img_url').ms::meta('combanner_middle')?>"><?}?>
	</div>
	<div class='middle-posts'>
		<div class='middle-posts-1'>
			<?=latest( 'x-latest-community-posts' , ms::board_id(etc::domain()).'_4' , 6, 25)?>		
		</div>
		<div class='middle-posts-2'>
				<?=latest( 'x-latest-community-posts' , ms::board_id(etc::domain()).'_5' , 6, 25)?>	
		</div>
		<div class='middle-posts-3'>
			<?=latest( 'x-latest-community-posts-images' , ms::board_id(etc::domain()).'_6' , 4, 25)?>
		</div>
	</div>
</div>

<div class='bottom-panel'>
	<div class='bottom-banner'>
		<?if( ms::meta('combanner_bottom') ) {?><img src="<?=ms::meta('img_url').ms::meta('combanner_bottom')?>"><br><?}?>	
	</div>
	<div class='bottom-posts'>
		<div class='bottom-posts-1'>
			<?=latest( 'x-latest-community-posts' , ms::board_id(etc::domain()).'_7' , 4, 25)?>		
		</div>
		<div class='bottom-posts-2'>
				<?=latest( 'x-latest-community-posts' , ms::board_id(etc::domain()).'_8' , 4, 25)?>	
		</div>
		<div class='bottom-posts-3'>
			<?=latest( 'x-latest-community-posts-images' , ms::board_id(etc::domain()).'_9' , 2, 25)?>
		</div>
	</div>
</div>