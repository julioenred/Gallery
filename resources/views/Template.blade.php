<!DOCTYPE html>
<html>
    <head>
        <title>Norberto Sevilla</title>

        <meta name="viewport" content="initial-scale=1">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-hQpvDQiCJaD2H465dQfA717v7lu5qHWtDbWNPvaTJ0ID5xnPUlVXnKzq7b8YUkbN" crossorigin="anonymous">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <link href="/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </head>
    <body>

        <menu class='menu' type="context toolbar">
            <i class="fa fa-bars hidden-md hidden-lg bars" aria-hidden="true"></i>
            <li><a href="/norbertosevilla" title="">Norberto Sevilla</a></li>
        </menu>
        <menu class='menu-hidden' type="context toolbar">
            <li>Sobre Norberto</li>
            <li>Contacto</li>
        </menu>
        <div class="text-center">
            <div class="perfil-avatar">
                <img src="/img/perfil.jpg" class='img-responsive' alt="">
            </div>    
        </div>

        {{-- MAIN --}}

        @section('main')

            

        @show

        {{-- SIDEBAR --}}

        @section('sidebar')

            

        @show

        {{-- JS --}}

        @section('js')
            <script type="text/javascript">
                $( document ).ready(function() 
                {
                  $('.bars').click(function()
                  {
                      $('.menu-hidden').toggle();
                  });
                });
            </script>

        @show
        
    </body>
</html>