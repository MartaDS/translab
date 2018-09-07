
<?php include 'header.php'; ?>
  <div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <!-- <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
                </li>
              </ol>
            </div>
          </div>
          <h3 class="content-header-title mb-0">Basic Forms</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2"
            id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item"
              href="component-buttons-extended.html">Buttons</a></div>
          </div>
        </div>
      </div> -->
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">          
          <div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form-center">Performance Chart</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <?php include 'config.php'; ?>
                <div class="card-content collapse show">
                  <div class="card-body">                   
                    <form class="form" method="post" action = "<?php echo base_url;?>Functions.php?action=performance_add">
                      <div class="row justify-content-md-center">
                        <div class="col-md-6">
                          <div class="form-body">
                            <div class="form-group">
                              <label for="eventInput1">Count</label>
                              <input type="text" id="eventInput1" class="form-control" placeholder="Count" name="count" required>
                            </div>
                            <div class="form-group">
                              <label for="eventInput2">Interval</label>
                              <input type="text" id="eventInput2" class="form-control" placeholder="Interval" name="interval" required>
                            </div>                            
                            <div class="form-group">
		                        <label>Date</label>
		                        <div class="input-group">
		                          <input type="text" class="form-control singledate" name="date">
		                          <span id="picker_from"><span id="picker_to">
		                          <div class="input-group-append">
		                            <span class="input-group-text">
		                              <span class="la la-calendar"></span>
		                            </span>
		                          </div>
		                        </div>		                       
		                      </div>                           
                          </div>
                        </div>
                      </div>
                      <div class="form-actions center">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>

  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-transparent footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
        target="_blank">PIXINVENT </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <script type="text/javascript">
    $(".input-group-append").on('click',function(){$(".singledate").trigger('click')});
  </script>
</body>
</html>