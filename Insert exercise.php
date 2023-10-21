<!doctype html>
<html>
 <head>
 <h1>insert data into our table</h1>
 </head>
 <body>
 <center>
 <?php
 //call your database file into the current file 
 require "dbconnect.php";
 //pick data from the user
 $Book_name= $_REQUEST['Book_name']; 
 $Author= $_REQUEST['Author''] ; 
 $Borrowing= $_REQUEST['Borrowing'];
 $Course= $_REQUEST['Course'] ; 
 $RegistrationNo =$_REQUEST['RegitrationNo'];
 
 //insert data picked into the table
 $sql = "insert into staff values('$Book_name', '$Author', '$Borrowing', '$Course','RegistrationNo')"; 
 if($conn -> query($sql) === true) {
 echo " records inserted" ;
 }else {
 echo "error";
 }
 ?>
 </center>
 </body>
</html>
