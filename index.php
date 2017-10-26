<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "commons.php";
    ?>

    <html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <form action="submit.php" method="post">
            <input placeholder="ID" name="id" type="number"><br /><br />
            <input placeholder="First Name" name="name" type="text"><br /><br />
            <input placeholder="Last Name" name="last" type="text"><br /><br />
            <input placeholder="E-mail" name="email" type="email"><br /><br />
            <input name="age" type="checkbox"> I agree to the terms of service and are at least 18 years of age.<br /><br />
            <input type="submit">
            <input type="reset"><br /> <br />
            <input type="datetime-local" name="Current Time">
        </form>
        <?php
        printcsv("data.csv");
        ?>
    </body>
    </html>
