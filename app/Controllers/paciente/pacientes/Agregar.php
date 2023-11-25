<?php

namespace App\Controllers\Administrador\pacientes; // Ajusta el namespace según la estructura de tu aplicación

use App\Models\PacienteModel; // Asegúrate de usar el modelo PacienteModel
use App\Models\EspecialidadModel; // Agrega el modelo de especialidades si es necesario
use CodeIgniter\Controller;
use Config\Services;

class Agregar extends Controller
{
    protected $helpers = ['form'];

    public function index()
    {
        $especialidadesModel = new EspecialidadModel();
        $data['especialidades'] = $especialidadesModel->findAll();

        echo view('Administrador/dashboard/include/header');
        echo view('Administrador/dashboard/include/sidebar');
        echo view('Administrador/pacientes/agregar', $data); // Crea una vista "agregar" para mostrar el formulario de agregar pacientes
        echo view('Administrador/dashboard/include/footer');
    }

    public function guardar()
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

        $pacienteModel->agregarPacientes($data); // Agregar el nuevo paciente.

        // Puedes mostrar un mensaje de éxito si lo deseas.
        $session = Services::session();
        $session->setFlashdata('success', 'El paciente se ha agregado correctamente');

        return redirect()->to('/admin/pacientes'); // Redirige a la página de pacientes.
    }
}
