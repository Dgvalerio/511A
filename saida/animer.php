<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_codes/style.css">
    <link rel="stylesheet" href="_codes/mobi.css">
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="_codes/script.js"></script>
    <meta name="author" content="Davi Gonçalves Valério">
    <title>IFortecs - Animer</title>
    <link rel="stylesheet" href="_codes/animer2.css">
</head>

<body>

<nav id="menu-prin">
    <ul class="menu" type="disc">

        <li onclick="window.location='index.php';"> <a class="lia" href="index.php"> INICIO </a> </li>

        <li onclick="window.location='fotos.php';"> <a class="lia" href="fotos.php"> GALERIA </a> </li>

        <li onclick="window.location='music.php';"> <a class="lia" href="music.php"> MÚSICA </a> </li>

        <li onclick="window.location='sobre.php';"> <a class="lia" href="sobre.php"> SOBRE </a> </li>
    </ul>
</nav>

<nav id="menu-lat" onclick="abremenu()">
    <ul class="menu" type="disc">
        <li onclick="abremenu()"> <a id="titprincipal" class="lia" onclick="abremenu()">MENU</a>
            <ul class="menu-sec2" id="ms1" type="disc">

                <li onclick="window.location='index.php';"> <a class="lia" href="index.php"> INICIO </a> </li>

                <li onclick="window.location='fotos.php';"> <a class="lia" href="fotos.php"> GALERIA </a> </li>

                <li onclick="window.location='music.php';"> <a class="lia" href="music.php"> MÚSICA </a> </li>

                <li onclick="window.location='sobre.php';"> <a class="lia" href="sobre.php"> SOBRE </a> </li>

            </ul>
        </li>
    </ul>
</nav>

<div id="interface">

    <header id="cabecalho">
        <br/>
        <br id="mob"/>
        <br id="mob"/>
        <br id="mob"/>

        <h1 class="titprincipal"> ifortecs </h1>
        <h3 class="titsecundario"> <?php echo $desc = isset ($desc)? $desc:' "Black side for ifortecs " <br> Mr. Darth Black. ';?> </h3>
    </header>

<section>



</section>



</div>

<div class="qua" id="animer1"> </div>
<div class="qua" id="animer2"> </div>
<div class="qua" id="animer3"> </div>
<div class="qua" id="animer4"> </div>
<div class="qua" id="animer5"> </div>
<div class="qua" id="animer6"> </div>
<div class="qua" id="animer7"> </div>
<div class="qua" id="animer8"> </div>
<div class="qua" id="animer9"> </div>
<div class="cir" id="animer10"> </div>

</body>
</html>