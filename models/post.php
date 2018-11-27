<?php

class Post {

    // definimos tres atributos
    // los declaramos como públicos para acceder directamente $post->author
    public $id;
    public $author;
    public $content;
    public $imagen;
    public $titol;
    public $created;
    public $modific;

    public function __construct($id, $author, $content, $imagen, $titol, $created, $modified) {
        $this->id = $id;
        $this->author = $author;
        $this->content = $content;
        $this->imagen = $imagen;
        $this->titol = $titol;
        $this->created = $created;
        $this->modific = $modified;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance(); //devuelve la conexion a la base de datos
        $req = $db->query('SELECT * FROM posts');

        // creamos una lista de objectos post y recorremos la respuesta de la
        //consulta
        foreach ($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['author'], $post['content'], $post['imagen'], $post['titulo'], $post['created'], $post['modified']);
        }
        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        // nos aseguramos que $id es un entero
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
        // preparamos la sentencia y reemplazamos :id con el valor de $id
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        return new Post($post['id'], $post['author'], $post['content'], $post['imagen'], $post['titulo'], $post['created'], $post['modified']);
    }

    public static function insert() {
        $author = $_POST['author'];
        $content = $_POST ['content'];
        $imagen = $_POST['imagen'];
        $titulo = $_POST['titulo'];
        $created = $_POST['created'];
        $modific = $_POST['modified'];
        $db = Db::getInstance();
        $req = $db->prepare("INSERT INTO posts (author, content, imagen, titulo, created, modified) VALUES ('$author','$content','$imagen','$titulo','$created','$modific')");
        $req->execute();
    }

    public static function update() {
        $id = $_GET['id'];
        $author = $_POST['author'];
        $content = $_POST ['content'];
        $imagen = $_POST['imagen'];
        $titulo = $_POST['titulo'];
        $created = $_POST['created'];
        $modific = $_POST['modified'];
        $db = Db::getInstance();
        $req = $db->prepare("UPDATE
                 posts 
            SET
                author = :author,
                content = :content,
                titulo = :titulo,
                imagen  = :imagen,
                created = :created,
                modified = :modified
            WHERE
                id = :id");
        // posted values
        $id = htmlspecialchars(strip_tags($id));
        $author = htmlspecialchars(strip_tags($author));
        $content = htmlspecialchars(strip_tags($content));
        $imagen = htmlspecialchars(strip_tags($imagen));
        $titulo = htmlspecialchars(strip_tags($titulo));
        $created = htmlspecialchars(strip_tags($created));
        $modific = htmlspecialchars(strip_tags($modific));

        // bind parameters
        $req->bindParam(':id', $id);
        $req->bindParam(':author', $author);
        $req->bindParam(':content', $content);
        $req->bindParam(':imagen', $imagen);
        $req->bindParam(':titulo', $titulo);
        $req->bindParam(':created', $created);
        $req->bindParam(':modified', $modific);
        $req->execute();
    }

    //update()
    //pubic static function insertar(Post post){ hacemos insercion en DB}
}

?>