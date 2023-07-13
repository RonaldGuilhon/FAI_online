<?php
session_start();
include_once("conexao.php");
//-------------------variaveis - itens auditados-------------------//
//-------------------identificação modelo
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
$partnumber = filter_input(INPUT_POST, 'partnumber', FILTER_SANITIZE_EMAIL);
$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_STRING);
$versao = filter_input(INPUT_POST, 'versao', FILTER_SANITIZE_STRING);
$ordem = filter_input(INPUT_POST, 'ordem', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
//-------------------Linha
$linhaa = filter_input(INPUT_POST, 'linhaa', FILTER_SANITIZE_STRING);
$linhab = filter_input(INPUT_POST, 'linhab', FILTER_SANITIZE_STRING);
$linhaimc = filter_input(INPUT_POST, 'linhaimc', FILTER_SANITIZE_STRING);
//-------------------SMT - Printer, SPI, NXT, XP, XP2
$modelosolda = filter_input(INPUT_POST, 'modelosolda', FILTER_SANITIZE_STRING);
$squeegee = filter_input(INPUT_POST, 'squeegee', FILTER_SANITIZE_STRING);
$spinome = filter_input(INPUT_POST, 'spinome', FILTER_SANITIZE_STRING);
$stencila = filter_input(INPUT_POST, 'stencila', FILTER_SANITIZE_STRING);
$printervelocidadea = filter_input(INPUT_POST, 'printervelocidadea', FILTER_SANITIZE_STRING);
$printerpressaoa = filter_input(INPUT_POST, 'printerpressaoa', FILTER_SANITIZE_STRING);
$stencilb = filter_input(INPUT_POST, 'stencilb', FILTER_SANITIZE_STRING);
$printervelocidadeb = filter_input(INPUT_POST, 'printervelocidadeb', FILTER_SANITIZE_STRING);
$printerpressaob = filter_input(INPUT_POST, 'printerpressaob', FILTER_SANITIZE_STRING);
//-------------------Reflow
$rnome = filter_input(INPUT_POST, 'rnome', FILTER_SANITIZE_STRING);
$n2 = filter_input(INPUT_POST, 'n2', FILTER_SANITIZE_STRING);
$mecalor = filter_input(INPUT_POST, 'mecalor', FILTER_SANITIZE_STRING);
$posforno = filter_input(INPUT_POST, 'posforno', FILTER_SANITIZE_STRING);
$velocidadeConveyor = filter_input(INPUT_POST, 'velocidadeConveyor', FILTER_SANITIZE_STRING);
$adjconveyor = filter_input(INPUT_POST, 'adjconveyor', FILTER_SANITIZE_STRING);
//-------------------AOI, Raio X, Router
$aoipolaridade = filter_input(INPUT_POST, 'aoipolaridade', FILTER_SANITIZE_STRING);
$aoipresenca = filter_input(INPUT_POST, 'aoipresenca', FILTER_SANITIZE_STRING);
$raiox = filter_input(INPUT_POST, 'raiox', FILTER_SANITIZE_STRING);
$router = filter_input(INPUT_POST, 'router', FILTER_SANITIZE_STRING);
//-------------------IMC
$imcdescarregamento = filter_input(INPUT_POST, 'imcdescarregamento', FILTER_SANITIZE_STRING);
$ict = filter_input(INPUT_POST, 'ict', FILTER_SANITIZE_STRING);
$imcfctversao = filter_input(INPUT_POST, 'imcfctversao', FILTER_SANITIZE_STRING);
$imcfctjigs = filter_input(INPUT_POST, 'imcfctjigs', FILTER_SANITIZE_STRING);
$imcunderfill = filter_input(INPUT_POST, 'imcunderfill', FILTER_SANITIZE_STRING);
$imchotbarp = filter_input(INPUT_POST, 'imchotbarp', FILTER_SANITIZE_STRING);
$imchotbart = filter_input(INPUT_POST, 'imchotbart', FILTER_SANITIZE_STRING);
$imchotbartempo = filter_input(INPUT_POST, 'imchotbartempo', FILTER_SANITIZE_STRING);
$imcfctperif = filter_input(INPUT_POST, 'imcfctperif', FILTER_SANITIZE_STRING);
$imcperifvisual = filter_input(INPUT_POST, 'imcperifvisual', FILTER_SANITIZE_STRING);
$oqcmemram = filter_input(INPUT_POST, 'oqcmemram', FILTER_SANITIZE_STRING);
$oqcmemvid = filter_input(INPUT_POST, 'oqcmemvid', FILTER_SANITIZE_STRING);
$oqcproces = filter_input(INPUT_POST, 'oqcproces', FILTER_SANITIZE_STRING);
$oqcvrbios = filter_input(INPUT_POST, 'oqcvrbios', FILTER_SANITIZE_STRING);
$oqcvrme = filter_input(INPUT_POST, 'oqcvrme', FILTER_SANITIZE_STRING);


//-------------------------atribuição dos campos na tabela


$result_fai = "INSERT INTO fai (modelo, partnumber, codigo, versao, ordem, data, 
                                linhaa, linhab, linhaimc, 
                                modelosolda, squeegee, spinome, stencila, printervelocidadea, printerpressaoa, stencilb, printervelocidadeb, printerpressaob,
                                rnome, n2, mecalor, posforno, velocidadeConveyor, adjconveyor,
                                aoipolaridade,aoipresenca,raiox,router, 
                                imcdescarregamento,ict,imcfctversao,imcfctjigs,imcunderfill,imchotbarp,imchotbart,imchotbartempo,imcfctperif,imcperifvisual,oqcmemram,oqcmemvid,oqcproces,oqcvrbios,oqcvrme,created) 
                        VALUES ('$modelo', '$partnumber', '$codigo', '$versao', '$ordem', '$data', 
                                '$linhaa', '$linhab', '$linhaimc',
                                '$modelosolda','$squeegee','$spinome','$stencila','$printervelocidadea','$printerpressaoa','$stencilb','$printervelocidadeb','$printerpressaob', 
                                '$rnome', '$n2','$mecalor','$posforno','$velocidadeConveyor','$adjconveyor', 
                                '$aoipolaridade','$aoipresenca','$raiox','$router',
                                '$imcdescarregamento','$ict','$imcfctversao','$imcfctjigs','$imcunderfill','$imchotbarp','$imchotbart','$imchotbartempo','$imcfctperif','$imcperifvisual','$oqcmemram','$oqcmemvid','$oqcproces','$oqcvrbios','$oqcvrme',NOW())";
$resultado_fai = mysqli_query($conn, $result_fai);



//-------------------------conexão
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= 'color: green'>FAI cadastrado com sucesso</p>";
    header("Location: index.php"); //retorna para a pagina inicial
}else{
    $_SESSION['msg'] = "<p style= 'color: red'>FAI não foi cadastrado com sucesso</p>";
    header("Location: index.php"); //retorna para a pagina inicial
}
?>