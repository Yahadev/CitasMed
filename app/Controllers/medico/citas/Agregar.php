<?php
namespace App\Controllers\Administrador\citas;

use App\Models\CitasModel;
use App\Models\medicoModel;
use App\Models\especialidadModel;
use App\Models\pacienteModel;
use CodeIgniter\Controller;
use Config\Services;

class Agregar extends Controller
{
    protected $helpers = ['form'];

    public function index()
    {
        // Obtener los datos de pacientes, médicos, especialidades y estados desde tus modelos
        $pacientesModel = new pacienteModel();
        $data['pacientes'] = $pacientesModel->findAll();

        $medicosModel = new medicoModel();
        $data['medicos'] = $medicosModel->findAll();

        $especialidadesModel = new especialidadModel();
        $data['especialidades'] = $especialidadesModel->findAll();

        echo view('Administrador/dashboard/include/header');
        echo view('Administrador/dashboard/include/sidebar');
        echo view('Administrador/citas/agregar', $data); // Debes crear una vista "agregar" para mostrar el formulario de agregar citas.
        echo view('Administrador/dashboard/include/footer');
    }

    public function guardar()
    {
        $citasModel = new CitasModel();

        // No se definen reglas de validación aquí.

        // Los datos del formulario se procesan sin reglas de validación.
        $request = service('request');

        $data = [
            'paciente' => $request->getPost('paciente'),
            'fecha' => $request->getPost('fecha'),
            'hora' => $request->getPost('hora'),
            'medico' => $request->getPost('medico'),
            'especialidad' => $request->getPost('especialidad'),
            'descripcion' => $request->getPost('descripcion'),
            'estado' => $request->getPost('estado'),
        ];

        $citasModel->insert($data); // Agregar la nueva cita.

        // Puedes mostrar un mensaje de éxito si lo deseas.
        $session = Services::session();
        $session->setFlashdata('success', 'La cita se ha agregado correctamente');

        return redirect()->to('/admin/citas'); // Redirige a la página de citas.
    }
}
