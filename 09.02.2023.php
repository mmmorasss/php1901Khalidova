<?php
    function hello(){
        echo "Hello world<br>";
    }
    hello();
    hello();
    hello();
    // Реализовать фнкцию принимающую два аргумента $a и $b, функция должна ВЕРНУТЬ наименьшее из двух чисел
    /*function myMin($a, $b){
        if($a>$b){
            return $b;
        }else{
            return $a;
        }
    }
    echo myMin(5,7);*/

    /*function sayHi($name){
        echo "Привет ".$name."<br>";
    }
    function f($x){
        return $x*$x+10;
    }
    sayHi("Иван");
    sayHi("Вася");*/
?>


<?php
    /*Имеется алфавит ["К","Л","М","Н"]
      Задача: вывести на экран все возможные сочетания 4х буквенных слов
      Пример:
       1) КККК
       2) КККЛ
       3) КККМ
       4) КККН
       5) ККЛК
       6) ККЛЛ
      Задача узнать на какой позиции находится слово КМНЛ
    */
    /*$findPosition = 0;
    $num = 1;
    $chars = ["К","Л","М","Н"];
    for ($i=0; $i<count($chars); $i++){
        for($j=0; $j<count($chars); $j++){
            for($k=0; $k<count($chars); $k++){
                for ($l=0; $l<count($chars); $l++){
                    $word = $chars[$i].$chars[$j].$chars[$k].$chars[$l];
                    if($word == "КМНЛ") $findPosition = $num;
                    echo ($num++).") ".$word."<br>";
                }
            }
        }
    }
    echo "Слово КМНЛ на позиции ".$findPosition;*/
?>

<?php
/*<table style="border: 1px solid black;">
    <?php
    for($i=2; $i<=10; $i++){
        echo "<tr>";
        for($j=2; $j<10; $j++){
            echo "<td style='border: 1px solid black; margin: 0; padding: 3px;'>$j*$i=".($j*$i)."</td>";
        }
        echo "</tr>";
    }
</table>
    /*$star = "";
    $space = "";
    for ($i=0; $i<30; $i++){ // $i++ -> $i=$i+1;
        $star = $star."*";
        for($j=29; $j>=$i; $j--) { // $j-- -> $j = $j-1;
            $space = $space."&nbsp";
        }
        echo $space."$star<br>";
        $space = "";
    }*/
?>
