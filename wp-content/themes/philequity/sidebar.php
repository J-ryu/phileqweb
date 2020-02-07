<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package philequity
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}


require_once("template-parts/content-dbconn.php");


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
        
        
		$navpsdate='
		<thead>
		     <tr class="warning">
				<td><strong>'.$nvdate.'</strong></td>
				<td></td>
			</tr>
		</thead>';

		$navdata.='
			<tr>
                <td>'.$link.$record["type"].'</td>
                <td>'.$rec["navps"].'</td>
            </tr>';
		
	}
    $navpsdata = $navpsdate.$navdata;
}

?>


<div class="blog-sidebar col col-lg-3 col-lg-pull-9 col-md-4 col-md-pull-8 col-sm-5">

<section id="nav-widget" class="widget" style="
	font-size: 14px;
    border: solid 1px #ddd;
    padding: 5px;">
	
	<h4>NAVPS</h4>
	<table class="table table-striped table-hover">
		<tbody class="row-hover">
		<?php echo $navpsdata ?>
		</tbody>
	</table>

</section>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	



</div> <!-- #secondary -->
