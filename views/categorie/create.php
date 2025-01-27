
<?php 
if( isset($_SESSION['msg']) ){
    echo "<h1>". $_SESSION['msg']. "</h1>";
    Utils::borrarSesion("msg");
}
?>

<form action="<?=base_url?>categorie/createCategory" method="post">
    <input type="text" placeholder="name*" name="name" required>
    <textarea name="dscrp" cols="30" rows="10" required></textarea>
    <input type="submit" value="Create" name ="create">
</form>
