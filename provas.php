<?php require_once 'header.php' ?>
    <title>IFortecs - Provas</title>
    <?php
        $desc = 'Horário das Provas. Para conferir as avaliações já feitas, ou saber as que ainda não foram marcadas, clique na barra correspondente.'
    ?>
</head>

<?php include_once'nav_menu.php' ?>

<section class="table">

    <table>
        <caption> <h3>Horario das Provas - 2º Bimestre <br/> (Atualizado Quinta, dia 12 de Novembro de 2015)</h3> </caption>
        <tr>  <td class="cd" id="jf" onclick="abrefecha('ja_feitas')"> Já feitas (02) | (Clique para abrir ou fechar)
                <div class="ocult" id="ja_feitas">
                    <p> - AVALIAÇÕES DO 2º BIMESTRE - </p>
                    <p class="repo"> - Arte (Reposição) - (05/11) </p>
                    <p class="repo"> - Informática básica (Reposição) - (06/11) </p>
                </div>
            </td>
        </tr>
        <tr>  <td class="cd" id="nm" onclick="abrefecha('nao_marcadas')"> Não marcadas (POR ENQUANTO) | (Clique para abrir ou fechar)
                <div class="ocult" id="nao_marcadas">
                    <h4> 3º Bimestre (14):</h4>
                    <p> - Geografia </p>
                    <p> - Educação física </p>
                    <p> - História </p>
                    <p> - Biologia </p>
                    <p> - Lógica </p>
                    <p> - Física </p>
                    <p> - Programação </p>
                    <p> - Arte </p>
                    <p> - Língua Portuguesa </p>
                    <p> - Informática básica </p>
                    <p> - Filosofia </p>
                    <p> - Sociologia </p>
                    <p> - *Desenho Técnico (sem professor até o momento) </p>
                    <p> - *Matemática (sem professor até o momento) </p>

                    <!-- <p> - Educação física (O Professor Marcos André disse que não marca prova, então fiquem atentos e sempre atualizados nos assuntos de Educação Física)</p> -->
                    <h4> Reposições não marcadas (04):</h4>
                    <p> - Educação Física </p>
                    <p> - Lógica </p>
                    <p> - Desenho Técnico (sem professor até o momento) </p>
                    <p> - Matemática (sem professor até o momento) </p>
                </div>
            </td>
        </tr>
        <tr>  <td class="cd" id="rec" onclick="abrefecha('recuperacao')"> Reposições (09) | (Clique para abrir ou fechar)
                <div class="ocult" id="recuperacao">
                    <br>
                    <table>
                        <tr>  <td class="cd" id="fis" style="text-align: left"> - Física - 18/11 (Quarta-Feira):
                                <div>
                                    <p> - 1º Bimestre </p>
                                        <p id="ident2"> - Notação cientifica </p>
                                        <p id="ident2"> - Transformação de unidades </p>
                                        <p id="ident2"> - Ordem de grandeza </p>
                                        <p id="ident2"> - Deslocamento e distância percorrida </p>
                                        <p id="ident2"> - Velocidade Escalar Média </p>
                                        <p id="ident2"> - M.R.U. e Gráficos </p>

                                    <p> - 2º Bimestre </p>
                                        <p id="ident2"> - Aceleração Escalar Média </p>
                                        <p id="ident2"> - M.R.U.V. e Gráficos </p>
                                        <p id="ident2"> - Equação de Torricelli </p>
                                        <p id="ident2"> - Movimento Circular Uniforme </p>
                                </div>
                            </td>
                        </tr>

                        <tr>  <td class="cd" id="fil" style="text-align: left"> - Filosofia - 13/11 (Sexta-Feira):
                                <div>
                                    <p> - 1º Bimestre </p>
                                        <p id="ident2"> - Todos os assuntos estudados </p>
                                    <p> - 2º Bimestre </p>
                                        <p id="ident2"> - Todos os assuntos estudados </p>
                                </div>
                            </td>
                        </tr>

                        <tr>  <td class="cd" id="soc" style="text-align: left"> - Sociologia - 13/11 (Sexta-Feira):
                                <div>
                                    <p> - 1º Bimestre </p>
                                        <p id="ident2"> - Capítulos 1 e 2 (Até a segunda coluna do capitulo 2) </p>
                                    <p> - 2º Bimestre </p>
                                        <p id="ident2"> - (Capitulo 3 e <a href="materias/sociologia.php">Apostila: Sociologia Clássica</a>)</p>
                                </div>
                            </td>
                        </tr>

                        <tr>  <td class="cd" id="geo" style="text-align: left"> - Geografia - 16/11 (Segunda-Feira):
                                <div>
                                    <p> - 1º Bimestre </p>
                                    <p> - Estudem assuntos como: </p>
                                        <p id="ident2"> - Coordenadas geográficas; </p>
                                        <p id="ident2"> - Fuso horário (O do Brasil não será cobrado); </p>
                                        <p id="ident2"> - Rosa dos ventos; </p>
                                        <p id="ident2"> - Orientação; </p>
                                        <p id="ident2"> - Movimentos da Terra; </p>
                                        <p id="ident2"> - Estações do ano; </p>
                                        <p id="ident2"> - Zonas climáticas; </p>
                                        <p id="ident2"> - Teoria da escala (Cálculos não serão cobrados).</p>

                                    <p> - 2º Bimestre </p>
                                    <p> - O conteúdo é Geologia. Estudem assuntos como: </p>
                                        <p id="ident2"> - Coordenadas geográficas; </p>
                                        <p id="ident2"> - Tipos de rochas; </p>
                                        <p id="ident2"> - Recursos minerais; </p>
                                        <p id="ident2"> - Tectônicas de placas e suas consequências; </p>
                                        <p id="ident2"> - Vulcanismo; </p>
                                        <p id="ident2"> - Sismicidade; </p>
                                        <p id="ident2"> - Tsunami; </p>
                                        <p id="ident2"> - Dobramentos modernos; </p>
                                        <p id="ident2"> - Dorsal meso-oceânica; </p>
                                        <p id="ident2"> - Tabela geológica. </p>

                                    <p> “Dica para estudar: refazer os exercícios, refazer a prova, e reler o livro. Na releitura sugiro que façam um resumo, construindo uma frase para cada parágrafo que lerem, assim você exercita a atenção durante a leitura, e o poder de resumir (poder de síntese). Bons estudos! Estou à disposição!!!!!!" </p>

                                    <p> - Flora Sousa Pidner </p>
                                </div>
                            </td>
                        </tr>

                        <tr>  <td class="cd" id="hist" style="text-align: left"> - História - 17/11 (Terça-Feira):
                                <div>
                                    <p> - 1º Bimestre </p>
                                            <p id="ident2"> - Modos de produção </p>
                                    <p> - 2º Bimestre </p>
                                            <p id="ident2"> - Grécia Antiga </p>
                                </div>
                            </td>
                        </tr>

                        <tr>  <td class="cd" id="qui" style="text-align: left"> - Química - 17/11 (Terça-Feira):
                                <div>
                                    <p> - 1º Bimestre </p>
                                        <p id="ident2"> - Propriedades especificas da matéria </p>
                                        <p id="ident2"> - Solubilidade </p>
                                    <p> - 2º Bimestre </p>
                                        <p id="ident2"> - Ligações Químicas </p>
                                </div>
                            </td>
                        </tr>

                        <tr>  <td class="cd" id="bio" style="text-align: left"> - Biologia - 17/11 (Terça-Feira):
                                <div>
                                    <p> - 1º Bimestre </p>
                                        <p id="ident2"> - Todos os assuntos estudados </p>
                                    <p> - 2º Bimestre </p>
                                        <p id="ident2"> - Todos os assuntos estudados </p>
                                </div>
                            </td>
                        </tr>

                        <tr>  <td class="cd" id="port" style="text-align: left"> - Língua Portuguesa - 17/11 (Terça-Feira):
                                <div>
                                    <p> - 1º Bimestre </p>
                                        <p id="ident2"> - Variação linguística </p>
                                        <p id="ident2"> - Elementos da Comunicação </p>
                                        <p id="ident2"> - Funções da linguagem </p>
                                        <p id="ident2"> - Homônimos e Parônimos </p>
                                        <p id="ident2"> - Linguagem verbal e não verbal </p>
                                        <p id="ident2"> - Polissemia </p>
                                        <p id="ident2"> - Denotação e Conotação </p>
                                        <p id="ident2"> - Intertextualidade </p>
                                        <p id="ident2"> - Introdução à Literatura: versificação - tipos de rimas e sílabas métricas </p>
                                    <p> - 2º Bimestre </p>
                                        <p id="ident2"> - Trovadorismo: </p>
                                            <p id="ident3"> - Cantigas de amor </p>
                                            <p id="ident3"> - Cantigas de amigo </p>
                                            <p id="ident3"> - Cantigas de escárnio </p>
                                            <p id="ident3"> - Cantigas de maldizer </p>
                                        <p id="ident2"> - Gêneros Literários: </p>
                                            <p id="ident3"> - Lírico </p>
                                            <p id="ident3"> - Épico </p>
                                            <p id="ident3"> - Dramático </p>
                                        <p id="ident2"> - Figuras de Linguagem </p>
                                        <p id="ident2"> - Humanismo </p>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="cd" id="alg" style="text-align: left"> - Algoritmos e Linguagem de Programação - 18/11 (Quarta):
                                <div>
                                    <p> - 1º Bimestre </p>
                                        <p id="ident2"> - Todos os assuntos estudados </p>
                                    <p> - 2º Bimestre </p>
                                        <p id="ident2"> - Todos os assuntos estudados </p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>

        <tr>  <td class="cd" id="intv"> Avaliações Futuras (01) (3º BIMESTRE) <br/> <br/>
            <table>
                <tr>  <td class="cd" id="qui" style="text-align: left"> - Química (3º BIMESTRE) - 24/11 (Terça-Feira):
                        <div>
                            <p id="ident2"> - Ligação Química </p>
                            <p id="ident2"> - Polaridade das Ligações </p>
                            <p id="ident2"> - Polaridade das Moléculas </p>
                            <p id="ident2"> - Interação Intermolecular </p>
                        </div>
                    </td>
                </tr>

            </table>

                <div>
                   <p>Seja feliz (ou não) olhando suas notas no <a href="http://sigaa.ifal.edu.br/sigaa/public/home.jsf">SIGAA</a></p>
                   <p>Então é isso, esperamos ter ajudado, quaisquer erros no horário por favor informem para o Firmino ou para mim (Davi) para correção, qualquer dúvida, entrar em <a href="contato.php">contato</a> conosco.</p>
                </div>
            </td>
        </tr>
    </table>

</section>

<?php include_once'footer.php' ?>