<?php

require_once(dirname(dirname(__FILE__)).'\SJI\class.php');
require_once(dirname(dirname(__FILE__)).'\SJI\db_config.php');
$conn = new db();


$obj=new Events();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Event Manager Page
	</title>
<style type="text/css">
	table, th, td  {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;
}
th {
    text-align: center;
}
</style>

  <meta  charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/settings.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/eventsettings.js"></script>

</head>
<body>
<div class="wrap">


   <button type="button" onclick="addevent();">Click To Add Event!</button>
</div>


<div class="container" id=add_event  style="display: none">
  <form action="save.php" method="post" enctype="multipart/form-data" id="event_form" >

    <h4 style="text-align: center;">Add Event</h4>
 <hr>
    	<input type="hidden" name="module" value="event">
    <label for="event">Event name </label>
   		<input name="event" id="event" value="" type="text" required>
    <label for="description">Description</label>
    	<input name="desc" id="description" value="" type="text" required><br><br>
     <label for="date">Date</label>
    	<input name="date" id="date"  type="date" required><br><br>

     <label>Upload Image</label>
     
          
               <input type="file"  name="fileToUpload" id="fileToUpload" required><br><br>

             	<label for="category">Category</label>
		       	<select  id="category" name="option" required>

		              <?php
		              $data=$conn->getAll("select id,category_name from category where del=0");
		              echo $obj->build_category($data);

		              ?>
          		</select>

<br><br>
           <label for="feature">Feature image</label>
    <input name="feature" id="feature"  type="checkbox" >



<br><br>

    <input type="submit"  value="Submit">

  </form>
</div>








<div class="wrap">
  
  <button type="button" onclick="view();">Click To View event!</button>
</div>



<div class="container" id=edit_event_form  >

</div>  




<div

<div class="container">
	<table id="listTable"  width="100%" ></table>
</div>



</body>
</html>