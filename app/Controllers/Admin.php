<?php namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\AdminLogin;
  
class Admin extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }

   

    //   admin login
    public function admin_login()
    {
        $adminlogin = new AdminLogin();

            if($adminlogin->where('email',$this->request->getvar('email'))->first() != null)
            { 
                $_SESSION['admin-login']=true;
                return redirect('admin')->with('status','user insert ok');
            }
            else{
                // return view('userlogin');
                return redirect('admin/login')->with('status','user insert ok');
            }
    }

    public function admin()
    {
        if (isset($_SESSION['admin-login'])) {
            return view('admin/include/header') . view('admin/index') . view('admin/include/footer');
        } else {
           return redirect()->to(base_url());
            // echo "Hello";
        }
    }

    public function adminLogout()
    {
        session_destroy();
        return redirect()->to('admin/login');
    }

   

}