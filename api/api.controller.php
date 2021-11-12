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

    public function getAllComments($params = null) {
        $comentarios = $this->model->getAllComments();
        $this->view->response($comentarios);
    }

    // public function getOne($params = null) {
    //     $id = $params[':ID'];
    //     $task = $this->model->getTask($id);

    //     if ($task)
    //         $this->view->response($task);
    //     else
    //     $this->view->response("Task id=$id not found", 404);
    // }

    // public function remove($params = null) {
    //     $id = $params[':ID'];
    //     $task = $this->model->getTask($id);
        
    //     if ($task) {
    //         $this->model->deleteTask($id);
    //         $this->view->response("Task id=$id remove successfuly");
    //     } else {
    //         $this->view->response("Task id=$id not found", 404);
    //     }
       
    // }

    // /**
    //  * Leo el body del request
    //  */
    // private function getBody() {
    //     $data = file_get_contents("php://input");
    //     return json_decode($data);
    // }

    // public function addTask($params = null) {
    //     $data = $this->getBody();

    //     $titulo = $data->titulo;
    //     $descripcion = $data->descripcion;
    //     $prioridad = $data->prioridad;

    //     $id = $this->model->insertTask($titulo, $descripcion, $prioridad);
        
    //     $task = $this->model->getTask($id);
    //     if ($task)
    //         $this->view->response($task, 200);
    //     else
    //         $this->view->response("La tarea no fue creada", 500);
    // }

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
