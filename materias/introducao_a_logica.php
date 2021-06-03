<?php require_once '../_res/header.php' ?>
    <title>IFortecs - Introdução a Lógica</title>
</head>

<?php include_once'../_res/nav_menu.php' ?>

<section>
    <article>
        <h2> Introdução à Lógica </h2>
         </h5>

        <p>Livro – Lógica Matemática</p>
        <p>Proposição = Afirmação passível que assumo a valor verdadeiro ou falso.</p>
        <p>Princípio do 3º Excluído:</p>
            <p id="ident2">Verdadeira ou Falsa.</p>
        <p>Princípio da não contradição:</p>
            <p id="ident2">Não pode ser verdadeiro e falso ao mesmo tempo.</p>
    </article>

    <article>
        <h5> Quarta-Feira, dia 14 de Outubro de 2015, 2ª e 3ª Aula </h5>
        <p> <span class="logic">N</span> = Negação </p>
        <p> <span class="logic">o</span> = Ou </p>
        <p> <span class="logic">e</span> = E </p>
        <p> <span class="logic">c</span> = Condicional </p>
        <p> <span class="logic">b</span> = Bi-Condicional </p>
        <p> <span class="logic">O</span> = Ou Exclusivo </p>

<table class="norm">
<tr>
    <td class="ce"> p </td>
    <td class="ce"> q </td>
    <td class="ce"> s </td>
    <td class="ce"> p <span class="logic">e</span> q </td>
    <td class="ce"> (p <span class="logic">e</span> q) <span class="logic">o</span> s </td>
    <td class="ce"> q <span class="logic">o</span> s </td>
    <td class="ce"> p <span class="logic">e</span> (q <span class="logic">o</span> s) </td>

</tr>

<tr>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
</tr>

<tr>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> F </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
</tr>

<tr>
    <td class="cd"> V </td>
    <td class="cd"> F </td>
    <td class="cd"> V </td>
    <td class="cd"> F </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
</tr>

<tr>
    <td class="cd"> V </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
</tr>

<tr>
    <td class="cd"> F </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> F </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> F </td>
</tr>

<tr>
    <td class="cd"> F </td>
    <td class="cd"> V </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> V </td>
    <td class="cd"> F </td>
</tr>

<tr>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> V </td>
    <td class="cd"> F </td>
    <td class="cd"> V </td>
    <td class="cd"> V </td>
    <td class="cd"> F </td>
</tr>

<tr>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
    <td class="cd"> F </td>
</tr>
</table>

        <h4>Ordem de Precedência</h4>

        <p> 1º <span class="logic">N</span> (Negação) </p>
        <p> 2º <span class="logic">e</span> (E) </p>
        <p> 3º <span class="logic">O</span> (Ou Exclusivo) </p>
        <p> 4º <span class="logic">o</span> (Ou) </p>
        <p> 5º <span class="logic">c</span> (Condicional) </p>
        <p> 6º <span class="logic">b</span> (Bi-Condicional) </p>

        <p> Atividade pagina: 39 a 42.</p>

        <h4>Livro: Lógica Matemática</h4>
        <iframe src="../_anexos/Lógica%20Matemática.pdf"> </iframe>
    </article>
    <article>
        <h5> Quarta-Feira, dia 04 de Novembro de 2015, 2ª e 3ª Aula</h5>

        <h3>Tautologia</h3>

        <p>“Quando a última coluna for toda verdadeira”</p>
        <p>Definição: Chama-se Tautologia toda composição composta cuja a última coluna da sua tabela-verdade encerra somente a letra V (Verdade). Ou seja, Tautologia é uma proposição cujo valor lógico é sempre verdadeiro.</p>
        <p>Se P for uma Tautologia e sua configuração é P(vvf) seu valor lógico será V.</p>

        <h3>Contradição</h3>

        <p>Contradição é uma proposição cujo valor lógico é sempre falso.</p>

        <h3>Contingência</h3>

        <p>Quando uma proposição não é tautológica nem contraválida, a chamamos de contingência ou proposição contingente ou proposição indeterminada.</p>

        <p> Atividade página 48 </p>
    </article>
    <article>
        <h5> Quarta-Feira, dia 11 de Novembro de 2015, 2ª e 3ª Aula</h5>
        <h3> Implicação Lógica </h3>
        <br>
        <p>Páginas 49 a 53.</p>
        <br>
        <p> Definição: Diz-se que uma proposição P(p, q, r, ...) implica logicamente ou apenas implica um proposição Q(p, q, r, ...), se Q(p, q, r, ...) é verdadeira (V) todas as vezes que P(p, q, r, ...) é verdadeira (V). </p>
        <p> Em outros termos, uma proposição P(p, q, r. . . .) implica logicamente ou apenas implica uma proposição Q(p, q, r, . . .) todas as vezes que nas respectivas tabelas-verdade dessas duas proposições não aparece V na última coluna do P(p, q, r, . . .) e F na última coluna de Q(p, q, r, . . .), com V e F em uma mesma linha, isto é, não ocorre P(p, q, r, . . .) e Q(p, q, r, . . .) com valores lógicos simultâneos respectivamente V e F. </p>
        <p> Indica-se que a proposição P(p, q, r, . . .) implica a proposição Q(p, q, r,...)  com a notação: </p>
            <p id="ident2"> P(p, q, r, . . .) => Q(p, q, r,...) </p>
        <p> Em particular, toda proposição implica uma tautologia e somente uma contradição implica uma contradição. </p>
    </article>

<?php include_once'../_res/footer.php' ?>