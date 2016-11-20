<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lesson 2 PHP</title>
    <link rel="stylesheet" type="text/css" href="/dependencies/skeleton.css" />
</head>

<body><div class="container"><div class="row"><div class="twelve columns">
    <h1>Lesson 2</h1>
        <p>
        <?php
        echo "Foo "; //echoes "Foo"

        echo "Bar"; //echoes "Bar"
        ?>
        </p>

        <p>
        <?php echo "Web Interactivity and Engagement" . " is the best!" ?>
        </p>

        <p>
        <?php
        $stringTest = "Web Interactivity and Engagement" . " " . "is the most fun.";
        echo $stringTest;
        ?>
        </p>

    <h2>Course Status</h2>
        <p>
        <?php
        $courseName = "Web Interactivity and Engagement";
        $courseFun = " is the most fun.";
        $courseBad = " is the worst.";

        echo $courseName . $courseFun;

        ?>
        </p>

    <h2>Basic Math</h2>
        <p>Ten + Ten = <?php echo 10 + 10; ?></p>
        <p>Ten x Ten = <?php echo 10 * 10; ?></p>
        <p>Nine - Seven = <?php echo 9 - 7; ?></p>
        <p>One Hundred / Six = <?php echo 100 / 6; ?></p>

        <?php
        $num1 = 25 * 4;
        $num2 = 75 + 25;
        $num3 = 14;
        $num4 = ($num1 - $num3);
        ?>
        <p>Out of Control Math: <?php echo ($num4 + $num2 - $num3 * $num1); ?></p>

    <h2>Arrays</h2>
        <?php
        $array1 = array("dogs", "hogs", "frogs", "clogs");
        ?>
        <p><?php echo $array1[0]; ?></p>

        <h3>Associative Arrays</h3>
            <?php

            $groceryArray = array(
                "milk" => "$2.50",
                "bananas" => "$0.39",
                "black beans" => "$1.20",
                "sugar" => "$6.45",
                "apple juice" => "$2.45",
                "string cheese" => "$4.35",
            );
            ?>
            <p><?php echo $groceryArray["black beans"]; ?></p>

        <h3>Multidimensional Arrays</h3>
            <?php

            $upcomingSale = array(
                array("milk", "$2.50", "$2.00"),
                array("bananas", "$0.39", "$0.33"),
                array("black beans", "$1.20", "$0.99"),
                array("sugar", "$6.45", "$6.35"),
                array("apple juice", "$2.45", "$2.25"),
                array("string cheese", "$4.35", "$1.95"),
            );
            ?>

            <h4>Grocery Sale!</h4>
                <p><?php echo $upcomingSale[0][0] . " (Regular price: " . $upcomingSale[0][1] . ") is on sale for " . $upcomingSale[0][2] . "!"; ?></p>
                <p><?php echo $upcomingSale[1][0] . " (Regular price: " . $upcomingSale[1][1] . ") is on sale for " . $upcomingSale[1][2] . "!"; ?></p>
                <p><?php echo $upcomingSale[2][0] . " (Regular price: " . $upcomingSale[2][1] . ") is on sale for " . $upcomingSale[2][2] . "!"; ?></p>
                <p><?php echo $upcomingSale[3][0] . " (Regular price: " . $upcomingSale[3][1] . ") is on sale for " . $upcomingSale[3][2] . "!"; ?></p>
                <p><?php echo $upcomingSale[4][0] . " (Regular price: " . $upcomingSale[4][1] . ") is on sale for " . $upcomingSale[4][2] . "!"; ?></p>
                <p><?php echo $upcomingSale[5][0] . " (Regular price: " . $upcomingSale[5][1] . ") is on sale for " . $upcomingSale[5][2] . "!"; ?></p>
</div></div></div>
</body>
</html>
