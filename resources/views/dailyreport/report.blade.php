<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title></title>
<style>
    body{
    background-image: url("{{ URL::asset('images') }}/bgtable2.jpg");
    background: url('{{ ('/images/bgtable2.jpg') }} '); 
    background-size: 38%;
    background-repeat: no-repeat;
    }
    #logo{
        margin-top: 1em;
        margin-left: 1em;
    }
</style>
</head>
<body>
    <img id="logo" src="https://picsum.photos/100/100">
</body>
</html>




    

