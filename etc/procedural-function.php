<?php
/**
 * @file procedural-function.php
 * @desc This script holds functions doing the abstraction of X classes to support procedural coding style.
 *
 */
 
/** @short resets the theme list, so it can be listed out from the beginning to the end.
 *
 * @note this is only EXPERIMENTAL. Why doesn't it just return the array of whole theme list?
 * ---------------------------------------------------------------------------------
 * @note SEE get_site_menu() which just returns the whole list of the site menu.
 * ---------------------------------------------------------------------------------
 *
 * @code How to use theme functions.
				reset_theme();
				while ( next_theme() ) {
					echo 
						theme_dir() . " : " .
						theme_type() . " : " .
						theme_name() .
						"<br>";
				}
 * @endcode
 * @code
 			<select name='theme'>
				<?
					$theme = x::meta_get( $in['domain'], 'theme' );
					reset_theme();
					while ( next_theme() ) {
				?>
					<option value="<?=theme_dir()?>" <? if ( theme_dir() == $theme ) echo "selected=1"; ?>><?=theme_name()?></option>
				<?
					}
				?>
			</select>
 * @endcode
 */
function reset_theme()
{
	global $_theme_list;
	if ( ! isset( $_theme_list ) ) {
		$_theme_list = array();
		$dirs = file::getDirs(X_DIR_THEME);
		foreach ( $dirs as $dir ) {
			$path = X_DIR_THEME . "/$dir/config.php";
			if ( ! file_exists($path) ) continue;
			$theme_config = array();
			include $path;
			if ( empty($theme_config['name']) ) continue;
			$theme_config['dir'] = $dir;
			$_theme_list[] = $theme_config;
		}
	}
	reset( $_theme_list );
}

function next_theme()
{
	global $_theme_list, $_theme_list_current;
	$current = current( $_theme_list );
	next( $_theme_list );
	$_theme_list_current = $current;
	return $_theme_list_current;
}
/** @short alias of next_theme();
 *
 */
function get_theme()
{
	return next_theme();
}

function get_theme_element($key)
{
	global $_theme_list_current;
	if ( $_theme_list_current === false ) return null;
	else return $_theme_list_current[$key];
}

function theme_name()
{
	return get_theme_element('name');
}
function theme_type()
{
	return get_theme_element('type');
}
function theme_dir()
{
	return get_theme_element('dir');
}
function theme_count()
{
	global $_theme_list_current;
	if ( ! isset($_theme_list_current) ) reset_theme();
	return count($_theme_list_current);
}




// -------------------------
/** @short returns the record of the site in x_site_config
 *
 @code
 $site = site_get( $in['idx'] );
 @endcode
 */
function site_get( $mixed )
{
	return x::site( $mixed );
}


function site_set( $idx, $domain, $mb_id )
{
	return x::site_set( $idx, $domain, $mb_id );
}

function meta_set( $key, $code, $value=null )
{
	return x::meta_set( $key, $code, $value );
}

function meta_get( $key, $code=null )
{
	return x::meta_get( $key, $code );
}
function meta_delete( $key, $code=null )
{
	return x::meta_delete( $key, $code );
}

/** @short returns the site menu list in array.
 *
 *
 * @code
	<?
		$menus = get_site_menu();
		foreach ( $menus as $menu ) {
	?>
			<a  href='<?=G5_BBS_URL?>/board.php?bo_table=<?=$menu['bo_table']?>'><?=$menu['name']?></a>
	<? } ?>
 * @endcode
 * @code
		<ul id="menu">
			<?
				$menus = get_site_menu();
				foreach ( $menus as $menu ) {
					echo "<li class='comm3_menu'><a href='".url_forum_list($menu['bo_table'])."'>$menu[name]</a></li>";
				}
				if ( admin() ) {
			?>
					<li class="comm3_menu" page = "admin-menu">
						<a href="<?=url_site_config()?>">사이트 관리</a>
					</li>
			<? } ?>
		</ul>
 * @endcode
 */
function get_site_menu()
{
	$menus = array();
	for ( $i = 1; $i <= MAX_MENU; $i++ ) {
		$bo_key		= "menu{$i}bo_table";
		$bo_id			= meta_get( $bo_key );
		if ( empty($bo_id) ) continue;
		$bo_name	= meta_get("menu{$i}name");
		if ( empty($bo_name) ) {
			$cfg = g::config($bo_id);
			if ( empty($cfg['bo_subject']) ) $bo_name = ln("No Subject", "제목없음");
			else $bo_name = $cfg['bo_subject'];
		}
		$menus[] = array('bo_table'=>$bo_id,'name'=>$bo_name);
	}
	if ( empty($menus) ) {
		$menus['default'] = ln("Please", "관리자");
		$menus['fake-id-1'] = ln("config", "페이지에서");
		$menus['fake-id-2'] = ln("menu", "메뉴를");
		$menus['fake-id-3'] = ln("in admin", "설정");
		$menus['fake-id-4'] = ln("page", "하세요");
	}
	return $menus;
}

