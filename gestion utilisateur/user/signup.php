<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>

    <h1 class="header">Please Signup</h1>

    <?php flash('register') ?>

    <form method="post" action="./controllers/Users.php">
        <input type="hidden" name="type" value="register">
        <input type="text" name="usersName" 
        placeholder="Full name...">
        <input type="text" name="usersEmail" 
        placeholder="Email...">
        <input type="text" name="usersUid" 
        placeholder="Username...">
        <input type="password" name="usersPwd" 
        placeholder="Password...">
        <input type="password" name="pwdRepeat" 
        placeholder="Repeat password">
        <div class="g-recaptcha" data-sitekey="6LdyPIkdAAAAAHZayNYGdiYPar0aeSCZQpt2IhQW"></div>
        <button type="submit" name="submit">Sign Up</button>
    </form>
    
<?php 
    include_once 'footer.php'
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>