<?php
/// https://docs.google.com/a/withcenter.com/document/d/1hLnjVW9iXdVtZLZUm3RIWFUim9DFX8XhV5STo6wPkBs/edit#heading=h.pmiphnpx9fy5
dlog("x/etc/rewrite/lib/visit_insert.inc.php begins");

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 컴퓨터의 아이피와 쿠키에 저장된 아이피가 다르다면 테이블에 반영함

if (get_cookie('ck_visit_ip') != $_SERVER['REMOTE_ADDR'])
{
    set_cookie('ck_visit_ip', $_SERVER['REMOTE_ADDR'], 86400); // 하루동안 저장

	
	
	$domain = etc::domain();/// x patch
	
    $tmp_row = sql_fetch(" select max(vi_id) as max_vi_id from {$g5['visit_table']} ");
	$vi_id = $tmp_row['max_vi_id'] + 1;

    // $_SERVER 배열변수 값의 변조를 이용한 SQL Injection 공격을 막는 코드입니다. 110810
    $remote_addr = escape_trim($_SERVER['REMOTE_ADDR']);
    $referer = "";
    if (isset($_SERVER['HTTP_REFERER']))
        $referer = escape_trim($_SERVER['HTTP_REFERER']);
    $user_agent  = escape_trim($_SERVER['HTTP_USER_AGENT']);
    ////$sql = " insert {$g5['visit_table']} ( vi_id, vi_ip, vi_date, vi_time, vi_referer, vi_agent ) values ( '{$vi_id}', '{$remote_addr}', '".G5_TIME_YMD."', '".G5_TIME_HIS."', '{$referer}', '{$user_agent}' ) ";
	////$result = sql_query($sql, FALSE);
    $result = db::query(" insert {$g5['visit_table']} ( domain, vi_id, vi_ip, vi_date, vi_time, vi_referer, vi_agent ) values ( '$domain', '{$vi_id}', '{$remote_addr}', '".G5_TIME_YMD."', '".G5_TIME_HIS."', '{$referer}', '{$user_agent}' ) ", FALSE);/// x patch
	
    // 정상으로 INSERT 되었다면 방문자 합계에 반영
    if ($result) {
        //// $sql = " insert {$g5['visit_sum_table']} ( vs_count, vs_date) values ( 1, '".G5_TIME_YMD."' ) ";
        /// $result = sql_query($sql, FALSE);
		$result = db::query(" insert {$g5['visit_sum_table']} ( domain, vs_count, vs_date) values ( '$domain', 1, '".G5_TIME_YMD."' ) ", FALSE);/// x patch
        

        // DUPLICATE 오류가 발생한다면 이미 날짜별 행이 생성되었으므로 UPDATE 실행
        if (!$result) {
            ////$sql = " update {$g5['visit_sum_table']} set vs_count = vs_count + 1 where vs_date = '".G5_TIME_YMD."' ";
			////$result = sql_query($sql);
			$result = db::query(" update {$g5['visit_sum_table']} set vs_count = vs_count + 1 where domain='$domain' AND vs_date = '".G5_TIME_YMD."' ");/// x patch
            
        }

        // INSERT, UPDATE 된건이 있다면 기본환경설정 테이블에 저장
        // 방문객 접속시마다 따로 쿼리를 하지 않기 위함 (엄청난 쿼리를 줄임 ^^)

        // 오늘
        ////$sql = " select vs_count as cnt from {$g5['visit_sum_table']} where vs_date = '".G5_TIME_YMD."' ";
        ////$row = sql_fetch($sql);
		$row = db::row(" select vs_count as cnt from {$g5['visit_sum_table']} where domain='$domain' AND vs_date = '".G5_TIME_YMD."' ");///x patch
        
        $vi_today = $row['cnt'];

        // 어제
        ////$sql = " select vs_count as cnt from {$g5['visit_sum_table']} where vs_date = DATE_SUB('".G5_TIME_YMD."', INTERVAL 1 DAY) ";
		////$row = sql_fetch($sql);
        $row = db::query(" select vs_count as cnt from {$g5['visit_sum_table']} where domain='$domain' AND vs_date = DATE_SUB('".G5_TIME_YMD."', INTERVAL 1 DAY) ");/// x patch
        
        $vi_yesterday = $row['cnt'];

        // 최대
        ////$sql = " select max(vs_count) as cnt from {$g5['visit_sum_table']} ";
        ////$row = sql_fetch($sql);
		$row = db::row(" select max(vs_count) as cnt from {$g5['visit_sum_table']} WHERE domain='$domain'");/// x patch
		
        $vi_max = $row['cnt'];

        // 전체
        ////$sql = " select sum(vs_count) as total from {$g5['visit_sum_table']} ";
        ////$row = sql_fetch($sql);
		$row = db::row(" select sum(vs_count) as total from {$g5['visit_sum_table']} WHERE domain='$domain'");/// x patch
		
        $vi_sum = $row['total'];

        $visit = '오늘:'.$vi_today.',어제:'.$vi_yesterday.',최대:'.$vi_max.',전체:'.$vi_sum;

        // 기본설정 테이블에 방문자수를 기록한 후
        // 방문자수 테이블을 읽지 않고 출력한다.
        // 쿼리의 수를 상당부분 줄임
        // sql_query(" update {$g5['config_table']} set cf_visit = '{$visit}' ");
		
		$value = serialize(array( $vi_today, $vi_yesterday, $vi_max, $vi_sum));
		x::config( "visit.$domain", $value );
		

    }
}
?>
