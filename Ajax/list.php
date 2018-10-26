<?php


require_once(dirname(dirname(__FILE__)).'\class.php');
require_once(dirname(dirname(__FILE__)).'\db_config.php');
$conn = new db();


$obj=new Events();

/*print_r($_REQUEST);
*/

if (isset($_REQUEST['action']) && $_REQUEST['action']=='edit')
{

		$data=$conn->getAll("SELECT category.id as id ,category.del,category_name ,count(event.id) as count  FROM category left outer join event on category.id =event.cat_id  and event.del=0 where category.del=0  group by category_name");
}
if (isset($_REQUEST['action']) && $_REQUEST['action']=='delete')
{


		$exec=$conn->execute("update category set del='1' where id='".$_REQUEST['value']."'");



$data=$conn->getAll("SELECT category.id as id ,category.del,category_name ,count(event.id) as count  FROM category left outer join event on category.id =event.cat_id  and event.del=0 where category.del=0  group by category_name");

}
else
{
	$data=$conn->getAll("SELECT category.id as id ,category.del,category_name ,count(event.id) as count  FROM category left outer join event on category.id =event.cat_id  and event.del=0 where category.del=0  group by category_name");

}
			

echo $obj->getcatlist($data);


?>