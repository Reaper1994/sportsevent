<?php
class Category
{
     




	  		public function build_category($data,$option)  //$data is the array containing all nondelted categories
			  {

			     $html="<option ></option>";

			    
			foreach ($data as $key => $res) {
			  

			  $sel='';
			 if( $option==$res['id'])
			 {$sel="selected";
			 }


			     $html.="<option value='".$res['id'] . "' ".$sel."      >".$res['category_name']."</option>";
			  }
			    return  $html;
			  }





		    public function getcatlist($data)
			{
				$ctr=0;
			$ctr++;
			$html="<table class='table'>

			  <tr>
			    <th>#</th>
			    <th>Category</th>
			    <th>Events Asociated</th>
			    <th>Edit</th>
			    <th>Delete</th>
			  </tr> <tbody>";

			foreach ($data as $key => $res) {


			$html.=" 

			<tr>
			<td>".$ctr++."</td>
			<td><span class='category".$res['id']."'>".$res['category_name']." </span></td>
			<td>".$res['count']."</td> 
			<td><button type='button' id='button".$res['id']."' class='edit'  name='".$res['category_name']."' onclick='edit(this.value,this.name)' value=".$res['id']." >edit</button></td>
			<td><button type='button' id='button_".$res['id']."'  name='button_".$res['id']."'  onclick='del(this.value)' class='delete' value=".$res['id']." >Delete</button></td>
			</tr>";

			}

			$html.="</span>
			</tbody>
			</table>";

			return $html;


			}
        
    
}

class Events extends Category
{


		    public function getevent($data,$options)
			{
				$ctr=0;
			$ctr++;
			$html="<table class='table'>

			  <tr>
			    <th>#</th>
			    <th>Name</th>
			    <th>Description</th>
			    <th>Date</th>
			    <th>Image</th>
			    <th>Edit</th>
			    <th>Delete</th>
			    <th>Category Dropdown</th>
			    <th>Enable/Disable</th>
			  </tr> <tbody>";

			foreach ($data as $key => $res) {

        $che="";
        if( $res['feature']==1)
        {
        	$che="checked";
        }

			$html.=" <tr>
			<td>".$ctr++."</td>
			<td>".$res['name']."</td>
			<td>".$res['description']."</td>
			<td>".$res['date']."</td>
			<td><a href='".$res['path']."' target='blank'>".$res['name'].'_image'."</a></td>
			<td>
			 <button type='button' id='button".$res['id']."'  name='button".$res['id']."' onclick='edit(this.value)' value=".$res['id']." >edit</button></td>
			 <td><button type='button' id='button_".$res['id']."'  name='button_".$res['id']."' onclick='del(this.value)' value=".$res['id']." >Delete</button></td>
			 <td>   	<select  >".$this->build_category($options,$res['cat_id'])."</select></td>
			 <td><input type='checkbox' name='checkbox' $che ></td>
			 </tr>";

			}

			$html.="
			</tbody>
			</table>";

			return $html;


			}

} 



?>