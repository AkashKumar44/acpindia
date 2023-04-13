

<!DOCTYPE html>
<html lang="en">

<head>
   <title>ACPIndia</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <meta name="theme-color" content="#563d7c">
   
</head>

<body style="background-color: #d7f9e1;">
   <nav class="navbar navbar-expand-lg ">
      <div class="container">
         <a class="navbar-brand col-8 col-md-6 col-lg-4 mx-auto" href="<?= base_url() ?>">
         <img class="img-fluid " src="http://rxeventslive.in/ACPIndia/images/acl.png">
         </a>
      </div>
   </nav>
    <main role="main">
        <div class="container-fluid">
            <div class="row ">
                <div class="my-3   col-xl-8  d-flex flex-direction-column">
                    <section id="carouselExampleInterval" class="carousel slide w-100 card bg-light shadow" data-ride="carousel">
                        <div class="carousel-inner card-body">
                            <!-- <div class="carousel-item active" data-interval="10000"> -->
                                <img src="<?=base_url('uplodes')."/".$img = (isset($bannerImage)) ? $bannerImage : '' ?>" alt="banner image"  height="550" width="100%">
                            <!-- <iframe width="100%" height="550px" src="https://www.youtube.com/embed/Vg80dgYB2is" frameborder="0"></iframe> -->
                        </div>
                    </section>
                </div>
                <div class="my-3 offset-sm-1 col-sm-10 col-lg-4 offset-lg-0 col-xl-4 ">
                    <h3 class="pb-2" style="clear:both;">Ask Questions<br></h3>
                    <form action="<?php echo base_url('Home/userqu'); ?>" method="POST">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="commet" id="comments"></textarea>
                        </div>
                        <div class="form-group">
                        <a href="<?= base_url('userlogin') ?>"><button type="submit" class="btn btn-primary px-5 p-2">submit</button> </a>
                            <a href="<?php echo base_url('Home'); ?>"><button  class="btn  btn-danger px-5 p-2">Logout</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main> 





</body>

</html>