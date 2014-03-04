
<div class='footer-wrapper'>	
	<div class='footer'>
		<div class='footer-logo'>		
		<?php
			if( ms::meta('footer_logo') ) $img = "<img src='".ms::meta('img_url').ms::meta('footer_logo')."' />";
			else {
				$img = "<img src='".x::url_theme()."/img/no_footer_logo.png' />";
			}
		?>
		<?=$img?>
		</div>
		<div class='footer-info'>
			<div class='footer-tagline'>
			<?
				if ( $footer_tagline = ms::meta('travel2footer_tagline') ) echo $footer_tagline;
				else echo "하단 문구 제목을 입력하세요.";
			?>
			</div>
			<div class='footer-text'>
			<?
				if ( $footer_text = ms::meta('footer_text') ) echo $footer_text;
				else echo "하단 문구를 입력하세요.";
			?>
			</div>
			<div class='footer-contact-info'>
				<table>
					<tr>
						<td width='250'>
							<?if($footer_contact_num = ms::meta('travel2contact_num1')) { ?><div class='contact-num'>전화번호1: <?=$footer_contact_num ?></div><?}?>
						</td>
						<td>
							<?if($footer_contact_num = ms::meta('travel2contact_num2')) { ?><div class='contact-num'>전화번호2: <?=$footer_contact_num ?></div><?}?>
						</td>
					</tr>
					<tr>
						<td width='250'>
							<?if($footer_email = ms::meta('travel2email_num1')) { ?><div class='contact-num'>이메일1: <?=$footer_email?></div><?}?>
						</td>
						<td>
							<?if($footer_email = ms::meta('travel2email_num2')) { ?><div class='contact-num'>이메일2: <?=$footer_email?></div><?}?>
						</td>
					</tr>
					<tr>
						<td width='250'>
							<?if($footer_business_no = ms::meta('travel2permit_1')) { ?><div class='contact-num'>사업자 등록번호: <?=$footer_business_no?></div><?}?>
						</td>
						<td>
							<?if($footer_business_plate = ms::meta('travel2plate_1')) { ?><div class='contact-num'>회사명: <?=$footer_business_plate?></div><?}?>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
</div> <!-- inner -->
</div> <!-- layout -->
</div>

