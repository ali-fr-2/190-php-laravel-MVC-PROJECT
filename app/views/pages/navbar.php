<nav class="masthead mb-auto">
    <div>
        <a href="<?php echo URLROOT ?>">
            <h4 class="masthead-brand text-center text-white">
            <h1>Welcome to ChatGPT</h1>
            </h4>
        </a>
        <nav class="nav nav-masthead justify-content-center">
            <?php if(isLoggedIn()) : ?>
            <a class="nav-link active" >  <?php echo $_SESSION['user_name'] ?> </a>
            <a class="nav-link" href="<?php echo URLROOT ?>/users/logout">  log out </a>

            <?php else :  ?>
            <a class="nav-link active" href="<?php echo URLROOT ?>/users/login"> Log in </a>
            <a class="nav-link" href="<?php echo URLROOT ?>/users/register"> Sign up </a>

            <?php endif ; ?>
        </nav>
    </div>
</nav>