
<?php 
    if( isset($_SESSION['msg']) ){
        echo "<h1>". $_SESSION['msg']. "</h1>";
        Utils::borrarSesion("msg");
    }
?>
    <form action="<?=base_url?>user/login" method="post">
        <input type="text" placeholder="username*" name="username" required>
        <input type="password" placeholder="password*" name="password" required>
        <input type="submit" value="Login" name ="login">
    </form>
