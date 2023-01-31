
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table with contextual classes</h4>
                  <h4 class="card-title"><a  href="<?= base_url('admin/addimg') ?>" class="btn bg-info text-white"> add images</a></h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                            files
                          </th>
                          <th>
                            commet
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($WebInfo as $item):?>
                        <tr class="table-info">
                        <td>
                            <?= $item['id']?>
                          </td>
                          <td>
                          <img src="<?= base_url('uplodes')."/".$item['files'];?>" height="400" width="" alt="">
                          </td>
                          <td>
                          <?= $item['testarea']?>
                          </td>
                          <td>
                            <a href="<?= base_url('WebSiteInfo/client_edit').'/'. $item['id'];?>" class="btn bg-info text-white h5">Edit</a>
                            <a href="<?= base_url('WebSiteInfo/delete'). $item['id'];?>" class="btn bg-danger text-white h5">Delete</a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
       