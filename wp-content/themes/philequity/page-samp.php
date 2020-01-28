<?php 


get_header();
$DBhost = 'localhost';
$DBuser='dvrsenet_admin';
$DBpass='9bRoq_0+ttqF';
$DBName='dvrsenet_philequitydb';

//DB CONNECTION STRING
$conn=mysql_connect ($DBhost, $DBuser, $DBpass) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($DBName); 


//NAVPS table
$query = "SELECT distinct(type) from funds";
$result = mysql_query($query);
$row = mysql_num_rows($result);


?>

<?php 


for($i=0;$i<$row;$i++){
	$record = mysql_fetch_array($result);
	$link ="";

	if($record["type"]){
		$qry = "SELECT * FROM dailyfunds WHERE type = '".$record["type"]."'  AND status = '1'
				ORDER BY date_navps DESC LIMIT 1 ";
		$res = mysql_query($qry);
		$rec = mysql_fetch_array($res);
		$ndate = explode("-",$rec["date_navps"]);
		$yr = $ndate[0];
		$mo = $ndate[1];
        $dy = $ndate[2];
        
      
		$nvdate = date("F d, Y",mktime(0,0,0,$mo,$dy,$yr));
        
        
		$navpsdate=' <tr>
                <td width="115" align="center" colspan="2" style=" font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; font-weight:bold; color:#000033;">
                '.$nvdate.'</a></td>
            </tr>';
		$navdata.=' <tr>
                <td width="115" class="tableText">'.$link.$record["type"].'</a></td>
               <td width="52" align="right" class="tableText">'.$rec["navps"].'</td>
            </tr>';
		
	}
    $navpsdata = $navpsdate.$navdata;
    
 
}


?>
<?php ?>

<h2 class="tablepress-table-name tablepress-table-name-id-4">NAVPYS</h2>
<table class="tablepress">

<tbody class="row-hover">
<?php echo $navpsdata ?>

</tbody>
</table>





<?php



 ?>
<?php
get_footer();
?>