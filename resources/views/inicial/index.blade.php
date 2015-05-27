<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proyecto Integra</title>
        <meta name="description" content="Awesome Bubble Navigation with jQuery" />
        <meta name="keywords" content="jquery, circular menu, navigation, round, bubble"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/estiloIntegra.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
        <link rel="icon" href="images/favicon.bmp"/>
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'> 
    </head>

    <body style="background-color:#F5FBFE">
        <div class="container hidden-sm hidden-md hidden-lg menuMovil center">
            <ul>
                <li class="logoli"><img src="images/nuevo_logo.png" alt="" class="logo_mediano" /></li>
                <li class="lightGreen"><a href="">Accede</a></li>
                <li class="verde"><a href="">Social</a></li>
                <li class="azul"><a href="">Lenguaje</a></li>
                <li class="babyBlue"><a href="">Calculo y Logica</a></li>
                <li class="gris"><a href="">Autogestión</a></li>
            </ul>
        </div>
       
        <div id="content">

            <div class="back col-md-6 hidden-xs"><img class="animated fadeIn customAnimated2" src="images/nuevo_logo.png" alt=""/></div>
            <!-- Modal del login button -->
              <a href="" class="buttonLogin hidden-xs" data-toggle="modal" data-target=".bs-login-modal-lg"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span> </a>
            
            
            <!-- modal del login contenido -->
            <div class="modal fade bs-login-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <img class="logo_mediano" src="images/nuevo_logo.png" alt="" />
                    </div>
                    <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Recordar
                            </label>
                          </div>
                          <button type="submit" class="btn btn-success btn-lg">Acceder</button>
                        </form>

                    </div>

                     <div class="modal-footer">
                        si no estas registrado registrate!
                        <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Registrarse</button></a>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="navigation hidden-xs" id="nav">
                <div class="item user animated fadeIn customAnimated1">
                    <img src="images/bg_user.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Social</h2>
                </div>
                <div class="item home animated fadeIn customAnimated2">
                    <img src="images/bg_home.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Lenguaje</h2>
                </div>
                <div class="item shop animated fadeIn customAnimated3">
                    <img src="images/bg_shop.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Cálculo/Lógica</h2>
                </div>
                <div class="item camera animated fadeIn customAnimated4">
                    <img src="images/bg_camera.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Autogestión</h2>
                </div>
                <div class="item fav animated fadeIn customAnimated5">
                    <img src="images/bg_fav.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Blog</h2>
                </div>
            </div>
        </div>  <!-- fin de la seccion del content principal-->

        <footer>
            <div class='icono'><a href=""><img src="images/facebookIcon.png" alt="" /></a></div>
            <div class='icono'><img src="images/twitterIcon.png" alt="" /><a href=""></a></div>
            <div class='icono'><a href=""><img src="images/inLogo.png" alt="" /></a></div>
        </footer>
        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                $('#nav > div').hover(
                function () {
                    var $this = $(this);
                    $this.find('img').stop().animate({
                        'width'     :'160px',
                        'height'    :'160px',
                        'top'       :'-25px',
                        'left'      :'-25px',
                        'opacity'   :'1.0'
                    },500,'easeOutBack',function(){
                        $(this).parent().find('ul').fadeIn(700);
                    });

                    $this.find('a:first,h2').addClass('active');
                },
                function () {
                    var $this = $(this);
                    $this.find('ul').fadeOut(500);
                    $this.find('img').stop().animate({
                        'width'     :'0px',
                        'height'    :'0px',
                        'top'       :'-140px',
                        'left'      :'200px',
                        'opacity'   :'0.1'
                    },5000,'easeOutBack');

                    $this.find('a:first,h2').removeClass('active');
                }
            );
            });
        </script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>