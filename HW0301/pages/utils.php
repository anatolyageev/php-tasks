<?php
require 'config.php';


function insert($name, $LName, $MName, $birthDay, $sex, $email)
{
    global $pdo;
    $name = trim(htmlspecialchars($name));
    $LName = trim(htmlspecialchars($LName));
    $MName = trim(htmlspecialchars($MName));
    $birthDay = trim(htmlspecialchars($birthDay));
    $sex = trim(htmlspecialchars($sex));
    $email = trim(htmlspecialchars($email));

    if ($name == "" || $LName == "" || $MName == "") {
        echo "<h3/><span style='color:red;'>Fill All Required Fields!</span><h3/>";
        return false;
    }

    $ins = 'insert into new_table (FName,LName,MName,BirthDay,Sex,Email) values("' . $name . '","' . $LName . '","' . $MName . '","' . $birthDay . '","' . $sex . '","' . $email . '")';
    echo  'console.log(before insrt);';

    $countq = $pdo->exec($ins);

    echo 'console.log(after insrt ' . $countq . ');';
    echo json_encode(array(
        'method' => 'POST',
        'info' => 'Данные добавлены',
        'name' => $name,
        'price' => $LName
    ));
    return;
}

function delete($id)
{
    global $pdo;
    $scr = "delete from new_table where id = $id";
    echo  'console.log(before delete);';
    $pdo->exec($scr);
    echo json_encode(array(
        'method' => 'DELETE',
        'info' => 'Data Deleted',
        'id' => $id
    ));
}

function update($id, $name, $LName, $MName, $birthDay, $sex, $email)
{
    global $pdo;
    $scr = "update new_table 
    set FName = $name, LName = $LName, MName = $MName , BirthDay = $birthDay, Sex = $sex, Email = $email where id = $id";
    echo  'console.log(before delete);';
    $pdo->exec($scr);
    echo json_encode(array(
        'method' => 'PUT',
        'info' => 'Data updated',
        'id' => $id
    ));
}
