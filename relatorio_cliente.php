<?php
define ('FPDF_FONTPATH', 'font/');
require ('pdf/fpdf.php');
$pdf = new FPDF ('L', 'cm', 'A4');
$pdf->AddPage();
$pdf -> SetFont('Arial', 'B', '12');
$pdo = new PDO ('mysql:host=localhost; dbname=ds', 'root', '');
$sql = $pdo ->prepare("select * from cliente order by nome");
$sql->execute();
// Tamanho da folha, pula linha (nome) bordas, pula linha, centraliza
$pdf-> cell(27,2,utf8_decode("RELATÓRIO DE CLIENTE"),0,3,'C');
$pdf-> cell(2,1,utf8_decode("Código"),1,0,'C');
$pdf-> cell(7,1,utf8_decode("Nome"),1,0,'C');
$pdf-> cell(5,1,utf8_decode("Data de Nascimento"),1,0,'C');
$pdf-> cell(5,1,"Telefone",1,0,'C');
$pdf-> cell(4,1,"CPF",1,0,'C');
$pdf-> cell(4,1,"RG",1,1,'C');
foreach($sql as $resultado)
{
    $pdf-> cell (2,1,$resultado['id'],1,0,'C');
    $pdf-> cell (7,1,utf8_encode($resultado['nome']),1,0,'C');
    $pdf-> cell (5,1,utf8_encode($resultado['data_nascimento']),1,0,'C');
    $pdf-> cell (5,1,utf8_encode($resultado['telefone']),1,0,'C');
    $pdf-> cell (4,1,utf8_encode($resultado['cpf']),1,0,'C');
    $pdf-> cell (4,1,utf8_encode($resultado['rg']),1,1,'C');
}
$pdf-> OutPut();

?>
