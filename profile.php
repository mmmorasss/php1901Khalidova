<?php
    require_once('header.php');
?>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <img width="100%" src="<?= $_SESSION['img'] ?>" alt="Аватар пользователя">
                <form action="/php/handlerUserAvatar.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="userfile"> <input type="submit" value="Загрузить">
                </form>
            </div>
            <div class="col-9">
                <?= "Имя: ".$_SESSION['name']."<br>" ?>
                <?= "Фамилия: ".$_SESSION['lastname']."<br>"?>
                <?= "Email: ".$_SESSION['email']."<br>"?>
                <?= "ID: ".$_SESSION['id']."<br>"?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
