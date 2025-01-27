<?php //if(isset($_SESSION['logged'?>
<?php if(isset($books) && (!empty($books)) ):?>
<h1>Bienvenido usuario admin</h1>
<table class="admin-table">
    <thead>
        <tr>
            <td>ID</td>
            <td>TITLE</td>
            <td>AUTHOR</td>
            <td>CATEGORY ID</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($books as $book):?>
        <tr>
            <td><?= $book->id ?></td>
            <td><?= $book->title ?></td>
            <td><?= $book->author ?></td>
            <td><?= $book->category_id ?></td>
        </tr>
    <?php endforeach;?>
   </tbody>     
</table>


<?php endif;?>