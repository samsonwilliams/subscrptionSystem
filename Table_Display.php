<?php
$host ="localhost";
$dbusername = "id9524330_admin";
$dbpassword = "pass123";
$dbname = "id9524330_journals";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
// Check connection
if (mysqli_connect_error())
    {
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    } 
else
    {
      
        $sql = "SELECT JournalName, PublisherName, Dept, Mode1 FROM Journals ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["JournalName"]. "</td><td>" . $row["PublisherName"]. " </td><td>" . $row["Dept"]. "</td><td>" . $row["Mode1"]. " </td></tr>";
    }
    echo "</table>";
	} else {
	    echo "0 results";
	}
    }
$conn->close();

?> 