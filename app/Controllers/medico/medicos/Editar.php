<?php

namespace App\Controllers\medico\medicos;

use App\Models\MedicoModel;
use App\Models\EspecialidadModel;
use CodeIgniter\Controller;
use Config\Services;

class Editar extends Controller
{
    protected $helpers = ['form'];

    public function index($id)
    {
        $medicoModel = new MedicoModel();
        $medico = $medicoModel->find($id);

        if (!$medico) {
            return redirect()->to('/admin/medicos/error');
        }

        // Obtener los datos de especialidades desde tu modelo
        $especialidadesModel = new EspecialidadModel();
        $data['especialidades'] = $especialidadesModel->findAll();

        // Ahora, pasa estos datos a la vista
        $data['medico'] = $medico;

        echo view('Medico/dashboard/include/header');
        echo view('Medico/dashboard/include/sidebar');
        echo view('Medico/medicos/editar', $data);
        echo view('Medico/dashboard/include/footer');
    }

    public function guardar($id)
    {
        $medicoModel = new MedicoModel();

        // Los datos del formulario son válidos, procedemos a actualizar el médico.
        $request = service('request');

        $data = [
            'nombres' => $request->getPost('nombres'),
            'apellidos' => $request->getPost('apellidos'),
            'identificacion' => $request->getPost('identificacion'),
            'especialidad' => $request->getPost('especialidad'),
            'telefono' => $request->getPost('telefono'),
            'correo' => $request->getPost('correo'),
            'password' => password_hash(strval($request->getPost('password')), PASSWORD_DEFAULT)
        ];

        // Llama al método actualizarMedicos para realizar la actualización
        if ($medicoModel->actualizarMedicos($id, $data)) {
            // La actualización fue exitosa, mostramos un mensaje de éxito.
            $session = Services::session();
            $session->setFlashdata('success', 'Los datos se actualizaron correctamente');
        } else {
            // Si la actualización falló, muestra un mensaje de error.
            $session = Services::session();
            $session->setFlashdata('error', 'No se pudieron actualizar los datos. Por favor, inténtalo de nuevo.');
        }

        return redirect()->to('/medico/medicos'); // Redirige a la página de médicos.
    }
}
