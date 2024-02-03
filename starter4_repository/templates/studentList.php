<!DOCTYPE html>
<html>
<head>
    <title>some title here</title>
</head>
<body>
<?php
require_once '_nav.php';
?>

<?php
    foreach ($students as $student):
?>

    <?= $student ?>

    <a href="/?action=show&id=<?= $student->getId() ?>">
        show this record
    </a>
    <hr>

<?php
    endforeach;
?>
</body>
</html>
