<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Verifica si el usuario está autenticado
        if (!session()->has('id_pac') && !session()->has('id') && !session()->has('id_med')) {
            return redirect()->to('inicio/login');
        }

        // Verifica el tipo de usuario
        $isPaciente = session()->has('id_pac');
        $isAdmin = session()->has('id');
        $isMedico = session()->has('id_med');

        // Obtiene la parte de la URL que representa el tipo de usuario
        $segment = $request->uri->getSegment(1);

        // Comprueba si el tipo de usuario coincide con la parte de la URL
        if (($isPaciente && $segment === 'paciente') ||
            ($isAdmin && $segment === 'admin') ||
            ($isMedico && $segment === 'medico')
        ) {
            // El usuario tiene acceso al panel correspondiente.
        } else {
            // Redirige al panel adecuado del usuario
            if ($isPaciente) {
                return redirect()->to('paciente/dashboard');
            } elseif ($isAdmin) {
                return redirect()->to('admin/dashboard');
            } elseif ($isMedico) {
                return redirect()->to('medico/dashboard');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Puedes realizar acciones después de que la ruta se ejecute
    }
}
