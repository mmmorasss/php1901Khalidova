<?php
// Найти максимальный нечетный элемент массива
$nums = [-526,-423,-32,-534,-64,-22,-43];
$max = -INF;
for ($i=0; $i<count($nums); $i=$i+1){
    if($max<$nums[$i] and $nums[$i]%2!=0){
        $max = $nums[$i];
    }
}
echo $max;

/*$marks = [5,5,4,4,5,5,3,4,5];
$summ = 0;
for ($i=0; $i<count($marks); $i=$i+1){
    $summ = $summ + $marks[$i];
}
echo $summ/count($marks);*/
/*$cars = ["bmw", "audi", "kia", "infinity"];
for ($i=0; $i<3; $i=$i+1) {
    echo $cars[$i] . "<br>";
}
do{
    echo "hello world";
}while(false);*/

/*$i = 0;
while ($i<count($cars)){
    echo $cars[$i]."<br>";
    $i = $i + 1;
}*/




/*
 * max = -INF
 * if(-INF<-526 and 0>0) -> false
 * if(-INF<-423 and )
 *
 *
 *
 *
 *
 *
 * max = 23
 * ($i=0) if(23<23) -> false
 * -
 * ($i=1) if(23<423) max = 423
 * ($i=2) if(423<32) -> false
 * -
 * ($i=3) if(423<534) max = 534
 * ($i=4) if(534<64) -> false
 * -
 * ($i=5) if(534<22) -> false
 * -
 * ($i=6) if(534<43) -> false
 * -
 * ($i=7) цикл завершен
 * печатаем на экран max (534)
 * */






















