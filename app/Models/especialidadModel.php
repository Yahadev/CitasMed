<?php


namespace App\Models;

use CodeIgniter\Model;

class EspecialidadModel extends Model
{
    protected $table = 'especialidades';
    protected $primaryKey = 'id_es';
    protected $allowedFields = ['nombre']; 
    public function getEspecialidades()
    {
        return $this->findAll();
    }

    public function agregarEspecialidad($data)
    {
        return $this->insert($data);
    }

    public function editarEspecialidad($id, $data)
{
    return $this->update($id, $data);
}


    public function eliminarEspecialidad($id)
    {
        return $this->delete($id);
    }
    public function obtenerEspecialidades()
    {
        return $this->findAll(); // Retorna todos los registros de la tabla 'pacientes'
    }
}
