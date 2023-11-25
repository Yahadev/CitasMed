<?php
namespace App\Controllers\Administrador\especialidades;

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
        echo view('Administrador/especialidades/agregar', $data); // Crea una vista "agregar" para mostrar el formulario de agregar especialidades.
        echo view('Administrador/dashboard/include/footer');
    }

    public function guardar()
    {
        $especialidadModel = new EspecialidadModel();

        // No se definen reglas de validación aquí.

        // Los datos del formulario se procesan sin reglas de validación.
        $request = service('request');

        $data = [
            'nombre' => $request->getPost('nombre'), // Cambia el campo a "nombre"
        ];

        $especialidadModel->agregarEspecialidad($data); // Agregar la nueva especialidad.

        // Puedes mostrar un mensaje de éxito si lo deseas.
        $session = Services::session();
        $session->setFlashdata('success', 'La especialidad se ha agregado correctamente');

        return redirect()->to('/admin/especialidades'); // Redirige a la página de especialidades.
    }
}
