<?php
$files = scandir('../../php/');
foreach ($files as $file) {
    echo $file."<br>";
}
$content = file_get_contents('../../php/handlerLogin.php');
echo $content;