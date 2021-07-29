<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT cl.cedula,nombre,count(cl.cedula) FROM Paquete p INNER JOIN tipoPaquete t ON t.Codigo=tipoPaquete_Codigo INNER JOIN telefono_cliente tc ON tc.numero=Telefono_Cliente_Numero INNER JOIN cliente cl ON cl.cedula=Cliente_cedula group by cl.cedula order by count(cl.cedula)desc";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(60,6,'Cedula:',1,0,'C',1);
    $pdf->Cell(60,6,'Nombre:',1,0,'C',1);
    $pdf->Cell(75,6,'Numero de compra de paquetes:',1,1,'C',1);

	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(60,6,utf8_decode($row['cedula']),1,0,'C');
		$pdf->Cell(60,6,utf8_decode($row['nombre']),1,0,'C');
        $pdf->Cell(75,6,utf8_decode($row['count(cl.cedula)']),1,1,'C');
	}
	$pdf->Output();
?>