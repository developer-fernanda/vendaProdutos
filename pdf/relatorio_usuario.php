<?php
define ('FPDF FONTPATH', 'font/');
require ('pdf/fdpf.php');
$pdf = new FPDF ('P', 'cm', 'A4');
$pdf->AddPage();
$pdf -> SetFont('Arial', 'B', '12');
$pdf = new PDO ('mysql:host=localhost; dbname=ds', 'root', '');
$sql = $pdo ->prepare("select * from usuario order by nome");
$sql->execute();
$pdf-> cell(18,1,"Relatorio de Usuarios",1,3,'C');
$pdf-> cell(3,1,"Codigo",1,0,'C');
$pdf-> cell(8,1,"Nome",1,0,'C');
$pdf-> cell(7,1,"Perfil",1,1,'C');
foreach($sql as $resultado)
{
    $pdf-> cell (3,1,$resultado['id'],1,0,'C');
    $pdf-> cell (8,1,utf8_encode($resultado['nome']),1,0,'C');
    $pdf-> cell (7,1,utf8_encode($resultado['perfil']),1,1,'C');
}
$pdf-> OutPut();
