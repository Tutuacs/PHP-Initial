<?php session_start(); 
require('../sessao.php');
require('../menu.php');?>


<form action="/vagas/criar_salvar.php" method="post">
    <div>
        <label>Título</label>
        <input type="text" name="titulo" value=""/>
    </div>
    <div>
        <label>Descrição</label>
        <input type="text" name="descricao" value=""/>
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>