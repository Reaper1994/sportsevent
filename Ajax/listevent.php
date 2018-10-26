<?php


require_once(dirname(dirname(__FILE__)).'\class.php');
require_once(dirname(dirname(__FILE__)).'\db_config.php');
$conn = new db();


$obj=new Events();




$data=$conn->getAll("select * from event where del=0");


if (isset($_REQUEST['action']) && $_REQUEST['action']=='event_delete')
{


		$exec=$conn->execute("update event set del='1' where id='".$_REQUEST['value']."'");





}
if(isset($_REQUEST['action']) && $_REQUEST['action']=='changecategory')
{
	$exec=$conn->execute("update event set cat_id='".$_REQUEST['value']."' where id='".$_REQUEST['value']."'");
}

	
	$opt=$conn->getAll("select * from category where del=0");	

	/*print_r($data);*/

echo $obj->getevent($data,$opt);


?>