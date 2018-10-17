
<script type="text/javascript">
$(document).ready(function()
{
	new multiple_file_uploader
	({
		form_id: "fileUpload", 
		autoSubmit: true,
		server_url: "uploader.php"
	});
});
</script>

<div class="upload_box">
<h2>File Upload</h2>
<form name="fileUpload" id="fileUpload" action="javascript:void(0);" enctype="multipart/form-data">
<div class="file_browser"><input type="file" name="multiple_files[]" id="_multiple_files" class="hide_broswe" multiple /></div>
<div class="file_upload"><input type="submit" value="Upload" class="upload_button" /> </div>
</form>
</div>	
<div class="file_boxes">
<span id="removed_files"></span>
</div>
