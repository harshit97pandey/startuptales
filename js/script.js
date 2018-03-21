$(document).ready(function(){
$("#submit").click(function(){
var title = $("#title").val();
var url = $("#image").val();
var category = $("#category").val();
var content =  tinymce.get("editor").getContent();

var d = new Date();
var cdate = d.toDateString();
alert(cdate);
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'title='+ title + '&url='+ url + '&category='+ category + '&content='+ content + '&cdate='+ cdate;
if(title==''||url==''||category==''||content=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "submit.php",
data: dataString,
//cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});



