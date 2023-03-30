<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Демо Bootstrap</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $books = [
                [
                    "Красивый C++: 30 главных правил чистого, безопасного и быстрого кода",
                    "https://cdn.img-gorod.ru/620x1000/nomenclature/29/688/2968899.jpg",
                    2714
                ],
                [
                    "Машинное обучение. Портфолио реальных проектов",
                    "https://cdn.img-gorod.ru/620x1000/nomenclature/29/688/2968898.jpg",
                    2987
                ],
                [
                    "Python. Великое программирование в Minecraft",
                    "https://cdn.img-gorod.ru/620x1000/nomenclature/29/686/2968695.jpg",
                    1225
                ],
                [
                    "Правила технической эксплуатации электроустановок потребителей",
                    "https://cdn.img-gorod.ru/620x1000/nomenclature/29/685/2968537.jpg",
                    3012
                ],
                [
                    "Надежный Python",
                    "https://cdn.img-gorod.ru/620x1000/nomenclature/29/683/2968343.jpg",
                    1222,
                ],
                [
                    "Интерпретируемое машинное обучение на Python",
                    "https://cdn.img-gorod.ru/620x1000/nomenclature/29/683/2968341.jpg",
                    2048
                ]
            ];
        ?>
        <div class="container">
            <div class="row">
                <?php
                    for ($i=0; $i<count($books); $i++){
                        echo "<div class='col-sm-3'><img width='100%' src='".$books[$i][1]."' alt=''><h3>".$books[$i][0]."</h3></div>";
                    }
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>