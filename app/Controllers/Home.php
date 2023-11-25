<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\EspecialidadModel;
use App\Models\PacienteModel;
use App\Models\MedicoModel;

class Home extends BaseController
{
    public $session;

    public function __construct()
    {
        $this->session = \config\services::session();
        helper('form');
    }

    public function index()
    {

        $data = [];

        // Verificar si el paciente está logueado
        $data['pacienteLogueado'] = $this->session->has('pacienteLogueado');

        // Obtener los pacientes utilizando el modelo
        $pacienteModel = new PacienteModel();
        $data['pacientes'] = $pacienteModel->obtenerPacientes();
        // Obtener los medicos  utilizando el modelo
        $medicoModel = new MedicoModel();
        $data['medicos'] = $medicoModel->obtenerMedicos();
        // Obtener las especialidades  utilizando el modelo
        $especialidadModel = new EspecialidadModel();
        $data['especialidades'] = $especialidadModel->obtenerEspecialidades();

        return view('pagina_principal', $data);
        
    }
    public function inicio()
    {
        $data['pacienteLogueado'] = $this->session->has('pacienteLogueado');
        return view('acerca_de_nosotros',$data);
        
    }
    


    public function ver()
    {
        return view('login');
    }

    public function login()
    {
        $correo = $this->request->getPost('correo');
        $password = $this->request->getPost('password');

        if (!is_string($password)) {
            $this->session->setFlashdata('nologin', true);
            return redirect()->route('inicio/login');
        }

        $usuarioModel = new PacienteModel();
        $adminModel = new AdminModel();
        $medicoModel = new MedicoModel();


        $usuarioResult = $usuarioModel->getWhere(['correo' => $correo]);
        $adminResult = $adminModel->getWhere(['correo' => $correo]);
        $medicoResult = $medicoModel->getWhere(['correo' => $correo]);


        $usuario = $usuarioResult->getRow();
        $admin = $adminResult->getRow();
        $medico = $medicoResult->getRow();

        if ($usuario && password_verify($password, $usuario->password)) {
            $datos = [
                'id_pac' => $usuario->id_pac,
                'usuario' => $usuario->nombres . ' ' . $usuario->apellidos,
                'correo' => $usuario->correo,
            ];

            $this->session->set('pacienteLogueado', $datos);
            $this->session->set($datos);
            return redirect()->route('paciente/dashboard');
        }

        if ($admin && password_verify($password, $admin->password)) {
            $datos = [
                'id' => $admin->id,
                'usuario' => $admin->usuario,
                'correo' => $admin->correo,
            ];
            $this->session->set($datos);
            return redirect()->route('admin/dashboard');
        }

        if ($medico && password_verify($password, $medico->password)) {
            $datos = [
                'id_med' => $medico->id_med,
                'usuario' => $medico->nombres . ' ' . $medico->apellidos,
                'correo' => $medico->correo,
            ];
            $this->session->set('medicoLogueado', $datos);
            $this->session->set($datos);
            return redirect()->route('medico/dashboard');
        }

        $this->session->setFlashdata('nologin', true);

        return redirect()->route('inicio/login');
    }

    public function cerrarSesion()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('inicio/login');
    }

    public function registrar()
    {
        return view('/registrar');
    }

    public function guardar()
    {
        $nombres = $this->request->getPost('nombres');
        $apellidos = $this->request->getPost('apellidos');
        $identificacion = $this->request->getPost('identificacion');
        $telefono = $this->request->getPost('telefono');
        $correo = $this->request->getPost('correo');
        $password = $this->request->getPost('password');
        $cpassword = $this->request->getPost('cpassword'); // Agrega esta línea para obtener cpassword

        if ($password !== $cpassword) {
            // Las contraseñas no coinciden, puedes mostrar un mensaje de error.
            $this->session->setFlashdata('password_mismatch', true);
            return redirect()->route('registrar');
        }

        $usuarioModel = model('usuario');
        $usuarioModel = new PacienteModel();
        $datos = [
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'identificacion' => $identificacion,
            'telefono' => $telefono,
            'correo' => $correo,
            'password' => password_hash(strval($password), PASSWORD_DEFAULT)
        ];

        $resultado = $usuarioModel->getWhere(['correo' => $correo]);

        if (!$resultado->getResult()) {
            $resultado = $usuarioModel->insert($datos);
            if ($resultado) {
                return redirect()->route('paciente/dashboard');
            }
        }

        return redirect()->route('registrar');
    }
}
