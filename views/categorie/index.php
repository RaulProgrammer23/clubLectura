<?php if(isset($categorias) && (!empty($categorias)) ):?>
<h1>Listado de categorias disponibles</h1>
<table>
    <thead>
        <td>ID</td>
        <td>NAME</td>
        <td>DESCRIPTION</td>
    </thead>
    <tbody>
    <?php foreach($categorias as $categoria):?>
        <tr>
            <td><?= $categoria->id ?></td>
            <td><?= $categoria->name ?></td>
            <td><?= $categoria->description ?></td>
        </tr>
    <?php endforeach;?>
   </tbody>     
</table>

<?php endif;?>