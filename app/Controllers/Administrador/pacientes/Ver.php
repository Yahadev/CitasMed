<?php

namespace App\Controllers\Administrador\pacientes; // Ajusta el namespace según la estructura de tu aplicación

use App\Models\PacienteModel; // Asegúrate de usar el modelo PacienteModel
use CodeIgniter\Controller;
use Config\Services;

class Ver extends Controller
{
    public function index($id)
    {
        // Carga los datos del paciente utilizando el modelo PacienteModel.
        $pacienteModel = new PacienteModel();
        $data['paciente'] = $pacienteModel->find($id);

        if (empty($data['paciente'])) {
            // Puedes manejar el caso en el que el paciente no se encontró, por ejemplo, redirigiendo a una página de error.
            return redirect()->to('/admin/pacientes/error');
        }

        return view('administrador/pacientes/ver', $data);
    }

    public function Pacientes()
    {
        $pacienteModel = new PacienteModel();
        $data['pacientes'] = $pacienteModel->findAll(); // Obtén todos los pacientes

        // Puedes cargar otros datos necesarios, como médicos y especialidades, de manera similar.

        echo view('Administrador/dashboard/include/header');
        echo view('Administrador/dashboard/include/sidebar');
        echo view('Administrador/pacientes/ver', $data); // Asegúrate de utilizar la vista correcta
        echo view('Administrador/dashboard/include/footer');
    }

    public function eliminar($id)
    {
        $pacienteModel = new PacienteModel();
        $pacienteModel->delete($id);

        $session = Services::session();
        $session->setFlashdata('success', 'Los datos se eliminaron correctamente');

        return redirect()->to('/admin/pacientes'); // Ajusta la redirección a la página de pacientes
    }
}
