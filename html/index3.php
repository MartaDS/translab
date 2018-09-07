<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Translab trucking data analysis.">
  <meta name="keywords" content="trucking, logistics, data analysis">
  <meta name="author" content="Marta">
  <title>Translab</title>
  <link rel="apple-touch-icon" href="/app-assets/images/ico/translab.png">
  <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/translab.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/meteocons/style.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/pickers/pickadate/pickadate.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/d3.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/d3-gantt-this.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  <style>
#chartdiv-pie {
  width   : 100%;
  height    : 400px;
  font-size : 12px;  
}    
@media(max-width: 767px)
  {
    #recent-orders th:nth-child(2), #recent-orders td:nth-child(2) {
    display: none;
    }
    .waste_table th:nth-child(1), .waste_table td:nth-child(1) {
    display: none;
    }
  }
  @media(min-width:768px)
{
.menu.menu-collapsed a.dropdown-toggle.nav-link {
display: block;
}

.menu-expanded a.dropdown-toggle.nav-link {
display: none;
}
.horizontal-menu.menu-collapsed #main-menu-navigation .nav-item a span {
display: inline-block !important;
}
.navbar-dark.navbar-horizontal {
background-color: transparent;
box-shadow: none;
}

ul#main-menu-navigation {
background: #333;
}
}   
.is-sticky > div {
    position: relative !important;
    }
@media (min-width: 768px){
        .dropdown-toggle.nav-link {
        display: none !important;
        }

        body:not(.menu-expanded) #main-menu-navigation .dropdown-menu {
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        transform: scale(1, 1);
        opacity: 1;
        display: block;
        }
    }
</style>
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/horizontal-menu.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/dashboard-ecommerce.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/pickers/daterange/daterange.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <!-- END Custom CSS-->
        <script src="amcharts_3.21.13.free/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts_3.21.13.free/amcharts/serial.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/light.js"></script>
        <script src="amcharts_3.21.13.free/amcharts/gantt.js" type="text/javascript"></script>
        <script src="amcharts_3.21.13.free/amcharts/pie.js" type="text/javascript"></script>
        <script src="amcharts_3.21.13.free/amcharts/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>

        <script>

var chart = AmCharts.makeChart("chartdiv",
{
  "type": "serial",
  "categoryField": "category",
  "startDuration": 1,
  "processCount": 998,
  "theme": "light",
  "categoryAxis": {
    "gridPosition": "start"
  },
  "dataLoader": {
                    "url": "chartdata_timeline.php",
                    "format": "json"
                    },
  "trendLines": [],
  "graphs": [
    {
      "balloonText": "[[title]] of [[category]]:[[value]]",
      "columnWidth": 1,
      "fillAlphas": 1,
      "fillColors": "#1E9FF2",
      "id": "AmGraph-1",      
      "title": "Dead Stopped",
      "type": "column",
      "valueField": "Dead Stopped"
    },
    {
      "balloonText": "[[title]] of [[category]]:[[value]]",
      "columnWidth": 1,
      "fillAlphas": 1,
      "fillColors": "#FF4961",
      "id": "AmGraph-2",
      "title": "Dead Resiting",
      "type": "column",
      "valueField": "Dead Resiting"
    },
    {
      "balloonColor": "#28D094",
      "balloonText": "[[title]] of [[category]]:[[value]]",
      "columnWidth": 1,
      "fillAlphas": 1,
      "fillColors": "#00FF05",
      "gapPeriod": 1,
      "id": "AmGraph-3",
      "title": "Loading",
      "type": "column",
      "valueField": "Loading"
    }
  ],
  "guides": [],
  "valueAxes": [
    {
      "id": "ValueAxis-1",
      "stackType": "regular",
      "title": "% of Capacity"
    }
  ],
  "allLabels": [],
  "balloon": {},
  "legend": {
    "enabled": true,
    "useGraphSettings": true
  },
  "titles": [
    {
      "id": "Title-1",
      "size": 15,
      "text": "Utility Breakdown - Last 7 Days"
    }
   ]
  }
      );
        </script>
        <script>
          AmCharts.makeChart("chartdiv-scatter",
        {
          "type": "serial",
          "categoryField": "category",
          "columnWidth": 0.32,
          "startDuration": 1,
          "categoryAxis": {
            "gridPosition": "start",
            "gridThickness": 0,
             "labelRotation": 45,
             "autoGridCount": false,
             "gridCount": 1000
          },
         
          "trendLines": [],
          "graphs": [
            {
              "balloonText": "[[title]] of [[category]]:[[value]]",
              "fillAlphas": 1,
              "fillColors": "#FF4961",
              "id": "AmGraph-1",
              "title": "Interval",
              "type": "column",
              "valueField": "column-1"
            }
          ],
          "guides": [],
          "valueAxes": [
            {
              "id": "ValueAxis-1",
              "stackType": "regular",
              "title": "Count",
              "gridThickness": 0
            }
          ],
          "allLabels": [],
          "balloon": {},
          "legend": {
            "enabled": true,
            "useGraphSettings": true
          },
          "titles": [
            {
              "id": "Title-1",
              "size": 15,
              "text": "Performance"
            }
          ],
          "dataLoader": {
                    "url": "chartdata_performance.php",
                    "format": "json"
                    },
        }
      );
var overall_performance_chart = AmCharts.makeChart( "chartdiv-pie", {
"type": "pie",
"dataLoader": {
    "url": "chartdata_overall_performance.php",
    "format": "json"
    },
"titleField": "title",
"valueField": "value",
"labelRadius": 5,

"radius": "42%",
"innerRadius": "80%",
"labelText": "[[title]]"
} );


chart.addListener("rendered", zoomChart);
if(chart.zoomChart){
    chart.zoomChart();
}

function zoomChart(){
    chart.zoomToIndexes(Math.round(chart.dataProvider.length * 0.4), Math.round(chart.dataProvider.length * 0.55));
}
        </script>

</head>
<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns"
data-open="click" data-menu="horizontal-menu" data-col="2-columns">
  <!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="index1.html">
              <img class="brand-logo" alt="Translab logo" src="../app-assets/images/logo/translab-horizontalx2.png">
            </a>
          </li>

        </ul>
      </div>
      <div class="navbar-container container center-layout">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>


          </ul>

        </div>
      </div>
    </div>
  </nav>


 


  <!-- ////////////////////////////////////////////////////////////////////////////-->
 <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
  role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="dropdown nav-item" data-menu="dropdown">
          <a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="icon-user"></i>
            <span>User Area</span>
          </a>
          <ul class="dropdown-menu">
            <li data-menu=""><a class="dropdown-item" href="login-simple1.html" data-toggle="dropdown">Login</a></li>
            <li data-menu=""><a class="dropdown-item" href="register-simple1.html" data-toggle="dropdown">Register</a></li>
            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Logout</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
  <div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body"><span id="monthly-sales" hidden="none"></span>
                <!-- eCommerce statistic -->
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">4%</h3>
                      <h6>Dead Head - Resting</h6>
                    </div>
                    <div>
                      <i class="la la-clock-o info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 4%"
                    aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">91%</h3>
                      <h6 >Dead Head - Stopped</h6>
                    </div>
                    <div>
                      <i class="la la-ban warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 91%"
                    aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">1%</h3>
                      <h6>PUADO</h6>
                    </div>
                    <div>
                      <i class="la la-map-marker success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 1%"
                    aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">4%</h3>
                      <h6>In Transit</h6>
                    </div>
                    <div>
                      <i class="la la-truck danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 4%"
                    aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ eCommerce statistic -->
        <!-- Performance and Leader Board -->
        <div class="row top-buffer"></div>
        <span id="picker_from"><span id="picker_to">
            <div class="row">
              <div class="col-lg-5 col-12">
                <div class="card pull-up">
                  <div class="card-header"><h4 class="card-title">Overall Performance 50.5%</h4>
                    
                    <div class="form-group">
                        <label>Pick date range</label>
                        <div class="input-group">
                          <input type="text" class="form-control daterange">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                          </div>
                        </div>
                        <small class="success text-muted"></small>
                      </div>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse show bg-hexagons"><div class="chartjs">
                           <div id="chartdiv-pie"></div>
                    </div>
                  </div>
                </div>
              </div>
            <div id="recent-transactions" class="col-lg-7 col-12">
            <div class="card pull-up">
              <div class="card-header">
                <h4 class="card-title">Leader Board</h4>
                <div class="card-header card-header-transparent py-20 px-0">
                <div class="btn-group dropdown">
                  <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown" aria-expanded="false">SELECT DEPOT</a>
                  <div class="dropdown-menu animate" role="menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#" role="menuitem">Depot 1</a>
                    <a class="dropdown-item" href="#" role="menuitem">Depot 2</a>
                    <a class="dropdown-item" href="#" role="menuitem">Depot 3</a>
                  </div>
                </div>
                <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                  <li class="nav-item"><a data-toggle="tab" href="#"><button type="button" class="btn btn-sm btn-outline-danger round">C</button></a> </li>
                  <li class="nav-item"><a data-toggle="tab" href="#"><button type="button" class="btn btn-sm btn-outline-success round">C + P</button> </a></li>
                  <li class="nav-item"><a data-toggle="tab" href="#"><button type="button" class="btn btn-sm btn-outline-info round">P</button></a> </li>
                </ul>
              </div>
                  
              </div>

              <div class="card-content">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0 leader_table">
                    <thead>
                      <tr>
                        <th class="border-top-0">Number Plate</th>
                        <th class="border-top-0">Name</th>
                        <th class="border-top-0">Categories</th>
                        <th class="border-top-0">%</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate"><a href="#">TYUH 9890</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../app-assets/images/portrait/small/avatar-s-4.png" alt="avatar">
                          </span>
                          <span>Elizabeth W.</span>
                        </td>

                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">C</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><a href="#">FGRE 4567</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../app-assets/images/portrait/small/avatar-s-5.png" alt="avatar">
                          </span>
                          <span>Doris R.</span>
                        </td>
                        
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">C</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><a href="#">GTRE 8989</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar">
                          </span>
                          <span>Megan S.</span>
                        </td>
                        
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-success round">C + P</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><a href="#">OKPO 8888</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../app-assets/images/portrait/small/avatar-s-7.png" alt="avatar">
                          </span>
                          <span>Andrew D.</span>
                        </td>
                        
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-info round">P</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><a href="#">GTRY 0900</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../app-assets/images/portrait/small/avatar-s-9.png" alt="avatar">
                          </span>
                          <span>Walter R.</span>
                        </td>
                        
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-info round">P</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
            </div>

        <!--/ Performance and Leader Board -->

          <div class="row">
            <div class="col-lg-12 col-12">
              <div class="card pull-up">
                <div class="card-header">
                  <h4 class="card-title">Timeline</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div id="chartdiv" style="width: 100%; height: 400px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>


           <div class="row">
            <div class="col-lg-12 col-12">
              <div class="card pull-up">
                <div class="card-header">
                  <h4 class="card-title">Performance</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div id="chartdiv-scatter" style="width:100%; height:400px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- Hidden Wastes -->
                <section id="ordering">
          <div class="row">
            <div class="col-12">
              <div class="card pull-up">
                <div class="card-header">
                  <h4 class="card-title">Hidden Wastes</h4>
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
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <p class="card-text"></p>
                    <table class="table table-striped table-bordered default-ordering waste_table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Number Plate</th>
                          <th>Fleet</th>
                          <th>Facility</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>DRFC 5865</td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">25</small></div>
                          </div></td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-progress" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">10</small></div></td>
                        </tr>
                        <tr>
                          <td>Garrett Winters</td>
                          <td>KIUJ 5869</td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">5</small></div>
                          </div></td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-progress" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">63</small></div></td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>FRDE 8575</td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">10</small></div>
                          </div></td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-progress" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">66</small></div></td>
                        </tr>
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>GTRF 4787</td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">90</small></div>
                          </div></td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-progress" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">22</small></div></td>
                        </tr>
                        <tr>
                          <td>Airi Satou</td>
                          <td>DEWE 4875</td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">100</small></div>
                          </div></td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-progress" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">33</small></div></td>
                        </tr>
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>REDR 1254</td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">60</small></div>
                          </div></td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-progress" role="progressbar" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">61</small></div></td>
                        </tr>
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>VCDE 5784</td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">25</small></div>
                          </div></td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-progress" role="progressbar" style="width: 59%" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">59</small></div></td>
                        </tr>
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>CDRD 5484</td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">50</small></div>
                          </div></td>
                          <td><div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-progress" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"><small class="text-muted white">55</small></div></td>
                        </tr>
                        
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Fleet</th>
                          <th>Facility</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ Hidden Wastes -->



      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-transparent footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="#"
        target="_blank">Translab </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="../app-assets/vendors/js/ui/jquery.sticky.js"></script>
  <script src="../app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/tables/buttons.flash.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/tables/jszip.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/tables/pdfmake.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/tables/vfs_fonts.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/tables/buttons.html5.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/tables/buttons.print.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/harts/d3.v3.js" type="text/javascript" ></script>
  <script src="../app-assets/vendors/js/charts/gantt-chart.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/d3-gantt-this.js" type="text/javascript"></script>
  <script src="https://www.gstatic.com/charts/loader.js" type="text/javascript" ></script>
  <script src="../app-assets/vendors/js/charts/scatter.js" type="text/javascript"></script>



  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../app-assets/js/scripts/pages/dashboard-ecommerce.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/pages/dashboard-sales.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/charts/d3/other/gantt-chart.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/tables/datatables/datatable-advanced.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script>         
  <!-- END PAGE LEVEL JS-->
  <?php include 'Admin/config.php'; ?>
  <script type="text/javascript">
    $(".input-group-append").on('click',function(){$(".daterange").trigger('click')});
     
    //console.log(overall_performance_chart);
    $(".applyBtn").click(function(){
      var start_date  = $("input[name=daterangepicker_start]").val();
      var end_date    = $("input[name=daterangepicker_end]").val();
      var html_url    = "<?php echo html_url;?>";
      
      $.ajax({
        url:html_url+"chartdata_overall_performance.php",
        type:"post",
        data:{start_date:start_date,end_date:end_date},
        success:function(data)
        {
          overall_performance_chart.dataProvider = AmCharts.parseJSON(data);
            overall_performance_chart.validateData();
          //});
         //  var NewChartData = [];
         //  NewChartData.push(JSON.parse(data));
         // // console.log('success',data);
         //  overall_performance_chart.dataProvider = NewChartData;
         //  overall_performance_chart.validateData();
         //  overall_performance_chart.dataLoader.loadData();
        }
      });
    });
  </script>
</body>
</html>