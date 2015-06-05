<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">

    <title>CEU HR TEAMS | @yield('title') </title>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/font-awesome.min.css') }}
    {{ HTML::style('assets/css/jquery.dataTables.min.css') }}
    {{ HTML::style('assets/css/dataTables.bootstrap.css') }}

    <!-- BEGIN SELECT2 CSS -->
    {{ HTML::style('assets/css/select2.css') }}
    {{ HTML::style('assets/css/select2-bootstrap.css') }}
    
    <!-- BEGIN PAGE LEVEL STYLES -->
    @yield('page_css')

    <!-- BEGIN THEME STYLES -->
    {{ HTML::style('assets/css/general-style.css') }}
    {{ HTML::style('assets/css/pages-style.css') }}

  </head>

  <body>

    <div class="container-fluid breadcrumb-header">
      <div class="row">
        <ol class="breadcrumb">
          @yield('breadcrumb')
        </ol>
      </div>
    </div>
    
    <div class="container-fluid">
        @yield('content')
    </div>

    <footer class="footer">
      <div class="container-fluid">
        <p class="text-muted">© 2015 Centro Escolar University Human Resources | Training Evaluation and Monitoring System</p>
      </div>
    </footer>

    <!-- BEGIN CORE JS -->



    
    @yield('page_js')

  </body>
</html>