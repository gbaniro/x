<?php
/**
 * @file index.php
 * @desc X start script.
 */
	define('_INDEX_', true);
	include_once('../common.php');
	include_once(G5_PATH.'/head.php');
	
	
	/** @short Display menu on admin page */
	if ( preg_match('/^admin_/', $action) ) include x::admin_menu();
	if ( ! empty( $module ) ) {
		include module( 'init' );
														x::hook("module_begin");
		include module( $action );
														x::hook("module_end");
	}
	else {
		echo "<a href='?module=admin&action=index'>ADMIN Page</a><br>";
		//include "xml_sample/demo/client.php";
		//include "etc/test/post.php";
	}
	
	include_once(G5_PATH.'/tail.php');

	/** end of start script */
