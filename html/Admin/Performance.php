
  <?php 
    include 'header.php';
    include 'database_connection.php';
    $timeline = mysqli_query($con,"SELECT * FROM tbl_performance");
  ?>
  <div class="app-content container center-layout mt-2">
    <div class="content-wrapper">      
      <div class="content-body">
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">  
                <div class="card-header">
                  <h4 class="card-title">Performance Data</h4>                
                </div>                
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">                   
                    <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th>Count</th>
                          <th>Interval</th>                          
                          <th>Date</th>                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          while($data = mysqli_fetch_assoc($timeline))
                          {
                            echo "<tr>";
                            echo "<td>".$data['count']."</td>";
                            echo "<td>".$data['interval']."</td>";                            
                            echo "<td>".$data['date']."</td>";
                            echo "</tr>";
                          }
                        ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Count</th>
                          <th>Interval</th>                          
                          <th>Date</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ Zero configuration table -->        
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
  <script src="../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>