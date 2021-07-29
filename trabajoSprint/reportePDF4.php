<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT Nombre,Descripcion, COUNT(CodigoArticulo)*cantidad FROM Pedidos INNER JOIN Articulos ON codigoArticulo=numeroPedido group by codigoArticulo  order by count(codigoArticulo)*cantidad desc";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(60,6,'Nombre:',1,0,'C',1);
    $pdf->Cell(60,6,'Descripcion:',1,0,'C',1);
    $pdf->Cell(75,6,'Cuenta de Cantidad:',1,1,'C',1);


	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(60,6,utf8_decode($row['Nombre']),1,0,'C');
		$pdf->Cell(60,6,utf8_decode($row['Descripcion']),1,0,'C');
        $pdf->Cell(75,6,utf8_decode($row['COUNT(CodigoArticulo)*cantidad']),1,1,'C');

	}
	$pdf->Output();
?>