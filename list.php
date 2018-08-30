 <!-- list.php -->  
 <?php  
 print("<center>");  
 if(! file_exists("books")){ 
 print("<h2><<font color=red>Database does not exist.</forn></h2>");  
 }  
 else {  
 $db = sqlite_open("books.db");  
 $a = sqlite_query($db, "SELECT name FROM sqlite_master WHERE type='table' AND name='booktable'");  
 $b=sqlite_num_rows($a);  
 if ( $b == 0) {  
 print("<h2><font color=red>The booktable is empty. </font></h2>");  
 }  
 else {  
 print("<h2><font color=Blue>List of panel members</font></h2>  
 <table border>  
 <tr><b><Th>Id<Th>Author</Th><Th>Title</Th><Th>Publisher</th><Th>Year</Th><Th>Pages</Th><Th >Category</Th><Th>Date read  
 ></Th><Th>Evaluation</Th><Th>Location</Th></b></tr>");  
 $r=sqlite_query($db, "SELECT * FROM booktable ORDER BY Id ASC");  
 while ($row = sqlite_fetch_array($r)) {  
 print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><t d>$row[5]</td><td> $row[6] </td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td>");  
 }  
 print("</table>");  
 }  
 }  
 print("<p></p>");  
 print("<a href=index.htm>Return</a> to menu.");  
 print('</center>');  
 ?>  