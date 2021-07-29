<?php
	include 'plantilla.php';
	require 'conexion.php';
	
    $query = "SELECT Nombre, valor*COUNT(CodigoArticulo)*cantidad FROM Pedidos INNER JOIN Articulos ON codigoArticulo=articulo_codigoArticulo group by codigoArticulo  having  sum(valor)>( SELECT sum(valor) FROM Pedidos INNER JOIN Articulos ON codigoArticulo=articulo_codigoArticulo  where codigoArticulo in(6,7,8 ))";

	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'Nombre:',1,0,'C',1);
    $pdf->Cell(90,6,'valor recaudado',1,1,'C',1);

	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['Nombre']),1,0,'C');
		$pdf->Cell(90,6,utf8_decode($row['valor*COUNT(CodigoArticulo)*cantidad']),1,1,'C');
	}
	$pdf->Output();
?>