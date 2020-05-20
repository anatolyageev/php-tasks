<div class="container">
        <div class="row">

            <?php
            require 'config.php';
            global $pdo;
            $sql = "select * from examt_task6 ";
            $result = $pdo->query($sql);
            if ($result->rowCount() > 0) {
                $rows = $result->fetchAll();
                echo '<table class="table table-bordered table-striped">';
                echo '<thead class="thead-dark">';
                echo '<tr>';
                echo '<th>' . 'id' . '</th>';
                echo '<th>' . 'FName' . '</th>';
                echo '<th>' . 'BirthDay' . '</th> </tr>';
            
                for ($i = 0; $i < $result->rowCount(); $i++) {
                    echo '<tr>';
                    echo '<td>' . $rows[$i]['id'] . '</td>';
                    echo '<td>' . $rows[$i]['family'] . '</td>';
                    echo '<td>' . $rows[$i]['birthday'] . '</td>';
               
                    echo '</tr>';
                }
                echo '</table>';
            }

            ?>