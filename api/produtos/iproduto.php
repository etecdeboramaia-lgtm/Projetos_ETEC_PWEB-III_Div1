<?php
//iusuario.php - serve para cadastrar um novo usuário
require '../../app/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$json = filter_input(INPUT_GET,'jsn');
$data = json_decode($json,true);
$nome = strtoupper($data['nome']);
$vlvenda = $data['vlvenda'];
$cat = $data['cat'];
$sql = "insert into produtos (pronome,provlvenda,procatid) values (?,?,?);";
$prp = $pdo->prepare($sql);
$prp->execute([$nome, $vlvenda, $cat]);
Conexao::desconectar();
//{"nome":"valor"}
//http://localhost/Projetos_ETEC_PWEB-III_Div1/api/produtos/iproduto.php?jsn={"nome":"X-SALADA","vlvenda":0.00;"cat":0}