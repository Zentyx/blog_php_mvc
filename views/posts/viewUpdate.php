<form action="?controller=posts&action=update" method="post" enctype="multipart/form-data">
    <br>
    <label>Autor: </label>
    <input type="text" id="author" name="author">
    <br>
    <label>Content: </label>
    <input type="text" id="content" name="content">
    <br>
    <label>Imagen: </label>
    <input type="file" id="imagen" name="imagen">
    <br>
    <label>Titulo: </label>
    <input type="text" id="titulo" name="titulo" required="required">
    <br>
    <label>Created: </label>
    <input type="date" id="created" name="created">
    <br>
    <label>Modified: </label>
    <input type="date" id="modified" name="modified">
    <br>
    <input type="submit" value="Envia">
</form>
