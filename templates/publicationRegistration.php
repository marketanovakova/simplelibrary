<?php require('../functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PŘIDÁNÍ NOVÉ PUBLIKACE</title>
</head>



<body>
    <form action="" method="post">

        <p>
            <label for="bookID"><strong>ID knihy</strong></label>
            <input name="bookID" type="text" size="30">
        </p>

        <p>
            <label for="bookISBN"><strong>ISBN</strong></label>
            <input name="bookISBN" type="text" size="30">
        </p>

        <p>
            <label for="bookTitle"><strong>Název knihy</strong></label>
            <input name="bookTitle" type="text" size="30">
        </p>

        <p>
            <label for="bookPages"><strong>Počet stran</strong></label>
            <input name="bookPages" type="text" size="30">
        </p>

        <p>
            <label for="bookEdition"><strong>Edice</strong></label>
            <input name="bookEdition" type="text" size="30">
        </p>

        <p>
            <label for="bookPublished"><strong>Rok vydání</strong></label>
            <input name="bookPublished" type="text" size="30">
        </p>

        <p>
            <label for="bookDate"><strong>Dnešní datum</strong></label>
            <input name="bookDate" type="text" size="30">
        </p>
        

       
        <input type="submit" value="VLOŽIT PUBLIKACI">
    </form>
</body>
</html>
