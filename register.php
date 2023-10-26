<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Получаем данные из формы
    $login = $_POST["login"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    // Генерируем случайный ID
    $id = bin2hex(random_bytes(10)); // 20 символов

    // Записываем данные в файл acc.txt
    $data = "ID: $id\nЛогин: $login\nПароль: $password\nТелефон: $phone\nПочта: $email\n\n";
    file_put_contents("acc.txt", $data, FILE_APPEND);

    // Возвращаем ID пользователю
    echo "Ваш ID: $id";

echo '<form method="get" action="question.html">';
echo '<button id="but_1" style="background-color: aquamarine; border-color: #9370DB; padding: 10px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        margin: 10px;">На сайт завода</button>';
echo '</form>';

}
?>