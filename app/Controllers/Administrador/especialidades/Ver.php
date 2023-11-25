<?php

namespace App\Controllers\Administrador\especialidades;

use App\Models\EspecialidadModel;
use CodeIgniter\Controller;
use Config\Services;

class Ver extends Controller
{
    public function index($id)
    {
        $especialidadModel = new EspecialidadModel();
        $data['especialidad'] = $especialidadModel->find($id);

        if (empty($data['especialidad'])) {
            // Manejar el caso en el que la especialidad no se encuentra, por ejemplo, redirigiendo a una página de error.
            return redirect()->to('/admin/especialidades/error');
        }

        return view('administrador/especialidades/ver', $data);
    }

    public function Especialidades()
    {
        $especialidadModel = new EspecialidadModel();
        $data['especialidades'] = $especialidadModel->getEspecialidades();

        // Carga otros datos necesarios, como pacientes y médicos, de manera similar.

        echo view('Administrador/dashboard/include/header');
        echo view('Administrador/dashboard/include/sidebar');
        echo view('Administrador/especialidades/ver', $data);
        echo view('Administrador/dashboard/include/footer');
    }

    public function eliminar($id)
    {
        $especialidadModel = new EspecialidadModel();
        $especialidadModel->eliminarEspecialidad($id);

        $session = Services::session();
        $session->setFlashdata('success', 'Los datos se eliminaron correctamente');

        return redirect()->to('/admin/especialidades');
    }
}
