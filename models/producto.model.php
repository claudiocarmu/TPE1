<?php

class ProductoModel {

    private $db;

    /// Constructor
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    /// Obtiene todos los productos
    function obtenerProductos() {
        $consulta = "SELECT productos.*, categorias.descripcion as categoria FROM productos JOIN categorias ON productos.categoria = categorias.id";
        $query = $this->db->prepare($consulta);
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ); 
        return $productos;
    }

    /// Obtiene los productos por categoria
    function obtenerProductosOfCategory($idCat) {
        $consulta = "SELECT productos.*, categorias.descripcion as categoria FROM productos JOIN categorias ON productos.categoria = categorias.id WHERE categoria=?";
        $query = $this->db->prepare($consulta);
        $query->execute([$idCat]);
        $productos = $query->fetchAll(PDO::FETCH_OBJ); 
        return $productos;
    }
    
    /// Obtiene un producto
    function obtenerProducto($id) {
        $consulta = "SELECT * FROM productos WHERE id=?";
        $query = $this->db->prepare($consulta);
        $query->execute([$id]);
        $producto = $query->fetch(PDO::FETCH_OBJ);
        return $producto;
    }

    /// Agrega un producto
    function agregarProducto($sku, $descripcion, $precio, $categoria, $stock, $imagen=null) {
        $pathImg = null;
        if ($imagen) {
            $pathImg = $this->upLoadImage($imagen);
        }
        $query = $this->db->prepare('INSERT INTO productos(sku, descripcion, precio, categoria, stock, imagen) VALUES (?, ?, ?, ?, ?, ?)');
        $query->execute([$sku, $descripcion, $precio, $categoria, $stock, $pathImg]);
        return $this->db->lastInsertId();
    }

    private function upLoadImage($image) {
        $target = 'imgs/articles/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }
    
    /// Elimina un producto
    function borrarProducto($id) {    
        $query = $this->db->prepare('DELETE FROM productos WHERE id=?');
        $query->execute([$id]);
    }

    /// Modifica un producto
    function modificarProducto($id, $sku, $descripcion, $precio, $categoria, $stock, $pathImg=null) {
        
        try{
            $query = $this->db->prepare('UPDATE productos SET sku=?, descripcion=?, precio=?, categoria=?, stock=?, pathImg=? WHERE id=?');
            $query->execute([$sku, $descripcion, $precio, $categoria, $stock, $id, $pathImg]);
        }
        catch (PDOException $error) {
            $error->getMessage();
            echo $error;
        }
    }    


     
}