<?php
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //echo "Имя: $name, Фамилия: $lastname, Email: $email, Pass: $pass";
    $mysqli = new mysqli("localhost", "root", "", "php1901");
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
    if($result->num_rows){
        echo "Такой пользователь уже существует <a href='/reg.php'>зарегистрировать другого</a>";
    }else{
        $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name','$lastname','$email','$pass')");
        echo "Пользователь зарегистрирован!";
        header("Location: /login.html"); // Редирект (перенаправление пользователя)
    }
