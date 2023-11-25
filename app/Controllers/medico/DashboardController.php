<?php

namespace App\Controllers\medico;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $session = \Config\Services::session();
        // Obtén el ID del paciente logueado desde la sesión
        $id_medico = $session->get('medicoLogueado')['id_med'];
        $citasModel = new \App\Models\CitasModel();
        $citasMedico = $citasModel->where('medico', $id_medico)->findAll();
        $totalCitas = count($citasMedico);
        $data['totalCitas'] = $totalCitas;

        echo view('Medico/dashboard/include/header');
        echo view('Medico/dashboard/include/sidebar');
        echo view('Medico/dashboard/dashboard',$data);
        echo view('Medico/dashboard/include/footer');
    }
    
}
