<table class='table table-hover table-responsive table-bordered'>
        <tr>
            <th>Post #</th>
            <th>Autor</th>
            <th>Content</th>
            <th>Imagen</th>
            <th>Titol</th>
            <th>Creacion</th>
            <th>Modificacion</th>
        </tr>
        <tr>
            <td><?php echo $post->id; ?></td>
            <td><?php echo $post->author; ?></td>
            <td><?php echo $post->content; ?></td>
            <td><img src="data:image/png;base64,<?php echo base64_encode($post->imagen); ?>" alt="foto" /></td>
            <td><?php echo $post->titol; ?></td>
            <td><?php echo $post->created; ?></td>
            <td><?php echo $post->modific; ?></td>
            <td><a href="?controller=posts&action=viewUpdate&id=<?php echo $post->id; ?>" class="btn btn-primary">
                <span class='glyphicon glyphicon-edit'></span> Editar</a></td>
        </tr>
</table>








