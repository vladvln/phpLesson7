<?php

$server = $_SERVER;
if ($server['REQUEST_METHOD'] === 'POST') {
    $files = $_FILES;
    $tmp_name = $files['picture']['tmp_name'];
    $file_name = $files['picture']['name'];
    move_uploaded_file($tmp_name, "img/$file_name");
    file_put_contents('imgList.txt', $file_name . PHP_EOL, FILE_APPEND);
}
$imageArr = file('imgList.txt', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изображения</title>
</head>
<body>
<section>
    <?php include_once 'menu.php' ?>
    <?php foreach ($imageArr as $pic): ?>
        <div>
            <p><?php echo $pic?></p>
            <img src="/lesson7/img/<?php echo $pic?>" width="300px" height="auto">
        </div>
    <?php endforeach; ?>
</section>
</body>
</html>
