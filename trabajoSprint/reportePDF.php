<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT SUM(valor) FROM chance where fechaRealizado between '2021-06-01' and '2021-07-01'";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(80,6,'Suma del valor de los chances',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(80,6,utf8_decode($row['SUM(valor)']),1,0,'C');
	}
	$pdf->Output();
?>