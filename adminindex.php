
<!DOCTYPE html>
<html>
<head>
	<title>
		Category Manager
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
<script type="text/javascript" src="js/adminindex.js"></script>
</head>
<body>
<div class="wrap">
<!--    <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>

     </button>
   </div> -->

   <button type="button" onclick="addcategory();">Click To Add Category!</button>
</div>


<div class="container" id=add_category  style="display: none">
  <form action="save.php" id="category_form" onsubmit="return validateForm_Category()">

    <label for="fname">Add Category</label>
    <input type="hidden" name="module" value="category">
    <input name="category" id="category" value="" type="text" >

    <input type="submit"  value="Submit">

  </form>
</div>








<div class="wrap">
  
  <button type="button" onclick="view();">Click To View Category!</button>
</div>

<div class="container" id=edit_category  style="display: none">
  <form action="save.php" id="category_form1" >
         
    <label for="fname">Edit Category</label>
    <input type="hidden" name="module" value="edit_category">
    <input name="category"  onfocus="this.value=''" id="category_val" value="" type="text"  required>
    <input name="id"  id="category_id" value="" type="hidden" >


    <input type="submit"  onsubmit="showHide()" value="Submit">

  </form>
</div>  



<div class="container">
	<table id="listTable"  width="100%" ></table>
</div>

<a href="eventsettings.php">Go to events manager page</a>

</body>
</html>