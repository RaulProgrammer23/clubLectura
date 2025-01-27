
<?php 
if( isset($_SESSION['msg']) ){
    echo "<h1>". $_SESSION['msg']. "</h1>";
    Utils::borrarSesion("msg");
}
?>

<form action="<?=base_url?>book/createBook" method="post">
    <input type="text" placeholder="title*" name="title" required>
    <input type="text" placeholder="author*" name="author" required>
    
    <?php if(isset($categorias) && (!empty($categorias)) ):?>
        <select name="category">
        <?php foreach($categorias as $categoria):?>
            <option value="<?=$categoria->id?>"><?=$categoria->name?></option>
        <?php endforeach;?>
        </select>
    <?php endif;?>
    
    <input type="submit" value="Create" name ="create">
</form>
