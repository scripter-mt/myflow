
<?php
echo "manish is my name";
$name = array('manish','ram','sudhir' );
$length= count($name);
for($x=0;$x<$length;$x++)
{
  echo($name[$x]);
  echo "<br/>";

}
  echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
?>
