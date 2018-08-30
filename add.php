<!-- add.php -->  
 <?php  
 $db=sqlite_open("books.db");  
 $a = sqlite_query($db, "SELECT name FROM sqlite_master WHERE type='table' AND name='booktable'"); 
 $b=sqlite_num_rows($a);  
 if ( $b == 0) {  
 sqlite_query($db,"CREATE TABLE booktable(id INTEGER PRIMARY KEY, author TEXT, title TEXT, publisher TEXT, year TEXT, pages TEXT, category TEXT, dateread TEXT, evaluation TEXT, location TEXT)");  
 }  
 sqlite_query($db, "INSERT INTO booktable(author,title, publisher, year, pages, category, dateread, evaluation, location) VALUES('$_POST[author]','$_POST[title]','$_POST[publisher]','$_POST[year]','$_POST[pages]', '$_POST[category]','$_POST[dateread]','$_POST[evaluation]','$_POST[location]')");  
 print("<center><font color=blue>");  
 print ("<h3>The book record has been inserted . </h3>");  
 print("<p></p>");  
 print("<a href=index.htm>Return</a> to menu.");  
 print("</center>");  
 ?>  