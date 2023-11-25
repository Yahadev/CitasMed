<?php

namespace App\Controllers\medico\medicos;

use App\Models\MedicoModel;
use CodeIgniter\Controller;
use Config\Services;

class Ver extends Controller
{
    public function Medicos()
    {
        $session = Services::session();
        $medicoModel = new MedicoModel();
        $data['medicos'] = $medicoModel->getMedicosWithNames();

        $data['medicoLogueado'] = $session->get('medicoLogueado');


        echo view('Medico/dashboard/include/header');
        echo view('Medico/dashboard/include/sidebar');
        echo view('Medico/medicos/ver', $data);
        echo view('Medico/dashboard/include/footer');
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
