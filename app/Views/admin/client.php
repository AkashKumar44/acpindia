
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
                             Name
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
                            <?= $item['name']?>
                          </td>
                          <td>
                          <img src="<?= base_url('uplodes')."/".$item['file'];?>" height="400" width="" alt="">
                          </td>
                          <td>
                          <?= $item['textarea']?>
                          </td>
                          <td>
                            <a href="" class="btn bg-info text-white h5">Edit</a>
                            <a href="" class="btn bg-danger text-white h5">Delete</a>
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
       