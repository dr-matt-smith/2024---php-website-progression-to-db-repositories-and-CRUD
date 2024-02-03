<!DOCTYPE html>
<html>
<head>
    <title>some title here</title>
</head>
<body>

<?php
    foreach ($students as $student):
?>

    <?= $student ?>
    <hr>

<?php
    endforeach;
?>
</body>
</html>
