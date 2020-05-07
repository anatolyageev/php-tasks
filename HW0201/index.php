<?php require_once 'utils.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <div class="form-row">
            <div class="form-group col-md-2 mt-5">
                <label for="x">x</label>
                <input type="number" id="x" name="num1" require>
            </div>

            <div class="form-group col-md-1 mt-5">

                <div class="btn-group-vertical" role="group" aria-label="First group">
                    <label class="btn btn-secondary active">
                        <input type="radio"  id="option1" autocomplete="off" name="operation" value="plus" checked> +
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio"  id="option2" autocomplete="off" name="operation" value="minus"> -
                    </label>

                    <label class="btn btn-secondary">
                        <input type="radio"  id="option3" autocomplete="off" name="operation" value="multiply" > *
                    </label>

                    <label class="btn btn-secondary">
                        <input type="radio" id="option4" autocomplete="off" name="operation" value="divide" > /
                    </label>
                </div>
            </div>

            <div class="form-group col-md-2 mt-5">
                <label for="y">y</label>
                <input type="number" id="y" name="num2" require>
            </div>

            <div class="form-group col-md-1 mt-5">
                <button type="submit" class="btn btn-primary"  name="submit"  id="submitButton">=</button>
            </div>

            <div class="form-group col-md-2 mt-5">
                <textarea class="form-control" rows="1" id="comment" readonly><?php 
                 if(isset($error_result)){
                    echo "$error_result";
                }	
                else {
                    echo "$result";
                }
                ?></textarea>
            </div>

        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>