<!DOCTYPE html>
<!--
Development underway by TM Thoughtworks 
-->
<html>
    <head>
        <title>Teez the Moment image select page</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>

    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>  
        </header> 
    <main>
        <h1>
            Get Image to Upload
        </h1>
        <p>Choose your photo to upload or upload an image straight from your camera.</p>
        <form action="." method="post">
            <input type="hidden" name="action" value="getImage">
            <label>Select Image File:</label>
            <input type="file" name="imageFile">
            
        </form>
        <button type="button" onclick=".?">Capture Image From Camera</button>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
    </footer>

</body>
</html>