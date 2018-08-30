<!-- update2.php -->  
 <?php  
 $db=sqlite_open('books'); 
 sqlite_query($db,"UPDATE booktable  
 SET  
 id='$_POST[id]',  
 author='$_POST[author]',  
 title='$_POST[title]',  
 publisher='$_POST[publisher]',  
 year='$_POST[year]',  
 pages='$_POST[pages]',  
 category='$_POST[category]',  
 dateread='$_POST[dateread]',  
 evaluation='$_POST[evaluation]',  
 location='$_POST[location]'  
 WHERE id='$_POST[id]' ");  
 print("<center><font color=blue>");  
 print("<center>");  
 print("<font color=blue>");  
 print ("<h3> Data for book with Id $_POST[id] has been updated.</h3>");  
 print("<a href=index.htm>Return</a> to menu.");  
 print("</font></center>");  
 ?>  