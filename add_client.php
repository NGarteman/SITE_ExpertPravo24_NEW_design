<?php

$to      = 'expertpravo24@gmail.com'; 
$subject = 'Заявка с формы EXPERTPRAVO24'; 
$message = "Имя: " . $_POST['phone'] ;
mail($to, $subject, $message);
header("Location: redirect.php");

/* try {
    // коннектимся к бд с помощью кроссплатформенного объекта для обертки БД - PDO
    // TODO на хосте вместо localhost нужно будет ввести рабочий айпишник сервака
    $conn = new PDO("mysql:host=localhost;dbname=clients1", 'mysql', 'mysql');

    // запрос на вставку новой строки в бд, время заносится текущее
    $query = "INSERT INTO clients VALUES (NULL, :name, :phone, NOW())";
    // готовим запрос, обращаясь к переменной, хранящей коннект к БД
    $client = $conn->prepare($query);
    // вставляем вместо наших template переменных в запросе к базе элементы из массива аргументов
    // пост-метода к серваку: приходит post запрос с формы с параметрами [name: "Max", phone: "123"]
    // и из него выдираются элементы по ключу (названию) и заносятся в указанные переменные запроса
    $client->execute(['name' => $_POST['name'], 'phone' => $_POST['phone']]);

    // редирект на другую страницу
    header("Location: redirect.php");
}
catch (PDOException $e) {
    // по хорошему в будущем лучше обрабатывать разные исключения, а то сами нихуя не поймем)
    echo "error";
}*/
