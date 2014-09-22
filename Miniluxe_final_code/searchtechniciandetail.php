<?php

include 'CommonPath.php';
//session_start();
//
//if(($_GET['sEcho'] == "1")&&
//    ($_GET['iDisplayStart'] == "0")&&
//    ($_GET['iDisplayLength'] == "50")&&
////    ($_GET['mDataProp_0'] == "0")&&    ($_GET['sSearch_0'] == "")&&    ($_GET['bRegex_0'] == "false")&&    ($_GET['bSearchable_0'] == "true")&&    ($_GET['bSortable_0'] == "true")&&
////    ($_GET['mDataProp_1'] == "1")&&    ($_GET['sSearch_1'] == "")&&    ($_GET['bRegex_1'] == "false")&&    ($_GET['bSearchable_1'] == "true")&&    ($_GET['bSortable_1'] == "true")&&
////    ($_GET['mDataProp_2'] == "2")&&    ($_GET['sSearch_2'] == "")&&    ($_GET['bRegex_2'] == "false")&&    ($_GET['bSearchable_2'] == "true")&&    ($_GET['bSortable_2'] == "true")&&
////    ($_GET['mDataProp_3'] == "3")&&    ($_GET['sSearch_3'] == "")&&    ($_GET['bRegex_3'] == "false")&&    ($_GET['bSearchable_3'] == "true")&&    ($_GET['bSortable_3'] == "true")&&
////    ($_GET['mDataProp_4'] == "4")&&    ($_GET['sSearch_4'] == "")&&    ($_GET['bRegex_4'] == "false")&&    ($_GET['bSearchable_4'] == "true")&&    ($_GET['bSortable_4'] == "true")&&
////    ($_GET['mDataProp_5'] == "5")&&    ($_GET['sSearch_5'] == "")&&    ($_GET['bRegex_5'] == "false")&&    ($_GET['bSearchable_5'] == "true")&&    ($_GET['bSortable_5'] == "true")&&
////    ($_GET['mDataProp_6'] == "6")&&    ($_GET['sSearch_6'] == "")&&    ($_GET['bRegex_6'] == "false")&&    ($_GET['bSearchable_6'] == "true")&&    ($_GET['bSortable_6'] == "true")&&
////    ($_GET['mDataProp_7'] == "7")&&    ($_GET['sSearch_7'] == "")&&    ($_GET['bRegex_7'] == "false")&&    ($_GET['bSearchable_7'] == "true")&&    ($_GET['bSortable_7'] == "true")&&
////    ($_GET['mDataProp_8'] == "8")&&    ($_GET['sSearch_8'] == "")&&    ($_GET['bRegex_8'] == "false")&&    ($_GET['bSearchable_8'] == "true")&&    ($_GET['bSortable_8'] == "true")&&
//    ($_GET['sSearch'] == "")&&
//    ($_GET['bRegex'] == "false")&&
//    ($_GET['iSortCol_0'] == "0")&&
//    ($_GET['sSortDir_0'] == "asc")&&
//    ($_GET['iSortingCols'] == "1"))
//{
//
//    if(isset( $_SESSION['search_flag']))
//    {
//
//        $_GET['sEcho'] = $_SESSION['sEcho'];
//        $_GET['iDisplayStart'] = $_SESSION['iDisplayStart'];
//        $_GET['iDisplayLength'] = $_SESSION['iDisplayLength'];
//        $_GET['sSearch'] = $_SESSION['sSearch'];
//        $_GET['bRegex'] = $_SESSION['bRegex'];
//        $_GET['iSortCol_0'] = $_SESSION['iSortCol_0'];
//        $_GET['sSortDir_0'] = $_SESSION['sSortDir_0'];
//        $_GET['iSortingCols'] = $_SESSION['iSortingCols'];
//
//
//    }
//
//
//
//
//}
//else
//{
//    $_SESSION['search_flag'] = "1";
//    $_SESSION['sEcho'] = $_GET['sEcho'];
//    $_SESSION['iDisplayStart'] = $_GET['iDisplayStart'];
//    $_SESSION['iDisplayLength'] = $_GET['iDisplayLength'];
//    $_SESSION['sSearch'] = $_GET['sSearch'];
//    $_SESSION['bRegex'] = $_GET['bRegex'];
//    $_SESSION['iSortCol_0'] = $_GET['iSortCol_0'];
//    $_SESSION['sSortDir_0'] = $_GET['sSortDir_0'];
//    $_SESSION['iSortingCols'] = $_GET['iSortingCols'];
//}
//sEcho:5
//iColumns:9
//sColumns:,,,,,,,,
//iDisplayStart:100
//iDisplayLength:25
//mDataProp_0:0
//sSearch_0:
//bRegex_0:false
//bSearchable_0:true
//bSortable_0:true
//mDataProp_1:1
//sSearch_1:
//bRegex_1:false
//bSearchable_1:true
//bSortable_1:true
//mDataProp_2:2
//sSearch_2:
//bRegex_2:false
//bSearchable_2:true
//bSortable_2:true
//mDataProp_3:3
//sSearch_3:
//bRegex_3:false
//bSearchable_3:true
//bSortable_3:true
//mDataProp_4:4
//sSearch_4:
//bRegex_4:false
//bSearchable_4:true
//bSortable_4:true
//mDataProp_5:5
//sSearch_5:
//bRegex_5:false
//bSearchable_5:true
//bSortable_5:true
//mDataProp_6:6
//sSearch_6:
//bRegex_6:false
//bSearchable_6:true
//bSortable_6:true
//mDataProp_7:7
//sSearch_7:
//bRegex_7:false
//bSearchable_7:true
//bSortable_7:true
//mDataProp_8:8
//sSearch_8:
//bRegex_8:false
//bSearchable_8:true
//bSortable_8:true
//sSearch:
//bRegex:false
//iSortCol_0:0
//sSortDir_0:asc
//iSortingCols:1

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

/* Array of database columns which should be read and sent back to DataTables. Use a space where
 * you want to insert a non-database field (for example a counter or static image)
 */
//$aColumns = array('user_id', 'user_name', 'user_image', 'user_level', 'login_date', 'total_games_completed', 'country', 'app_versioncode', 'user_friends_reference', 'city', 'gender', 'user_id_fb', 'user_type', 'reg_date');
// b.engage_id,b.start_time,b.rating,b.total_cost,b.tip,d.user_name,b.service_id
$aColumns = array("b.engage_id", "b.start_time", "b.rating", "b.total_cost", "b.tip", "d.user_name", "b.service_id","b.end_time","e.web_name");

$userId = $_GET['userId'];

/* Indexed column (used for fast and accurate table cardinality) */
$sIndexColumn = "engage_id";
$sTable = 'tb_engagements';
/* DB table to use */

/* Database connection information */
$gaSql['user'] = "root";
$gaSql['password'] = "phy7UyC7SqJWwBEL";
$gaSql['db'] = "mini_luxe_review";
$gaSql['server'] = "localhost";


$gaSql['link'] = mysql_pconnect($gaSql['server'], $gaSql['user'], $gaSql['password']) or
        die('Could not open connection to server');

mysql_select_db($gaSql['db'], $gaSql['link']) or
        die('Could not select database ' . $gaSql['db']);


/*
 * Paging
 */
$sLimit = "";
if (isset($_GET['iDisplayStart']) && $_GET['iDisplayLength'] != '-1') {
    $sLimit = "LIMIT " . intval($_GET['iDisplayStart']) . ", " .
            intval($_GET['iDisplayLength']);
}

/*
 * Ordering
 */
$sOrder = "";
if (isset($_GET['iSortCol_0'])) {
    $sOrder = "ORDER BY  ";
    for ($i = 0; $i < intval($_GET['iSortingCols']); $i++) {
        if ($_GET['bSortable_' . intval($_GET['iSortCol_' . $i])] == "true") {
            $sOrder .= "" . $aColumns[intval($_GET['iSortCol_' . $i])] . " " .
                    ($_GET['sSortDir_' . $i] === 'asc' ? 'asc' : 'desc') . ", ";
        }
    }

    $sOrder = substr_replace($sOrder, "", -2);
    if ($sOrder == "ORDER BY") {
        $sOrder = "";
    }
}


/*
 * Filtering
 * NOTE this does not match the built-in DataTables filtering which does it
 * word by word on any field. It's possible to do here, but concerned about efficiency
 * on very large tables, and MySQL's regex functionality is very limited
 */
$sWhere = "";

if (isset($_GET['sSearch']) && $_GET['sSearch'] != "") {
    $sWhere = "WHERE (";
    for ($i = 0; $i < count($aColumns); $i++) {
        $sWhere .= "" . $aColumns[$i] . "

LIKE '%" . mysql_real_escape_string($_GET['sSearch']) . "%' OR ";
    }
    $sWhere = substr_replace($sWhere, "", -3);
    $sWhere .= ") && (b.user_id = d.user_id) && (b.status =6) && (b.technician_id=" . $userId . ") && (b.location_id = e.location_id)";
} else {
    $sWhere = "WHERE (b.user_id = d.user_id) && (b.status =6) && (b.technician_id=" . $userId . ") && (b.location_id = e.location_id)";
}




/* Individual column filtering */
for ($i = 0; $i < count($aColumns); $i++) {
    if (isset($_GET['bSearchable_' . $i]) && $_GET['bSearchable_' . $i] == "true" && $_GET['sSearch_' . $i] != '') {
        if ($sWhere == "") {
            $sWhere = "WHERE";
        } else {
            $sWhere .= " AND ";
        }
        $sWhere .= "" . $aColumns[$i] . " LIKE '%" . mysql_real_escape_string($_GET['sSearch_' . $i]) . "%' ";
    }
}

/*
 * SQL queries
 * Get data to display
 */
//$sWhere="user_type!='bot'";

$sQuery = "
		SELECT SQL_CALC_FOUND_ROWS b.engage_id,b.start_time,b.rating,b.total_cost,b.tip,d.user_name,b.service_id,b.end_time,e.web_name FROM tb_engagements b, tb_users d,tb_locations e 
		$sWhere
		$sOrder
		$sLimit
		";

//echo $sQuery;
$rResult = mysql_query($sQuery, $gaSql['link']) or die(mysql_error());

/* Data set length after filtering */
$sQuery = "
		SELECT FOUND_ROWS()
	";
$rResultFilterTotal = mysql_query($sQuery, $gaSql['link']) or die(mysql_error());
$aResultFilterTotal = mysql_fetch_array($rResultFilterTotal);
$iFilteredTotal = $aResultFilterTotal[0];

/* Total data set length */
$sQuery = "
		SELECT COUNT(b.engage_id)
		FROM tb_engagements b, tb_users d, tb_locations e
                $sWhere
	";
$rResultTotal = mysql_query($sQuery, $gaSql['link']) or die(mysql_error());
$aResultTotal = mysql_fetch_array($rResultTotal);
$iTotal = $aResultTotal[0];


/*
 * Output
 */
$output = array(
    "sEcho" => intval($_GET['sEcho']),
    "iTotalRecords" => $iTotal,
    "iTotalDisplayRecords" => $iFilteredTotal,
    "aaData" => array()
);

$count = $_GET['iDisplayStart'];

$timeZone = $_GET['timeZone'];


$sqla = "SELECT  f.engage_id,a.service_name FROM tb_services a,tb_user_services f WHERE (f.service_id = a.id) && (f.technician_id = " . $userId . ")";
$responsea = mysql_query($sqla);
while ($response14 = mysql_fetch_array($responsea)) {
    $response15[] = $response14;
}
$pendingCount = count($response15);

while ($aRow = mysql_fetch_array($rResult)) {
    $row = array();
    $row123 = array();
    ++$count;
    for ($i = 0; $i < count($aColumns); $i++) {
        $row123[] = $aRow[$i];
        $row[] = $aRow[$i];
    }
    $row[6] = '';
    for ($k = 0; $k < $pendingCount; $k++) {

        if ($row[0] == $response15[$k]['engage_id']) {

            $row[6] .= $response15[$k]['service_name'] . ",";
        }
    }
    $row[6] = substr($row[6], 0, -1);
    if($row[6] == false)
    {
        $row[6] = "";
    }

    $newtimestamp = strtotime($row[1] . '+' . $timeZone . 'minute');
    $newtimestamp = date('d-m-Y H:i:s', $newtimestamp);


    $row[1] = $newtimestamp;
    
    
    $newtimestamp1 = strtotime($row[7] . '+' . $timeZone . 'minute');
    $newtimestamp1 = date('d-m-Y H:i:s', $newtimestamp1);


    $row[7] = $newtimestamp1;

    $row[5] = str_replace("$#$", " ", $row[5]);


    $output['aaData'][] = $row;
}

echo json_encode($output);

?>

