<?php

namespace App\Models;

use CodeIgniter\Model;

class MedicoModel extends Model
{
    protected $table = 'medicos';
    protected $primaryKey = 'id_med';

    protected $allowedFields = [
        'nombres',
        'apellidos',
        'identificacion',
        'especialidad',
        'telefono',
        'correo',
        'password',
        'fecha_registro'
    ];

    public function getMedicosWithNames()
    {
        $builder = $this->db->table('medicos');
        $builder->select('medicos.id_med, medicos.nombres, medicos.apellidos, medicos.identificacion, especialidades.nombre AS especialidad, medicos.telefono, medicos.correo, medicos.password, medicos.fecha_registro');
        $builder->join('especialidades', 'especialidades.id_es = medicos.especialidad');
        $medicos = $builder->get()->getResultArray();
        return $medicos;
    }

    public function agregarMedicos($data)
    {

        return $this->insert($data);
    }
    public function actualizarMedicos($id, $data)
    {
        return $this->set($data)
            ->where('id_med', $id)
            ->update();
    }
    
    public function eliminarMedicos($id)
    {
        return $this->where('id_med', $id)->delete();
    }
    public function obtenerMedicos()
    {
        return $this->findAll(); 
    }
}
