function addcategory() {
		// body...
    var x = document.getElementById("add_category");
    var cat=document.getElementById("category");
		cat.value="";
		  if (x.style.display == "none") {
        x.style.display = "block";
        cat.value="";
    } else {
        x.style.display = "none";
        cat.value="";
    }
}


function editcategory()
{
        var edit= document.getElementById("edit_category");
		var cat_val=document.getElementById("category_val");
   
	 if (edit.style.display == "none") {
        edit.style.display = "block";
        
    } else {
        edit.style.display = "none";
       
    }



}


function validateForm_Category()
{

	var property=x;
	var x = document.forms["category_form"]["category"];
    if (x.value == "" &&  property== "block") {
        alert("Category selection mandatory");
        x.focus();
        return false;
    }


	
}

function view(){
	if(window.XMLHttpRequest){	 
	     req_2 = new XMLHttpRequest(); 
	   } else if(window.ActiveXObject) { 

	     req_2 = new ActiveXObject("Microsoft.XMLHTTP"); 
	  } 

	   http2=req_2;
	   http2.open('post','Ajax/list.php');
	   http2.onreadystatechange = handleResponse_2; 
	   http2.send(null); 

}



function edit(e,v)
{
	

	    document.getElementById("category_id").value=e;
  

   document.getElementById("category_val").value=v;

	var editcat = document.getElementById("edit_category");


		  if (editcat.style.display == "none") {
        editcat.style.display = "block";
      
    } else {
        editcat.style.display = "none";
       
    }



}

function del(e)
{



  	if(window.XMLHttpRequest){	 
	     req_2 = new XMLHttpRequest(); 
	   } else if(window.ActiveXObject) { 

	     req_2 = new ActiveXObject("Microsoft.XMLHTTP"); 
	  } 

	   http2=req_2;
	   http2.open('post','Ajax/list.php?action=delete&value='+e);
	   http2.onreadystatechange = handleResponse_3; 
	   http2.send(null); 





}


function handleResponse_2() {
	if(http2.readyState == 4 && http2.status == 200){
		var response2 = http2.responseText;
		if(response2) {	  
		

			document.getElementById("listTable").innerHTML = response2;
			
		}
	}
}

function handleResponse_3() {
	if(http2.readyState == 4 && http2.status == 200){
		var response2 = http2.responseText;
		if(response2) {	  
		

			document.getElementById("listTable").innerHTML = response2;
			
		}
	}
}
