<?php require_once 'header.php' ?>
    <title>IFortecs</title>
    <link rel="home" href="index.php">
    <link rel="start" href="index.php">

    <!-- <link rel="home" href="index.php"> <link rel="start" href="index.php"> <link rel="next" href="index.php"> <link rel="prev" href="index.php"> -->

    <?php

    ?>
</head>

<?php include_once'nav_menu.php' ?>

<section>
    <article>
        <h2 class="wow"> Bem-Vindo ao IForTecs! </h2>

        <p>O IForTecs tem como objetivo auxiliar os alunos da turma do primeiro ano de informática do IFAL (511A), a ter um melhor acesso aos conteúdos e horários escolares, além da maior parte de dados e informações possíveis, que possam ajudar no desenvolvimento de cada um ao máximo.</p>
        <p> Mais informações em <a href="sobre.php" style="font-family: Prime, sans-serif;">SOBRE</a> </p>


<table id="click">
        <tr><td class="ce" id="mat" onclick="window.location='index.php';"> <span class="prime">INICIO</span> </td>
            <td class="cd" id="mat" onclick="window.location='index.php';"> Você está aqui, onde há a apresentação do site e o resumo de algumas funções, além de atividades, provas, contato dos professores e anúncios. </td>
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
            <td class="cd" id="mat"> Já aqui, você tem acesso aos conteúdos e as anotações feitas por nós, além de vídeos, apresentações e informações passadas em sala ou às vezes, nem tanto. E possível acessar por semana na “Programação Semanal”, ou ir diretamente no dia que você quiser na “Programação Diária, onde se mostrará o dia atual, como na semana se mostrará a semana atual, mas, é possível olhar semanas/dias anteriores ou futuros indo até o final da página e clicando em anterior ou próximo. </td>
        </tr>

        <tr><td class="ce" id="geo" onclick="window.location='contato.php';"> <span class="prime">CONTATO</span> </td>
            <td class="cd" id="geo" onclick="window.location='contato.php';"> Aqui você tem os nossos contatos, qualquer crítica, dica, sugestão, ou correção de erro, é só mandar. :) </td>
        </tr>

        <tr><td class="ce" id="port" onclick="window.location='sobre.php';"> <span class="prime">SOBRE</span> </td>
            <td class="cd" id="port" onclick="window.location='sobre.php';"> Aqui, você tem algumas informações sobre o site. </td>
        </tr>
</table>
<br>
<br>
<br>
        <table id="index">
            <caption> <h3> O Que temos para fazer? Aqui está: (Clique na seção desejada para abrir ou fechar a mesma)</h3> </caption>
            <tr>  <td class="cd" id="indexx" style=" border-top: 1px solid rgba( 130, 155, 140, .7);" onclick="abrefecha('ativi')"> <br/> <h3>Atividades:</h3> <br/>
                    <div class="ocult" id="ativi">
                        <table>
                            <tr>
                                <td class="cd" id="port" style="text-align: left"> Língua portuguesa: (Quinta-Feira, dia 19 de Novembro)
                                    <div>
                                        <p> Diário  </p>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="cd" id="ef" style="text-align: left"> Educação Física: (Segunda-Feira, dia 23 de Novembro)
                                    <div>
                                        <p> <a href="materias/educacao_fisica.php">Trabalho sobre Atletismo</a>  </p>
                                        <p> Responder 2º Questão da Avaliação </p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>  <td class="cd" id="indexx" onclick="abrefecha('provas')"> <br/> <h3> Provas <br> (Mais informações em <a href="provas.php" style="font-family: Prime, sans-serif;">AVALIAÇÕES</a>): </h3> <br/>
                    <div class="ocult" id="provas">
                        <table>
                            <tr> <td class="cd" id="qui" style="text-align: left"> - Química (3º BIMESTRE) - 24/11 (Terça-Feira) </td> </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>  <td class="cd" id="indexx" style="border-radius:0 0 10px 10px;" onclick="abrefecha('rec')">  <br/> <h3> Reposições <br> (Mais informações em <a href="provas.php" style="font-family: Prime, sans-serif;">AVALIAÇÕES</a>): </h3> <br/>
                    <div class="ocult" id="rec">
                        <table>
                            <tr>
                                <td class="cd" id="fil" style="text-align: left"> - Filosofia - 13/11 (Sexta-Feira) </td>
                            </tr>
                            <tr>
                                <td class="cd" id="fis" style="text-align: left"> - Física - 13/11 (Sexta-Feira) </td>
                            </tr>
                            <tr>
                                <td class="cd" id="soc" style="text-align: left"> - Sociologia - 13/11 (Sexta-Feira) </td>
                            </tr>
                            <tr>
                                <td class="cd" id="geo" style="text-align: left"> - Geografia - 16/11 (Segunda-Feira) </td>
                            </tr>
                            <tr>
                                <td class="cd" id="soc" style="text-align: left"> - Língua Portuguesa - 17/11 (Terça-Feira) </td>
                            </tr>
                            <tr>
                                <td class="cd" id="alg" style="text-align: left; border-radius:0 0 9px 9px;"> - Algoritmos e Linguagem de Programação - 18/11 (Quarta) </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
<br>
<br>
<br>
        <table>
        <caption> <h3> Professores: </h3> </caption>

        <tr><td class="ce" colspan="2" id="alg"> Emerson Ferreira de Araújo Lima </td></tr>
        <tr><td class="cd" id="alg"> E-mail: emerson@ifalpalmeira.edu.br </td></tr>

        <tr><td class="ce" colspan="2" id="geo"> Flora Sousa Pidner </td></tr>
        <tr><td class="cd" id="geo"> Gmail: floraspiner@gmail.com </td></tr>

        <tr><td class="ce" colspan="2" id="port"> Francilene Leite Cavalcante </td></tr>
        <tr><td class="cd" id="port"> Hotmail: talcavalcante@hotmail.com </td></tr>

        <tr><td class="ce" colspan="2" id="ef"> Marcos André Rodrigues da Silva Junior </td></tr>
        <tr><td class="cd" id="ef"> http://marcosandrejunior.webnode.com.br/ </td></tr>

        <tr><td class="ce" colspan="2" id="infb"> Thiago Philippe Cordeiro de Barros </td></tr>
        <tr><td class="cd" id="infb"> Gmail: thiagophilippe@gmail.com </td></tr>

    </table>
    </article>
</section>

<!-- infortecs -->

<?php include_once'footer.php' ?>