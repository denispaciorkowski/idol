

<?php
    require_once ("header.php");

    $id = $_GET["id"];

    $sql = "SELECT * from article WHERE id = $id";
    $result = mysqli_query($link, $sql);
    while($row = mysqli_fetch_array($result)){
        echo "<h1>";
        echo $row['title'];
        echo "</h1>";
?>

        <img src=" <?php echo $row['image'];?> " />
<?php
        echo "<p>";
        echo $row['content'];
        echo "</br></br>";

        echo "Youtube link: ";
        echo $row['youtube'];
        echo "</br></br>";

        echo "Auteur: ";
        echo $row['author'];
        echo "</br>";
        echo "Gepubliceerd op: ";
        echo $row['created'];
        echo "</p>";

    }

    <?php

    if ($_POST) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user
                WHERE username = '$username'
                AND password = '$password'";

        $result = mysqli_query($link, $query);
        $user = mysqli_fetch_array($result);

        if ($user) {
            $_SESSION['username']= $username;
        }
    }

    if (!isset($_SESSION['username'])) {
        echo " ";
    } else {
        echo "<a href='delete_article.php?id=$id'>Delete Article</a>";
        echo "</br></br>";
    }

    ?>

<?php
    require_once('footer.php');
?>
