<?php

require_once './clientView.php';

$client = new Person("male", "jip");

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'hello mars';
        echo 'anyone out there?';
        echo $client->name;
        ?>
    </body>
</html>
