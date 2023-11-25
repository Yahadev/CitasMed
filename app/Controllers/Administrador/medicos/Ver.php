<?php

namespace App\Controllers\Administrador\medicos;

use App\Models\MedicoModel;
use CodeIgniter\Controller;
use Config\Services;

class Ver extends Controller
{
    public function index($id)
    {
        // Aquí puedes cargar los datos del médico usando el modelo MedicoModel en lugar de CitasModel.
        $medicoModel = new MedicoModel();
        $data['medico'] = $medicoModel->find($id);

        if (empty($data['medico'])) {
            // Puedes manejar el caso en el que el médico no se encontró, por ejemplo, redirigiendo a una página de error.
            return redirect()->to('/admin/medicos/error');
        }

        return view('administrador/medicos/ver', $data);
    }

    public function Medicos()
    {
        $medicoModel = new MedicoModel();
        $data['medicos'] = $medicoModel->getMedicosWithNames();

        // Puedes cargar los otros datos necesarios, como pacientes y especialidades, de manera similar.

        echo view('Administrador/dashboard/include/header');
        echo view('Administrador/dashboard/include/sidebar');
        echo view('Administrador/medicos/ver', $data);
        echo view('Administrador/dashboard/include/footer');
    }

    public function eliminar($id)
    {
        $medicoModel = new MedicoModel();
        $medicoModel->delete($id);

        $session = Services::session();
        $session->setFlashdata('success', 'Los datos se eliminaron correctamente');

        return redirect()->to('/admin/medicos');
    }
}
