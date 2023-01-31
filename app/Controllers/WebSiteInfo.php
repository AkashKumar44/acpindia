<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\WebInfo;
  
class WebSiteInfo extends BaseController
{
 
	public function adminiimgindex()  
    {  
        if (isset($_SESSION['admin-login'])) {
            return view('admin/include/header') . view('admin/addimg') . view('admin/include/footer');
        }else{
            return redirect('/');
        } 
    }
//  client view images add start
    public function insert()
    {
        if (isset($_SESSION['admin-login'])) {
            $WebInfo = new WebInfo();
            $img = $this->request->getFile('files');
            $newName= $img->getRandomName();
            if ($img->move(ROOTPATH.'/public/uplodes',$newName)) {
                $VisaData['image'] = $newName;
            }
        
            $data = [
                
                'files' =>$newName,
                'testarea' => $this->request->getPost('testarea'),
            ];

            $result = $WebInfo->insert($data);

            if($result){
                return redirect('admin/client')->with('status','user insert ok');
            }else{
                echo "error";
            }
        }else{
            return redirect('/');
        } 
    }

// client view function start
    public function clientview()  
    {  
        if (isset($_SESSION['admin-login'])) {
            $WebInfo = new WebInfo();
            $data['WebInfo'] = $WebInfo->findAll();
            return view('admin/include/header') . view('admin/client',$data) . view('admin/include/footer');
        }else{
            return redirect('/');
        } 
    }

// delete function start
    public function delete($id)
    {
        if (isset($_SESSION['admin-login'])) {
            $product = new WebInfo();

            $data = $product->find($id);
            $imagesfile = $data['files'];
            if (file_exists("uplodes/".$imagesfile)) {
                unlink("uplodes/".$imagesfile);
            }
            $product->delete($id);
            return redirect()->back()->with( 'status','Image Deletes');
        }else{
            return redirect('/');
        }
    }
// client edit function start
    public function client_edit($id)
    {
        if (isset($_SESSION['admin-login'])) {
            $products = new WebInfo();
            $data['products'] = $products->find($id);
            return view('admin/include/header') . view('admin/client_edit',$data) . view('admin/include/footer');
        }else{
            return redirect('/');
        }
    }
// client update function start
    public function client_update($id)
    {
        if (isset($_SESSION['admin-login'])) {
            $products = new WebInfo();
            $newName  =  $products->find($id);

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

            $products->update($id,$data);
            return redirect()->to('/admin/client')->with( 'status','Image Deletes');
        }else{
            return redirect('/');
        }
    }
}