<?php
$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
$password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

$conn = new mysqli('localhost', 'root', '', 'sacle');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(empty($username)){
$sql = "SELECT username FROM felhasznalo WHERE email = ? AND username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $username);
$stmt->execute();
$stmt->store_result();
$row_count = $stmt->num_rows;

if ($row_count > 0) {
    header("Location:http://localhost/New%20folder/Sacle/KezdoOldal/");

}
else {
        header("Location:http://localhost/New%20folder/Sacle/RegisztracioLogin/regisztlogin.html");
    }
}
else{
$email_check_sql = "SELECT * FROM felhasznalo WHERE email = ?";
$stmt_check = $conn->prepare($email_check_sql);
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$result = $stmt_check->get_result();
if ($result->num_rows > 0) {
    $stmt_check->close();
    $conn->close();
    header("Location:http://localhost/New%20folder/Sacle/RegisztracioLogin/regisztlogin.html");
    exit;
}

$sql = "INSERT INTO felhasznalo (username, email, password, felhasznaloTipusId) VALUES ('$username', '$email','$password', 1)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $password);
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();


$userData = array(
    'username' => $username,
    'email' => $email,
    'password' => $password
);

$userDataJSON = json_encode($userData);

setcookie("userdata", $userDataJSON, time() + (86400 * 30), "/");

$url = 'https://{WEAVY-SERVER}/api/users';

$data = array(
    'uid' => $username,
    'name' => $username,
    'email' => $email,
);

$jsonData = json_encode($data);

$headers = array(
    'Authorization: Bearer wys_eGv5pGNTVY2r16sbBphKTF3xlVfFM243O03K',
    'Content-Type: application/json',
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

curl_exec($ch);

curl_close($ch);
}
header("Location:http://localhost/New%20folder/Sacle/KezdoOldal/");
?>