<?php require_once 'header.php' ?>
    <title>IFortecs - Horario</title>
    <?php
        $desc = 'Horário das Aulas'
    ?>
</head>

<?php include_once'nav_menu.php' ?>

<section class="table">

    <table id="horario">
        <caption style="background-color: rgba(0, 252, 32, .7);"> <h2>Horário de Aulas</h2> </caption>
        <tr><td class="ce"> </td>
            <td class="cd" id="h"> 7:00 &raquo; 7:50 </td>
            <td class="cd" id="h"> 7:50 &raquo; 8:40 </td>
            <td class="cd" id="h"> 8:40 &raquo; 9:30 </td>
            <td class="cd" id="h"> 9:30 &raquo; 9:50 </td>
            <td class="cd" id="h"> 9:50 &raquo; 10:40 </td>
            <td class="cd" id="h"> 10:40 &raquo; 11:30</td>
            <td class="cd" id="h"> 11:30 &raquo; 12:20 </td>
        </tr>

        <tr><td class="ce"> Segunda-Feira </td>
            <td class="cd" colspan="2" id="geo"> Geografia <br/>  <span id="prf">Flora Sousa Pidner</span> </td>
            <td class="cd" id="ef"> Educação Fisica <br/> <span id="prf">Marcos André Rodrigues da Silva Junior</span> </td>
            <td class="cd" rowspan="6" id="intv"> Intervalo </td>
            <td class="cd" id="ef"> Educação Fisica <br/> <span id="prf">Marcos André Rodrigues da Silva Junior</span> </td>
            <td class="cd" colspan="2" id="dest"> Desenho Técnico <br/> <span id="prf">Sem Professor</span> </td>
        </tr>

        <tr><td class="ce"> Terça-Feira </td>
           <td class="cd" colspan="2" id="hist"> História <br/> <span id="prf">Roberto Idalino Barros</span> </td>
           <td class="cd" id="qui"> Química <br/> <span id="prf">Israel Crescencio da Costa</span> </td>

           <td class="cd" id="qui"> Química <br/> <span id="prf">Israel Crescencio da Costa</span> </td>
           <td class="cd" colspan="2" id="bio"> Biologia <br/> <span id="prf">Quitéria Vieira Belo</span> </td>
        </tr>

        <tr><td class="ce"> Quarta-Feira </td>
            <td class="cd" id="mat"> Matemática <br/> <span id="prf">Sem Professor</span> </td>
            <td class="cd" colspan="2" id="intl"> Introdução a Lógica <br/> <span id="prf">Carlos Jean Costa Cabral</span> </td>

            <td class="cd" id="fis"> Física <br/> <span id="prf">Rodrigo Raposo da Silva</span> </td>
            <td class="cd" colspan="2" id="alg"> Algoritmos e Linguagens de Programação <br/> <span id="prf">Emerson Ferreira de Araújo Lima</span> </td>
        </tr>

        <tr><td class="ce"> Quinta-Feira </td>
            <td class="cd" colspan="2" id="mat"> Matemática <br/> <span id="prf">Sem Professor</span> </td>
            <td class="cd" id="art"> Arte <br/> <span id="prf">Jorge Luís Schutze</span> </td>

            <td class="cd" id="port" colspan="3"> Língua Portuguesa <br/> <span id="prf">Francilene Leite Cavalcante</span> </td>
        </tr>

        <tr><td class="ce"> Sexta-Feira </td>
            <td class="cd" colspan="2" id="infb"> Informatica Básica <br/> <span id="prf">Thiago Philippe Cordeiro de Barros</span> </td>
            <td class="cd" id="fis"> Física <br/> <span id="prf">Rodrigo Raposo da Silva</span> </td>

            <td class="cd" id="fis"> Física <br/> <span id="prf">Rodrigo Raposo da Silva</span> </td>
            <td class="cd" id="fil"> Filosofia <br/> <span id="prf">Deyvson Rodrigues Cavalcanti</span> </td>
            <td class="cd" id="soc"> Sociologia <br/> <span id="prf">Arthur Adriano Lima Santos</span> </td>
        </tr>
    </table>

    <table>
        <caption><h2 align="center">Legendas <br> <span id="prf"> Separadas por São Firmino </span></h2></caption>
        <tr><td class="ce" id="mat"> Exatas <br/> <span id="prf">Em Azul</span> </td>
            <td class="cd" id="mat"> Matemática <br/> <span id="prf">Sem Professor</span> </td>
            <td class="cd" id="fis"> Física <br/> <span id="prf">Rodrigo Raposo da Silva</span> </td>
            <td class="cd" id="qui"> Química <br/> <span id="prf">Israel Crescencio da Costa</span> </td>
            <td class="cd" id="bio"> Biologia <br/> <span id="prf">Quitéria Vieira Belo</span> </td>
        </tr>

        <tr><td class="ce" id="geo"> Humanas <br/> <span id="prf">Em Amarelo</span> </td>
            <td class="cd" id="geo"> Geografia <br/>  <span id="prf">Flora Sousa Pidner</span> </td>
            <td class="cd" id="hist"> História <br/> <span id="prf">Roberto Idalino Barros</span> </td>
             <td class="cd" id="fil"> Filosofia <br/> <span id="prf">Deyvson Rodrigues Cavalcanti</span> </td>
            <td class="cd" id="soc"> Sociologia <br/> <span id="prf">Arthur Adriano Lima Santos</span> </td>
        </tr>

        <tr><td class="ce" id="port"> Linguagens e Códigos <br/> <span id="prf">Em Vermelho</span> </td>
            <td class="cd" id="port"> Língua Portuguesa <br/> <span id="prf">Francilene Leite Cavalcante</span> </td>
            <td class="cd" id="art"> Arte <br/> <span id="prf">Jorge Luís Schutze</span> </td>
            <td class="cd" id="ef"> Educação Fisica <br/> <span id="prf">Marcos André Rodrigues da Silva Junior</span> </td>
            <td class="cd" id="ef"> - </td>
        </tr>

        <tr><td class="ce" id="dest"> Técnicas <br/> <span id="prf">Em Verde</span> </td>
            <td class="cd" id="dest"> Desenho Técnico <br/> <span id="prf">Sem Professor</span> </td>
            <td class="cd" id="intl"> Introdução a Lógica <br/> <span id="prf">Carlos Jean Costa Cabral</span> </td>
            <td class="cd" id="infb"> Informatica Básica <br/> <span id="prf">Thiago Philippe Cordeiro de Barros</span> </td>
            <td class="cd" id="alg"> Algoritmos e Linguagens de Programação <br/> <span id="prf">Emerson Ferreira de Araújo Lima</span> </td>
        </tr>

    </table>
</section>

<?php include_once'footer.php' ?>