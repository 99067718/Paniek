<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    if ($_POST == "" || $_POST == null){
        ?>
        <div id="questions">
        <h1>Onkunde</h1>
        <form method="post">
        <div>
            <label>wat zou je graag willen kunnen?</label><br>
            <input type="text" id="question1" name="question1" value="" placeholder="The more you know" required><br>
        </div>
        <div>
            <label>Met welk persoon kan je goed opschieten?</label><br>
            <input type="text" id="question2" name="question2" value="" placeholder="HE'S GOT A GUN!" required><br>
        </div>
        <div>
            <label>Als je een superkracht zou kunnen hebben voor 24 uur, welke superkracht zou je kiezen?</label><br>
            <input type="text" id="question3" name="question3" value="" placeholder="dududududu Batman" required><br>
        </div>
        <div>
            <label>Wat is je favoriete eten?</label><br>
            <input type="text" id="question4" name="question4" value="" placeholder="wow I am popular" required><br>
        </div>
        <div>
            <label>Wie zou je graag een keer willen ontmoeten?</label><br>
            <input type="text" id="question5" name="question5" value="" placeholder="Sushi number 3" required><br>
        </div>
        <div>
            <label>Wat is je favoriete serie?</label><br>
            <input type="text" id="question6" name="question6" value="" placeholder="The serie where the when the when" required><br>
        </div>
        <div>
            <label>Wat wil je graag een keer doen?</label><br>
            <input type="text" id="question7" name="question7" value="" placeholder="yeah, what is it..?" required><br>
        </div>
        <input type="submit" value="Submit" id="submit">
        </form>
        </div>
        <?php
    }
    else{
        ?>
        <div id="Results">
            <label>this is the result</label>
        </div>
    <?php
    }
    ?>
</body>
</html>