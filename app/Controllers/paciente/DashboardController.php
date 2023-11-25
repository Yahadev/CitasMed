<?php

namespace App\Controllers\paciente;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $session = \Config\Services::session();
        // Obtén el ID del paciente logueado desde la sesión
        $id_paciente = $session->get('pacienteLogueado')['id_pac'];
        $citasModel = new \App\Models\CitasModel();
        $citasPaciente = $citasModel->where('paciente', $id_paciente)->findAll();
        $totalCitas = count($citasPaciente);

        $data['totalCitas'] = $totalCitas;

        echo view('paciente/dashboard/include/header');
        echo view('paciente/dashboard/include/sidebar');
        echo view('paciente/dashboard/dashboard', $data);
        echo view('paciente/dashboard/include/footer');
    }
}
