		</div> <!-- container -->
<div style='clear:both; margin-bottom:10px;'></div>
		<div class='foot_banner'>
		<?
			if( ms::meta('travel2banner_bottom') ) $img = "<a href='".ms::meta('travel2banner_bottom_text1')."'><img src = '".ms::meta('img_url').ms::meta('travel2banner_bottom')."'/></a>";
			else $img = null;
		?>
		<?=$img?>
	</div>
	
</div>
<div class='footer-wrapper'>	
	<div class='footer'>
		<div class='footer-logo'>		
		<?php
			//$footer_thumb = g::thumbnail_from_image_tag( "<img src='".ms::meta('img_url').ms::meta('footer_logo')."'>", ms::board_id( etc::domain() ).'_1', 100, 90 );
			if( ms::meta('footer_logo') ) $img = "<img src='".ms::meta('img_url').ms::meta('footer_logo')."' />";
			else $img = null;
		?>
		<?=$img?>
		</div>
		<div class='footer-info'>
			<div class='footer-tagline'>
			<?
				if ( $footer_tagline = ms::meta('travel2footer_tagline') ) echo $footer_tagline;
				else echo "Tagline goes here";
			?>
			</div>
			<div class='footer-text'>
			<?
				if ( $footer_text = ms::meta('footer_text') ) echo $footer_text;
				else echo "Footer text goes here";
			?>
			</div>
			<div class='footer-contact-info'>
				<table>
					<tr>
						<td width='250'>
							<?if($footer_contact_num = ms::meta('travel2contact_num1')) { ?><div class='contact-num'>Tel. No.: <?=$footer_contact_num ?></div><?}?>
						</td>
						<td>
							<?if($footer_contact_num = ms::meta('travel2contact_num2')) { ?><div class='contact-num'>Tel. No.: <?=$footer_contact_num ?></div><?}?>
						</td>
					</tr>
					<tr>
						<td width='250'>
							<?if($footer_email = ms::meta('travel2email_num1')) { ?><div class='contact-num'>Email: <?=$footer_email?></div><?}?>
						</td>
						<td>
							<?if($footer_email = ms::meta('travel2email_num2')) { ?><div class='contact-num'>Email: <?=$footer_email?></div><?}?>
						</td>
					</tr>
					<tr>
						<td width='250'>
							<?if($footer_business_no = ms::meta('travel2permit_1')) { ?><div class='contact-num'>Business Permit No.: <?=$footer_business_no?></div><?}?>
						</td>
						<td>
							<?if($footer_business_plate = ms::meta('travel2plate_1')) { ?><div class='contact-num'>Business Plate No.: <?=$footer_business_plate?></div><?}?>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
	</div> <!-- inner -->
</div> <!-- layout -->

