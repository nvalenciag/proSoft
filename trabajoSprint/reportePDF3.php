<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT direccion,SUM(sueldo) FROM empleado em inner join sucursal su on em.Sucursal_Codigo = su.Codigo where sueldo>900000 group by su.Codigo";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'Direccion',1,0,'C',1);
    $pdf->Cell(70,6,'Suma de sueldo',1,1,'C',1);

	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['direccion']),1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['SUM(sueldo)']),1,1,'C');
	}
	$pdf->Output();
?>