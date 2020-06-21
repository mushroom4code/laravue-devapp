<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Laravue</title>
  <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.18079" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.18079" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.18079" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5dca5ac9a5e86d17235d90c1"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/styles.css?3.3.18079" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/styles_newforms.css?3.3.18079" />
  <link rel="shortcut icon" href="{{ secure_asset('images/logo.png') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ secure_asset('css/vue-style.css') }}" type="text/css">
  <script type="text/javascript">
    window.vuebnb_server_data = "{!! addslashes(json_encode($data)) !!}"
    window.csrf_token = "{{ csrf_token() }}"
    
  </script>
  @if(isset($countries))
    <script type="text/javascript">         
      window.demo_countries = "{!! addslashes(json_encode($countries)) !!}"
      window.countries = JSON.parse(window.demo_countries)
      console.log(window.countries);
      
    </script>         
  @endif
  
</head>
<body>
<div id="app"></div>





<script src="{{ secure_asset('js/app.js') }}"></script>

</body>
</html>
