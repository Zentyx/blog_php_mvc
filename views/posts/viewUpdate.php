<!--rellenaremos los campos del formulario con los datos del post que hemos recibido para modificarlo.
enviaremos los datos modiciados al controlador para que este llame al modelo y hacer update-->
<form action="?controller=posts&action=modificar&id=<?php echo $post->id;?>" method="post" enctype="multipart/form-data">
    <br>
    <label>Autor: </label>
    <input type="text" id="author" name="author" value="<?php echo $post->author; ?>">
    <br>
    <label>Content: </label>
    <input type="text" id="content" name="content" value="<?php echo $post->content; ?>">
    <br>
    <label>Imagen: </label>
    <input type="file" id="imagen" name="imagen" value="data:image/png;base64,<?php echo base64_encode($post->imagen); ?>" alt="foto" >
    <p><strong>imagen: <img src="data:image/png;base64,<?php echo base64_encode($post->imagen); ?>" alt="foto" /></p>
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
