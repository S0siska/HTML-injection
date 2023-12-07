

<body>
<?php
   echo htmlspecialchars($_POST["first"]);
?>

<form method = "POST">
    <input type = "text" name = "first"><br>
    <input type = "submit" value = "Отправить">
</form>
</body>
