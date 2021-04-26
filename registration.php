<?php





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apprenticemn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// public function query($sql){
    // return $result;
// }
$sql = "SELECT * FROM `users`";

for($x=0; $x<100; $x++) {
  $sql = "INSERT INTO 'users' 
    ('email', 'password', 'name', 'username')
VALUES 
    ('i+$x@apprentice.mn', 'asdfasdf+$x', 'Apprentice MGL+$x', 'apprenticemn+$x');";
  die($sql);   
  $hariu = $conn->query($sql);
}

if ($hariu->num_rows > 0) {
  while($egnee = $hariu->fetch_assoc()) {
    print_r($egnee);
    echo "<hr>";
  }
} else {
  echo "0 results";
}

$conn->close();

// if(1 === '1') {

// }

function calculate($too1, $too2, $uildel = '+') {
    $too1;
    $too2;
    $uildel;

    return;
}


// $aar = ['ApprenticeMGL','asdf','asfdkljasfd@asdfasdf.com','asdfasdf','asdfasf'];
// print_r($aar);
// foreach($aar as $ar) {
//     echo $ar;
// }

if(isset($_POST['email'])) {
    print_r($_POST);
    /*
    INSERT INTO `users` 
           (`username`, `email`,          `password`, `name`) 
    VALUES ('apprenticemgl', 'i@apprentice.mn', 'asdfasdfafsdfas', 'Apprentice MGL');
    */
    // $hariu = calculate($oo1, $oo2, $uildel);
    /*
    UPDATE `users` SET `email` = 'apprenticemgl@gmail.com' WHERE id = 1;
    */

    /*
    DELETE FROM `users` WHERE `email` = 'i+1212@apprentice.mn';
    */

    /*
    SELECT * FROM `users`;

    SELECT * FROM `users` where username = 'username2' AND id = 1
    */
}
?>