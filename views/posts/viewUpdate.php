<form action="?controller=posts&action=modificar&id=<?php echo $post->id;?>" method="post" enctype="multipart/form-data">
    <br>
    <label>Autor: </label>
    <input type="text" id="author" name="author" value="<?php echo $post->author; ?>">
    <br>
    <label>Content: </label>
    <input type="text" id="content" name="content" value="<?php echo $post->content; ?>">
    <br>
    <label>Imagen: </label>
    <input type="text" id="imagen" name="imagen" value="<?php echo $post->content; ?>">
    <br>
    <label>Titulo: </label>
    <input type="text" id="titulo" name="titulo" required="required" value="<?php echo $post->titol; ?>">
    <br>
    <label>Created: </label>
    <input type="date" id="created" name="created" value="<?php echo $post->created; ?>">
    <br>
    <label>Modified: </label>
    <input type="date" id="modified" name="modified" value="<?php echo $post->modific; ?>">
    <br>
    <input type="submit" value="Envia">
</form>
