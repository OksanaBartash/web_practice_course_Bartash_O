<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST["username"];
	$usersurname = $_POST["usersurname"];
   $userpassword = $_POST["userpassword"];
   $useremail = $_POST["useremail"];
	$userphone = $_POST["userphone"];
   $usernewsletter = isset($_POST["usernewsletter"]) ? "Так" : "Ні";
	$useroptionsobtaining_1 = isset ($_POST["useroptionsobtaining_1"]) ? "Так" : "Ні";
   $useroptionsobtaining_2 = isset ($_POST["useroptionsobtaining_2"]) ? "Так" : "Ні";
   $useroptionsobtaining_3 = isset ($_POST["useroptionsobtaining_3"]) ? "Так" : "Ні";

   echo "User name: " . htmlspecialchars($username). "<br>";
	echo "Surname: " . htmlspecialchars($usersurname). "<br>";
   echo "Password: " . htmlspecialchars($userpassword). "<br>";
	echo "Email: " . htmlspecialchars($useremail). "<br>";
   echo "Telephone: " . htmlspecialchars($userphone). "<br>";
   echo "Subscribe to the newsletter: " . $usernewsletter. "<br>";
	echo "Options for obtaining newsletter from email: " . $useroptionsobtaining_1. "<br>";
	echo "Options for obtaining newsletter from magazines: " . $useroptionsobtaining_2. "<br>";
   echo "Options for obtaining newsletter from phone: " . $useroptionsobtaining_3. "<br>";
}

?>