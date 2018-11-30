<p><strong>Post #<?php echo $post->id; ?></strong></p>
<p><strong>Autor: </strong><?php echo $post->author; ?></p>
<p><strong>Content: </strong><?php echo $post->content; ?></p>
<p><strong>imagen: <img src="data:image/png;base64,<?php echo base64_encode($post->imagen); ?>" alt="foto" /></p>
<p><strong>titol: </strong><?php echo $post->titol; ?></p>
<p><strong>Creacion: </strong><?php echo $post->created; ?></p>
<p><strong>Modificacion: </strong><?php echo $post->modific; ?></p>
<a href="?controller=posts&action=viewUpdate&id=<?php echo $post->id; ?>">Modificar</a>

