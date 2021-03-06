<?php namespace Model;
class Post extends BaseModel{
    private $id;
    private $titulo;
    private $contenido;
    private $imagenes_id;
    private $usuarios_id;
    private $enabled;
    public function __construct(){
        $this::init();
    }
    public static function show($message){
        $datos = new PDO\Datos();
        $datos->Conectar();
        $posts=$datos->Select("Select * from posts");
        print_r($posts);
    }
    public function save(){
        $datos = new PDO\Datos();
        $datos->Conectar();
        $datos->Insert("INSERT INTO posts VALUES(NULL,'$this->titulo','$this->contenido','now()','$this->imagenes_id','$this->usuarios_id','$this->enabled')");
        $datos->Desconectar();
    }
    public function update($id = 0){
        $datos = new PDO\Datos();
        $datos->Conectar();
        $datos->Update("UPDATE posts SET titulo = '$this->titulo' , contenido = '$this->contenido', imagenes_id = '$this->imagenes_id' where id = '$id'");
        $datos->Desconectar();
    }
    public function disabled($id = 0){
        $datos = new PDO\Datos();
        $datos->Conectar();
        $datos->Update("UPDATE posts SET enabled = '$this->enabled' where id = '$id'");
        $datos->Desconectar();
    }
    public function find($id = 0){
        $datos = new PDO\Datos();
        $datos->Conectar();
        $query=$datos->SelectJson("Select * from posts where id = '$id'");
        $datos->Desconectar();
        return $query;
    }
}


?>
