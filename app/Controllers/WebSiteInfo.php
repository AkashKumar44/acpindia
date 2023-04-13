<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\WebInfo;
  
class WebSiteInfo extends BaseController
{
 
	public function adminiimgindex()  
    {  
      return view('admin/include/header') . view('admin/addimg') . view('admin/include/footer');
    } 

//  client view images add start
    public function insert()
    {
        $WebInfo = new WebInfo();
        $img = $this->request->getFile('file');
        $newName= $img->getRandomName();
        if ($img->move(ROOTPATH.'/public/uplodes',$newName)) {
            $VisaData['image'] = $newName;
        }
      
        $data = [
            'name' => $this->request->getPost('name'),
             'file' =>$newName,
            'textarea' => $this->request->getPost('textarea'),
        ];

        $result = $WebInfo->insert($data);

        if($result){
            return redirect('admin/client')->with('status','user insert ok');
        }else{
            echo "error";
        }
    }

    // client view function start
    public function clientview()  
    {  
      $WebInfo = new WebInfo();
      $data['WebInfo'] = $WebInfo->findAll();
      return view('admin/include/header') . view('admin/client',$data) . view('admin/include/footer');
    }  


}