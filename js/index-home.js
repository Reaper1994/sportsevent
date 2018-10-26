function render()
		{
			if(window.XMLHttpRequest){	 
	    	 req_2 = new XMLHttpRequest(); 
	 		  } else if(window.ActiveXObject) { 

	    	 	req_2 = new ActiveXObject("Microsoft.XMLHTTP"); 
	  			} 

  var search = document.getElementById('searchtext').value;
 
			   http2=req_2;
			   http2.open('post','Ajax/load.php?value='+search);
			   http2.onreadystatechange = handleResponse_2; 
			   http2.send(null); 
		}



function handleResponse_2() {
	if(http2.readyState == 4 && http2.status == 200){
		var response2 = http2.responseText;
		if(response2) {	  
		

			document.getElementById("list").innerHTML = response2;
			
		}
	}
}