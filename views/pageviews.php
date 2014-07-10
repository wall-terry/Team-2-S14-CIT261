<!DOCTYPE html>
<!--
Development underway by TM Thoughtworks 
-->
<html>
    <head>
        <title>Teez the Moment</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>

    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>  
        </header> 
    <main>
        <h1>
            Welcome to Teez the Moment -- Coming Soon
        </h1>
        <p>Capture the Moment straight from your camera to tee shirts and more.</p>
        <form action="." method="post">
            <input type="hidden" name="action" value="login">

            <label>Username:</label>
                <input type="text" name="username">
            
            <label>Password:</label>
                <input type="password" name="password">
           
            <button type="submit">Login</button>
        </form>
        <a href="/index.php?action=createAccount">Create New Account</a>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
    </footer>

</body>
</html>

