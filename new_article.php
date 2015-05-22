

<?php
require_once('header.php');

    if(isset($_POST['addArticle'])){
        $sql = "INSERT INTO article SET
        title='".$_POST['title']."',
        content='".$_POST['content']."',
        author='".$_POST['author']."',
        intro='".$_POST['intro']."',
        image='".$_POST['image']."',
        youtube='".$_POST['youtube']."',
        created=NOW()
        ";
        mysqli_query($link, $sql);
        echo "
        <script>
            window.onload = function(){
                    document.location.href = 'index.php';
            };
        </script>
        ";
    }

?>
    <div id="article_center">

    <form action="new_article.php" method="POST">
        Titel: <br>
            <input type="text" name="title" /><br>
        Tekst:      <br>
                <textarea name="content" ></textarea>
                    <br>
        Auteur:     <br>
            <input type="text" name="author" /><br>
        Intro:      <br>
            <input type="text" name="intro" /><br>
        Image:      <br>
            <input type="text" name="image" /><br>
        Youtube:    <br>
            <input type="text" name="youtube" /><br>
                    <br>
            <input type="submit" name="addArticle" value="save" />
    </form>

</div>

<?php
    require_once("footer.php")
?>
