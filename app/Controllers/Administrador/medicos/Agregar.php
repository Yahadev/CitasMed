<?php
namespace App\Controllers\Administrador\medicos;

use App\Models\MedicoModel;
use App\Models\EspecialidadModel;
use CodeIgniter\Controller;
use Config\Services;

class Agregar extends Controller
{
    protected $helpers = ['form'];

    public function index()
    {
        // Obtener los datos de especialidades desde tu modelo
        $especialidadesModel = new EspecialidadModel();
        $data['especialidades'] = $especialidadesModel->findAll();

        echo view('Administrador/dashboard/include/header');
        echo view('Administrador/dashboard/include/sidebar');
        echo view('Administrador/medicos/agregar', $data); // Crea una vista "agregar" para mostrar el formulario de agregar médicos.
        echo view('Administrador/dashboard/include/footer');
    }

    public function guardar()
    {
        $medicoModel = new MedicoModel();

        // No se definen reglas de validación aquí.

        // Los datos del formulario se procesan sin reglas de validación.
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

        $medicoModel->agregarMedicos($data); // Agregar el nuevo médico.

        // Puedes mostrar un mensaje de éxito si lo deseas.
        $session = Services::session();
        $session->setFlashdata('success', 'El médico se ha agregado correctamente');

        return redirect()->to('/admin/medicos'); // Redirige a la página de médicos.
    }
}
