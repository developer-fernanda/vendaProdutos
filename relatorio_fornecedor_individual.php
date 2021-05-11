<?php
$codigo = $_GET['codigo'];
define ('FPDF_FONTPATH', 'font/');
require ('pdf/fpdf.php');
$pdf = new FPDF ('L', 'cm', 'A4');
$pdf->AddPage();
$pdf -> SetFont('Arial', 'B', '12');
$pdo = new PDO ('mysql:host=localhost; dbname=ds', 'root', '');
$sql = $pdo ->prepare("select * from fornecedor where id = '$codigo'");
$sql->execute();
// Tamanho da folha, pula linha (nome) bordas, pula linha, centraliza
$pdf-> cell(27,2,utf8_decode("RELATÓRIO INDIVIDUAL DE FORNECEDOR"),0,3,'C');
$pdf-> cell(2,1,utf8_decode("Código"),1,0,'C');
$pdf-> cell(7,1,utf8_decode("Razão Social"),1,0,'C');
$pdf-> cell(5,1,utf8_decode("Data de Abertura"),1,0,'C');
$pdf-> cell(6,1,utf8_decode("Inscrição Estadual"),1,0,'C');
$pdf-> cell(6,1,utf8_decode("Inscrição Municipal"),1,1,'C');
foreach($sql as $resultado)
{
    $pdf-> cell (2,1,$resultado['id'],1,0,'C');
    $pdf-> cell (7,1,utf8_encode($resultado['razao_social']),1,0,'C');
    $pdf-> cell (5,1,utf8_encode($resultado['data_abertura']),1,0,'C');
    $pdf-> cell (6,1,utf8_encode($resultado['inscricao_estadual']),1,0,'C');
    $pdf-> cell (6,1,utf8_encode($resultado['inscricao_municipal']),1,1,'C');
}
$pdf-> OutPut();

?>
