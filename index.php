<!-- 
Solution for co-op coding challenge for Full Stack Software Developer Co-op position (42489)
Ghazal Mirsayyah
-------------------------------------------
In this file:
1. Connecting to the database (wouldn't work because the information are made up, only for demonstration purposes)
2. Retrieving information from the form
3. Inserting the information to the database (wouldn't work because the information are made up, only for demonstration purposes)
4. Displaying success/failiure page
-->

<?php
# -----------------------------------------
# Connecting to the database (imaginery information)
$hostname = "host";
$username = "username";
$password = "password";
$database = "DataBase";
# creating a connection to the database
$connect = mysqli_connect($servername, $username, $password, $database);

# Checking the connection
if($connect){
  print("Connection Established Successfully");
}
else {
print("Connection Failed ");}

# -----------------------------------------
# Taking values from the form and storing it in an associative array
$information["First Name"] = $_POST['firstName'];
$information["Last Name"] = $_POST['lastName'];
$information["Email"] = $_POST['email'];
$information["Password"] = $_POST['password'];
$information["Phone Number"] = $_POST['phoneNumber'];
$information["Address"] = $_POST['address'];
$information["City"] = $_POST['city'];
$information["Country"] = $_POST['country'];
$information["Province"] = $_POST['province'];

# -----------------------------------------
# Inserting to the database
# Doesn't work because the database is imaginery. 

$sql = sprintf(
  'INSERT INTO DataBase (%s) VALUES ("%s")',
  implode(',',array_keys($information)),
  implode('","',array_values($information))
);

if (mysqli_query($connect, $sql)) {

  echo "<h2>Form Submitted Successfully!</h2> <h4>Your information:</h4>";
  foreach ($information as $key => $value){
    echo "<span><b>$key</b>: $value</span><br>";
  }

} else {
  echo "<h2>Error: " . $sql . "</h2>" . mysqli_error($connect);
}

mysqli_close($connect);

?>