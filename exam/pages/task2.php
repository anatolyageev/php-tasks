<?php

if (isset($_GET['submit'])) {
    $number = $_GET['Number'];
    $result = stepen($number);
}
?>



    <form action="http://exam/index.php?page=2">
        <div class="form-group col-md-2 mt-5">
            <label for="y">Number</label>
            <input type="number" id="y" name="Number" require>
        </div>
        <div class="form-group col-md-1 mt-5">
            <button type="submit" class="btn btn-primary" name="submit" value="submit" id="submitButton">=</button>
        </div>
    </form>

    <div class="form-group col-md-2 mt-5">
        <textarea class="form-control" rows="1" id="comment" readonly><?php
            echo "$result";
         ?></textarea>
    </div>


