<!DOCTYPE html>
<!--
Development underway by TM Thoughtworks 
-->
<html>
    <head>
        <title>Teez the Moment image select page</title>
        <?php include ( filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/head.php'); ?>
    </head>

    <body>

        <?php include ( filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/header.php'); ?>

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


    <?php include ( filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/footer.php'); ?>


</body>
</html>