

<?php
    require_once ("header.php");
?>

<div id="article_center">

<?php
    $id = $_GET["id"];

    $sql = "SELECT * from article WHERE id = $id";
    $result = mysqli_query($link, $sql);
    while($row = mysqli_fetch_array($result)){
        echo "<h1>";
        echo $row['title'];
        echo "</h1>";
?>

        <img id="article_img" src=" <?php echo $row['image'];?> " />
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


echo "<a href='delete_article.php?id=$id'>Delete Article</a>";
echo "</br></br>";
//echo "<a href='edit_article.php?id=$id'>Edit Article</a>";

?>
</div>
<?php
    require_once('footer.php');
?>
