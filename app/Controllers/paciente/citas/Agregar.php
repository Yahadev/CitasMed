<?php

namespace App\Controllers\paciente\citas;

use App\Models\CitasModel;
use App\Models\medicoModel;
use App\Models\especialidadModel;
use App\Models\pacienteModel;
use CodeIgniter\Controller;
use Config\Services;

class Agregar extends Controller
{
    public $session;
    public function __construct()
    {
        $this->session = \config\services::session();
    }
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

        $request = service('request');
        $fecha = $request->getPost('fecha');
        $hora = $request->getPost('hora');
        $medico = $request->getPost('medico');

        // Verificar si ya existe una cita con la misma fecha, hora y médico
        if ($citasModel->existeCita($fecha, $hora, $medico)) {
            // Mostrar mensaje de error
           
            $this->session->setFlashdata('nocita', true);
            return redirect()->to('/');
        }

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

        return redirect()->to('/paciente/citas'); // Redirige a la página de citas.
    }
}
