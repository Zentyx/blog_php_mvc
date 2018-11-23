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

    public function __construct($id, $author, $content,$titol,$imagen,$created,$modified) {
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
            $list[] = new Post($post['id'], $post['author'], $post['content'], $post['imagen'],$post['titulo'], $post['created'], $post['modified']);
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
        return new Post($post['id'], $post['author'], $post['content'], $post['imagen'],$post['titulo'], $post['created'], $post['modified']);
    }

    public static function insert($author,$content,$imagen,$titulo,$created,$modific){
        $db = Db::getInstance();
        $req = $db->prepare("INSERT INTO posts (author, content, imagen, titulo, created, modified) VALUES ('$author','$content','$imagen','$titulo','$created','$modific')");
        $req->execute();
        
    }
    //pubic static function insertar(Post post){ hacemos insercion en DB}
}

?>