<html>
<head>
<title>hello world</title>
</head>
<body>
 <?php
 $cricket=array("Virat","Dhoni","sachin","sehwag");
 echo"<br>displaying names in table format<br/>";
 echo"<br>=====================================<br/>";
 echo"<br>Names of cricket players as stored in an array:<br/>";
 print_r($cricket);
 echo"<br><br>Names of cricket players as stored in a table:<br/>";
 echo"<br><table border=2><tr><th>Player Names</th></tr><br/>";
 echo"<tr><td>$cricket[0]</td></tr>"; 
 echo"<tr><td>$cricket[1]</td></tr>"; 
 echo"<tr><td>$cricket[2]</td></tr>"; 
 echo"<tr><td>$cricket[3]</td></tr>"; 
 echo"</table>";
 ?>
 </body>
 </html> 