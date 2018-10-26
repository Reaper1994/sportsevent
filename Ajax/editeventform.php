
<?php
require_once(dirname(dirname(__FILE__)).'\db_config.php');
require_once(dirname(dirname(__FILE__)).'\class.php');
$conn = new db();

$obj=new Events();




$data=$conn->getOne('SELECT name,cat_id ,date,path,feature,category_name,description FROM `event` inner join category on category.id=event.cat_id WHERE event.del=0 and event.del=0 and event.id="'.$_REQUEST['eventid'].'"');

?>

<form action="save.php" method="post" enctype="multipart/form-data" id="event_form" >

    <h4 style="text-align: center;">Edit Event</h4>
 <hr>
       <input type="hidden" id="event_id" name="event_id" value= '<?php echo $_REQUEST['eventid'];  ?>'>
    	 <input type="hidden" name="module" value="edit_event">
    <label for="event">Event name </label>
   		 <input name="event" onfocus="this.value=''" id="event" value='<?php echo $data['name'];  ?>' type="text" required>
    <label for="description">Description</label>
    	 <input name="desc" id="description" onfocus="this.value=''"  type="text" value='<?php echo $data['description'];  ?>' required><br><br>
     <label for="date">Date</label>
    	 <input name="date" id="date"  type="date" required><br><br>

     <label>Upload Image</label>
     
          
        <input type="file"   name="fileToUpload" id="fileToUpload" required><br><br>

             	<label for="category">Category</label>
		       	<select  id="category_edit" name="option" required>

		              <?php
		              $cat=$conn->getAll("select id,category_name from category where del=0");
		              echo $obj->build_category($cat, $data['cat_id']);

		              ?>
          	</select>

  <br><br>
      <label for="feature">Feature image</label>

                   <?php

                     $che="";
                if( $data['feature']==1)
                {
                  $che="checked";
                }

                   ?>
        <input name="feature" id="feature"  type="checkbox" <?php echo $che ?> >


     

  <br><br>

        <input type="submit"  value="Submit">
    <hr>
  </form>

