<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>User Auth</title>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
            <!--<link rel="stylesheet" href="/css/style.css">-->
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
                        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">

            <!--<link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
            <!--<link href="/css/font-awesome.css" rel="stylesheet">-->
            <!--<link href="/css/font-awesome.min.css" rel="stylesheet">-->
            
            <style>
                body    { padding-bottom:40px; padding-top:40px; }
            </style>
     <script type="text/javascript" src="/js/jquery-1.11.3.js"></script>       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--<script type="text/javascript" src="/js/bootstrap.min.js"></script>-->
  <script src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script>
  <!--<script src="/js/jquery.validate.js" type="text/javascript"></script>-->
  <!--<script src="/js/theme.js" type="text/javascript"></script>-->
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

    </head>
    @yield('page-script')
    <body class="container">
        <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="page-header">
            <h1><span class=""></span> Welcome to Diro</h1>
        </div> 
        
       @yield('content')
    </div>
        </div>
        <footer>
       <script type="text/javascript">
$.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
</script>
        </footer>
    </body>
</html>