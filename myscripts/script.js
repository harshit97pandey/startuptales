function clicked(username,fname,lname,loc)
{
	  $('#searchbox').val(fname+' '+lname+' from '+loc);
	$('#display').empty(); 
	display_details(username,fname,lname,loc); 
}
 function display_details(username,fname,lname,loc)
{
		$.get( "get_profile_details.php",{username:username,fname:fname,lname:lname,loc:loc}, function( data ) {
			  $.each(data, function(key, val) {
				document.getElementById("name").innerHTML=val.fname+' '+val.lname;
				document.getElementById("loc").innerHTML=val.city;
				//document.getElementById("img").src=val.image_pic;
				//document.getElementById("skill").innerHTML=val.skills;
				document.getElementById("email").innerHTML=val.email;
				document.getElementById("qual").innerHTML=val.qualification;
				document.getElementById("cert").innerHTML=val.certification;

			  });
		});
}
 