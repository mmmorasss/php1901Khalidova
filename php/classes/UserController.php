<?php

class UserController{
    public static function reg(){
        global $mysqli;
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        //echo "Имя: $name, Фамилия: $lastname, Email: $email, Pass: $pass";
        $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
        if($result->num_rows){
            return json_encode(['result'=>'error']);
        //    echo "Такой пользователь уже существует <a href='/reg.php'>зарегистрировать другого</a>";
        }else{
            $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name','$lastname','$email','$pass')");
            return json_encode(['result'=>'success']);
            /*echo "Пользователь зарегистрирован!";
            header("Location: /login"); // Редирект (перенаправление пользователя)
       */ }
    }

    public static function login(){
        global $mysqli;
        $email = $_POST['email']; // admin@mail.ru
        $pass = $_POST['pass']; // 456
        //echo "$email $pass";
        $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND pass='$pass'");
        $row = $result->fetch_assoc(); // Получаем ответ от БД в виде ассоциативного массива
        if($result->num_rows){
            $_SESSION['name'] = $row['name'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['img'] = $row['img'];
            return json_encode(['result'=>'success']);
        }else{
            return json_encode(['result'=>'error']);
        }
    }

    public static function getAuthUserData(){
        $userData = [
            "name"=>$_SESSION['name'],
            "lastname"=>$_SESSION['lastname'],
            "email"=>$_SESSION['email'],
            "id"=>$_SESSION['id'],
            "img"=>$_SESSION['img']
        ];
        return json_encode($userData);
    }

    public static function getUserDataById($id){

    }

    public static function updateUserAvatar(){
        global $mysqli;
        $userId = $_SESSION['id']; // Получаем ID пользователя из сессии
        $userFile = $_FILES['userfile']; // Загруженный файл
        $arr = explode(".", $userFile['name']); // Дробим имя загруженного файла по точке, чтобы получить его расширение
        $extension = ( $arr[count($arr)-1] ); // Достаём расширение файла
        $goodExtensions = ["png", "jpg", "jpeg", "gif"]; // Список допустимых расширений файла
        foreach ($goodExtensions as $e){ // перебираем допустимые расширения
            if($e == $extension){ // Сравниваем расширение файла и допустимое расширение
                $dir = "/img/user_avatar/".$userFile['name'];
                $resultDir = "/img/user_avatar/".$userFile['name'];
                move_uploaded_file($userFile['tmp_name'], $dir);
                $mysqli->query("UPDATE `users` SET `img`='$resultDir' WHERE id='$userId'");
                $_SESSION['img'] = $resultDir;
                header("Location: /profile");
                exit();
            }
        }
        exit("Type file ERROR!");
    }
}