 <!-- delete.php -->  
 <?php 
 $db=sqlite_open('books');  
 $r=sqlite_query($db,"DELETE FROM booktable WHERE id=='$_POST[id]'");  
 print("<center><h2><font color=red>Row $_POST[id] has been removed from database books.</font></h2>");  
 print("<p></p><a href=index.htm>Return</a> to menu.</center>");  
 ?>  