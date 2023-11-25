<?php

namespace App\Controllers\Administrador\especialidades; // Cambia el namespace al de las especialidades

use App\Models\EspecialidadModel; // Cambia el modelo a EspecialidadModel
use CodeIgniter\Controller;
use Config\Services;

class Editar extends Controller
{
    protected $helpers = ['form'];

    public function index($id)
    {
        $especialidadModel = new EspecialidadModel();
        $especialidad = $especialidadModel->find($id);

        if (!$especialidad) {
            return redirect()->to('/admin/especialidades/error'); // Cambia la redirección al controlador de error de especialidades
        }

        // Obtén los datos de las especialidades desde tu modelo
        $data['especialidades'] = $especialidadModel->findAll();

        // Pasa estos datos a la vista
        $data['especialidad'] = $especialidad;

        echo view('Administrador/dashboard/include/header');
        echo view('Administrador/dashboard/include/sidebar');
        echo view('Administrador/especialidades/editar', $data); // Cambia la vista a la de editar especialidades
        echo view('Administrador/dashboard/include/footer');
    }

    public function guardar($id)
    {
        $especialidadModel = new EspecialidadModel();

        // Los datos del formulario son válidos, procedemos a actualizar la especialidad.
        $request = service('request');

        $data = [
            'nombre' => $request->getPost('nombre') // Actualiza los campos necesarios
        ];

        // Llama al método editarEspecialidad para realizar la actualización
        if ($especialidadModel->editarEspecialidad($id, $data)) {
            // La actualización fue exitosa, mostramos un mensaje de éxito.
            $session = Services::session();
            $session->setFlashdata('success', 'Los datos se actualizaron correctamente');
        } else {
            // Si la actualización falló, muestra un mensaje de error.
            $session = Services::session();
            $session->setFlashdata('error', 'No se pudieron actualizar los datos. Por favor, inténtalo de nuevo.');
        }

        return redirect()->to('/admin/especialidades'); // Redirige a la página de especialidades
    }
}
