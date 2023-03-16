<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    if ($_POST == "" || $_POST == null){
        ?>
        <div>
        <form method="post">
        <div>
            <label>hi, this is a question</label><br>
            <input type="text" id="question1" name="question1" value="" placeholder="if" required><br>
        </div>
        <div>
            <label>hi, this is a question</label><br>
            <input type="text" id="question2" name="question2" value="" placeholder="if" required><br>
        </div>
        <input type="submit" value="Submit">
        </form>
        </div>
        <?php
    }
    else{
        ?>
        <label>this is the result</label>
    <?php
    }
    ?>
</body>
</html>