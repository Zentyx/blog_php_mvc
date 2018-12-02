<!--Los datos que escribamos se los enviamos al controlador (método insertar) para llamar al modelo y hacer
el insert-->

<form action="?controller=posts&action=insertar" method="post" enctype="multipart/form-data">
    <div>
    <div>
    <label>Autor: </label>
    <input class="form-control" type="text" id="author" name="author">
    </div>
    <div>
    <label>Content: </label>
    <input class="form-control" type="text" id="content" name="content">
    </div>
    <div>
    <label>Imagen: </label>
    <input type="file" id="imagen" name="imagen">
    </div>
    <div>
    <label>Titulo: </label>
    <input class="form-control" type="text" id="titulo" name="titulo" required="required">
    </div>
    <input type="date" id="created" name="created" readonly="readonly" style="visibility: hidden">
    <input type="date" id="modified" name="modified" readonly="readonly" style="visibility: hidden">
    <br>
    <input class="btn btn-primary" type="submit" value="Envia">
    </div>
</form>

