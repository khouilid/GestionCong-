<?php
 require_once "../vendor/autoload.php";
 session_start();
// create new FPDF class 
$pdf = new FPDF('P','mm','A4');
// craete new page
$pdf->AddPage();
// set the font
$pdf->SetFont('Arial','',12);
// craete the header
$pdf->Cell(130 ,5,'YouCode',0,1);

$pdf->Cell(130 ,5,'[Youssofia]',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'[MORROCO]',0,0);
$pdf->Cell(25 ,5,'Date',0,0);
$pdf->Cell(34 ,5,'['. date("Y/m/d") .']',0,1);//end of line

$pdf->Cell(130 ,5,'Phone [+12345678]',0,0);

$pdf->Cell(25 ,5,'Customer ID',0,0);
$pdf->Cell(34 ,5,'['. $_SESSION['ID'] .']',0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

// create a table that containe emplyee data
$pdf->Cell(189 ,10,'',0,1);//end of line

$pdf->Cell(130 ,5,'First Name',1,0);
$pdf->Cell(60 ,5, $_SESSION['FirstName'],1,1);

$pdf->Cell(130 ,5,'Last Name',1,0);
$pdf->Cell(60 ,5,$_SESSION['LastName'],1,1);

$pdf->Cell(130 ,5,'CIN',1,0);
$pdf->Cell(60 ,5,$_SESSION['cin'] ,1,1);

$pdf->Cell(130 ,5,'Phone',1,0);
$pdf->Cell(60 ,5,$_SESSION['Phone'],1,1);

$pdf->Cell(130 ,5,'E-mail',1,0);
$pdf->Cell(60 ,5,$_SESSION['mail'],1,1);

$pdf->Cell(130 ,5,'Job Type ',1,0);
$pdf->Cell(60 ,5,'Emplyee',1,1);

$pdf->Cell(189 ,10,'',0,1);//end of line

$pdf->Output();


?>