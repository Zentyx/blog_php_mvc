<?php

class PostsController {

    public function index() {
        // Guardamos todos los posts en una variable
        $posts = Post::all();
        require_once('views/posts/index.php');
    }

    public function show() {
        // esperamos una url del tipo ?controller=posts&action=show&id=x
        // si no nos pasan el id redirecionamos hacia la pagina de error, el id
        //tenemos que buscarlo en la BBDD
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $post = Post::find($_GET['id']);
        require_once('views/posts/show.php');
    }

    public function viewInsertar() {

        require_once('views/posts/viewInsertar.php');
    }

    public function viewUpdate() {

        require_once('views/posts/viewUpdate.php');
    }

    public function insertar() {

        $author= $_POST['author'];
        $content = $_POST ['content'];
        $imagen = $_POST['imagen'];
        $titulo = $_POST['titulo'];
        $created = $_POST['created'];
        $modific =$_POST['modified'];
        
        Post::insert($author, $content, $imagen, $titulo, $created, $modific);
        
    }

    //function mostrarInsertar (Type $var = null){no habra modelo, solo la vista   require_once ('views/posts/mostrarInsertar.php)}
    //function insertar (Type $var = null){ id=$_POST['id']; Post::insert(); headerLocation:'?controller=post&action=index'
}

?>