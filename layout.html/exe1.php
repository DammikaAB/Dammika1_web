<?php 
$title = "Exaercise: HAMK oy";
include "header.php" ?>
    <h3>3.1 Write a simple PHP script to print your information (Name and your groupid).</h3>
<?php
echo "Dammika A Bandara <br>";
echo "BBCAP_Team16";
?>
<br><br>
<h3>3.2 Write PHP code to display the following message.</h3>
<?php
echo "Hellow world ! My name is \"Dammika\"";
?>
<br><br>
<h3>3.3 Write the PHP code in to display the current date.</h3>
<?php echo date("d.m.Y") ?>
<br><br>
<h3>3.4 PHP is interesting”. </h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>
<br><br>
<h3>3.5 Table and Variables</h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table>
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>
<tr>
<td> 1 </th><th> Pekka </th><th> $g1 </td>
</tr>
<td> 2 </th><th> Johanna </th><th> $g2 </td>
</tr>
<td> 3 </th><th> John </th><th> $g3 </td>
</tr>
</table>
";

?>
<br><br>
<h3>4 Screenshot of the development environment</h3>
<img src="Docker.png" alt="">
<?php include "footer.php" ?>