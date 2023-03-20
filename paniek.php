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
    <div id="menu">
        <h1>Hello</h1>
        <div onclick="window.open('https://github.com/99067718')">
            <img src="https://avatars.githubusercontent.com/u/89968831?v=4">
            <h1>2023</h1>
        </div>
    </div>
    <?php
    if ($_POST == "" || $_POST == null){
        ?>
        <div id="questions">
        <h1>The super cool school thingy</h1>
        <form method="post">
        <div>
            <label>What skill would you like to have</label><br>
            <input type="text" id="question1" name="question1" value="" placeholder="The more you know" required><br>
        </div>
        <div>
            <label>Who do you get along with</label><br>
            <input type="text" id="question2" name="question2" value="" placeholder="HMM, yes who is it?" required><br>
        </div>
        <div>
            <label>If you had superpowers for 24 hours, what superpower would you have?</label><br>
            <input type="text" id="question3" name="question3" value="" placeholder="dududududu Batman" required><br>
        </div>
        <div>
            <label>What is your favorite food?</label><br>
            <input type="text" id="question4" name="question4" value="" placeholder="wow I am popular" required><br>
        </div>
        <div>
            <label>Who do you want to meet?</label><br>
            <input type="text" id="question5" name="question5" value="" placeholder="Sushi number 3" required><br>
        </div>
        <div>
            <label>What is your favorite series?</label><br>
            <input type="text" id="question6" name="question6" value="" placeholder="The serie where the when the when" required><br>
        </div>
        <div>
            <label>What would you like to do sometime?</label><br>
            <input type="text" id="question7" name="question7" value="" placeholder="yeah, what is it..?" required><br>
        </div>
        <input type="submit" value="Submit" id="submit">
        </form>
        </div>
        <?php
    }
    else{
        ?>
        <div id="results">
            <?php
            #Variables
            $goal = $_POST["question1"];
            $villain = $_POST["question2"];
            $superpower = $_POST["question3"];
            $superFood = $_POST["question4"];
            $name = $_POST["question5"];
            $world = $_POST["question6"];
            $villainGoal = $_POST["question7"];
            #story
            echo("<h1>This is the story of " .htmlspecialchars($name)."</h1><br>");
            echo("<p>". htmlspecialchars($name)." lived in the world of ".htmlspecialchars($world)."</p>");
            echo("<p>". "He had the dream to ".htmlspecialchars($goal)."</p>");
            echo("<p>". "He got superpowers (".htmlspecialchars($superpower).") as a result of a failed experiment.</p>");
            echo("<p>But his enemy ".htmlspecialchars($villain)." tried to stop that from happening.</p>");
            echo("<p>".htmlspecialchars($villain)." also had a dream, his dream was to ".htmlspecialchars($villainGoal).".</p>");
            echo("<p>".htmlspecialchars($villain)." was a strong enemy, he could increase his power by eating superfood(".htmlspecialchars($superFood).").</p>");
            echo("<p>Will ".htmlspecialchars($name)." be able to save the world and reach his goal before ".htmlspecialchars($villain)." reaches his goal?</p>");
            echo("<p>We will probably not figure out, so don't expect too much of this story</p><br>");
            echo("<h1> the end </h1>")
            ?>
        </div>
    <?php
    }
    ?>
</body>
</html>