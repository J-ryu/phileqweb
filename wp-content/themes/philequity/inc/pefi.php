<?php


$pagelink='pefi.php';


$mode = removeXSS($_GET["mode"]);

#############################################################
$graph="graph.php?fund=Philequity Fund, Inc";

// GET CMS DATA
$query = "SELECT * from contents WHERE eid = '20070804114043226' ";
$result = mysql_query($query);
$record = mysql_fetch_array($result);
$cmsdata = $record["details"];

//GET SUBMENU
$query = "SELECT *  FROM `subcontent` WHERE `category` = 'Philequity Fund, Inc.' and status = '1' ";
$result = mysql_query($query);
$row = mysql_num_rows($result);

$pefimenu = '<div id="innerNavSnapShot">';
for($i=0;$i<$row;$i++){
	$record = mysql_fetch_array($result);
	$pefimenu.='<a href="pefi.php?mode='.$record["name"].'" class="innerNav">'.$record["name"].'</a> &nbsp;| &nbsp;';
}
$query = "SELECT *  FROM `contents` WHERE `category` = 'ICAP Report' and status = '1' 
	ORDER BY date_create DESC LIMIT 1";
$result = mysql_query($query);
$record = mysql_fetch_array($result);
//$pefimenu.= '<a href="downloads/icap/'.$record["details"].'" class="innerNav">ICAP Report</a></div>';
$pefimenu.= '</div>';

//GET CONTENT OF SUBMENU AND DISPLAY
$query ="SELECT * FROM subcontent WHERE category = 'Philequity Fund, Inc.' and name = '".SQL_Injection($mode)."' ";
$result = mysql_query($query);
$record = mysql_fetch_array($result);
$subdetails = $record["details"];

//GET COMPUNDED ANNUAL GROWTH RATE (CAGR,%)
$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 
$sel_dte = $SQL_rec["date_navps"];

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

//GET NAVPS AFTER 1 MONTH

$comma = "";
$q = "";
$myear = $myear.$lday;
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') <= ($myear - 100) AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	";
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["navps"];
	$comma=',' ;
}

$mon1 = explode(",",$q);
$mo1new = $mon1[0];
$mon1prev = $mon1[1];

$pefi_beg = round(((($mo1new/1.1095) - 1) * 100),2) ;
$pefi_mo1 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;

$comma = "";
$q = "";
$SQL = "(SELECT * FROM dailyphisix WHERE DATE_FORMAT(date_phisix,'%Y%m%d') = $myear AND status = '1' ORDER BY date_phisix DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyphisix WHERE DATE_FORMAT(date_phisix,'%Y%m%d') <= ($myear - 100) AND status = '1' ORDER BY date_phisix DESC LIMIT 1 )
	";
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["phisix"];
	$comma=',' ;
}

$mon1 = explode(",",$q);
$mo1new = $mon1[0];
$mon1prev = $mon1[1];

$psei_beg = round(((($mo1new/2798.21) - 1) * 100),2);
$psei_mo1 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;

//GET NAVPS AFTER 6 MONTH
$comma = "";
$q = "";
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type='Philequity Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -6 MONTH) AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )";		
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["navps"];
	$comma=',' ;
}

$mon6 = explode(",",$q);
$mo6new = $mon6[0];
$mon6prev = $mon6[1];

$pefi_mo6 = round(((($mo6new/$mon6prev) - 1) * 100),2) ;

$comma = "";
$q = "";
$SQL = "(SELECT * FROM dailyphisix WHERE DATE_FORMAT(date_phisix,'%Y%m%d') = $myear AND status = '1' ORDER BY date_phisix DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyphisix WHERE date_phisix <= DATE_ADD('$latest_date_navps', INTERVAL -6 MONTH) AND status = '1' ORDER BY date_phisix DESC LIMIT 1)
	";
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["phisix"];
	$comma=',' ;
}

$mon6 = explode(",",$q);
$mo6new = $mon6[0];
$mon6prev = $mon6[1];

$psei_mo6 = round(((($mo6new/$mon6prev) - 1) * 100),2) ;

//GET NAVPS AFTER 1 YEAR
$comma = "";
$q = "";
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') <= ($myear - 10000) AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	";
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["navps"];
	$comma=',' ;
}

$yr = explode(",",$q);
$yrnew = $yr[0];
$yrprev = $yr[1];

$pefi_yr = round(((($yrnew/$yrprev) - 1) * 100),2) ;

$comma = "";
$q = "";
$SQL = "(SELECT * FROM dailyphisix WHERE DATE_FORMAT(date_phisix,'%Y%m%d') = $myear AND status = '1' ORDER BY date_phisix DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyphisix WHERE DATE_FORMAT(date_phisix,'%Y%m%d') <= ($myear - 10000) AND status = '1' ORDER BY date_phisix DESC LIMIT 1 )
	";
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["phisix"];
	$comma=',' ;
}

$yr = explode(",",$q);
$yrnew = $yr[0];
$yrprev = $yr[1];

$psei_yr = round(((($yrnew/$yrprev) - 1) * 100),2) ;

//GET NAVPS AFTER 3 YEAR
$comma = "";
$q = "";
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') <= ($myear - 30000) AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	";
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["navps"];
	$comma=',' ;
}

$yr = explode(",",$q);
$yrnew = $yr[0];
$yrprev = $yr[1];

$pefi_yr3 = round(((($yrnew/$yrprev) - 1) * 100),2) ;

$comma = "";
$q = "";
$SQL = "(SELECT * FROM dailyphisix WHERE DATE_FORMAT(date_phisix,'%Y%m%d') = $myear AND status = '1' ORDER BY date_phisix DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyphisix WHERE DATE_FORMAT(date_phisix,'%Y%m%d') <= ($myear - 30000) AND status = '1' ORDER BY date_phisix DESC LIMIT 1 )
	";
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["phisix"];
	$comma=',' ;
}

$yr = explode(",",$q);
$yrnew = $yr[0];
$yrprev = $yr[1];

$psei_yr3 = round(((($yrnew/$yrprev) - 1) * 100),2) ;

//GET 10 YRS
$comma = "";
$q = "";
//$myear = $myear.$lday;
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') <= $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') <= ($myear - 100000) AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	";
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["navps"];
	$comma=',' ;
}

$ten = explode(",",$q);
$tennew = $ten[0];
$tenprev = $ten[1];

$val_ten = ($tennew/$tenprev);
$raise = (1/10);
$tenyr = round(((pow($val_ten,$raise) - 1)* 100),2);

//GET 5 YRS
$comma = "";
$q = "";
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') <= $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') <= ($myear - 50000) AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	";
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["navps"];
	$comma=',' ;
}

$five = explode(",",$q);
$fivenew = $five[0];
$fiveprev = $five[1];

$val_five = ($fivenew/$fiveprev);
$raise = (1/5);
$fiveyr = round(((pow($val_five,$raise) - 1)* 100),2);

//GET 3 YRS
$comma = "";
$q = "";
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') <= $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') <= ($myear - 30000) AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	";
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["navps"];
	$comma=',' ;
}

$three = explode(",",$q);
$threenew = $three[0];
$threeprev = $three[1];

$val_three = ($threenew/$threeprev);
$raise = (1/3);
$threeyr = round(((pow($val_three,$raise) - 1)* 100),2);

//GET CALENDAR YEAR RETURN (%)
$comma = "";
$pcom = "";
$query = "SELECT date_format(date_navps,'%Y') as year FROM `dailyfunds` WHERE `type` = 'Philequity Fund, Inc' AND status = '1'
group by date_format(date_navps,'%Y') DESC LIMIT 6 ";

$result = mysql_query($query);
$row = mysql_num_rows($result);

for($i=0;$i<$row;$i++){
	$record = mysql_fetch_array($result);
	$parm = $record["year"];
	$yreturn.= $comma.$record["year"];
	$comma = ',';

	// PEFI DATA
	$qry = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc' 
		AND DATE_FORMAT( date_navps, '%Y' ) = $parm AND status = '1'
		ORDER BY date_navps DESC LIMIT 1)
		UNION 
		(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc' 
		 AND DATE_FORMAT( date_navps, '%Y' ) <= ($parm - 1) AND status = '1'
		ORDER BY date_navps DESC LIMIT 1)";
	$res = mysql_query($qry);
	$rows = mysql_num_rows($res);
	
	$pefivalue = "";
	$comm = "";
	for($n=0;$n<$rows;$n++){
		$rec = mysql_fetch_array($res);
		$pefivalue.=$comm.$rec["navps"];
		$comm = ',';
	}
	//compute
	$sqlmac="SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc' 
		     AND DATE_FORMAT( date_navps, '%Y' ) = $parm AND status = '1'
		     ORDER BY created_date DESC LIMIT 1";
	$qrymac=mysql_query($sqlmac);
	$resmac=mysql_fetch_assoc($qrymac);
    
	$data = explode(",",$pefivalue);
	$pefinew = $data[0];
	$pefiprev = $data[1];
	
	$pefireturn.= $pcom.round(((($pefinew/$pefiprev) - 1 ) * 100),2);
	//$pefireturn.= $pcom.$resmac["navps"];
	$pcom = ',';
	$qry1 = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc' 
		AND DATE_FORMAT( date_navps, '%Y' ) = $parm AND status = '1'
		ORDER BY date_navps DESC LIMIT 1)
		UNION 
		(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc' 
		 AND DATE_FORMAT( date_navps, '%Y' ) <= ($parm - 1) AND status = '1'
		ORDER BY date_navps DESC LIMIT 1)";	
	$res1 = mysql_query($qry1);
	$rows1 = mysql_num_rows($res1);
	
	$pefivalue1 = "";
	$comm1 = "";
	for($n1=0;$n1<$rows1;$n1++){
		$rec1 = mysql_fetch_array($res1);
		$pefivalue1.=$comm1.$rec1["navps"];
		$comm1 = ',';
	}
	//compute
	$data1 = explode(",",$pefivalue1);
	$pefinew1 = $data1[0];
	$pefiprev1 = $data1[1];
	
	
	$pefireturn1.= $pcom1.round(((($pefinew1/$pefiprev1) - 1 ) * 100),2);
	$pcom1 = ',';
	
	// PSEI DATA
	$qry = "(SELECT * FROM dailyphisix WHERE DATE_FORMAT( date_phisix, '%Y' ) = $parm 
		AND status = '1' ORDER BY date_phisix DESC LIMIT 1)
		UNION 
		(SELECT * FROM dailyphisix WHERE DATE_FORMAT( date_phisix, '%Y' ) <= ($parm - 1)
		AND status = '1' ORDER BY date_phisix DESC LIMIT 1)";
	$res = mysql_query($qry);
	$rows = mysql_num_rows($res);
	
	$pseivalue = "";
	$sep = "";

	for($n=0;$n<$rows;$n++){
		$rec = mysql_fetch_array($res);
		$pseivalue.=$sep.$rec["phisix"];
		$sep = ',';
	}
	//compute
	$psei = explode(",",$pseivalue);
	$pseinew = $psei[0];
	$pseiprev = $psei[1];
	
	$pseireturn.= $sepp.round(((($pseinew/$pseiprev) - 1 ) * 100),2);
	$sepp = ',';
}

$yr_return = explode(",",$yreturn);
$pefi_return = explode(",",$pefireturn);
$pefi_return1 = explode(",",$pefireturn1);
$psei_return = explode(",",$pseireturn);


switch ($mode){
	default;
	$Template=file_get_contents("templates/pefi.htm");
	break;
	
	case "Description";
	$q = explode("<table cellpadding='3' cellspacing='1' width='541'>",$cmsdata);
	$d = explode("</tbody>",$q[1]);
	ereg("<tbody>(.*)</tbody>",$q[0],$d);
	
	$cmsdata=str_replace($d,"",$q[0]);
	
	$Template=file_get_contents("templates/pefi_description.htm");
	break;
	
	case "Features";
	$q = explode("<table cellpadding='3' cellspacing='1' width='541'>",$cmsdata);
	$d = explode("</tbody>",$q[1]);
	ereg("<tbody>(.*)</tbody>",$q[0],$d);
	
	$cmsdata=str_replace($d,"",$q[0]);
	
	$Template=file_get_contents("templates/pefi_features.htm");
	break;
	
	case "Fund Performance";
	$Template=file_get_contents("templates/pefi_fundPerformance.htm");
	break;
	
	case "Directors";
	$q = explode("<table cellpadding='3' cellspacing='1' width='541'>",$cmsdata);
	$d = explode("</tbody>",$q[1]);
	ereg("<tbody>(.*)</tbody>",$q[0],$d);
	
	$cmsdata=str_replace($d,"",$q[0]);
	
	$Template=file_get_contents("templates/pefi_directors.htm");
	break;
}



$array=array(
'leftmenu'=>$leftmenu,
'topmenu'=>$topmenu,
'pefimenu'=>$pefimenu,
'navpsdata'=>$navpsdata,
'pefi_tagmenu'=>$pefi_tagmenu,
'abtmenu'=>$abtmenu,
'iredeem'=>$iredeem,
'psie_latest'=>$psie_latest,
'pt_move'=>$pt_move,
'prcnt'=>$prcnt,

'year_r'=> $yr_return[0],
'year_r1'=> $yr_return[1],
'year_r2'=>$yr_return[2],
'year_r3'=> $yr_return[3],
'year_r4'=> $yr_return[4],
'year_r5'=> $yr_return[5],

'pefi_r'=> $pefi_return[0],
'pefi_r1'=> $pefi_return[1],
'pefi_r2'=> $pefi_return[2],
'pefi_r3'=> $pefi_return[3],
'pefi_r4'=> $pefi_return[4],
'pefi_r5'=> $pefi_return[5],
'psei_r'=> $psei_return[0],
'psei_r1'=> $psei_return[1],
'psei_r2'=> $psei_return[2],
'psei_r3'=> $psei_return[3],
'psei_r4'=> $psei_return[4],
'psei_r5'=> $psei_return[5],
'tenyr'=> $tenyr,
'fiveyr'=> $fiveyr,
'threeyr'=> $threeyr,
'cmsdata'=> $cmsdata,
'graph'=>$graph,
'mode'=>$mode,
'subdetails'=>$subdetails,
'pefi_mo1'=>$pefi_mo1,
'pefi_mo6'=>$pefi_mo6,
'pefi_beg'=>$pefi_beg,
'psei_mo1'=>$psei_mo1,
'psei_mo6'=>$psei_mo6,
'psei_beg'=>$psei_beg,
'latestdate'=>$latestdate,
'psei_yr'=>$psei_yr,
'psei_yr3'=>$psei_yr3,
'pefi_yr'=>$pefi_yr,
'pefi_yr3'=>$pefi_yr3,
'nvdate'=>$nvdate,
'pefi1_r'=> $pefi_return1[0],
'pefi1_r1'=> $pefi_return1[1],
'pefi1_r2'=> $pefi_return1[2],
'pefi1_r3'=> $pefi_return1[3],
'pefi1_r4'=> $pefi_return1[4],
'pefi1_r5'=> $pefi_return1[5],
);

generate_template($array,$Template);
?>