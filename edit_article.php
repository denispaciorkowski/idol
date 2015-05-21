<?php

    require_once("header.php");

    $id = $_GET['id'];    
    if(isset($_POST['editArticle'])){
    $sql = "UPDATE article SET  
        title='".$_POST['title']."',
        content='".$_POST['content']."',
        author='".$_POST['author']."',
        intro='".$_POST['intro']."',
        image='".$_POST['image']."',
        youtube='".$_POST['youtube']."',
        created=NOW(),
        WHERE id = $id";
        mysqli_query($link, $sql);
        $row = mysqli_fetch_array($sql);
    }
    $sql = "SELECT * FROM article WHERE id=$id"; 
    mysqli_query($link, $sql);
    $row = mysqli_fetch_array($sql);


?>

UPDATE article SET title = 'jan', content = 'd dsadasd' where id = $id

<form action="editArticle.php?id=<?php echo $row['id']; ?>" method="POST">
    Titel: <br>
    <input type="text" name="title" value="<?php echo $row['title'];  ?>" /><br>
    Tekst: <br>
    <textarea name="content" ></textarea>
    <br>
    Auteur: <br>
    <input type="text" name="author" /><br>
    Intro:<br>
    <input type="text" name="intro" /><br>
    Image:<br>
    <input type="text" name="image" /><br>
    Youtube:<br>
    <input type="text" name="youtube" /><br>
    <br>
    <input type="submit" name="editArticle" value="save" />
</form>



<?php
    require_once("footer.php")
?>
