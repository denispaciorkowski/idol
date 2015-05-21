<?php
    require_once ("header.php");

    $id = $_GET["id"];

    echo "<h1>";
    echo $row["title"];
    echo "</h1>";

    require_once('footer.php');
    ?>