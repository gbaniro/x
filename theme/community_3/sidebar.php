<link rel='stylesheet' type='text/css' href='<?=x::url_theme()?>/css/sidebar.css' />
<div class='login'>
<?=outlogin('x-outlogin-travel_3') ?>
</div>

<div class='company-banner'>
	<a href='http://www.philgo.com' target='_blank'><img src='<?=x::url_theme().'/img/company_banner.png';?>' style='border:0;'></a>
</div>

<?=latest('x-latest-community3-posts',  ms::meta('forum_no_1') , 4 , 20)?>
<? include x::theme('popular_posts') ?>

<?
if ( $company_banner = ms::meta('com3banner_sidebar') ) { ?>
<div class='sidebanner'>
	<?$imgsrc = ms::meta('img_url').$company_banner?>
	<img src='<?=$imgsrc?>'>
</div>
<?}?>

<? include( x::theme('latest_posts') ) ?>