<html>
<head>
<title>Subir Foto</title>
</head>
<body>

<a href='<?php echo base_url()."index.php/Main/inicio"; ?>' id ="regreso">Regresar</a>

<?php echo form_open_multipart('upload/do_upload/'. $name);?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
<?php echo form_close(); ?>
</body>
</html>
