//-------------------------------cek nama-------------------------------
$(document).ready(function() { 
	$('#nama').live('change', function(){ 
	var nama=$("#nama").val();
	var dataString= 'nama=' + nama;
		$(".nama").html('');
		$(".nama").html('<img src="loader1.gif">').fadeIn('slow');
		  $.ajax({
		  type: "POST",
		  url: "validasi.php",
		  data: dataString,
		  cache: false,
		  success: function(html)
		  {	
		  $(".nama").html('');
		  $(".nama").append(html);		  
		  }
		  });

	});
});
//-------------------------------cek email-------------------------------
$(document).ready(function() { 
	$('#email').live('change', function(){ 
	var email=$("#email").val();
	var dataString= 'email=' + email;
		$(".email").html('');
		$(".email").html('<img src="loader1.gif">').fadeIn('slow');
		  $.ajax({
		  type: "POST",
		  url: "validasi.php",
		  data: dataString,
		  cache: false,
		  success: function(html)
		  {	
		  $(".email").html('');
		  $(".email").append(html);		  
		  }
		  });

	});
});
//-------------------------------cek website-------------------------------
$(document).ready(function() { 
	$('#website').live('change', function(){ 
	var website=$("#website").val();
	var dataString= 'website=' + website;
		$(".website").html('');
		$(".website").html('<img src="loader1.gif">').fadeIn('slow');
		  $.ajax({
		  type: "POST",
		  url: "validasi.php",
		  data: dataString,
		  cache: false,
		  success: function(html)
		  {	
		  $(".website").html('');
		  $(".website").append(html);		  
		  }
		  });

	});
});
//-------------------------------cek gender-------------------------------
$(document).ready(function() { 
	$('#gender').live('change', function(){ 
	var gender=$("#gender").val();
	var dataString= 'gender=' + gender;
		$(".gender").html('');
		$(".gender").html('<img src="loader1.gif">').fadeIn('slow');
		  $.ajax({
		  type: "POST",
		  url: "validasi.php",
		  data: dataString,
		  cache: false,
		  success: function(html)
		  {	
		  $(".gender").html('');
		  $(".gender").append(html);		  
		  }
		  });

	});
});

//-----------------------------upload komentar------------------

$(".kirim").live('click',function() 
{
	var nama=$("#nama").val();
	var email=$("#email").val();
	var website=$("#website").val();
	var komentar=$("#komentar").val();
	var gender=$("#gender").val();
	var dataString='nama='+nama+'&email='+email+'&website='+website+'&komentar='+komentar+'&gender='+gender;
	if(nama==''||email==''||website==''||komentar==''||gender=='')
	{
	  alert("Ada data yang belum diisi. Cek kembali!");
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
			$("#nama").val('');
			$("#email").val('');
			$("#website").val('');
			$("#komentar").val('');
			$("#komentar").focus();
			$("#gender").val('');
			alert("Komentar ditambahkan");
			window.location=''
		
			}
		})
	}
return false;
});
