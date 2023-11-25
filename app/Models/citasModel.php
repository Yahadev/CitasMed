<?php


namespace App\Models;

use CodeIgniter\Model;

class CitasModel extends Model
{
    protected $table = 'citas';
    protected $primaryKey = 'id_citas';
    protected $allowedFields = ['paciente', 'fecha', 'hora', 'medico', 'especialidad', 'descripcion', 'estado']; // Campos permitidos para inserción y actualización


    public function getCitas(){
        return $this->findAll();
    }
    
    public function getCitasWithName()
    {
        $builder = $this->db->table($this->table);
        $builder->select('citas.id_citas, citas.paciente AS id_pac, citas.medico AS id_med, citas.especialidad AS id_es, pacientes.nombres AS paciente, citas.fecha, citas.hora, medicos.nombres AS medico, especialidades.nombre AS especialidad, citas.descripcion, citas.estado');
        $builder->join('pacientes', 'pacientes.id_pac = citas.paciente');
        $builder->join('medicos', 'medicos.id_med = citas.medico');
        $builder->join('especialidades', 'especialidades.id_es = citas.especialidad');
        return $builder->get()->getResultArray();
    }
    public function getCitasWithNames($id)
    {
        $builder = $this->db->table($this->table);
        $builder->select('citas.id_citas, citas.paciente AS id_pac, citas.medico AS id_med, citas.especialidad AS id_es, pacientes.nombres AS paciente, citas.fecha, citas.hora, medicos.nombres AS medico, especialidades.nombre AS especialidad, citas.descripcion, citas.estado');
        $builder->join('pacientes', 'pacientes.id_pac = citas.paciente');
        $builder->join('medicos', 'medicos.id_med = citas.medico');
        $builder->join('especialidades', 'especialidades.id_es = citas.especialidad');
        $builder->where('citas.id_citas', $id);
        return $builder->get()->getRowArray();
    }

    public function existeCita($fecha, $hora, $medico)
    {
        $builder = $this->db->table('citas');
        $builder->where('fecha', $fecha);
        $builder->where('hora', $hora);
        $builder->where('medico', $medico);
        return $builder->countAllResults() > 0;
    }


    public function reservarCita($datosCita)
    {

        return $this->insert($datosCita);
    }
    public function actualizarCita($id, $data)
    {
        return $this->set($data)
            ->where('id_citas', $id)
            ->update();
    }
    public function eliminarCita($id)
    {
        return $this->where('id_citas', $id)->delete();
    }
}
