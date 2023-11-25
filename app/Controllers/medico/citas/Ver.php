<?php

namespace App\Controllers\medico\citas;

use App\Models\CitasModel;
use CodeIgniter\Controller;
use Config\Services;

class Ver extends Controller
{

    public function index($id)
    {
        $citasModel = new CitasModel();
        $data['citas'] = $citasModel->getCitasWithNames($id);

        if (empty($data['citas'])) {
            // Puedes manejar el caso en el que la cita no se encontró, por ejemplo, redirigiendo a una página de error.
            return redirect()->to('/medico/citas/error');
        }

        return view('medico/citas/ver', $data);
    }

    public function Citas()
{
    $session = Services::session();
    $citasModel = new CitasModel();
    $data['citas'] = $citasModel->getCitasWithName();

    $medicoModel = new \App\Models\MedicoModel();
    $data['medicos'] = $medicoModel->findAll();

    $pacienteModel = new \App\Models\PacienteModel();
    $data['pacientes'] = $pacienteModel->findAll();

    $especialidadModel = new \App\Models\EspecialidadModel();
    $data['especialidades'] = $especialidadModel->findAll();

    $data['medicoLogueado'] = $session->get('medicoLogueado');
 

    echo view('Medico/dashboard/include/header');
    echo view('Medico/dashboard/include/sidebar');
    echo view('Medico/citas/ver', $data);
    echo view('Medico/dashboard/include/footer');
}



    public function eliminar($id)
    {
        $citasModel = new CitasModel();
        $citasModel->eliminarCita($id);

        $session = Services::session();
        $session->setFlashdata('success', 'Los datos se eliminaron correctamente');

        return redirect()->to('/admin/citas');
    }
}
