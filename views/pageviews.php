<!DOCTYPE html>
<!--
Development underway by TM Thoughtworks 
-->
<html>
    <head>
        <title>Teez the Moment</title>
        <?php include ( filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/head.php'); ?>
    </head>

    <body>

        <?php include ( filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/header.php'); ?>  

    <main>
        <h1>
            Welcome to Teez the Moment -- Coming Soon
        </h1>
        <p>Capture the Moment straight from your camera to tee shirts and more.</p>
        <form action="../users/login.php" method="post">

            <input type="hidden" name="action" value="login">

            <label>Username:</label>
            <input type="text" name="username">

            <label>Password:</label>
            <input type="password" name="password">

            <button type="submit">Login</button>
        </form>
        <a href="views/createAccountView.php">Create New Account</a>
    </main>


    <?php include ( filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/footer.php'); ?>


</body>
</html>

