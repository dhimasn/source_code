 $(document).ready(function() { 
	$('#bgrn').live('change', function(){ 
		$("#displayBg").html('');
		$("#displayBg").html('<img src="loader1.gif">');
	$("#fBg").ajaxForm({
				target: '#displayBg'
	}).submit();

	});
 });

$(document).ready(function(){
$("#kirimBg").click(function() 
{
var file = $("#file").val();
var dataString='file='+file;
if(file=='')
{
alert("File belum ada");
}
else
{
$.ajax({
type: "POST",
url: "insert.php",
data: dataString,
cache: false,
success: function(html)
{	
$("#bgrn").val('');
alert("Foto berhasil diunggah");

  }
 });
}
return false;
	});
});