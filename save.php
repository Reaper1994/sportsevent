<?php

require_once(dirname(dirname(__FILE__)).'\SJI\db_config.php');
require_once(dirname(dirname(__FILE__)).'\SJI\upload.php');
/*print_r($_REQUEST);*/
$conn = new db();





if($_REQUEST['module']=='category')
{
		 if (isset($_REQUEST['category']))
	{
		
		$data=$conn->getOne("SELECT *  FROM category where del=0 and category_name ='".$_REQUEST['category']."'");
			if($data["category_name"]=='')
			 {
			 	
			$query = $conn->execute('insert into category (category_name) values("'.$_REQUEST['category'].'")');

			echo "<div>Category added !</div>
<a href='adminindex.php'>go back to category</a>";
	
			 }
				 else
				 {

echo "<div>data exists!</div>
<a href='adminindex.php'>go back to category</a>";
				 	
				 }


	}

}
else if($_REQUEST['module']=='edit_category')
{

			if($_REQUEST['id']!='')
			 {
			 	
			$query = $conn->execute("update category set category_name='".$_REQUEST['category']."' where id='".$_REQUEST['id']."'");

			echo "<div class='container'>Record updated !</div>
					<a href='adminindex.php'>go back to settings</a>";
				 	
	
			 }



}
else if ($_REQUEST['module']=='event')
{

 if (isset($_REQUEST['option']) && isset($_REQUEST['event']) && isset($_REQUEST['desc']) && isset($target_file) && $uploadOk!=0 )
 {
	 $feature = (isset($_POST['feature'])) ? 1 : 0;

	 	 $qry="insert into event (cat_id,name,description,date,path,feature) values ('".$_REQUEST['option']."','".$_REQUEST['event']."','".addslashes($_REQUEST['desc'])."','".$_REQUEST['date']."','".addslashes($target_file).")','".$feature."')";

		$query = $conn->execute($qry);
		echo "<div class='container'>Event sucesfully ADDED !</div>
							<a href='eventsettings.php'>go back to settings</a>";
				}

	else
	{
		echo "<div class='container'>Event Addition failed !</div>
								<a href='eventsettings.php'>go back to settings</a>";
	}
}
else if($_REQUEST['module']=='event_delete')
{   
	if($_REQUEST['id']!='')
			 {
			 	
			$query = $conn->execute("update category set category_name='".$_REQUEST['category']."' where id='".$_REQUEST['id']."'");

			echo "<div class='container'>Record updated !</div>
					<a href='adminindex.php'>go back to settings</a>";
				 	
	
			 }

   
}
else if ($_REQUEST['module']=='edit_event')
{

		if($_REQUEST['event_id']!='' && isset($_REQUEST['option']) && isset($_REQUEST['event']) && isset($_REQUEST['desc']) && isset($target_file) && $uploadOk!=0)
			 {
			 
			 $featureimg = (isset($_POST['feature'])) ? 1 : 0;
				
		$query = $conn->execute("update event set name='".$_REQUEST['event']."' ,cat_id='".$_REQUEST['option']."',feature='".$featureimg."',date='".$_REQUEST['date']."',description='".$_REQUEST['desc']."',path='".$target_file."' where id='".$_REQUEST['event_id']."'");

			echo "<div class='container'>Event Record updated !</div>
					<a href='adminindex.php'>go back to settings</a>";

			
				 	
	
			 }
			 else
			 {
			 	echo "<br>mandatory fields not found ";
			 }

}
?>