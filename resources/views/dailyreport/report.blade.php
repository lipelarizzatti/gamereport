<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title></title>
<style>
    .container{
        background-image: url("{{ URL::asset('images') }}/bgtable2.jpg");
        /* background: url('{{ ('/images/bgtable2.jpg') }} ');  */
        background-size: 85%;
        background-repeat: no-repeat;
        width: 600px;
        height: 640px;
    }
    #logo{
        margin-top: 2.2em;
        margin-left: 2em;
    }
    #linkblock{
        width: 200px;
        height: 200px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <img id="logo" src="https://picsum.photos/100/100">
        </div>
        <!-- primeira seção -->
        <div class="row">
            <div class="col-md-6">
                <a href="{{ $firsttable }}"><div id="linkblock"></div></a>
            </div>
            <div class="col-md-6">
                <a href="{{ $secondtable }}"><div id="linkblock"></div></a>
            </div>
        </div>
        <!-- segunda seção -->
        <div class="row">
            <div class="col-md-6">
                <a href="{{ $thirdtable }}"><div id="linkblock"></div></a>
            </div>
            <div class="col-md-6">
                <a href="{{ $fourthtable }}"><div id="linkblock"></div></a>
            </div>
        </div>
    </div>

</body>
</html>




    

