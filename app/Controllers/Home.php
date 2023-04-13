<?php namespace App\Controllers;
use codeIgnite\Controller;
use App\Models\UserModel;
use App\Models\WebInfo;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        
    }
    public function index_record()
    {
        $usermodel = new UserModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'number' => $this->request->getPost('number'),
        ];
        $usermodel->save($data);
        return redirect('/')->with('status','user insert ok');
    }

    
    public function login_user()
    {
        $usermodel = new UserModel();
        $userdata = $usermodel->where('email',$this->request->getvar('email'))->first();
            if($userdata != null)
            { 
                $_SESSION['user-login']=true;
                $_SESSION['user-id']=$userdata['id'];
                return redirect('userlogin')->with('status','user insert ok');
            }
            else{
                // return view('userlogin');
                return redirect('/')->with('status','user insert ok');
            }
    }
    public function userqu()
    {
        
        
        $usermodel = new UserModel();
        
        $data = ['commet' => esc($this->request->getPost('commet'))];
        $usermodel->where('id', $_SESSION['user-id'])->set($data)->update();
        return redirect('userlogin')->with('status','user insert ok');
    }
   
    public function logout()
    {   
        session()->destroy();
        return view('/');
    } 
    public function userlogin()
    {
        // fetch banner image
        $webinfo = model('App\Models\WebInfo');
        $bannerQuery = $webinfo->orderBy('id', 'DESC')->first();
        return view('userlogin', ['bannerImage' => $bannerQuery['file']]);
    }
  
    public function userlist()
    {
        return view('admin/include/header') . view('admin/userlist') . view('admin/include/footer');
    }
     // ulser list show
     public function indexw()  
     {  
       $usermodel = new UserModel();
       $data['usermodel'] = $usermodel->findAll();
       return view('admin/include/header') . view('admin/userlist',$data) . view('admin/include/footer');
     }  
     public function usercommet()  
     {  
       $usermodel = new UserModel();
       $data['usermodel'] = $usermodel->findAll();
       return view('admin/include/header') . view('admin/usercommet',$data) . view('admin/include/footer');
     }  
     

   
}
