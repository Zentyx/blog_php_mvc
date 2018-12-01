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
        //únicamente tenemos que mostrar la vista del formulario insertar
        require_once('views/posts/viewInsertar.php');
    }

    public function insertar() {
        //llamamos al metodo insert del modelo para que haga la sentencia con los datos recibidos del formulario
        Post::insert();
        //despues de haber insertado volvemos a llamar a la vista del formulario insertar por si queremos insertar de nuevo
        header("Location:?controller=posts&action=viewInsertar");
    }

    public function viewUpdate() {
        //Recogeremos todos los datos del post que queramos modificar
        $post = Post::find($_GET['id']);
        //esos datos serán accesibles en el formulario
        require_once('views/posts/viewUpdate.php');
    }

    public function eliminar() {
        //como no hay que mostrar nada llamamos directamente al modelo
        Post::delete($_GET['id']);
        //volvemos a mostrar todos los posts
        header("Location:/blog_php_mvc/index.php?controller=posts&action=index");
    }

    public function modificar() {
        //llamamos al metodo update del modelo para modificar los valores antiguos por los del formulario
        Post::update();
        //despues de haber hecho el update volvemos a la vista de todos los post
        header("Location:/blog_php_mvc/index.php?controller=posts&action=index");
    }

}

?>