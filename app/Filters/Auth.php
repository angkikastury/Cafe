<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(! session()->get('role')){
            return redirect('login');
        }else{
            
        }
    }
    //---------------------------------------------------------------------------------------------
    public function after(RequestInterFace $request,ResponseInterFace $response, $arguments = null)
    {
        //do something here
    }
}