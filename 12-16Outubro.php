<?php require_once 'header.php' ?>
    <title>IFortecs - Programação Semanal das Aulas</title>
    <link rel="home" href="index.php">
    <link rel="start" href="index.php">
    <link rel="next" href="19-23Outubro.php">
    <link rel="prev" href="05-09Outubro.php">

    <?php
        $desc = 'Programação Semanal das Aulas';
        $ant = '05-09Outubro.php';
        $pro = '19-23Outubro.php';
    ?>
</head>

<?php include_once'nav_menu.php' ?>

<section class="table">
    <table id="semanal">
        <caption> <h3> Programação Semanal das Aulas </h3> </caption>

        <tr>
            <!--<td class="ce" style="background-color: rgba(0,0,0,.0)"> </td>-->
            <td class="ce" id="h" onclick="window.location='2015/12_10.php';"> <br/> Segunda-Feira <br/> <br/> <span id="prf">Dia 12 de Outubro de 2015</span> </td>
            <td class="ce" id="h" onclick="window.location='2015/13_10.php';"> <br/> Terça-Feira <br/> <br/> <span id="prf">Dia 13 de Outubro de 2015</span> </td>
            <td class="ce" id="h" onclick="window.location='2015/14_10.php';"> <br/> Quarta-Feira <br/> <br/> <span id="prf">Dia 14 de Outubro de 2015</span> </td>
            <td class="ce" id="h" onclick="window.location='2015/15_10.php';"> <br/> Quinta-Feira <br/> <br/> <span id="prf">Dia 15 de Outubro de 2015</span> </td>
            <td class="ce" id="h" onclick="window.location='2015/16_10.php';"> <br/> Sexta-Feira <br/> <br/> <span id="prf">Dia 16 de Outubro de 2015</span> </td>
        </tr>

        <tr> <!-- <td class="cd" id="s"> 7:00 &raquo; 7:50 </td> -->
                <td class="cd" rowspan="2" id="geo" onclick="window.location='2015/12_10.php';"> Geografia </td>
                <td class="cd" rowspan="2" id="hist" onclick="window.location='2015/13_10.php';"> História </td>
                <td class="cd" id="mat" onclick="window.location='2015/14_10.php';"> Matemática </td>
                <td class="cd" rowspan="2" id="mat" onclick="window.location='2015/15_10.php';"> Matemática </td>
                <td class="cd" rowspan="2" id="infb" onclick="window.location='2015/16_10.php';"> Informatica Básica </td>
        </tr>

        <tr> <!-- <td class="cd" id="s"> 7:50 &raquo; 8:40 </td> -->
                <td class="cd" rowspan="2" id="intl" onclick="window.location='2015/14_10.php';"> Introdução a Lógica </td>
        </tr>

        <tr> <!-- <td class="cd" id="s"> 8:40 &raquo; 9:30 </td> -->
                <td class="cd" rowspan="2" id="ef" onclick="window.location='2015/12_10.php';"> Educação Fisica </td>
                <td class="cd" rowspan="2" id="qui" onclick="window.location='2015/13_10.php';"> Química </td>
                <td class="cd" id="art" onclick="window.location='2015/15_10.php';"> Arte </td>
                <td class="cd" rowspan="2" id="fis" onclick="window.location='2015/16_10.php';"> Física </td>
        </tr>

        <tr> <!-- <td class="cd" id="s"> 9:50 &raquo; 10:40 </td> -->
                <td class="cd" id="fis"> Física </td onclick="window.location='2015/14_10.php';">
                <td class="cd" rowspan="3" id="port" onclick="window.location='2015/15_10.php';"> Língua Portuguesa </td>
        </tr>

        <tr> <!-- <td class="cd" id="s"> 10:40  <br/> &raquo; <br/> 11:30</td> -->
                <td class="cd" rowspan="2" id="dest"  onclick="window.location='2015/12_10.php';" > Desenho Técnico </td>
                <td class="cd" rowspan="2" id="bio" onclick="window.location='2015/13_10.php';"> Biologia </td>
                <td class="cd" rowspan="2" id="alg" onclick="window.location='2015/14_10.php';"> Algoritmos e Linguagens de Programação </td>
                <td class="cd" id="fil" onclick="window.location='2015/16_10.php';"> Filosofia </td>
        </tr>

        <tr> <!-- <td class="cd" id="s"> 11:30 <br/> &raquo; <br/> 12:20 </td> -->
                <td class="cd" id="soc" onclick="window.location='2015/16_10.php';"> Sociologia </td>
        </tr>

    </table>
</section>

<?php include_once'footer.php' ?>