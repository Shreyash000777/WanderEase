<?php session_start();
if(!isset($_SESSION["username"]))
{
    	header("Location:blocked.php");
   		$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}
?>

<?php
	
	$servername = "localhost:4306";
	$username = "root";
	$password = "";
	$dbname = "wanderease";
	
	// Creating a connection to wanderease MySQL database
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Checking if we've successfully connected to the database
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$user = $_SESSION["username"];
	$id = $_POST["bookingID"];


	$cancelBusBookingsSQL = "UPDATE `busbookings` SET cancelled='yes' WHERE bookingID='$id'";
	$cancelBusBookingsQuery = $conn->query($cancelBusBookingsSQL);

	/*-------------------------------------------------------------------------------
	
	
				Add SQL statements to delete train, bus, cabs booking too
	
	
	-------------------------------------------------------------------------------*/


?>