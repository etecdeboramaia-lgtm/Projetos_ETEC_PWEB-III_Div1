<?php
//ucategoria.php - serve para alterar os dados de categorias
require '../../app/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$json = filter_input(INPUT_GET, 'jsn');
$data = json_decode($json, true);
$id = $data['id'];
$nome = strtoupper($data['nome']);
$vlvenda = $data['vlvenda'];
$cat = $data['cat'];
    $sql = "update produtos set pronome = ?, provlvenda = ?, procatid = ? where proid = ?;";
    $prp = $pdo->prepare($sql);
    $prp->execute([$nome, $vlvenda, $cat, $id]);
Conexao::desconectar();
//{"nome":"valor","ativo":valor,"id":valor}
//http://localhost/Projetos_ETEC_PWEB-III_Div1/api/categorias/ucategoria.php?jsn={"nome":"BEBIDA","ativo":1,"id":1}
//localhost/Projetos_ETEC_PWEB-III_Div1/api/categorias/ucategoria.php?jsn={"nome":"BEBIDA","ativo":1,"id":1}
