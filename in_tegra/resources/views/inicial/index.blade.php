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

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('/css/estiloIntegra.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/little_logo.png" width="170" height="40"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                        <div class="form-group">
                            <a href="{{ route('register') }}"><button type="button" class="btn btn-info">Regístrate</button></a>
                        </div>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
        <div id="content">
            <div class="back"></div>
            <div class="navigation" id="nav">
                <div class="item user">
                    <img src="images/bg_user.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Social</h2>
                </div>
                <div class="item home">
                    <img src="images/bg_home.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Lenguaje</h2>
                </div>
                <div class="item shop">
                    <img src="images/bg_shop.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Cálculo Lógica</h2>
                </div>
                <div class="item camera">
                    <img src="images/bg_camera.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Autogestión</h2>
                </div>
                <div class="item fav">
                    <img src="images/bg_fav.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
        <!-- The JavaScript -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                $('#nav > div').hover(
                function () {
                    var $this = $(this);
                    $this.find('img').stop().animate({
                        'width'     :'199px',
                        'height'    :'199px',
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
                        'width'     :'52px',
                        'height'    :'52px',
                        'top'       :'0px',
                        'left'      :'0px',
                        'opacity'   :'0.1'
                    },5000,'easeOutBack');

                    $this.find('a:first,h2').removeClass('active');
                }
            );
            });
        </script>
        <!-- Scripts -->
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
</html>