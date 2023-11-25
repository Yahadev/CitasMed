<?php

namespace App\Controllers\Administrador\pacientes; // Ajusta el namespace según la estructura de tu aplicación

use App\Models\PacienteModel; // Asegúrate de usar el modelo PacienteModel
use CodeIgniter\Controller;
use Config\Services;

class Editar extends Controller
{
    protected $helpers = ['form'];

    public function index($id)
    {
        
        $pacienteModel = new PacienteModel();
        $paciente = $pacienteModel->find($id);

        if (empty($paciente)) {

            return redirect()->to('/admin/pacientes/error');
        }
        $data['paciente'] = $paciente;

        echo view('Administrador/dashboard/include/header');
        echo view('Administrador/dashboard/include/sidebar');
        echo view('Administrador/pacientes/editar', $data); // Asegúrate de utilizar la vista correcta
        echo view('Administrador/dashboard/include/footer');
    }

    public function guardar($id)
    {
        $pacienteModel = new PacienteModel();

        $request = service('request');

        $data = [
            'nombres' => $request->getPost('nombres'),
            'apellidos' => $request->getPost('apellidos'),
            'identificacion' => $request->getPost('identificacion'),
            'telefono' => $request->getPost('telefono'),
            'correo' => $request->getPost('correo'),
            'password' => password_hash(strval($request->getPost('password')), PASSWORD_DEFAULT)
        ];

        // Llama al método correspondiente en el modelo para realizar la actualización de pacientes.
        if ($pacienteModel->actualizarPacientes($id, $data)) {
            // La actualización fue exitosa, muestra un mensaje de éxito.
            $session = Services::session();
            $session->setFlashdata('success', 'Los datos se actualizaron correctamente');
        } else {
            // Si la actualización falló, muestra un mensaje de error.
            $session = Services::session();
            $session->setFlashdata('error', 'No se pudieron actualizar los datos. Por favor, inténtalo de nuevo.');
        }

        return redirect()->to('/admin/pacientes'); // Redirige a la página de pacientes.
    }
}
