<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic Website</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <header>
        <nav class="nav-main">
            <div class="logo">Basic Website</div>
            <ul>
                <?php

                $arr = array('home', 'one', 'two', 'three', 'contact');

                foreach ($arr as &$value) {?>

                <li>
                    <a id="<?php echo $value ?>" href="#" class="nav-item pageLink"><?php echo ucfirst($value) ?></a>
                </li>

                <?php
                }
                ?>
            </ul>
        </nav>
    </header>
    <div id="content"></div>
    <div style="clear: both;"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/jQuery.js"></script>
</body>
</html>
