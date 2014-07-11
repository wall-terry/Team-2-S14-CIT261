<header>

    <?php if(isset($_SESSION['username'])) : ?>
    
   <div class = "username"> <?php $_SESSION['username']?> </div>

    <a href='../users/logout.php'>Logout</a>
    
    <?php endif; ?>
  
</header>

