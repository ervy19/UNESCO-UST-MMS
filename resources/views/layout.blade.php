<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">

    <title>UNESCO UST MMS | @yield('title') </title>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {!! HTML::style('assets/css/bootstrap.min.css') !!}
    {!! HTML::style('assets/css/font-awesome.min.css') !!}

    <!-- BEGIN PAGE LEVEL STYLES -->
    @yield('page_css')

    <!-- BEGIN CUSTOMIZED STYLE -->
    {!! HTML::style('assets/css/style.css') !!}

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="" alt="logo" class="img-responsive"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav nav-title">
            <li><a>UNESCO UST MMS</a></li>
          </ul>       

          <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ URL::to('employees') }}">Members</a></li>
            <li><a href="{{ URL::to('internal_trainings') }}">Positions</a></li>
            <li><a href="{{ URL::to('training_plan') }}">Projects</a></li>
            <li><a href="{{ URL::to('summary_report/trainings') }}">Events</a></li>
          </ul>          

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-lg"></i>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a><i class="fa fa-user fa-lg"></i>&nbsp;&nbsp;{{ $name or '---' }}</a></li>
                <li class="divider"></li>
                <li><a href=""><i class="fa fa-cog fa-lg"></i>&nbsp;&nbsp;Account Settings</a></li>
                <li><a href=""><i class="fa fa-unlock-alt fa-lg"></i>&nbsp;&nbsp;Logout</a></li>
              </ul>
            </li>
          </ul>


        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container-fluid breadcrumb-header">
      <div class="row">
        <ol class="breadcrumb">
          <li><a href=""><i class="fa fa-home fa-lg"></i></a></li>
          @yield('breadcrumb')
        </ol>
      </div>
    </div>
    
    <div class="container-fluid">
        @yield('content')
    </div>
    

    <footer class="footer">
      <div class="container-fluid">
        <p class="text-muted">© 2015 UNESCO UST MMS | Member Management System</p>
      </div>
    </footer>

    <!-- BEGIN CORE JS -->
    {!! HTML::script('assets/js/jquery.min.js'); !!}
    {!! HTML::script('assets/js/bootstrap.min.js'); !!}

    <!-- BEGIN PAGE LEVEL JS -->
    @yield('page_js')

  </body>
</html>