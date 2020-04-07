<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>EDU</title>
  <link  rel="icon" type="image/jpeg" href="user/img/ucad-title.jpeg"/>
  <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> 
  <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
  <link href="/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="/build/css/custom.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/dashboard/css/style.custom.css">
  <link rel="stylesheet" href="/select2/dist/css/select2.min.css">

  <link href="/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">

  <link href="/vendors/datatables.net-bs/css/datatableResponsive.css" rel="stylesheet">

  <link rel="stylesheet" href="/sweetalert/sweetalert.css">
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="clearfix"></div>
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="/user/img/user.png" alt="..." class="img-circle profile_img" >
            </div>
            <div class="profile_info">
              <span>Bienvenido</span>
              <h2><?php  $session = session(); 
              echo $session->usuario?></h2>
            </div>
          </div>
          <br>
          <hr>

          

