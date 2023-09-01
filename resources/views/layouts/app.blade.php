<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$page_title}}</title>
  <link href="<?= url('assets/template/frontend/css/bootstrap.css') ?>" rel="stylesheet">
  <script src="<?= url('assets/template/frontend/js/bootstrap.bundle.min.js') ?>"></script>
</head>
<body>
  @include('layouts.navbar')
  <div class="container">

    @yield('content')
    
    @include('layouts.footer')
  </div>
</body>
</html>