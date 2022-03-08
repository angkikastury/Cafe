<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends Controller{
    /**
     * Instance of the main Request objec.
     * @var HTTP\IncomingRequest
     */
    protected $request,$users;

    function __construct()
    {
        $this->user = new UserModel();
    }
    public function tampil()
    {
        #code...
        $data['data']= $this->user->findAll();
        return view('UserList', $data);
    }
    public function simpan()
    {
        #code...
        $data = array(
            'nama'=>$this->request->getPost('nama'),
            'username'=>$this->request->getPost('username'),
            'password'=>password_hash ($this->request->getPost('password'),PASSWORD_DEFAULT),
            'role'=>$this->request->getPost('role'),

        );
        $this->user->insert($data);
        return redirect('user')->with('success','Data berhasil disimpan');
    }
    public function delete($id)
    {
        #code...
        $this->user->delete($id);
        return redirect('user')->with('success','Data berhasil dihapus');
       
    }
    public function edit($id){
        $pass = $this->request->getPost('password');
        if(empty($pass)){
            $data = array(
                'nama'=> $this->request->getPost('nama'),
                'username'=> $this->request->getPost('username'),
                'role'=> $this->request->getPost('role')
        );
        }else{
            $data = array(
            'nama' => $this->request->getPost('nama'),
            'username'=> $this->request->getPost('username'),
            'password'=>password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
            'role'=>$this->request->getPost('role')
        );
       
    }
    $this->user->update($id,$data);
    return redirect('user')->with('success','Data berhasil Diedit');
}
public function tlogin()
{
    return view('login');

}
public function login()
{
    $session = session();
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $data = $this->user->where('username', $username)->first();
    if ($data){
        $pass = $data['password'];
        $cek_pass = password_verify($password,$pass);
        if ($cek_pass) {
            $ses_data = [
                'id'=> $data['id'],
                'username'=>$data['username'],
                'role'=>$data['role'],
            ];
            $session->set($ses_data);
            return redirect()->to('/dashboard');

        }else {
            $session->setFlashdata('msg', 'password keliru ditemukan');
            return redirect('login');
        }
    } else {
        $session->setFlashdata('msg', 'username tidak ditemukan');
        return redirect('login');
    }
}
public function logout()
    {
        # code... 
        $session =session();
        $session->destroy();
        return redirect('login');
    }
    public function show($id)
    {
        #code...
    }
}

