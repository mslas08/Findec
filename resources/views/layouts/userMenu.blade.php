<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FinDec | </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="text/javascript" href="{{asset('js/bootstrap.min.js')}}">
    <link rel="text/javascript" href="{{asset('js/jquery-3.4.1')}}">
    <!-- Font Awesome 
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style 
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skin
         folder instead of downloading all of them to reduce the load. 
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}"
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">-->

  </head>
  <body class="">
    <div class="container-fluid">
      <!-- Inicio del Menu -->
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top ">
        <!-- Logo -->
        <a class="navbar-brand" href="{{URL::route('bienvenidos')}}">FinDec</a>
        <!-- Boton para pantallas pequeñas -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Elementos del Menu -->
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{URL::route('dataInput')}}" data-toggle="tooltip" title="Financial Data Entry menu option
!">Data Input</a>
            </li>
            <div class="subnav">
                <button class="subnavbtn">Documents<i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                  <a href="#confirmation">Confirmation</a>
                  <a href="#redactions">Redactions</a>
                </div>
              </div> 
            <div class="subnav">
                <button class="subnavbtn">FinDec Preparation<i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                  <a href="#confirmation">Document Selection</a>
                  <a href="#redactions">PDF Creation</a>
                </div>
            </div> 
            <div class="subnav">
                <button class="subnavbtn">Admin<i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                  <a href="#confirmation">Associate Law</a>
                  <a href="#confirmation">Pro se Selection</a>
                </div>
            </div>  
            <div class="subnav" style="float:right;">
                <button class="subnavbtn">Melvin<i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                  <a href="#confirmation">Logout</a>
                </div>
            </div>  
          </ul>
        </div>  
      </nav>
    </div>
    <!--Fin del Menu-->

      <!--Div de Mensaje-->
      <!-- Content Wrapper. Contains page content -->
      <div class="container-fluid" style="margin-top:80px;">
        <div class="row" >
          <div class="col-md-2 col-12"></div>
          <div class="col-md-8 col-12" style="height:80px;" >
              <div id="message" class="alert alert-danger">Aca va el mensaje que desaparece</div>
          </div>
        </div>  
     </div><!-- /.container -->
      <!--Fin-Mensaje-->
      
        <!--Contenido-->
        @yield('contenido')
           
        <!--Contenido-->

      <footer class="footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong >Copyright &copy; 2019 <a href="www.SmartPC.com">Smart PC</a>.</strong> All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-3.4.1.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    

    <script>
      $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    
 
      setTimeout(function() {
        $("#message").hide(1500);
    },6000);

      $("#myModal").modal("show");
});
</script>      
    

  
  </body>
</html>
