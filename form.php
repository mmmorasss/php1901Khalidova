<?php
$value = $_GET['value'];
$operator = $_GET['operator'];
$result = 0;
if($operator == "k"){
    $result = ($value*1024)."КБ";
}else{
    $result = ($value/1024)."МБ";
}
?>
<!doctype html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
  </head>
  <body>
    <div>
        <form action="02.02.2023.php">
            <input type="text" placeholder="a" name="a">
            <input type="text" placeholder="b" name="b">
            <input type="text" placeholder="h" name="h">
            <input type="submit">
        </form>
    </div>
    <div>
        <h4>Перевод из МБ в КБ и из КБ в МБ</h4>
        <form action="form.php">
            <input type="text" placeholder="Введите число" name="value">
            <select name="operator">
                <option value="k">МБ в КБ</option>
                <option value="m">КБ в МБ</option>
            </select>
            <input type="submit" value="посчитать">
        </form>
        <p>Результат: <?php echo $result; ?></p>
    </div>
  </body>
</html>