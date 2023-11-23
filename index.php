<?php
//Функция для удобного debug. Использовалась только в разработке!
function debug($str){
    echo "<pre>";
    var_dump($str);
    echo "</pre>";
    exit;
}
//Читалка любого каталога
function getStyles($path){
    $content = scandir($path);
    if(count($content) != 0)
        $content = array_diff($content, ['.', '..']);
    return $content;
}
// Трио кубики
$collection = [
    "first_value" => "<div class=\"block-one\"></div>",
    "second_value" => "<div class=\"block-two\"></div>",
    "three_value" => "<div class=\"block-three\"></div>",
];
// Стандартное количество трио кубиков
$count = 1;

// Установка количества трио кубиков если get на count не пуст
if(isset($_GET["count"])){
    $count = $_GET["count"];
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестирование стилей</title>
    <!-- Подключение стилей -->
    <?php 
    foreach(getStyles('style/') as $link){
        echo "<link rel=\"stylesheet\" href=\"/style/$link\">";
    }
    ?>
    <!-- Конец подключения стилей -->
</head>
<body>

    <!-- Заголовок с перечислением стилей из папки style/ -->
    <div class="content-links">
        <h3 class="header-title">Подключённые стили</h5>
        <ol>
        <?php 
        foreach(getStyles('style/') as $link){
            echo "<li class=\"header-description\">$link</li>";
        }
        ?>
        </ol>
    </div>
    <!-- Конец заголовка -->

    <!-- Кубики регулируемые get запросом -->
    <div class="blocks">
        <?php
        for ($i=0; $i < $count; $i++) { 
            foreach($collection as $htmlElement){
                echo $htmlElement;
            }
        }
        ?>
    </div>
    <!-- Конец кубиков -->

</body>
</html>