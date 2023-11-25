<?php

namespace App\Controllers\paciente\citas;

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
            return redirect()->to('/paciente/citas/error');
        }

        return view('paciente/citas/ver', $data);
    }

    public function Citas()
{
    $session = Services::session();
    $citasModel = new CitasModel();
    $data['citas'] = $citasModel->getCitasWithName();

    //  datos del paciente logueado desde la sesión
    $data['pacienteLogueado'] = $session->get('pacienteLogueado'); 

    echo view('paciente/dashboard/include/header');
    echo view('paciente/dashboard/include/sidebar');
    echo view('paciente/citas/ver', $data);
    echo view('paciente/dashboard/include/footer');
}


    public function eliminar($id)
    {
        $citasModel = new CitasModel();
        $citasModel->eliminarCita($id);

        $session = Services::session();
        $session->setFlashdata('success', 'Los datos se eliminaron correctamente');

        return redirect()->to('/paciente/citas');
    }
}
