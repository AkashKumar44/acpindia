<?= $this->section('content')?>
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Employee</h4>
                  
                  <form  action="<?php echo base_url('WebSiteInfo/insert'); ?>"  class="forms-sample" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                      <label>File upload</label>
                      <div class="input-group col-xs-12">
                          <input type="file" name="files" class="custom-file-input"  required>
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="testarea"  rows="4"  placeholder="Textarea" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary text-white me-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>