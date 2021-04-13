<?php
define ('FPDF_FONTPATH', 'font/');
require ('pdf/fpdf.php');
$pdf = new FPDF ('L', 'cm', 'A4');
$pdf->AddPage();
$pdf -> SetFont('Arial', 'B', '12');
$pdo = new PDO ('mysql:host=localhost; dbname=ds', 'root', '');
$sql = $pdo ->prepare("select * from produto order by descricao_produto");
$sql->execute();
// Tamanho da folha, pula linha (nome) bordas, pula linha, centraliza
$pdf-> cell(27,2,utf8_decode("RELATÓRIO DE PRODUTO"),0,3,'C');
$pdf-> cell(2,1,utf8_decode("Código"),1,0,'C');
$pdf-> cell(8,1,utf8_decode("Descrição do Produto"),1,0,'C');
$pdf-> cell(3,1,"Quantidade",1,0,'C');
$pdf-> cell(3,1,"Valor",1,0,'C');
$pdf-> cell(11,1,utf8_decode("Código de Barras"),1,1,'C');
foreach($sql as $resultado)
{
    $pdf-> cell (2,1,$resultado['id'],1,0,'C');
    $pdf-> cell (8,1,utf8_decode($resultado['descricao_produto']),1,0,'C');
    $pdf-> cell (3,1,utf8_decode($resultado['quantidade']),1,0,'C');
    $pdf-> cell (3,1,utf8_decode($resultado['valor']),1,0,'C');
    $pdf-> cell (11,1,utf8_decode($resultado['codigo_barras']),1,1,'C');
   }
$pdf-> OutPut();

?>
