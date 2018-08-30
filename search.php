 <!-- search.php -->  
 <?php  
 print("<center>");  
 if(! file_exists("books")){  
 print("<center><h2><<font color=red>Database does not exist.</forn></h2></center>"); 
 exit();  
 }  
 $db=sqlite_open("books");  
 $a = sqlite_query($db, "SELECT name FROM sqlite_master WHERE type='table' AND name='booktable'");  
 $b=sqlite_num_rows($a);  
 if ( $b == 0) {  
 print("<h2><font color=red>The database is empty. </font></h2>");  
 }  
 else {  
 print("<h3><font color=blue>List of requested rows.</font></h3>  
 <table border>  
 <tr><b><Th>Id<Th>Author<Th>Title<Th>Publisher<Th>Year<Th>Pages<Th>Category<Th>Date read<Th>Evaluation<Th>Location</b></tr>");  
 $r=sqlite_query($db,"SELECT * FROM booktable WHERE ((author='$_POST[author]') | (title='$_POST[title]') | (publisher ='$_POST[publisher]') | (year='$_POST[year]') | (pages='$_POST[pages]') | (category='$_POST[category]') | (dateread='$_POST[dateread]') | (evaluation='$_POST[evaluation]') | (location='$_POST[location]'))");  
 while ($row=sqlite_fetch_array($r)){  
 print("<tr><td> $row[0] <td> $row[1] <td> $row[2] <td> $row[3] <td> $row[4] <td> $row[5] <td> $row[6] <td> $row[7] <td> $row[8] <td> $row[9]");  
 }  
 }  
 print("</table>");  
 print("<p></p>");  
 print("<a href=index.htm>Return</a> to menu.");  
 print('</center>');  
 ?>  