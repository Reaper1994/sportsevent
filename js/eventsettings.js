function addevent() {
		// body...
    var x = document.getElementById("add_event");
    var cat=document.getElementById("event");
		cat.value="";
		  if (x.style.display == "none") {
        x.style.display = "block";
        cat.value="";
    } else {
        x.style.display = "none";
        cat.value="";
    }
}


function editevent()
{
        var edit= document.getElementById("edit_event");
		var cat_val=document.getElementById("event_val");
   
	 if (edit.style.display == "none") {
        edit.style.display = "block";
        
    } else {
        edit.style.display = "none";
       
    }



}


function getCombo(selectObj,val) {
    var value = selectObj.value; 
    if(window.XMLHttpRequest){	 
	     req_2 = new XMLHttpRequest(); 
	   } else if(window.ActiveXObject) { 

	     req_2 = new ActiveXObject("Microsoft.XMLHTTP"); 
	  } 

	   http2=req_2;
	   http2.open('post','Ajax/listevent.php?action=changecategory&value='+this.value);
	   http2.onreadystatechange = handleResponse_2; 
	   http2.send(null);  
}

function validateForm_event()
{

	var property=x;
	var x = document.forms["event_form"]["event"];
    if (x.value == "" &&  property== "block") {
        alert("event selection mandatory");
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
	   http2.open('post','Ajax/listevent.php');
	   http2.onreadystatechange = handleResponse_2; 
	   http2.send(null); 

}





function edit(e)
{

	    


	var editevent = document.getElementById("edit_event_form");


	

    if(window.XMLHttpRequest){	 
	     req_2 = new XMLHttpRequest(); 
	   } else if(window.ActiveXObject) { 

	     req_2 = new ActiveXObject("Microsoft.XMLHTTP"); 
	  } 

	   http2=req_2;
	   http2.open('post','Ajax/editeventform.php?action=edit&eventid='+e);
	   http2.onreadystatechange = handleResponse_4; 
	   http2.send(null);

}

function handleResponse_4() {
	if(http2.readyState == 4 && http2.status == 200){
		var response2 = http2.responseText;
		if(response2) {	  
		

			document.getElementById("edit_event_form").innerHTML = response2;
			
		}
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
	   http2.open('post','Ajax/listevent.php?action=event_delete&value='+e);
	   http2.onreadystatechange = handleResponse_2; 
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



