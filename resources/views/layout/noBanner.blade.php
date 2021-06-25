<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Casa Isabel Hostel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .view.jarallax {
      height: 100%;
      min-height: 100%;
    }
    .navbar{
        background: #72BDE5 !important;
        box-shadow: 2px 1px 10px rgb(105, 101, 101) !important;
    }

  </style>
</head>

<body class="hostel-lp">

@include('common.navigation')
  <!--Main layout-->
@yield('main')
  <!--/Main layout-->

  <!--Footer-->
@include('common.footer')
  <!--/.Footer-->

  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!--Google maps-->
  <script src="http://maps.google.com/maps/api/js"></script>

  <!-- Custom scripts -->
  <script>
    // Animation init
    new WOW().init();
 // Data Picker Initialization
 $('.datepicker').pickadate();
  </script>

</body>

</html>
