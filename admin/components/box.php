<?php 

    $all  =  mysqli_query($connection,"SELECT * FROM `user`");
    $active_intransit  =  mysqli_query($connection,"SELECT * FROM `details` WHERE `status`= 'on transit'");
    $active_stop  =  mysqli_query($connection,"SELECT * FROM `details` WHERE `status`= 'stop'");
    $active_arrived  =  mysqli_query($connection,"SELECT * FROM `details` WHERE `status`= 'arrived'");

?>
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total <span>| Shipment</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                     
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">

                      <h6><?php echo mysqli_num_rows($all); ?></h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Active  <span>| Shipment</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" >
                    <i class="bi bi-cart" style="color: blue;"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo mysqli_num_rows($active_intransit); ?></h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Stopped  <span>| Shipment</span></h5>

                  <div class="d-flex align-items-center" >
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart" style="color:red;"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo mysqli_num_rows($active_stop);  ?></h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Arrived  <span>| Shipment</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo mysqli_num_rows($active_arrived);  ?></h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>


