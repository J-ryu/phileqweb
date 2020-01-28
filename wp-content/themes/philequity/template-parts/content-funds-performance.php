
<?php 




// SELECT DISTINCT(type) FROM funds



$query = "SELECT distinct(type) from `funds`";
$result = mysql_query($query);
$row = mysql_num_rows($result);


echo $row ;

for($i=0;$i<$row;$i++){
	$record = mysql_fetch_array($result);
	if($record["type"]){
		$qry = "SELECT * FROM `dailyfunds` WHERE type = '".$record["type"]."' 
				ORDER BY `date_navps` DESC LIMIT 1 ";
		$res = mysql_query($qry);
		$rec = mysql_fetch_array($res);

       if($rec["type"]=="Philequity Dividend Yield Fund, Inc") {
       		$currdate = date("Y");
       		$qrylast = "SELECT * FROM `dailyfunds` WHERE type = '".$rec['type']."'
       					AND DATE_FORMAT(date_navps, '%Y') = ($currdate - 1)
       					ORDER BY `date_navps` DESC LIMIT 1";
			$reslast = mysql_query($qrylast);
			$reclast = mysql_fetch_array($reslast);
        	$ytd_pdyf = round(((($rec["navps"]/$reclast['navps']) - 1 ) * 100),2);
        	//$ytd_pdyf = round(((($rec["navps"]/1.1725) - 1 ) * 100),2);
        	//$ytd_pdyf = $currdate - 1;
        }else{
        	$ytd_pdyf = $rec["ytd"];
        }		
	
		$navps.='
		<tr bgcolor="#ededed">
         <td>&nbsp; &nbsp; '.$rec["type"].'</td>
         <td align="center">'.$rec["navps"].'</td>
         <td align="center">'.$ytd_pdyf.'%</td>
         <td align="center">'.$rec["prcnt_change"].'%</td>
       </tr>
		';
	}
}

//PHISIX DATA

$query = "SELECT * FROM dailyphisix ORDER BY date_phisix DESC LIMIT 1";
$result = mysql_query($query);
$record = mysql_fetch_array($result);

$navps.='
		<tr bgcolor="#ededed">
         <td>&nbsp; &nbsp; PHISIX</td>
         <td align="center">'.$record["phisix"].'</td>
         <td align="center">'.$record["ytd"].'%</td>
         <td align="center">'.$record["prcnt_change"].'%</td>
       </tr>
		';
		
// GET CMS DATA
$query = "SELECT * from contents WHERE eid = '20070806194417819' ";
$result = mysql_query($query);
$record = mysql_fetch_array($result);
$cmsdata = $record["details"];

//GET COMPUNDED ANNUAL GROWTH RATE (CAGR,%)
$SQL = "SELECT *, DATE_FORMAT(date_navps,'%Y') as year FROM `dailyfunds` WHERE type = 'Philequity Fund, Inc' ORDER BY `date_navps` DESC LIMIT 1 ";
$SQL_res = mysql_query($SQL);
$SQL_rec = mysql_fetch_array($SQL_res); 
$latest = $SQL_rec["year"]; 

$latestdte = explode("-",$SQL_rec["date_navps"],3);
echo $latestdate;

$lyear = $latestdte[0];
$lmonth = $latestdte[1];
$lday = $latestdte[2];

$latestdate = date("F d, Y",mktime(0,0,0,$lmonth,$lday,$lyear));

//GET 10 YRS
$comma = "";
$SQL = "(SELECT * FROM `dailyfunds` WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y') = $latest ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM `dailyfunds` WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y') <= ($latest - 10) ORDER BY date_navps DESC LIMIT 1 )
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
$SQL = "(SELECT * FROM `dailyfunds` WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y') = $latest ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y') <= ($latest - 5) ORDER BY date_navps DESC LIMIT 1 )
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

//GET 5 YRS
$comma = "";
$q = "";
$SQL = "(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y') = $latest ORDER BY date_navps DESC LIMIT 1 )
	UNION
	(SELECT * FROM dailyfunds WHERE type = 'Philequity Fund, Inc'
	AND DATE_FORMAT(date_navps,'%Y') <= ($latest - 3) ORDER BY date_navps DESC LIMIT 1 )
	";
$SQL_res = mysql_query($SQL);
for($n=0;$n<2;$n++){
	$SQL_rec = mysql_fetch_array($SQL_res); 
	$q.=$comma.$SQL_rec["navps"];
	$comma=',' ;
}

$three = explode(",",$q);
$threenew = $five[0];
$threeprev = $five[1];

$val_three = ($threenew/$threeprev);
$raise = (1/3);
$threeyr = round(((pow($val_three,$raise) - 1)* 100),2);

//GET CALENDAR YEAR RETURN (%)
$comma = "";
$pcom = "";
$query = "SELECT date_format(date_navps,'%Y') as year FROM `dailyfunds` WHERE `type` = 'Philequity Fund, Inc'
group by date_format(date_navps,'%Y') DESC LIMIT 6 ";
$result = mysql_query($query);
$row = mysql_num_rows($result);

for($i=0;$i<$row;$i++){
	$record = mysql_fetch_array($result);
	$parm = $record["year"];
	$yreturn.= $comma.$record["year"];
	$comma = ',';

	// PEFI DATA
	$qry = "(SELECT * FROM `dailyfunds` WHERE type = 'Philequity Fund, Inc' 
		AND DATE_FORMAT( date_navps, '%Y' ) = $parm 
		ORDER BY `date_navps` DESC LIMIT 1)
		UNION 
		(SELECT * FROM `dailyfunds` WHERE type = 'Philequity Fund, Inc' 
		 AND DATE_FORMAT( date_navps, '%Y' ) <= ($parm - 1)
		ORDER BY `date_navps` DESC LIMIT 1)";
	$res = mysql_query($qry);
	$rows = mysql_num_rows($res);
	
	$rvalue = "";
	$comm = "";
	for($n=0;$n<$rows;$n++){
		$rec = mysql_fetch_array($res);
		$pefivalue.=$comm.$rec["navps"];
		$comm = ',';
	}
	//compute

	$data = explode(",",$pefivalue);
	$pefinew = $data[0];
	$pefiprev = $data[1];
	
	$pefireturn.= $pcom.round(((($pefinew/$pefiprev) - 1 ) * 100),2);
	$pcom = ',';
	
	// PSEI DATA
	$qry = "(SELECT * FROM `dailyphisix` WHERE DATE_FORMAT( date_phisix, '%Y' ) = $parm 
		ORDER BY date_phisix DESC LIMIT 1)
		UNION 
		(SELECT * FROM `dailyphisix` WHERE DATE_FORMAT( date_phisix, '%Y' ) <= ($parm - 1)
		ORDER BY date_phisix DESC LIMIT 1)";
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
$psei_return = explode(",",$pseireturn);




?>