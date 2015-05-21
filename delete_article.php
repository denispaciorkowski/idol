<?php
    require_once("database.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM article WHERE id = $id";

    if (mysqli_query($link, $sql)) {
    echo "Succes!";
    } else {
    echo "Error deleting article: " . mysqli_error($link);
    }

    echo "
        <script>
            window.onload = function(){
                document.location.href = 'index.php';
            };
        </script>
         ";  

?>
