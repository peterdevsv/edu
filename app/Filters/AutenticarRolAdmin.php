<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AutenticarRolAdmin implements FilterInterface
{
    public function before(RequestInterface $request)
    {
       $session = session();
       if ($session->rolId !='1') {
       	return redirect('login');
       }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}