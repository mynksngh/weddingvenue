$(function() {
$("#login").click(function() {

var username = $("#email").val();
var password = $("#password").val();

var dataString = 'username=' + username + '&password=' + password;

if( username=='' || password=='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
$.ajax({
type: "POST",
url: "query.php?do=login",
data: dataString,
success: function(){
$('.success').fadeIn(200).show();
$('.error').fadeOut(200).hide();
}
});
}
return false;
});
});
