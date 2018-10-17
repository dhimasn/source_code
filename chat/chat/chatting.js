//membuat document jquery
$(document).ready(function(){
	//variable yg dibaca dengan ajax untuk di kirim
	$("#message-submit").click(function(){
		var clientmsg = $("#message-input").val();
		$.post("post-message.php", {text: clientmsg});
		$("#message-input").attr("value", "");
		return false;
	});
	//load ajax message
	function loadLog(){
		var oldscrolHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax({
			url : "message-line.php",
			cache : false,
			success : function(html){
				$("#chatbox").html(html); //load ke <div chatbox>
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({scrollTop: newscrollHeight}, 'normal'); //scrol otomatisnya
				}
			},
		});
	}
	function loadlog(){
		var oldscrolHeight = $("#online").attr("scrollHeight") - 20;
		$.ajax({
			url : "user-online.php",
			cache : false,
			success : function(html){
				$("#online").html(html); //load ke <div chatbox>
				var newscrollHeight = $("#online").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#online").animate({scrollTop: newscrollHeight}, 'normal'); //scrol otomatisnya
				}
			},
		});
	}
	
	setInterval (loadLog, 1000);
	setInterval (loadlog, 1000);
});