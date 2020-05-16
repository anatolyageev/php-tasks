<?php
//require './pages/config.php';
require_once 'C:\OSPanel\domains\HW0301\pages\utils.php';
global $pdo;
$method = $_SERVER['REQUEST_METHOD'];
echo 'jnkkjbbkb ' . $method;
getFormData($method);
function getFormData($method)
{
    if ($method === 'GET') {
        $_method = $_GET['_method'];
        switch ($_method) {
            case "PUT":
                update($_GET['id'],$_GET['name'], $_GET['LName'], $_GET['MName'], $_GET['birthDay'], $_GET['sex'], $_GET['email']);
                break;
            case "DELETE":
                delete($_GET['id']);
                break;
        }
    }
    if ($method === 'POST') {
        insert($_POST['name'], $_POST['LName'], $_POST['MName'], $_POST['BirthDay'], $_POST['Sex'], $_POST['Email']);
        return $_POST;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <?php
            $sql = "select * from new_table ";
            $result = $pdo->query($sql);
            if ($result->rowCount() > 0) {
                $rows = $result->fetchAll();
                echo '<table class="table table-bordered table-striped">';
                echo '<thead class="thead-dark">';
                echo '<tr>';
                echo '<th>' . 'id' . '</td>';
                echo '<th>' . 'FName' . '</td>';
                echo '<th>' . 'LName' . '</td>';
                echo '<th>' . 'MName' . '</td>';
                echo '<th>' . 'BirthDay' . '</td>';
                echo '<th>' . 'Sex' . '</td>';
                echo '<th>' . 'Email' . '</td>';
                echo '<th>' . 'Del' . '</td>';
                echo '<th>' . 'Edit' . '</td>';
                echo '</tr> </thead>';

                for ($i = 0; $i < $result->rowCount(); $i++) {
                    echo '<tr>';
                    echo '<td>' . $rows[$i]['id'] . '</td>';
                    echo '<td>' . $rows[$i]['FName'] . '</td>';
                    echo '<td>' . $rows[$i]['LName'] . '</td>';
                    echo '<td>' . $rows[$i]['MName'] . '</td>';
                    echo '<td>' . $rows[$i]['BirthDay'] . '</td>';
                    echo '<td>' . $rows[$i]['Sex'] . '</td>';
                    echo '<td>' . $rows[$i]['Email'] . '</td>';
                    echo '<td>' . "<a type=&quotbutton&quot class=&quotbtn btn-primary&quot href=&quotindex.php?_method=DELETE&id=" . $rows[$i]['id'] . "&quot>Delete Student </a>" . '</td>';
                    echo '<td>' . "<a type=&quotbutton&quot class=&quotbtn btn-primary&quot href=&quotindex.php?id=" . $rows[$i]['id'] . "&quot>Edit Student </a>" .'</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }

            ?>
            <div>
                <a type="button" class="btn btn-primary" href="/pages/addStudent.php">Add Student </a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>