<?php

namespace App\Controllers\Administrador\citas;

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
            return redirect()->to('/admin/citas/error');
        }

        return view('administrador/citas/ver', $data);
    }

    public function Citas()
    {
        $citasModel = new CitasModel();
        $data['citas'] = $citasModel->getCitasWithName();

        $medicoModel = new \App\Models\MedicoModel();
        $data['medicos'] = $medicoModel->findAll();

        $pacienteModel = new \App\Models\PacienteModel();
        $data['pacientes'] = $pacienteModel->findAll();

        $especialidadModel = new \App\Models\EspecialidadModel();
        $data['especialidades'] = $especialidadModel->findAll();

        echo view('Administrador/dashboard/include/header');
        echo view('Administrador/dashboard/include/sidebar');
        echo view('Administrador/citas/ver', $data);
        echo view('Administrador/dashboard/include/footer');
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
