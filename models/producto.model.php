<?php

class ProductoModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }

    function obtenerCategorias() {
        $consulta = "SELECT * FROM categorias";
        $query = $this->db->prepare($consulta);
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); 
        return $categorias;
    }
    
    function obtenerProductos() {
        $consulta = "SELECT productos.*, categorias.descripcion as categoria FROM productos JOIN categorias ON productos.categoria = categorias.id";
        $query = $this->db->prepare($consulta);
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ); 
        return $productos;
    }

   
    function obtenerProducto($id) {
        $consulta = "SELECT * FROM productos WHERE id=?";
        $query = $this->db->prepare($consulta);
        $query->execute([$id]);
        $producto = $query->fetch(PDO::FETCH_OBJ);
        return $producto;
    }


    function agregarProducto($sku, $descripcion, $precio, $categoria, $stock) {
        $query = $this->db->prepare('INSERT INTO productos(sku, descripcion, precio, categoria, stock) VALUES (?, ?, ?, ?, ?)');
        $query->execute([$sku, $descripcion, $precio, $categoria, $stock]);
        return $this->db->lastInsertId();
    }
    
    function agregarCategoria($descripcion) {
        $query = $this->db->prepare('INSERT INTO categorias(descripcion) VALUES (?)');
        $query->execute([$descripcion]);
        return $this->db->lastInsertId();
    }

    function borrarProducto($id) {    
        $query = $this->db->prepare('DELETE FROM productos WHERE id=?');
        $query->execute([$id]);
    }

    function modificarProducto($id, $sku, $descripcion, $precio, $categoria, $stock) {
        try{
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query = $this->db->prepare('UPDATE productos SET sku=?, descripcion=?, precio=?, categoria=?, stock=? WHERE id=?');
            $query->execute([$sku, $descripcion, $precio, $categoria, $stock, $id]);
        }
        catch (PDOException $error) {
            $error->getMessage();
            echo $error;
        }
    }    
}