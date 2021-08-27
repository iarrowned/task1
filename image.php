<?php
    /*
     * count.txt - файл, куда сохраняется количество показов картинки
     * при загрузке изображения счетчик $count увеличивается на 1 и перезаписывается в файл
     */
    if (!file_exists('count.txt'))
    {
        file_put_contents('count.txt', 1);
    }
    $count = file_get_contents('count.txt') + 1;
    file_put_contents('count.txt', $count);

    /*
     * $img - изображение, считанное из файла image.jpg
     * завершение скрипта - вывод изображения
     */
    $img = file_get_contents('image.jpg');
    header('Content-Type: image/jpeg');
    echo $img;