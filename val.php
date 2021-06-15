
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="company";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
  die("Connection Error:".mysqli_connect_error());

else{
$a = $_POST['CompanyName'];   
$b = $_POST['HRName'];
$c = $_POST['tele'];
$d = $_POST['faxno'];
$e = $_POST['email'];
$sql="INSERT INTO Recruiters (Company_Name,HR_Name,Telephone_no,Fax_No,Email_Id) values ('$a','$b','$c','$d','$e')";
$result=mysqli_query($conn,$sql);
if($result)
{
  echo "<center><h1>Inserted successfully</h1></center>";
}
else
{
   echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);

?>
