<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST["username"];
	$usersurname = $_POST["usersurname"];
   $userpassword = $_POST["userpassword"];
   $useremail = $_POST["useremail"];
	$userphone = $_POST["userphone"];
   $usernewsletter = isset($_POST["usernewsletter"]) ? "Так" : "Ні";
	$useroptionsobtaining = isset ($_POST["useroptionsobtaining"]) ? "Так" : "Ні";

   echo "User name: " . htmlspecialchars($username) . "<br>";
	echo "Surname: " . htmlspecialchars($usersurname) . "<br>";
   echo "Password: " . htmlspecialchars($userpassword) . "<br>";
	echo "Email: " . htmlspecialchars($useremail) . "<br>";
   echo "Telephone: " . htmlspecialchars($userphone) . "<br>";
   echo "Subscribe to the newsletter: " . $newsletter "<br>";
	echo "Options for obtaining newsletter: " . $useroptionsobtaining;
}
?>