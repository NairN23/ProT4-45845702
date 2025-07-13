<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model {
  protected $table = 'usuarios';
  protected $primaryKey = 'id';
  protected $allowedFields = ['usuario', 'nombre', 'apellido', 'email', 'pass', 'perfil', 'id_baja'];
  protected $useTimestamps = false;
}