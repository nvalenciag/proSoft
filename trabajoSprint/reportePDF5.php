<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT Descripcion, COUNT(t.Codigo) FROM Paquete p INNER JOIN tipoPaquete t ON t.Codigo=tipoPaquete_Codigo group by t.Codigo order by COUNT(t.Codigo) desc";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'Descripcion:',1,0,'C',1);
    $pdf->Cell(70,6,'Cantidad  de paquetes',1,1,'C',1);

	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['Descripcion']),1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['COUNT(t.Codigo)']),1,1,'C');
	}
	$pdf->Output();
?>