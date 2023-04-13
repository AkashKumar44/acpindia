
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table with contextual classes</h4>
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
                          commet
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($usermodel as $item):?>
                        <tr class="table-info">
                        <td>
                            <?= $item['id']?>
                          </td>
                          <td>
                            <?= $item['name']?>
                          </td>
                          <td>
                            <?= $item['commet']?>
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
       