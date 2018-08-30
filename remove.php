 <!-- remove.php -->  
 <?php  
 $db=sqlite_open('books'); 
 $r=sqlite_query($db,"DROP TABLE booktable");  
 print("<center><h2><font color=red>Database content has been removed.</font></h2>");  
 print("<p></p><a href=index.htm>Return</a> to menu.</center>");  
 ?> 