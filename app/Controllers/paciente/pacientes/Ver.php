<?php

namespace App\Controllers\paciente\pacientes; 
use App\Models\PacienteModel; 
use CodeIgniter\Controller;
use Config\Services;

class Ver extends Controller
{

    public function Pacientes()
{
    $session = Services::session(); 
    $pacienteModel = new PacienteModel();
    $data['pacientes'] = $pacienteModel->findAll(); // Obtén todos los pacientes

    //  datos del paciente logueado desde la sesión
    $data['pacienteLogueado'] = $session->get('pacienteLogueado'); 

    echo view('paciente/dashboard/include/header');
    echo view('paciente/dashboard/include/sidebar');
    echo view('paciente/pacientes/ver', $data); 
    echo view('paciente/dashboard/include/footer');
}


    public function eliminar($id)
    {
        $pacienteModel = new PacienteModel();
        $pacienteModel->delete($id);

        $session = Services::session();
        $session->setFlashdata('success', 'Los datos se eliminaron correctamente');

        return redirect()->to('/paciente/pacientes'); 
    }
}
