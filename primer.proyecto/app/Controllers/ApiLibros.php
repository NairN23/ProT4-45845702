<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\LibroModel;

class ApiLibros extends ResourceController
{
    protected $modelName = 'App\Models\LibroModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $libro = $this->model->find($id);
        return $libro ? $this->respond($libro) : $this->failNotFound("Libro con ID $id no encontrado");
    }

    public function create()
    {
        $data = $this->request->getJSON(true);
        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON(true);
        $updated = $this->model->update($id, $data);
        return $updated ? $this->respond(['message' => 'Libro actualizado']) : $this->failNotFound("Libro con ID $id no encontrado");
    }

    public function delete($id = null)
    {
        $deleted = $this->model->delete($id);
        return $deleted ? $this->respondDeleted(['message' => 'Libro eliminado']) : $this->failNotFound("Libro con ID $id no encontrado");
    }
}
