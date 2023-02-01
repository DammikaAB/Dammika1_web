<?php 
echo $title = "PHP is interesting”

include "header.php"?>

<body>
    <h1>3.1 Write a simple PHP script to print your information (Name and your groupid). </h1>
    
<?php
echo "Dammika A Bandara";
echo "BBCAP22";
?>
    <h1>3.2 Write PHP code to display the following message. </h1>
<?php
echo "Hello world! My name is \"Dammika A BAndara\"";
?><h3>3.3 Write the PHP code in to display the current date.</h3>
<?php echo date("d.m.Y") ?>
<h3>3.4 PHP is interesting”. </h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>
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
<h3>4 Screenshot of the development environment</h3>
<img src="image1.jpg" alt="">
<?php include "footer.php" ?>