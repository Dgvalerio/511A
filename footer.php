<?php $ant = isset ($ant)? $ant:'#'; $pro = isset ($pro)? $pro:'#'; ?>
<div id=footer style="display: <?php if ($ant=='#' && $pro=='#') {echo'none';} else {echo'block';} ?>;">
    <a id="ant" href="<?php echo $ant;?>" style="display: <?php if ($ant=='#') {echo'none';} ?>;">&laquo; Anterior</a>
    <a id="pro" href="<?php echo $pro;?>" style="display: <?php if ($pro=='#') {echo'none';} ?>;">Proximo &raquo;</a>
    <br/>
</div>
<footer>
    <p> <span class="titprincipal"> IForTecs </span> <br> <br/> Copyright<a id="seta" href="saida/index.php">&copy;</a> 2015 por Davi G. Valério </p>
</footer>
</div>
</body>
</html>