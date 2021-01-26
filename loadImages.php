<?php
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Загрузка изображения</title>
</head>
<body>
    <?php include_once 'menu.php' ?>
    <form action="images.php" method="post" enctype="multipart/form-data">
        <div>
            <input name="picture" type="file" accept="image/*">
        </div>
        <input type="submit" value="Загрузить">
    </form>
</body>
</html>

