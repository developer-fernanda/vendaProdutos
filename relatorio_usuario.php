<?php
define ('FPDF_FONTPATH', 'font/');
require ('pdf/fpdf.php');
$pdf = new FPDF ('L', 'cm', 'A4');
$pdf->AddPage();
$pdf -> SetFont('Arial', 'B', '12');
$pdo = new PDO ('mysql:host=localhost; dbname=ds', 'root', '');
$sql = $pdo ->prepare("select * from usuario order by nome");
$sql->execute();
// Tamanho da folha, pula linha (nome) bordas, pula linha, centraliza
$pdf-> cell(27,2,utf8_decode("RELATÓRIO DE USUÁRIOS"),0,3,'C');
$pdf-> cell(2,1,utf8_decode("Código"),1,0,'C');
$pdf-> cell(9,1,utf8_decode("Nome"),1,0,'C');
$pdf-> cell(9,1,utf8_decode("E-mail"),1,0,'C');
$pdf-> cell(7,1,utf8_decode("Perfil"),1,1,'C');
foreach($sql as $resultado)
{
    $pdf-> cell (2,1,$resultado['id'],1,0,'C');
    $pdf-> cell (9,1,utf8_decode($resultado['nome']),1,0,'C');
    $pdf-> cell (9,1,utf8_decode($resultado['email']),1,0,'C');
    $pdf-> cell (7,1,utf8_decode($resultado['perfil']),1,1,'C');
}
$pdf-> OutPut();

?>
