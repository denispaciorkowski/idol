

<?php
require_once('database.php');

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



<form action="new_article.php" method="POST">
    Titel: <br>
	<input type="text" name="title" /><br>
    Tekst: <br>
	<input type="text" name="content" /><br>
    Auteur: <br>
    <input type="text" name="author" /><br>
    Intro:<br>
    <input type="text" name="intro" /><br>
    Image:<br>
    <input type="text" name="author" /><br>
    Youtube:<br>
    <input type="text" name="youtube" /><br>
    Twitter:<br>
    <input type="text" name="twitter" /><br>
    <br>
    <input type="submit" name="addArticle" value="save" />
</form>

