<p style="text-align: center"><strong>LISTADO DE POSTS</strong></p>
<?php foreach ($posts as $post) { ?>
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <th>Nombre</th>
            <th>Acción</th>
            <th>Acción</th>
        </tr>
        <tr>
            <td><?php echo $post->author; ?></td>
            <td><a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'class='btn btn-primary'>
                    <span class='glyphicon glyphicon-list'></span> ver contenido</a></td>
            <td><a href='?controller=posts&action=eliminar&id=<?php echo $post->id; ?>'class='btn btn-danger delete-object'>
                <span class='glyphicon glyphicon-remove'></span> Eliminar</a></td>
        </tr>
    </table>
<?php } ?>