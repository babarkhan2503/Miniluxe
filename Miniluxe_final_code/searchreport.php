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
// b.engage_id,b.start_time,b.last_update, b.end_time, a.time_required,b.payment_time,c.user_name,b.status, c.phone_no, c.user_email,a.service_name, a.cost, d.technician_name, e.name
$aColumns = array("b.engage_id", "b.start_time","b.last_update", "b.end_time","a.time_required", "b.payment_time", "c.user_name", "b.status", "c.phone_no","c.user_email","a.service_name","a.cost","d.technician_name","e.web_name");


/* Indexed column (used for fast and accurate table cardinality) */
$sIndexColumn = "engage_id";
$sTable = 'tb_user_services';
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
$timeZone = $_GET['timeZone'];

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
if ((isset($_GET['sSearch']) && $_GET['sSearch'] != "") && (isset($_GET['from']) && $_GET['from'] != "")){
    
    $from = $_GET['from'];
    $from = strtotime( $from .'-'.$timeZone.'minute');
    $from = date('Y-m-d H:i:s', $from);
    
    $to = $_GET['to'];
    $to = strtotime( $to .'-'.$timeZone.'minute');
    $to = date('Y-m-d H:i:s', $to);
    
    $sWhere = "WHERE (";
    for ($i = 0; $i < count($aColumns); $i++) {
        $sWhere .= "" . $aColumns[$i] . "

LIKE '%" . mysql_real_escape_string($_GET['sSearch']) . "%' OR ";
    }
    $sWhere = substr_replace($sWhere, "", -3);
    $sWhere .= ") && (f.engage_id = b.engage_id) && (f.service_id = a.id) && (b.user_id = c.user_id) && (b.technician_id = d.technician_id) && (b.location_id = e.location_id) && (b.status =6) && (b.start_time between '".$from."' AND  '".$to."')";
}
else if (isset($_GET['sSearch']) && $_GET['sSearch'] != "") {
    $sWhere = "WHERE (";
    for ($i = 0; $i < count($aColumns); $i++) {
        $sWhere .= "" . $aColumns[$i] . "

LIKE '%" . mysql_real_escape_string($_GET['sSearch']) . "%' OR ";
    }
    $sWhere = substr_replace($sWhere, "", -3);
    $sWhere .= ") && (f.engage_id = b.engage_id) && (f.service_id = a.id) && (b.user_id = c.user_id) && (b.technician_id = d.technician_id) && (b.location_id = e.location_id) && (b.status =6)";
}

else if (isset($_GET['from']) && $_GET['from'] != ""){
    
    $from = $_GET['from'];
    $from = strtotime( $from .'-'.$timeZone.'minute');
    $from = date('Y-m-d H:i:s', $from);
    
    $to = $_GET['to'];
    $to = strtotime( $to .'-'.$timeZone.'minute');
    $to = date('Y-m-d H:i:s', $to);
    
    $sWhere .= " WHERE (f.engage_id = b.engage_id) && (f.service_id = a.id) && (b.user_id = c.user_id) && (b.technician_id = d.technician_id) && (b.location_id = e.location_id) && (b.status =6) && (b.start_time between '".$from."' AND  '".$to."')";
}
else
{
    $sWhere = "WHERE (f.engage_id = b.engage_id) && (f.service_id = a.id) && (b.user_id = c.user_id) && (b.technician_id = d.technician_id) && (b.location_id = e.location_id) && (b.status =6)";
}


//// meet me chinmay


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
//
//if ($sWhere == "") {
//    $sWhere = "WHERE user_type!='bot'";
//} else {
//    $sWhere .= " AND user_type!='bot'";
//}


/*
 * SQL queries
 * Get data to display
 */
//$sWhere="user_type!='bot'";

$sQuery = "
		SELECT SQL_CALC_FOUND_ROWS b.engage_id,b.start_time,b.last_update, b.end_time, a.time_required,b.payment_time,c.user_name,b.status, c.phone_no, c.user_email,a.service_name, a.cost, d.technician_name, e.web_name FROM tb_services a, tb_engagements b, tb_users c, tb_technicians d, tb_locations e, tb_user_services f
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
		FROM   tb_services a, tb_engagements b, tb_users c, tb_technicians d, tb_locations e, tb_user_services f 
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

//$sql1 = $data->prepare("SELECT game_id,game_user_status  from tb_games where (game_user=? or game_opponent=?)");


$count = $_GET['iDisplayStart'];



while ($aRow = mysql_fetch_array($rResult)) {
    $row = array();
    $row123 = array();

    ++$count;
    for ($i = 0; $i < count($aColumns); $i++) {
        $row123[] = $aRow[$i];
        $row[] = $aRow[$i];
    }
    
    $newtimestamp = strtotime( $row[1] .'+'.$timeZone.'minute');
    $newtimestamp = date('d-m-Y H:i:s', $newtimestamp);
    $newtimestamp = explode(" ", $newtimestamp);
    
    $row[1] = $newtimestamp[0];
    $row[2] = $newtimestamp[1];
    
    $endTime = strtotime( $row[3] .'+'.$timeZone.'minute');
    $endTime = date('d-m-Y H:i:s', $endTime);
    $endTime = explode(" ", $endTime);
    
    $row[3] = $endTime[1];
    
    $payTime = strtotime( $row[5] .'+'.$timeZone.'minute');
    $payTime = date('d-m-Y H:i:s', $payTime);
    $payTime = explode(" ", $payTime);
    
    $row[5] = $payTime[1];
    
    $userName = explode("$#$", $row[6]);
    $row[6] = $userName[0];
    
    if(count($userName)>1)
    {
        $row[7] = $userName[1];
    }
    else
    {
        $row[7] = '';
    }
    
    
    
    $row[12] = str_replace("$#$"," ",$row[12]);
    
      
//      $row[1] = '<a href=customerinfo.php?action='.$row[0].'>'. str_replace("$#$"," ",$row[1]).'</a>';
//      $row[2] = '<a href=customerinfo.php?action='.$row[0].'>'.'<img src="'.$BaseImageURL . $row[2] . '" height="50" width="50">'.'</a>';
//      $row[3] = '<a href=customerinfo.php?action='.$row[0].'>'. $row[3].'</a>';
//      $row[4] = '<a href=customerinfo.php?action='.$row[0].'>'. $row[4].'</a>';
//      $row[5] = '<a href=customerinfo.php?action='.$row[0].'>'. $row[5].'</a>';
//      $row[6] = '<a href=customerinfo.php?action='.$row[0].'>'. $row[6].'</a>';
//      $row[7] = '<a href=customerinfo.php?action='.$row[0].'>'. $row[7].'</a>';
//      $row[0] = '<a href=customerinfo.php?action='.$row[0].'>'. $row[0].'</a>';
 //   $row[2] = "<div style='word-break:break-word'>".$row[1] . " " . $row[2]. "<div>";
//    $row[2] = '<img src="' . $row[11] . '" height="50" width="50">';
//
//    $row[4] = "<div style='word-break:break-word;width:140px'>".$row[4] . "<div>";
//
//    $row[10] = date("d-m-Y h:i A", strtotime($row[10]));


//    if ($row[12] == 1) {
//        $row[11] = '<button type="button" style="margin-left:5px;margin-top:2px;width: 64px;" class="btn btn-small btn-inverse  pull-center" id="1$$$' . $row123[0] . '"onclick="usermodal(this.id)">Block</button>';
//        $row[11] .= '<button type="button" style="margin-left:5px;margin-top:2px;width: 64px;" class="btn btn-small btn-primary  pull-center" id="5$$$' . $row123[0] . '" onclick="userdetails(this.id)">Details</button>';
//        $row[11] .= '<button type="button" style="margin-left:5px;margin-top:2px;width: 64px;" class="btn btn-small btn-danger  pull-center" id="3$$$' . $row123[0] . '" onclick="usermodal(this.id)">Delete</button>';
//
//
//
//    } else {
//        $row[11] = '<button type="button" style="margin-left:5px;margin-top:2px;width: 64px;" class="btn btn-small btn-success  pull-center" id="2$$$' . $row123[0] . '"onclick="usermodal(this.id)">Unblock</button>';
//        $row[11] .= '<button type="button" style="margin-left:5px;margin-top:2px;width: 64px;" class="btn btn-small btn-primary  pull-center" id="5$$$' . $row123[0] . '" onclick="userdetails(this.id)">Details</button>';
//        $row[11] .= '<button type="button" style="margin-left:5px;margin-top:2px;width: 64px;" class="btn btn-small btn-danger  pull-center" id="3$$$' . $row123[0] . '" onclick="usermodal(this.id)">Delete</button>';
//
//
//    }



    $output['aaData'][] = $row;
}

echo json_encode($output);
//'.$row[3].'
?>

