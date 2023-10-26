<?php
$file_login=NULL;
$file_password=NULL;
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Чтение файла
    $file_content = file_get_contents('acc.txt');
    // Разбиение содержимого файла на строки
    $lines = explode("\n", $file_content);

    foreach ($lines as $line) {
        // Разделение строк на ключи и значения
        $parts = explode(": ", $line);
        // Присвоение переменным
        if ($parts[0] == 'ID') {
            $id = $parts[1];
        } else if ($parts[0] == 'Логин') {
            $file_login = $parts[1];
        } else if ($parts[0] == 'Пароль') {
            $file_password = $parts[1];
        }

        if ($file_login == $login && $file_password == $password) {
            echo 'ID пользователя: ' . $id;
            echo "<p></p>";
            echo "<button onclick=location.href='main_widget.html'>Перейти на стартовую страницу</button>";
            exit;
        }
    }

    // Если ничего не найдено
    echo 'Такого логина/пароля нет';
    echo "<p></p>";
    echo "<button onclick=location.href='main_widget.html'>Перейти на стартовую страницу</button>";

}
?>