<?php
$subjectPrefix = 'LightCodes Contato';
$emailTo = 'al.davigvalerio@hotmail.com';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = stripslashes(trim($_POST['form-name']));
    $email    = stripslashes(trim($_POST['form-email']));
    $assunto  = stripslashes(trim($_POST['form-assunto']));
    $mensagem = stripslashes(trim($_POST['form-mensagem']));
    $pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $assunto)) {
        die("Header injection detected");
    }

    $emailIsValid = preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);

    if($name && $email && $emailIsValid && $assunto && $mensagem){
        $subject = "$subjectPrefix $assunto";
        $body = "Nome: $name <br /> Email: $email <br /> Mensagem: $mensagem";

        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=UTF-8' . PHP_EOL;
        $headers .= "From: $name <$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;

    } else {
        $hasError = true;
    }
}
?>

<?php require_once 'header.php' ?>
    <title>Fale Conosco</title>
    <?php
        $music = 'flight_of_the_bumblebee';
        $desc = 'A Luz no fim do túnel que você precisava.';
    ?>
</head>

    <?php require_once 'nav_menu.php' ?>

<section>

    <article>

        <h2> Fale Conosco </h2>
        <p>O site <span class="titprincp"> LightCodes </span> (Antigo Site <a href="http://lightning.wc.lt/">“<span class="titprincp">Lightning</span>”</a> e Blog <a href="http://o-raio.blogspot.com.br/">“O Raio”</a>), ainda está em desenvolvimento, mas gostaríamos que vocês dessem dicas de como melhorar e aprimorar nosso site. Queremos fazer um site que ajude no máximo de assuntos o possível, pois eu mesmo (o dono do site) já procurei ajuda na internet sobre algumas urgências e, demorei muito para achar, pois poucos sites tinham respostas para os meus problemas. Bom, mas só falar não adianta, temos que agir! É isso que estou tentando fazer, queria a ajuda de vocês.</p>
        <p>Mandem dicas, sugestões, reclamações e perguntas. Em tudo que pudermos ajudar, ajudaremos!</p>

        <?php if(isset($emailSent) && $emailSent): ?>
            <div>
                <div class="alert alert-success text-center">Sua mensagem foi enviada com sucesso.</div>
            </div>
        <?php else: ?>
            <?php if(isset($hasError) && $hasError): ?>
                <div>
                    <div class="alert alert-danger text-center">Houve um erro no envio, tente novamente mais tarde.</div>
                </div>
            <?php endif; ?>

            <div>

<table id="cont">
    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" class="form-horizontal" role="form" method="post">
        <tr>
            <div class="form-group">
                <td class="ce">
                    <label for="name">Nome</label>
                </td>

                <td class="cd">
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Nome" required>
                    </div>
                </td>
            </div>
        </tr>

        <tr>
            <div class="form-group">
                <td class="ce">
                    <label for="email">Email</label>
                </td>

                <td class="cd">
                    <div class="col-lg-10">
                        <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email" required>
                    </div>
                </td>
            </div>
        </tr>

        <tr>
            <div class="form-group">

                <td class="ce">
                    <label for="assunto">Assunto</label>
                </td>

                <td class="cd">
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="form-assunto" name="form-assunto" placeholder="Assunto" required>
                    </div>
                </td>

            </div>
        </tr>

        <tr>
            <div class="form-group">
                <td class="ce">
                    <label for="mensagem"><br/>Mensagem</label>
                </td>

                <td class="cd">
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="form-mensagem" name="form-mensagem" placeholder="Mensagem" required></textarea>
                    </div>
                </td>
            </div>
        </tr>

        <tr id="but">
            <td>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit">Enviar</button>
                    </div>
                </div>
            </td>
        </tr>
    </form>
</table>

            </div>
        <?php endif; ?>

        <?php
        $ieVersion = preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches) ? floatval($matches[1]) : null;

        if($ieVersion < 9 && $ieVersion != null) {
            $jQueryVersion = '1.10.2';
        } else {
            $jQueryVersion = '2.0.3';
        }
        ?>

        <p>
            <b>Você pode também entrar em contato via e-mail:</b> <br/>
                al.davigvalerio@gmail.com  <br/>
                al.davigvalerio@hotmail.com
        </p>

        <h2> Sobre </h2>
        <h6> <b style="color: rgb(130,130,150)"> LightCodes Versão 3.1 (/09/2015) </b> </h6>
        <p> O Site <span class="titprincp"> LightCodes </span> é o upgrade do site <span class="titprincp">Lightning</span>, que por sua ver é um upgrade do Blog “O Raio”, que era um upgrade do Blog “Click”. Todos ainda estão online pra quem quiser dar uma olhadinha, pois uma boa parte dos conteúdos não foram passadas de um para o outro, pois a organização dos dados estava ficando cada vez mais complicada, pois quanto mais assunto, mais organização, e o Site de manutenção do Blog não estava ajudando nisso. Então resolvi fazer um curso de HTML na internet e achei um ótimo de HTML 5, totalmente grátis, e pra min foi ótimo. Com os conhecimentos desse curso, e um pouco do conhecimento de programação que eu já tinha, veio o upgrade “<span class="titprincp"> Lightning </span>”! bom, e, o nome veio da minha discreta admiração de raios, relâmpagos e trovões. </p>
        <p> Bom, <span class="titprincp"> LightCodes </span> está bem mais organizado, já tem um nome mais apropriado, um visual mais leve, e agora eu também possou um conhecimento basico de Java e PHP (Graças a alguns cursos do <a href="http://www.cursoemvideo.com/">Curso Em Video</a>) e um principio mais objetivo para o site. </p>
        <p> Além disso concordemos que o nome melhorou bastante.</p>
        </article>
</section>

<?php require_once 'footer.php' ?>