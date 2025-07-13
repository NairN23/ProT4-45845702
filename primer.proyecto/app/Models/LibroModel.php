<?php
namespace App\Models;

use CodeIgniter\Model;

class LibroModel extends Model
{
    protected $table = 'libros';
    protected $primaryKey = 'id';
    protected $allowedFields = ['titulo', 'autor', 'genero', 'anio_publicacion', 'stock', 'precio'];
    protected $useTimestamps = false;
}
