<?php
require_once 'models/producto.model.php';
require_once 'api/api.view.php';

class ApiController {
    private $model;
    private $view;
    private $data;

    function __construct() {
        $this->model = new ProductoModel();
        $this->view = new ApiView();
    }

    public function getComments($params = null) {  //se modificó nombre función y FUNCIONAAAAA
        $id_producto = $params[':ID'];
        $comentarios = $this->model->getAllComments($id_producto);
        $this->view->response($comentarios, 200);
    }

    public function getOneComment($params = null) {
        $id = $params[':ID'];
        $comment = $this->model->getOneComment($id);

        if ($comment)
            $this->view->response($comment);
        else
        $this->view->response("Comment id=$id not found", 404);
    }

    // public function getCommentProduct($params = null) {
    //     $id_producto = $params[':IDPRODUCTO'];
    //     $comment = $this->model->getCommentProduct($id_producto);

    //     if ($comment)
    //         $this->view->response($comment);
    //     else
    //     $this->view->response("Producto id=$id_producto not found", 404);
    // }

    public function deleteComment($params = null) {
        $id = $params[':ID'];
        $comment = $this->model->getOneComment($id);
        
        if ($comment) {
            $this->model->deleteOneComment($id);
            $this->view->response("Comment id=$id remove successfuly");
        } else {
            $this->view->response("Comment id=$id not found", 404);
        }
       
    }

    /**
     * Leo el body del request
     */
    private function getBody() {
        $data = file_get_contents("php://input");
        return json_decode($data);
    }

    public function addComment($params = null) {
        $data = $this->getBody();

        $comentario = $data->comentario;
        $puntuacion = $data->puntuacion;
        $producto = $data->id_producto;
        $id = $this->model->addComment($comentario, $puntuacion, $producto);
        
        $comentario = $this->model->getOneComment($id);
        if ($comentario)
            $this->view->response($comentario, 200);
        else
            $this->view->response("La tarea no fue creada", 500);
    }

    // public function updateTask($params = null) {
    //     $id = $params[':ID'];
    //     $data = $this->getData();
        
    //     $tarea = $this->model->getTask($id);
    //     if ($tarea) {
    //         $this->model->updatePriorityTask($id, $data->prioridad);
    //         $this->view->response("La tarea fue modificada con exito.", 200);
    //     } else
    //         $this->view->response("La tarea con el id={$id} no existe", 404);
    // }
}
