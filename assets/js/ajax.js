function displaydata(data)
{
	document.getElementById("msg").innerHTML=data;
}

function myajax(pagename)
{
	 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                displaydata(this.responseText);
			}
        };
       xmlhttp.open("GET",pagename,true);
        xmlhttp.send();		
}