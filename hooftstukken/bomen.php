<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$bomen = array("img_0050.jpg", "lillypilly.jpg", "Maranchery_Biyyam_Kayal_kandal.jpg", "weeping-elm.jpg", "weeping-elm0091.jpg");

foreach($bomen as $boom) {
    echo '<img  src="../recources/bomen/".$boom.">';
}
?>
<br><br>
<a href="H03.php"><button type="button">Hoofdstuk 3 index</button></a>
<br><br>
<a href="../index.php"><button type="button">index</button></a>
</body>
</html>