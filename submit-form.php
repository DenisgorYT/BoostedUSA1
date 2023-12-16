<?php
$servername = "127.0.0.1";
$username = "root";
$password = "admin";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["user_name"];
    $userEmail = $_POST["user_email"];
    $userPassword = $_POST["user_password"];

    $sql = "INSERT INTO test (name, email, password) VALUES ('$userName', '$userEmail', '$userPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "Данные успешно сохранены";
        header("Location: https://denisgoryt.github.io/BoostedUSA1/reg.html");
        exit(); // Ensure no further code execution after redirection
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
