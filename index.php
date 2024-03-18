<?php
// Заранее заданные значения логина и пароля
$correct_username = 'user123';
$correct_password = 'password123';

// Получение введенных пользователем данных
$username = $_POST['username'];
$password = $_POST['password'];

// Проверка введенных данных
if ($username === $correct_username && $password === $correct_password) {
    echo "Добро пожаловать";
} else {
    echo "Ошибка входа";
}
?>

