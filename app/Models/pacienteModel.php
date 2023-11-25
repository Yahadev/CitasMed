<?php

namespace App\Models;

use CodeIgniter\Model;

class PacienteModel extends Model
{
    protected $table = 'pacientes';
    protected $primaryKey = 'id_pac';
    protected $allowedFields = [
        'nombres',
        'apellidos',
        'identificacion',
        'telefono',
        'correo',
        'password'
    ];

    public function agregarPacientes($data)
    {
        return $this->insert($data); // Inserta los datos en la base de datos y retorna true o false
    }
    public function actualizarPacientes($id, $data)
    {
        return $this->set($data)
            ->where('id_pac', $id)
            ->update();
    }
    public function eliminarPacientes($id)
    {
        return $this->where('id_pac', $id)->delete();
    }
    public function obtenerPacientes()
{
    return $this->findAll(); // Retorna todos los registros de la tabla 'pacientes'
}

}


