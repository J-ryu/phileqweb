<?php 



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



?>

<!-- Funds Performance -->
<div id= "fundsPer" class="row" style="margin-top:20px;">   
            <div class="col col-xs-12">


				
	<div class="panel panel-warning">
					  <div class="panel-heading" style="background-color:rgba(253, 212, 21, 0.9) !important">
						<div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-12">
							<h4 class="text-center pull-left" style="padding-left: 30px; text-align: center;"> 
							Absolute Returns
							</h4>
						  </div>
						</div>
					  </div>

					  <div class="panel-body table-responsive">
						<table class="table table-bordered table-striped">
						  <thead>
							<tr>
								<th class="text-center">For the Period as of July 24, 2018</th>
								<th class="text-center " colspan="2">Absolute Returns</th>		  
								
							</tr>
							 <tr>
							  <th class="text-center"></th>
							 <th class="text-center " colspan="1">PEFI</th>
							 <th class="text-center " colspan="1">PSEi</th>	  
							</tr>
						  </thead>

						  <tbody>

						  	<tr class="edit" id="detail">
								<td class="text-center ">YTD</th>
								<td class="text-center"><?php echo $pefi_return1[0] ?></td>
								<td class="text-center"><?php echo $psei_return[0] ?></td>
							  
							</tr>
							<tr>
								<td class="text-center ">Past 1 Mo</td>
								<td class="text-center"><?php echo $pefi_mo1 ?></td>
								<td class="text-center"><?php echo $psei_mo1 ?></td>
							  
							</tr>

							<tr>
								<td class="text-center ">Past 6 Mo</th>
								<td class="text-center"><?php echo $pefi_mo6?></td>
								<td class="text-center"><?php echo $psei_mo6 ?></td>
							</tr>

							<tr>
								<td class="text-center ">Past 1 Yr</td>
								<td class="text-center"><?php echo $pefi_yr ?></td>
                                <td class="text-center"><?php echo $psei_yr ?></td>

							</tr>

							<tr>
								<td class="text-center ">Past 3 Yrs</td>
								<td class="text-center"><?php echo $pefi_yr3 ?></td>
								<td class="text-center"><?php echo $psei_yr3 ?></td>
							  
							</tr>

							<tr>
								<td class="text-center ">Since Launch</td>
								<td class="text-center"><?php echo $pefi_beg ?></td>
								<td class="text-center"><?php echo $psei_beg ?></td>
							  
							</tr>	


								
								

						  </tbody>
						</table>
					  </div>

<!-- ANNUAL GROWTH RATE -->
		<div class="row" style="margin-bottom:10px;">
					<div class="col col-md-12">


					<div class="panel panel-warning">
					  <div class="panel-heading" style="background-color:rgba(253, 212, 21, 0.9) !important">
						<div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-12">
							<h4 class="text-center pull-left" style="padding-left: 30px; text-align: center;"> 
								Compounded Annual Returns (%)						   </h4>
						  </div>
						</div>
					  </div>

					  <div class="panel-body table-responsive">
						<table class="table table-bordered table-striped">
						  <thead>
							<tr>
							  <th class="text-center">For the Period as of July 24, 2018</th>
							  <th class="text-center " colspan="1">Compounded Annual Returns (%)</th>		  
							</tr>
							 
						  </thead>
						  <tbody>

						    <tr>
							  <td class="text-center"> 3 years </td>
							  <td class="text-center"> <?php echo $threeyr; ?>  </td>
							 
							</tr>

							<tr>
							  <td class="text-center"> 5 years </td>
							  <td class="text-center"> <?php echo $fiveyr; ?>  </td>
							  
							</tr>

							<tr class="edit" id="detail">
							  <td id="no" class="text-center"> 10 years </td>
							  <td class="text-center"> <?php echo $tenyr; ?>  </td>
							  
							</tr>


						  </tbody>
						</table>
					  </div>


<!-- Calendar Year Returns  -->
<div class="row" style="margin-top:10px;">   
            <div class="col col-md-12">


				<div class="panel panel-warning">
					  <div class="panel-heading" style="background-color:rgba(253, 212, 21, 0.9) !important">
						<div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-12">
							<h4 class="text-center pull-left" style="padding-left: 30px; text-align: center;"> 
								Calendar Year Returns (%)						   </h4>
						  </div>
						</div>
					  </div>

					  <div class="panel-body table-responsive">
						<table class="table table-bordered table-striped">
						  <thead>
							<tr>
							  <th class="text-center">FOR THE YEAR</th>
							  <th class="text-center " colspan="2">Calendar Year Returns (%)</th>		  
							</tr>
							 <tr>

							 <th class="text-center"></th>
							 <th class="text-center " colspan="1">PEFI</th>
							 <th class="text-center " colspan="1">PSEi</th>	  
							</tr>
						  </thead>

						  <tbody>
							<tr class="edit" id="detail">
							  <td id="no" class="text-center"> <?php echo $yr_return[0]?> YTD</td>
							  <td id="name" class="text-center"><?php echo $pefi_return1[0] ?></td>
							  <td id="mobile" class="text-center"> <?php echo $psei_return[0] ?></td>
							  
							</tr>

							<tr>
							  <td class="text-center"> <?php echo $yr_return[1] ?> </td>
							  <td class="text-center"> <?php echo $pefi_return1[1] ?> </td>
							  <td class="text-center"> <?php echo $psei_return[1] ?> </td>
							  
							</tr>

							<tr>
							  <td class="text-center"><?php echo $yr_return[2] ?> </td>
							  <td class="text-center"> <?php echo $pefi_return1[2] ?> </td>
							  <td class="text-center"> <?php echo $psei_return[2] ?> </td>	  
							</tr>

							<tr>
							  <td class="text-center"> <?php echo $yr_return[3] ?> </td>
							  <td class="text-center"> <?php echo $pefi_return1[3] ?></td>
							  <td class="text-center"> <?php echo $psei_return[3] ?> </td>
							  
							</tr>

							<tr>
							  <td class="text-center"> <?php echo $yr_return[4] ?> </td>
							  <td class="text-center"> <?php echo $pefi_return1[4] ?> </td>
							  <td class="text-center"> <?php echo $psei_return[4] ?> </td>
							  
							</tr>

							<tr>
							  <td class="text-center"> <?php echo $yr_return[5] ?> </td>
							  <td class="text-center"> <?php echo $pefi_return1[5] ?> </td>
							  <td class="text-center"> <?php echo $psei_return[5] ?> </td>
							  
							</tr>

						  </tbody>
						</table>
					  </div>

					    <div class="panel-footer">
							<div class="btns">
							
							</div> <!-- btns -->
					</div>
			</div>

            

            </div> <!-- end col -->
</div> <!-- end row -->


		
					    <div class="panel-footer">
							<div class="btns">
							
							</div> <!-- btns -->
				</div>
		</div>
					  <div class="panel-footer">
							<div class="btns text-center" style="margin-top:20px;">
							<a href="<?php echo site_url('/return-calculator') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Calculate returns</a>
							<a href="<?php echo site_url('/transact') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-save"></span>Open an Account</a>
							<a href="<?php echo site_url('/download') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-save"></span>Latest Fund Fact Sheet</a>
									<!--<a href="<?php echo site_url('https://www.facebook.com/') ?>" target="_blank" class="theme-btn"><span class="glyphicon icon-share"></span>Share on social Media</a>-->
							</div> <!-- btns -->
					</div>
			</div>
			

            </div> <!-- end col -->
</div> <!-- end row -->


               

            </div>    <!-- end col -->
 </div>     <!-- end row -->