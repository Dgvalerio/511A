<?php require_once 'header.php' ?>
    <title>IFortecs</title>
    <?php
        $ant = 'index2.php';
    ?>
</head>

<?php include_once'nav_menu.php' ?>

<section>
    <article>
        <h2 class="wow"> Bem-Vindo ao IFortTecs! </h2>

        <p>O IForTecs tem como objetivo auxiliar os alunos da turma do primeiro ano de informática do IFAL (511A), a ter um melhor acesso aos conteúdos e horários escolares, além da maior parte de dados e informações possíveis, que possam ajudar no desenvolvimento de cada um ao máximo.</p>
        <p> Mais informações em <a href="sobre.php" style="font-family: Prime, sans-serif;">SOBRE</a> </p>

<table id="click">
        <tr><td class="ce" id="mat" onclick="window.location='index.php';"> <span class="prime">INICIO</span> </td>
            <td class="cd" id="mat" onclick="window.location='index.php';"> Você está aqui, onde há essa apresentação do site e resumo de funções, além das atividades, provas ou anúncios atuais. </td>
        </tr>

        <tr><td class="ce" id="geo"> <span class="prime">MATÉRIAS</span> </td>
            <td class="cd" id="geo"> Aqui, você pode acessar todos os conteúdos do site, separados por disciplina. </td>
        </tr>

        <tr><td class="ce" id="port" onclick="window.location='horario.php';"> <span class="prime">HORÁRIO</span> </td>
            <td class="cd" id="port" onclick="window.location='horario.php';"> Aqui está o horário, separado por categorias, ele está sempre atualizado! :) </td>
        </tr>

        <tr><td class="ce" id="dest" onclick="window.location='provas.php';"> <span class="prime">AVALIAÇÕES</span> </td>
            <td class="cd" id="dest" onclick="window.location='provas.php';"> Aqui fica o famoso horário de avaliações do “São Firmino” (Com uma revisada feita por mim “Davi G. Valério”) </td>
        </tr>

        <tr><td class="ce" id="mat"> <span class="prime">PROGRAMAÇÃO</span> </td>
            <td class="cd" id="mat"> Já aqui, você tem acesso aos conteúdos e as anotações feitas por nós, além de vídeos, apresentações e informações passadas em sala ou as vezes nem tanto. E possível acessar por semana na “Programação Semanal”, ou ir diretamente no dia que você quiser “Programação Diária”, onde se mostrará o dia atual, como na semana se mostrará a semana atual, mas, é possível olhar semanas/dias anteriores ou futuros indo até o final da página e clicando em anterior ou próximo. </td>
        </tr>

        <tr><td class="ce" id="geo" onclick="window.location='contato.php';"> <span class="prime">CONTATO</span> </td>
            <td class="cd" id="geo" onclick="window.location='contato.php';"> Aqui você tem os nossos contatos, qualquer crítica, dica, sugestão, ou correção de erro, é só mandar. :) </td>
        </tr>

        <tr><td class="ce" id="port" onclick="window.location='sobre.php';"> <span class="prime">SOBRE</span> </td>
            <td class="cd" id="port" onclick="window.location='sobre.php';"> Aqui, você tem algumas informações sobre o site. </td>
        </tr>
</table>

        <h2> O Que temos para fazer? Aqui está: </h2>
        <h3> Atividades </h3>
            <p> Educação Física: Responder 2º Questão da Avaliação</p>
            <p> Diário de língua portuguesa.</p>
            <p> Física: Responder atividade das páginas 76 e 77, e também <a href="materias/fisica.php">“Exercícios propostos”</a>.</p>
            <p> Química: Responder atividade da Página 241.</p>
            <p> Introdução a Lógica: Atividade página 48 </p>
        <h3> Provas (Mais informações em <a href="provas.php" style="font-family: Prime, sans-serif;">AVALIAÇÕES</a>) </h3>
            <p> - Algoritmo e Linguagem de Programação (2AV) - 11/11 (Quarta)</p>
    </article>
</section>

<!-- infortecs -->

<?php include_once'footer.php' ?>