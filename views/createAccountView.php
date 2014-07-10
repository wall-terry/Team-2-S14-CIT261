<!DOCTYPE html>
<!--
Development underway by TM Thoughtworks 
-->
<html>
    <head>
        <title>Teez the Moment create user account view</title>
        <?php include '../modules/head.php'; ?>
    </head>

    <body>
       
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>  
        
    <main>
        <h1>
            Create a New user Account
        </h1>
        <p>Please select a username, a valid email address, and a password.</p>
        <form action="../users/createUserAccount.php" method="post">
            <input type="hidden" name="action" value="newAccount">

            <label>Username:</label>
            <input type="text" name="username">

            <label>Email:</label>
            <input type="text" name="email">
            <label>Password:</label>
            <input type="password" name="password">
            <label>Confirm Password:</label>
            <input type="password" name="verify_password">

            <button type="submit">Create Account</button>
        </form>
    </main>

    
        <?php include  '../modules/footer.php'; ?>
    

</body>
</html>
