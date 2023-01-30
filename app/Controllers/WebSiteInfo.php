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
        $img = $this->request->getFile('files');
        $newName= $img->getRandomName();
        if ($img->move(ROOTPATH.'/public/uplodes',$newName)) {
            $VisaData['image'] = $newName;
        }
      
        $data = [
            'name' => $this->request->getPost('name'),
             'files' =>$newName,
            'testarea' => $this->request->getPost('testarea'),
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


// delete function start
    public function delete($id)
    {
        $product = new WebInfo();

        $data = $product->find($id);
        $imagesfile = $data['files'];
        if (file_exists("uplodes/".$imagesfile)) {
            unlink("uplodes/".$imagesfile);
        }
        $product->delete($id);
        return redirect()->back()->with( 'status','Image Deletes');
    }
    public function client_edit($id)
    {
        // echo ($id);
        $products = new WebInfo();
        $data['products'] = $products->find($id);
        return redirect('admin/client_edit',$data);
    }
    // public function client_edit($id = null)
    // {
    //     $users = new WebInfo();
    //     $data['users'] = $users->find($id);
    //     return view('admin/client_edit',$data); 
    // }
   
}