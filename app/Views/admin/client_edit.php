<?= $this->section('content')?>
<div class="main-panel">        
    <div class="content-wrapper card">
        <div class="row ">
            <h4  class="card-title">Edit Employee</h4>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form  action="<?php echo base_url('WebSiteInfo/client_update'.'/'.$products['id']); ?>"  class="forms-sample" method="post" enctype="multipart/form-data">
                          
                            
                            <div class="form-group">
                            <img src="<?= base_url('uplodes')."/".$products['files'];?>" height="50" width="" alt="">
                            </div>
                            <div class="form-group">
                                <label>File upload</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" name="files" value="<?= $products['files']?>" class="custom-file-input"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="testarea" value="<?= $products['testarea']?>"  rows="4"  ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary text-white me-2" name="submit">Update </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>