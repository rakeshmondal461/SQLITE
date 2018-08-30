<!-- update1.php -->  
 <?php 
 print("<center>");  
 if(! file_exists("books")){ 
 print("<h2><font color=red>Database does not exist.</forn></h2>");  
 exit();  
 }  
 $db=sqlite_open('books'); 
 $a = sqlite_query($db, "SELECT name FROM sqlite_master WHERE type='table' AND name='booktable'");  
 $b=sqlite_num_rows($a);  
 if ( $b == 0) {  
 print("<h2><font color=red>The database is empty. </font></h2>");  
 }  
 else {  
 $id=$_POST['id'];  
 $r=sqlite_query($db,"SELECT * FROM booktable WHERE id='$id'");  
 while($row=sqlite_fetch_array($r)) {  
 $author=$row[1];  
 $title=$row[2];  
 $publisher=$row[3]; 
 $year=$row[4];  
 $pages=$row[5];  
 $category=$row[6]; 
 $dateread=$row[7];  
 $evaluation=$row[8];  
 $location=$row[9];  
 }  
 print("<h2><font color=blue> </font></h2>");  
 print("<h2><font color=blue><p>Correct the required attributes.</font></h2></p>");  
 print("<form action=update2.php method=post>  
 <table>  
 <tr><td>Row Id: </td><td><input name=id type=text value=$id></td></tr>  
 <tr><td>Name(s) of author(s) : </td><td><input name=author type=text value=$author></td></tr>  
 <tr><td>Title of book : </td><td><input name=title type=text value=$title></td></tr>
 <tr><td>Publisher: </td><td><input name=publisher type=text value=$publisher></td></tr>  
 <tr><td>Year of publication : </td><td><input name=year type=text value=$year></td></tr>  
 <tr><td>Number of pages: </td><td><input name=pages type=text value=pages></td></tr>  
 <tr><td>Category: </td><td><input name=category type=text value=$category></td></tr>  
 <tr><td>Date read : </td><td><input name=dateread type=text value=$dateread></td></tr>  
 <tr><td>Evaluation: </td><td><input name=evaluation type=text value=$evaluation></td></tr>  
 <tr><td>Book location : </td><td><input name=location type=text value=$location></td></tr>  
 <tr><td>Submit data:</td><td><input type=submit value=Submit></td></tr>  
 </table></form><p></p>");  
 }  
 print("<a href=index.htm>Return</a> to menu.");  
 print("</font></center>");  
 ?> 