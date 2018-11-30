<!--Los datos que escribamos se los enviamos al modelo (método insertar) para poder hacer la inserción-->
<form action="?controller=posts&action=insertar" method="post" enctype="multipart/form-data">
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
    <input type="date" id="created" name="created" readonly="readonly" style="visibility: hidden">
    <br>
    <label>Modified: </label>
    <input type="date" id="modified" name="modified" readonly="readonly" style="visibility: hidden">
    <br>
    <input type="submit" value="Envia">
</form>

