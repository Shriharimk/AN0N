<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database_name="network";
	//database connection
	$conn = new mysqli('localhost','root','','network');
	if(isset($_POST['login'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$query="SELECT * FROM `login` WHERE username='".$user."'and pass='".$pass."'";
		$result=mysqli_query($conn, $query);
		echo "<table>";
		while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
		echo "<tr><td>" . $row['username'] . "</td><td>" . $row['password'] . "</td></tr>";  //$row['index'] the index here is a field name
		
}
echo "</table>";
		if($result){
			//while($row=mysqli_fetch_array($result)){
				header('Location: home_page.html');  
			//}
			  
			}
		else{
			echo "NO RESULT";
		}
		}
	
		$conn->close();
	//}
?>