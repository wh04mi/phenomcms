	<?php 
	include("./files/admin/jscripts/fckeditor/fckeditor.php") ;
	$sBasePath = config_item('base_path')."files/admin/jscripts/fckeditor/";
	$oFCKeditor = new FCKeditor('FCKeditor1') ;
	$oFCKeditor->BasePath	= $sBasePath ;
	$oFCKeditor->Value		= $multiple_record_content ;
	$oFCKeditor->Create() ;
	?>

	<script language="javascript">
	function Checkfiles()
	{
	var fup = document.getElementById('filename');
	var fileName = fup.value;
	var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
	if(ext == "png" || ext == "PNG" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG")
	{
	return true;
	} 
	else
	{
	fup.value="";
	alert("Hanya file JPG atau PNG yang diperbolehkan!");
	return false;
	}
	}
	</script>
	<br />
	<br />
	<a id="image"></a>
	<?php if (trim($mrc_image)!='') { ?>
	<img src="{mrc_thumbnail}"> <br />
	<a href="<?php echo config_item('base_url') ?>/cpm/menu_delete_image/{multiple record mrc_id}" onClick="return confirm('Apakah Anda yakin akan menghapus image ini?')">
	Hapus Image
	</a>
	<br />
	<br />
	<?php } ?>
	Update Image:
	<input name="mrc_thumbnail" type="file" id="filename" onchange="return Checkfiles()"> (jpg/png)
	<input type="hidden" name="mrc_current_thumbnail" value="{multiple_record_mrc_thumbnail}">
