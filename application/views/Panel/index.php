
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Fotos del Sistema</h4>
                    <div class="d-flex">
                      <div class="d-flex align-items-center mr-4 text-muted font-weight-light">
                        <i class="mdi mdi-account-outline icon-sm mr-2"></i>
                        <span><?php  if($_SESSION['nombres']) echo $_SESSION['nombres']; else {echo 'No hay nombre';} ?></span>
                      </div>
                    
                    </div>
                    <div class="row mt-3">
                      <div class="col-6 pr-1">
                        <img src="<?php echo base_url(); ?>Admin/assets/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                        <img src="<?php echo base_url(); ?>Admin/assets/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded" alt="image">
                      </div>
                      <div class="col-6 pl-1">
                        <img src="<?php echo base_url(); ?>Admin/assets/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                        <img src="<?php echo base_url(); ?>Admin/assets/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded" alt="image">
                      </div>
                    </div>
                 
              </div>
            </div>
           