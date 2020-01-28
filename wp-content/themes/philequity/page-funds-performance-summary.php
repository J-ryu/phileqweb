<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *   Performance Summary
 *
 * @package philequity
 */

require_once("template-parts/content-dbconn.php");
get_header();


// ======================== Philequity PSE Index Fund, Inc  ===========================



//GET NAVPS AFTER 1 MONTH

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity PSE Index Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppse_mo1 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;

// GET 3 MONTHS

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
 DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity PSE Index Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -3 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppse_mo3 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;


// GET 6 MONTHS

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity PSE Index Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -6 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppse_mo6 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;

// GET 6 MONTHS

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity PSE Index Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -6 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppse_mo6 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;


// GET 1 YEAR

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity PSE Index Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -1 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppse_year1 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;



// GET 3 YEAR

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity PSE Index Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -3 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppse_year3 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;




// GET 3 YEAR

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity PSE Index Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity PSE Index Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -5 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppse_year5 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;


// ===================================== END  =========================================




// ======================== Philequity Peso Bond Fund, Inc  ===========================


$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
 DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Peso Bond Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

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
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppbf_mo1 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;



//GET NAVPS AFTER 3 MONTHS


$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
 DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Peso Bond Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -3 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppbf_mo3 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;


//GET NAVPS AFTER 6 MONTHS


$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
 DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Peso Bond Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -6 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppbf_mo6 = round(((($mo1new/$mon1prev) - 1) * 100),2);



//GET NAVPS AFTER 1 YEAR


$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
 DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Peso Bond Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -1 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppbf_year1 = round(((($mo1new/$mon1prev) - 1) * 100),2);





// GET NAVPS AFTER 3 YEARS


$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
 DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Peso Bond Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -3 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppbf_year3 = round(((($mo1new/$mon1prev) - 1) * 100),2);



// GET NAVPS AFTER 5 YEARS


$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
 DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Peso Bond Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Peso Bond Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -5 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.8809) - 1) * 100),2) ;
$ppbf_year5 = round(((($mo1new/$mon1prev) - 1) * 100),2);




// ppse_year1


// ================================= END ====================================





// ======================== Philequity Fund, Inc  ===========================



// GET NAVPS AFTER 1 MONTH

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





// GET NAVPS AFTER 3 MONTHS

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

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -3 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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
$pefi_mo3 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;



// GET NAVPS AFTER 6 MONTHS

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

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -6 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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
$pefi_mo6 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;




// GET NAVPS AFTER 1 YEAR

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

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -1 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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
$pefi_year1 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;




// GET NAVPS AFTER 3 YEARS

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

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -3 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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
$pefi_year3 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;



// GET NAVPS AFTER 5 YEARS

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

$comma = "";
$q = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -5 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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
$pefi_year5 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;




// ================================= END ====================================


// ======================== Philequity Dollar Income Fund, Inc  ===========================




// GET NAVPS AFTER 1 MONTH

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Dollar Income Fund, Inc' AND status = '1' 
 ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];


$comma = "";
$q = "";
$mo1new = "";
$mon1prev = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -1 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.0256797) - 1) * 100),2) ;
$pdif_mo1 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;


// GET NAVPS AFTER 3 MONTHS


$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Dollar Income Fund, Inc' AND status = '1' 
 ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];


$comma = "";
$q = "";
$mo1new = "";
$mon1prev = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -3 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.0256797) - 1) * 100),2) ;
$pdif_mo3 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;




// GET NAVPS AFTER 6 MONTHS


$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Dollar Income Fund, Inc' AND status = '1' 
 ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];


$comma = "";
$q = "";
$mo1new = "";
$mon1prev = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -6 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.0256797) - 1) * 100),2) ;
$pdif_mo6 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;




// GET NAVPS AFTER 1 YEAR


$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Dollar Income Fund, Inc' AND status = '1' 
 ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];


$comma = "";
$q = "";
$mo1new = "";
$mon1prev = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -1 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.0256797) - 1) * 100),2) ;
$pdif_year1 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;



// GET NAVPS AFTER 3 YEARS


$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Dollar Income Fund, Inc' AND status = '1' 
 ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];


$comma = "";
$q = "";
$mo1new = "";
$mon1prev = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -3 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.0256797) - 1) * 100),2) ;
$pdif_year3 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;



// GET NAVPS AFTER 5 YEARS


$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Dollar Income Fund, Inc' AND status = '1' 
 ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];


$comma = "";
$q = "";
$mo1new = "";
$mon1prev = "";
$myear = $myear.$lday;

$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' 
	ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dollar Income Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -5 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.0256797) - 1) * 100),2) ;
$pdif_year5 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;


// ================================= END ====================================



// ======================== Philequity Dividend Yield Fund, Inc  ===========================

// GET NAVPS AFTER 1 MONTH 
$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Dividend Yield Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
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

$pefi_beg = round(((($mo1new/0.963) - 1) * 100),2) ;
$pdyf_mo1 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;



// GET NAVPS AFTER 3 MONTH 

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
	DATE_FORMAT(date_navps,'%Y%m') as myear
 FROM dailyfunds 
 WHERE type = 'Philequity Dividend Yield Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -3 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.963) - 1) * 100),2) ;
$pdyf_mo3 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;


// GET NAVPS AFTER 6 MONTHS

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
DATE_FORMAT(date_navps,'%Y%m') as myear
FROM dailyfunds 
WHERE type = 'Philequity Dividend Yield Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -6 MONTH) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.963) - 1) * 100),2) ;
$pdyf_mo6 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;




// GET NAVPS AFTER 1 YEAR

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
DATE_FORMAT(date_navps,'%Y%m') as myear
FROM dailyfunds 
WHERE type = 'Philequity Dividend Yield Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -1 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.963) - 1) * 100),2) ;
$pdyf_year1 = round(((($mo1new/$mon1prev) - 1) * 100),2) ;


// GET NAVPS AFTER 3 YEARS

$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
DATE_FORMAT(date_navps,'%Y%m') as myear
FROM dailyfunds 
WHERE type = 'Philequity Dividend Yield Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -3 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.963) - 1) * 100),2) ;
$pdyf_year3 = round(((($mo1new/$mon1prev) - 1) * 100),2);




// GET NAVPS AFTER 5 YEARS



$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year,
DATE_FORMAT(date_navps,'%Y%m') as myear
FROM dailyfunds 
WHERE type = 'Philequity Dividend Yield Fund, Inc' AND status = '1' ORDER BY date_navps DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 
$myear = $SQL_rec["myear"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));
$latest_date_navps = $SQL_rec["date_navps"];

$comma = "";
$q = "";
$myear = $myear.$lday;
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y%m%d') = $myear AND status = '1' ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Dividend Yield Fund, Inc'
	AND date_navps <= DATE_ADD('$latest_date_navps', INTERVAL -5 YEAR) AND status = '1'
	ORDER BY date_navps DESC LIMIT 1 )
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

$pefi_beg = round(((($mo1new/0.963) - 1) * 100),2) ;
$pdyf_year5 = round(((($mo1new/$mon1prev) - 1) * 100),2);










// ================================= END ====================================



$month_navs1 = array($ppse_mo1,$ppbf_mo1,$pefi_mo1,$pdif_mo1,$pdyf_mo1);
$month3_navs = array($ppse_mo3,$ppbf_mo3,$pefi_mo3,$pdif_mo3,$pdyf_mo3);
$month6_navs = array($ppse_mo6,$ppbf_mo6,$pefi_mo6,$pdif_mo6,$pdyf_mo6);

$year1_navs = array($ppse_year1,$ppbf_year1,$pefi_year1,$pdif_year1,$pdyf_year1);
$year3_navs = array($ppse_year3,$ppbf_year3,$pefi_year3,$pdif_year3,$pdyf_year3);
$year5_navs = array($ppse_year5,$ppbf_year5,$pefi_year5,$pdif_year5,$pdyf_year5);

 

//edited by Neil: 05.27.19 (ordered Funds)
$query = "SELECT distinct(type) from funds order by type";
$result = mysql_query($query);
$row = mysql_num_rows($result);
$link = "";

for($i=0;$i<$row;$i++){
	$record = mysql_fetch_array($result);
	if($record["type"]){
		$qry = "SELECT * FROM dailyfunds WHERE type = '".$record["type"]."' 
				ORDER BY date_navps DESC LIMIT 1 ";
		$res = mysql_query($qry);
		$rec = mysql_fetch_array($res);

       if($rec["type"]=="Philequity Dividend Yield Fund, Inc") {
       		$currdate = date("Y");
       		$qrylast = "SELECT * FROM dailyfunds WHERE type = '".$rec['type']."'
       					AND DATE_FORMAT(date_navps, '%Y') = ($currdate - 1)
       					ORDER BY date_navps DESC LIMIT 1";
			$reslast = mysql_query($qrylast);
			$reclast = mysql_fetch_array($reslast);
        	$ytd_pdyf = round(((($rec["navps"]/$reclast['navps']) - 1 ) * 100),2);
        	//$ytd_pdyf = round(((($rec["navps"]/1.1725) - 1 ) * 100),2);
        	//$ytd_pdyf = $currdate - 1;
        }else{
        	$ytd_pdyf = $rec["ytd"];
        }		
  if ($rec["type"]=='Philequity PSE Index Fund, Inc') {
    $link = 'https://uat.philequity.net/mutual_fund/philequity-pse-index-fund-inc/';
    
  }

  if ($rec["type"]=='Philequity Peso Bond Fund, Inc') {
    $link = 'https://uat.philequity.net/mutual_fund/philequity-peso-bond-fund-inc';
    
  }

  
  if ($rec["type"]=='Philequity Fund, Inc') {
    $link = 'https://uat.philequity.net/mutual_fund/philequity-fund-inc';
    
  }

  if ($rec["type"]=='Philequity Dollar Income Fund, Inc') {
    $link = 'https://uat.philequity.net/mutual_fund/philequity-dollar-income-fund-inc/';
    
  }
  if ($rec["type"]=='Philequity Dividend Yield Fund, Inc') {
    $link = 'https://uat.philequity.net/mutual_fund/philequity-dividend-yield-fund-inc/';
    
  }

  
		$navps.='
        <tr>
         <td><a href='.$link.'> '.$rec["type"].' </a>  </td>
         <td>'.$rec["navps"].'</td>
         <td>'.$ytd_pdyf.'%</td>
         <td>'. $month_navs1[$i].'%</td>
         <td>'. $month3_navs[$i].'%</td>
         <td>'. $month6_navs[$i].'%</td>
         <td>'. $year1_navs[$i].'%</td>
         <td>'. $year3_navs[$i].'%</td>
         <td>'. $year5_navs[$i].'%</td>
        </tr>
       
      
		';
	}
}



  
?>

<!-- start page-title -->
<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/fund-performance-banner.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <!--<div class="row">-->
                    <div class="col col-xs-12">
                        <h2>Funds Performance Summary</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('mutual-funds') ?>">Our Products</a></li>
                            <li>Funds Performance Summary</li>
                        </ol> -->
                    </div>
                <!--</div>--> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->


<section class="section-padding">

    <div class="container">
      <div class="row">
        <div class="col col-xs-12">

          
	<div class="panel panel-warning">
					  <div class="panel-heading" style="background-color:rgba(253, 212, 21, 0.9) !important">
						<div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-12">
							<h4 class="text-center pull-left" style="padding-left: 30px; text-align: center;"> 
                  Performance
						   </h4>
						  </div>
						</div>
					  </div>

					  <div class="panel-body table-responsive">
						<table class="table table-bordered table-striped">
						  <thead>
							<tr>
							  <th class="text-center">Fund Name</th>
                <th class="text-center">NAVPS</th>
                <th class="text-center">YTD</th>
                <th class="text-center">1 Mo</th>	 
                <th class="text-center">3 Mo</th>	 
                <th class="text-center">6 Mo</th>	 
                <th class="text-center">1 Yr</th>	 
                <th class="text-center">3 Yr</th>	 
                <th class="text-center">5 Yr</th>	 
                
							</tr>	
						  </thead>

						  <tbody>
					
            <?php echo $navps ?>
           
   
             

						  </tbody>
						</table>
					  </div>

					    <div class="panel-footer">
							<div class="btns">
							
							</div> <!-- btns -->
				</div>
		</div>




         
        </div> <!-- col col-xs-12 -->
      </div>  <!-- End row -->
      
      <div class="row">
        <div class="btns text-center" style="margin-bottom:15px;">
          <a href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Open an account</a>
          <a href="<?php echo site_url('/mutual-funds') ?>" target="_blank" class="theme-btn"></span>Learn More</a>
        
                       
        </div>

        <div class="col col-xs-12">
          <p style="text-align:center; font-style: italic;">
          A mutual fund investment involves risk. 
          The value of the fund may go up and down.
          Returns from this investment are not guaranteed by Philequity Management, Inc. 
          Any gains or losses from the investment are solely for the account of the investor.
          Past performance is not necessarily a guide to future performance. A mutual fund is not a deposit product
          and is not insured with the Philippine Deposit Insurance Corporation (PDIC).
          </p>

        </div> <!-- col col-xs-12 -->
      </div>  <!-- End row -->

      


    </div> <!-- End container -->

 </section>













<?php get_footer(); ?>