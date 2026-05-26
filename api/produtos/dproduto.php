<?php
//ucategoria.php - serve para alterar os dados de categorias
require '../../app/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$json = filter_input(INPUT_GET, 'jsn');
$data = json_decode($json, true);
$id = $data['id'];
    $sql = "delete from produtos where proid = ?;";
    $prp = $pdo->prepare($sql);
    $prp->execute([$id]);
Conexao::desconectar();
//{"id":valor}
//http://localhost/Projetos_ETEC_PWEB-III_Div1/api/categorias/dcategoria.php?jsn={"id":1}
//localhost/Projetos_ETEC_PWEB-III_Div1/api/categorias/dcategoria.php?jsn={"id":1}
