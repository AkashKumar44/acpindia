<?= $this->section('content')?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>ACPIndia</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
</head>

<body style="background-color: #d7f9e1;">
   <nav class="navbar navbar-expand-lg ">
      <div class="container">
         <a class="navbar-brand col-8 col-md-12 col-lg-4 mx-auto " href="<?= base_url() ?>">
            <img class="img-fluid " src="http://rxeventslive.in/ACPIndia/images/acl.png">
        </a>
      </div>
   </nav>
    <main role="main">
        <div class="container-fluid">
            <div class="row main_banner" >
                <div class="my-3 offset-sm-1 col-sm-10 offset-lg-1 col-lg-5 offset-lg-0 col-xl-6 offset-xl-1 d-flex ">           
                    <section id="carouselExampleInterval" class="carousel slide w-100 card bg-light shadow" data-ride="carousel">
                        <div class="card-body">
                           <img src="http://rxeventslive.in/ACPIndia/images/event_banner/202209141644-ACP%20Case%20File_page-0001.jpg" class="d-block w-100" alt="...">
                        </div>
                    </section>
                </div>
                  <div class="my-lg-3 offset-sm-1 col-sm-10 col-lg-5 offset-lg-0 col-xl-4   ">
                     <div class="card bg-light shadow my-auto">
                        <div class="card-body">
                           <div class="card border-top-0">
                              <div class="tab-content card-body">
                                    <div class="tab-pane active" >
                                       <h6 style="padding-bottom: 10px;">If already registered, please login here:</h6>
                                       <form action="<?php echo base_url('Home/login_user'); ?>" method="POST">
                                          <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email address" name="email"   required />
                                          </div>
                                          <div class="d-flex mt-3">
                                             <input type="submit" class="btn btn-primary px-5 p-2" value="Log In">
                                          </div>
                                       </form>
                                       <br>
                                       <h6 style="padding-bottom: 10px;">New users please register here:</h6>
                                       <?php if(isset($validation)):?>
                                          <div class="alert alert-warning">
                                             <?= $validation->listErrors() ?>
                                          </div>
                                          <?php endif;?>
                                       <form action="<?php echo base_url('Home/index_record'); ?>" method="post">
                                          <div class="row">
                                             <div class="col">
                                                <div class="form-group">
                                                   <input type="name" class="form-control"   placeholder="Full Name" required name="name" />
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col">
                                                <div class="form-group">
                                                   <input type="email" placeholder="Email address"  class="form-control" required name="email" />
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col">
                                                <div class="form-group">
                                                   <input type="number" placeholder="Mobile Number" maxlength="10" required  class="form-control" name="number"  />
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex mt-3">
                                             <button type="submit" class="btn btn-primary px-5 p-2">Register for live webinar</button>
                                          </div>
                                       </form>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
   </main>
</body>
</html>