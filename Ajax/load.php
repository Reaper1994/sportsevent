<?php

require_once(dirname(dirname(__FILE__)).'\class.php');
require_once(dirname(dirname(__FILE__)).'\db_config.php');
$conn = new db();


$obj=new Events();


if (isset($_REQUEST['value']))
{
	$data=$conn->getAll("SELECT name,date,feature,description FROM `event` inner join category on category.id=event.cat_id WHERE category.del=0 and event.del=0 and name like '%".$_REQUEST['value']."%'");

}
else
{
$data=$conn->getAll("SELECT name,date,feature,description FROM `event` inner join category on category.id=event.cat_id WHERE category.del=0 and event.del=0 ");


}



if(empty($data))
{
	echo "<div  class='container'>No Event Found ! </div>";
}
else
{
	$ctr=1;
			
			
	 $headercolumns=array('#','Name','Description','Date','Featured');//add header values here 
         $html="<table id='lister' class='table'><tr>";
	 foreach ( $headercolumns as $key => $value) {
	 	# code..
              $html.="<th>".$value."</th>";
	 }
	 $html.="<tbody>";


foreach ($data as $ind => $res) {

$vr=($res['feature']==1)?'Yes':'No';

	# code...

	$html.="<tr><td>".$ctr++."</td>
	<td>".$res['name']."</td>
	<td>".$res['description']."</td>
	<td>".$res['date']."</td>
	<td>".$vr."</td></tr>";
}


	 $html.="
			</tbody>
			</table>";
			echo $html;

}
?>

