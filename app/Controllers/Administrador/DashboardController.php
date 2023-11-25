<?php

namespace App\Controllers\Administrador;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $pacienteModel = new \App\Models\PacienteModel();
        $totalPacientes = $pacienteModel->countAll();
        $data['totalPacientes'] = $totalPacientes;

        $citasModel = new \App\Models\CitasModel();
        $totalCitas = $citasModel->countAll();
        $data['totalCitas'] = $totalCitas;

        $especialidadModel = new \App\Models\especialidadModel();
        $totalEspecialidades = $especialidadModel->countAll();
        $data['totalEspecialidades'] = $totalEspecialidades;

        $medicoModel = new \App\Models\MedicoModel();
        $totalMedicos = $medicoModel->countAll();
        $data['totalMedicos'] = $totalMedicos;

        echo view('Administrador/dashboard/include/header');
        echo view('Administrador/dashboard/include/sidebar');
        echo view('Administrador/dashboard/dashboard',$data);
        echo view('Administrador/dashboard/include/footer');
    }
    
}
