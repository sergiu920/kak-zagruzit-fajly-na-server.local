<?php

echo '<pre>';
print_r($_FILES);
echo '</pre>';

// указываем какие MIME-типы разрешены для загрузки
$allow_types = ['image/jpeg', 'image/png'];

// проверяем MIME-тип загруженного файла и если данный тип не находятся в массиве с разрешенными типами,
// то, возвращаем пользователя обратно на страницу загрузки и выводим ему соответствующее сообщение об ошибке
if(!in_array($_FILES['file_img']['type'], $allow_types)){

    exit("Выбранный вами файл не являеться изображением");
}