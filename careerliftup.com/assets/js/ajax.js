
$(function(){
	
	
	$("#home").click(function(){
		
		$.ajax({
					url : "index.html",
					type: "POST",
					success : function(response)
					{
						$("#mydata").html(response);
					}
			  });
			  
	}); //home event end
	
	
	$("#profile").click(function(){
		$.ajax({
					url : "profile.txt",
					type: "POST",
					success : function(response)
					{
			var details = JSON.parse(response);
			var out = "<div class='panel panel-primary'>";
			    out=out+"<div class='panel-heading'> My Profile </div>";
				out=out+"<div class='panel-body'>";
			
			out = out + "<p> Full Name :" + details[0].name   + "</p>";
			out = out + "<p> Mobile No :" + details[0].mobile + "</p>";
			out = out + "<p> Gender    :" + details[0].gender + "</p>";
			out = out + "<p> Age       :" + details[0].age    + "</p>";
			
			out=out+"</div></div>";
			
			$("#mydata").html(out);	
					}
			  });
			
	}); //profile event end
	
	$("#contact").click(function(){
		$.ajax({
					url : "contact.txt",
					type: "POST",
					success : function(response)
					{
					var parser = new DOMParser();
					var xmlDoc = parser.parseFromString(response,"text/xml");
					var total = xmlDoc.getElementsByTagName("user").length;
					
				var out = "<table class='table table-bordered'>";
				out=out+"<tr> <th>Full Name</th> <th>Mobile</th> <th>City</th> <th>Age</th></tr>";
				
				for(var i=0; i<total; i++)
				{
var n = xmlDoc.getElementsByTagName("name")[i].childNodes[0].nodeValue;
var m = xmlDoc.getElementsByTagName("mobile")[i].childNodes[0].nodeValue;
var c = xmlDoc.getElementsByTagName("city")[i].childNodes[0].nodeValue;
var a = xmlDoc.getElementsByTagName("age")[i].childNodes[0].nodeValue;
				out=out+"<tr>";
				out = out + "<td> " + n   + "</td>";
				out = out + "<td> " + m + "</td>";
				out = out + "<td> " + c + "</td>";
				out = out + "<td> " + a    + "</td>";
				out=out+"</tr>";
			    }
				out=out+"</table>";
				$("#mydata").html(out);	
					}
			  });
	}); //contact event end
	
	$("#friends").click(function(){
		$.ajax({
					url : "friends.html",
					type: "POST",
					success : function(response)
					{
						$("#mydata").html(response);
					}
			  });
	}); //friends event end
	
	$("#photo").click(function(){
		$.ajax({
					url : "photo.html",
					type: "POST",
					success : function(response)
					{
						$("#mydata").html(response);
					}
			  });
	}); //photo event end
	
	$("#userlist").click(function(){
		$.ajax({
					url : "userlist.html",
					type: "POST",
					success : function(response)
					{
						$("#mydata").html(response);
					}
			  });
	}); //userlist event end
	
	
	$("#modaltest").click(function(){
		
		$("#mymodal").modal('show'); // using jquery enable the modal
		
		$("#modaldata").html("<i class='glyphicon glyphicon-refresh'></i><h3>  Please Wait Loading....</h3>");
		
		
		$.ajax({
					url : "userlist.php",
					type: "POST",
					success : function(response)
					{
						var user = JSON.parse(response);
						alert(user.length);
						
			var mydata ="<table class='table table-bordered'>";
				
				for( var i=0; i<user.length; i++)
				{
					mydata = mydata + "<tr>";
					mydata = mydata + "<td>" + user[i].name + "</td>";
					mydata = mydata + "<td>" + user[i].mobile + "</td>";
					mydata = mydata + "</tr>";
				}	
				mydata = mydata +"</table>";		
				$("#modaldata").html(mydata);
					}
			  });
	});
	
}); // end of jquery







