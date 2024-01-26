<?php
 $JournalName = filter_input(INPUT_POST, 'JourName');
 $PublisherName = filter_input(INPUT_POST, 'PublName');
 $Dept = filter_input(INPUT_POST, 'DeptName');
 $Mode = filter_input(INPUT_POST, 'online');
 if (!empty($JournalName)){
if (!empty($PublisherName)){
if (!empty($Dept)){
if (!empty($Mode)){
$host = "localhost";
$dbusername = "id9524330_admin";
$dbpassword = "pass123";
$dbname = "id9524330_journals";
// Create connection
$conn = new mysqli ($host, $dbusername , $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO Journals (JournalName, PublisherName, Dept, Mode1)
values ('$JournalName','$PublisherName','$Dept','$Mode')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>