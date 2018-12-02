<!--rellenaremos los campos del formulario con los datos del post que hemos recibido para modificarlo.
enviaremos los datos modiciados al controlador para que este llame al modelo y hacer update-->
<form action="?controller=posts&action=modificar&id=<?php echo $post->id; ?>" method="post" enctype="multipart/form-data">
    <div>
        <div>
            <label>Autor: </label>
            <input class="form-control" type="text" id="author" name="author" value="<?php echo $post->author; ?>">
        </div>
        <div>
            <label>Content: </label>
            <input class="form-control"type="text" id="content" name="content" value="<?php echo $post->content; ?>">
        </div>
        <div>
            <label>Imagen: </label>
            <input type="file" id="imagen" name="imagen" value="data:image/png;base64,<?php echo base64_encode($post->imagen); ?>" alt="foto" >
            <small id="emailHelp" class="form-text text-muted">Si no se modifica la imagen, se eliminará</small>

        </div>
        <div>
            <img src="data:image/png;base64,<?php echo base64_encode($post->imagen); ?>" alt="foto" />
        </div>
        <div>
            <label>Titulo: </label>
            <input class="form-control" type="text" id="titulo" name="titulo" required="required" value="<?php echo $post->titol; ?>">
        </div>
        <input type="date" id="created" name="created" value="<?php echo $post->created; ?>" style="visibility: hidden">
        <input type="date" id="modified" name="modified" value="<?php echo $post->modific; ?>" style="visibility: hidden">
        <br>
        <input class="btn btn-primary" type="submit" value="Envia">
    </div>
</form>
