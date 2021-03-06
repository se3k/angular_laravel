<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Administração</title>
    <!-- PAINEL DE ADMNISTRATRAÇÃO--->

    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="{{  asset('font-awesome/css/font-awesome.css') }}">
    <!-- CUSTOM STYLES-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/painel-adm.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{  asset('plugins/semantic-ui/components/icon.min.css') }}">
    <link rel="stylesheet" href="{{  asset('plugins/semantic-ui/components/button.min.css') }}">
    <!--PLUGINS-->
    @yield('css')
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/painel') }}">Administração - Hortifruti do cheff </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                {{--@if(Auth::user()->nivel_acesso == 1)--}}
                    {{--<ul class="nav navbar-nav hidden-md hidden-lg hidden-sm">--}}
                        {{--<li>--}}
                            {{--<a href="{{ action('SiteController@painelHome') }}"><i class="fa fa-home"></i> Página Inicial--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li>--}}
                            {{--<a href=" {{ action('PedidoController@home') }} "><i class="fa fa-shopping-cart"></i>Pedidos</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href=" {{ action('ProdutoController@home') }} "><i class="fa fa-table"></i>Produtos</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="{{ action('ClienteController@home') }}"><i class="fa fa-user-md "></i>Clientes</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--@endif--}}

                            <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/painel/entrar') }}">Entrar</a></li>
                            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ action('Auth\AuthController@logout') }}"><i
                                                    class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- /. NAV TOP  -->
    @include('layouts._sidebar')
            <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>
                        @yield('title')
                    </h1>
                    <a href="{{ URL::previous() }}" class="btn btn-default pull-right">Voltar</a>
                    @include('painel._message')
                    {{--@section('errrors')--}}
                         @include('errors.list')
                    {{--@stop--}}
                </div>
            </div>
            <!-- /. ROW  -->
            <hr/>
            @yield('content')
                    <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">
    <div class="row">
        <div class="col-lg-12">
            &copy;
        </div>
    </div>
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{  asset('js/jquery.js') }}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{  asset('js/bootstrap.min.js') }}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{asset('js/jquery.maskMoney.js')}}"></script>
<script src="{{asset('js/jquery.mask.js')}}"></script>

<script src="{{  asset('plugins/semantic-ui/semantic.js') }}"></script>

<script>
    // Validação campos classe .valor
    $(".valor").maskMoney(
            {
                prefix: 'R$: ',
                allowNegative: true,
                thousands: '.',
                decimal: ',',
                affixesStay: false
            });
    $().mask();
</script>
@yield('scripts')
</body>
</html>
