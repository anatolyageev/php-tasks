<?php
///Работать с БД 
require '../pages/config.php';

function route($method, $urlData, $formData)
{
    global $pdo;
    // Получение информации о товаре
    // GET /goods/{goodId}
    if ($method === 'GET' && count($urlData) === 1)
    {
        $id = $urlData[0];
        $sql = "select * from new_table where id = $id";
        $result = $pdo->query($sql);
        if($result->rowCount() > 0)
        {
            $rows = $result->fetchAll();
            echo json_encode(array(
                'method' => 'GET',
                'id' => $id,
                'FName' => $rows[0]['FName'],
                'LName' => $rows[0]['LName'],
            ));
        }
        return;
    }
     // Добавление нового товара
    // POST /goods
    if ($method === "POST")
    {
        $sql = "insert into goods (name, price) 
                    values 
                    ('{$formData['name']}', '{$formData['price']}')";
        $pdo->exec($sql);
        echo json_encode(array(
            'method' => 'POST',
            'info' => 'Данные добавлены',
            'id' => rand(1,100),
            'good' => $formData['name'],
            'price' => $formData['price']
        ));
        return;

    }

     // Обновление всех данных товара
// PUT /goods/{goodId}
if ($method === "PUT"  && count($urlData) === 1 )
{
    // Получаем id товара
    $id = $urlData[0];
    $sql = "update goods 
        set name='{$formData['name']}', price = {$formData['price']}
        where id = $id";
    $pdo->exec($sql);
        // Выводим ответ клиенту
    echo json_encode(array(
            'method' => 'PUT',
            'info' => 'Данные обновлены',
            'id' => $id,
            'good' => $formData['name'],
            'price' => $formData['price']
        ));
        return;        
}

// Частичное обновление данных товара
// PATCH /goods/{goodId}
if ($method === "PATCH"  && count($urlData) === 1 )
{
    // Получаем id товара
    $id = $urlData[0];
    $sql = "update goods 
        set price = {$formData['price']}
        where id = $id";
    $pdo->exec($sql);
        // Выводим ответ клиенту
    echo json_encode(array(
            'method' => 'PATCH',
            'info' => 'Данные обновлены',
            'id' => $id,
            //'good' => $formData['name'],
            'price' => $formData['price']
        ));
        return;        
}

// Удаление товара
// DELETE /goods/{goodId}
if ($method === "DELETE"  && count($urlData) === 1 )
{
    $id = $urlData[0];
    $sql = "delete from goods         
        where id = $id";
    $pdo->exec($sql);
        // Выводим ответ клиенту
    echo json_encode(array(
            'method' => 'DELETE',
            'info' => 'Data Deleted',
            'id' => $id
        ));
    return;  
}

    // Возвращаем ошибку
    header('HTTP/1.0 400 Bad Request');
    echo json_encode(array(
        'error' => 'Bad Request'
    ));


}

?>