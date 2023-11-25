<?php

namespace App\Controllers\medico\citas;

use App\Models\CitasModel;
use App\Models\medicoModel;
use App\Models\especialidadModel;
use App\Models\pacienteModel;
use CodeIgniter\Controller;
use Config\Services;

class Editar extends Controller
{
    protected $helpers = ['form'];

    public function index($id)
    {
        $citasModel = new CitasModel();
        $cita = $citasModel->getCitasWithNames($id);

        if (!$cita) {
            return redirect()->to('/medico/citas/error');
        }

        // Obtener los datos de pacientes, médicos, especialidades y estados desde tus modelos
        $pacientesModel = new pacienteModel();
        $data['pacientes'] = $pacientesModel->findAll();

        $medicosModel = new medicoModel();
        $data['medicos'] = $medicosModel->findAll();

        $especialidadesModel = new especialidadModel();
        $data['especialidades'] = $especialidadesModel->findAll();

        // Ahora, pasa estos datos a la vista
        $data['cita'] = $cita;

        echo view('Medico/dashboard/include/header');
        echo view('Medico/dashboard/include/sidebar');
        echo view('Medico/citas/editar', $data);
        echo view('Medico/dashboard/include/footer');
    }

    public function guardar($id)
    {
        $citasModel = new CitasModel();

        // Los datos del formulario son válidos, procedemos a actualizar la cita.
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

        // Llama al método actualizarCita para realizar la actualización
        if ($citasModel->actualizarCita($id, $data)) {
            // La actualización fue exitosa, mostramos un mensaje de éxito.
            $session = Services::session();
            $session->setFlashdata('success', 'Los datos se actualizaron correctamente');
        } else {
            // Si la actualización falló, muestra un mensaje de error.
            $session = Services::session();
            $session->setFlashdata('error', 'No se pudieron actualizar los datos. Por favor, inténtalo de nuevo.');
        }

        return redirect()->to('/medico/citas'); // Redirige a la página de citas.
    }
}
