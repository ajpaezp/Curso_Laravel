<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Boxed Layout</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-boxed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!--Inicio Header-->
        @include("theme/$theme/header")
        <!--Fin Header-->
        <!--Inicio Aside-->
        @include("theme/$theme/aside")
        <!--Fin Aside-->
            <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content">

                            <!-- Default box -->
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">Title</h3>
                      
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>                                  
                                </div>
                              </div>
                              <div class="card-body">
                                Start creating your amazing application!
                              </div>
                              <!-- /.card-body -->
                             
                             
                            </div>
                            <!-- /.card -->
                      
                     </section>
            </div>
            <!--Inicio Footer-->
            @include("theme/$theme/footer")
            <!--Fin Footer-->            
    </div>
<script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("assets/$theme/plugins/fastclick/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
</body>
</html>