<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
    session_start();
    if($_GET["send"] == 1)
    echo "Вы успешно отправили сообщение на email".$_SESSION["to"]
?>
</body>
</html>
