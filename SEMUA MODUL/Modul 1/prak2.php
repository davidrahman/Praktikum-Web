<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <html xmlns="http://www.w3.org/1999/xhtml1" xml:lang="en"lang="en">
<head>
<title>Tugas Praktikum 2</title>
</head>
<body>
<form method="POST" action="hasil.php">
<h3 align="left" class="style1">Generate Tabel Secara Fleksibel</h3>
<table width="327" align="center" border="0" bgcolor="#FFFFFF">
<B>Column :
<input name="kolom" type="text" id="kolom" onKeyUp="getmax();" onfocus="this.select();">
<B>Max Cell :
<input name="cell" type="text" id="cell" onKeyUp="getmax();" onfocus="this.select();">
<br />
<input type="submit" name="Generate" value="Generate">
<input type="reset" name="Reset" value="Clear Generate">
</div>
</form>

</body>
</html>