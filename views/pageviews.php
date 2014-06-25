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
        <form action=".?action=login">

            <label>
                <input type="text" name="username">
            </label>
            <label>
                <input type="password" name="password">
            </label>
            <button type="submit">Login</button>
        </form>
        <a href=".?action=createAccount">Create New Account</a>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
    </footer>

</body>
</html>

