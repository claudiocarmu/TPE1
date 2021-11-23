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
    function agregarProducto($sku, $descripcion, $precio, $categoria, $stock) {
        $query = $this->db->prepare('INSERT INTO productos(sku, descripcion, precio, categoria, stock) VALUES (?, ?, ?, ?, ?)');
        $query->execute([$sku, $descripcion, $precio, $categoria, $stock]);
        return $this->db->lastInsertId();
    }
    
    /// Elimina un producto
    function borrarProducto($id) {    
        $query = $this->db->prepare('DELETE FROM productos WHERE id=?');
        $query->execute([$id]);
    }

    /// Modifica un producto
    function modificarProducto($id, $sku, $descripcion, $precio, $categoria, $stock) {
        try{
            $query = $this->db->prepare('UPDATE productos SET sku=?, descripcion=?, precio=?, categoria=?, stock=? WHERE id=?');
            $query->execute([$sku, $descripcion, $precio, $categoria, $stock, $id]);
        }
        catch (PDOException $error) {
            $error->getMessage();
            echo $error;
        }
    }    


     
}