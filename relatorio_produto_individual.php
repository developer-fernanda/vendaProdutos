<?php
$codigo = $_GET['codigo'];
define ('FPDF_FONTPATH', 'font/');
require ('pdf/fpdf.php');
$pdf = new FPDF ('L', 'cm', 'A4');
$pdf->AddPage();
$pdf -> SetFont('Arial', 'B', '12');
$pdo = new PDO ('mysql:host=localhost; dbname=ds', 'root', '');
$sql = $pdo ->prepare("select * from produto where id = '$codigo'");
$sql->execute();
// Tamanho da folha, pula linha (nome) bordas, pula linha, centraliza
$pdf-> cell(27,2,utf8_decode("RELATÓRIO INDIVIDUAL DE PRODUTO"),0,3,'C');
$pdf-> cell(2,1,utf8_decode("Código"),1,0,'C');
$pdf-> cell(7,1,utf8_decode("Descrição do Produto"),1,0,'C');
$pdf-> cell(3,1,utf8_decode("Marca"),1,0,'C');
$pdf-> cell(4,1,utf8_decode("Quantidade"),1,0,'C');
$pdf-> cell(3,1,"Valor",1,0,'C');
$pdf-> cell(5,1,"Data de Validade",1,0,'C');
$pdf-> cell(3,1,"Fornecedor",1,1,'C');
foreach($sql as $resultado)
{
    $pdf-> cell (2,1,$resultado['id'],1,0,'C');
    $pdf-> cell (7,1,utf8_encode($resultado['descricao_produto']),1,0,'C');
    $pdf-> cell (3,1,utf8_encode($resultado['marca']),1,0,'C');
    $pdf-> cell (4,1,utf8_encode($resultado['quantidade']),1,0,'C');
    $pdf-> cell (3,1,utf8_encode($resultado['valor']),1,0,'C');
    $pdf-> cell (5,1,utf8_encode($resultado['data_validade']),1,0,'C');
    $pdf-> cell (3,1,utf8_encode($resultado['fornecedor']),1,1,'C');
}
$pdf-> OutPut();

?>
