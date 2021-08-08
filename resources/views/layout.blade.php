<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css"> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- fontawesome -->
		<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript">
        import Swal from 'sweetalert2/dist/sweetalert2.js'
    </script>
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">@yield('cabecalho')</h1>
        </div>
    </div>
        @yield('conteudo')
    </div>
</body>
</html>
