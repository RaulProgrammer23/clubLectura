<?php //if(isset($_SESSION['logged'?>
<?php if(isset($books) && (!empty($books)) ):?>
<h1>Listado de libros disponibles para <?=$_SESSION['logged']->username?></h1>
<table class="user-table">
    <thead>
        <tr>
            <td>ID</td>
            <td>TITLE</td>
            <td>AUTHOR</td>
            <td>CATEGORY</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($books as $book):?>
        <tr>
            <td><?= $book->id ?></td>
            <td><?= $book->title ?></td>
            <td><?= $book->author ?></td>
            <td><?= $book->name ?></td>
        </tr>
    <?php endforeach;?>
   </tbody>     
</table>


<?php endif;?>