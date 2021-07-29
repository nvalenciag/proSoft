<?php
	include 'plantilla.php';
	require 'conexion.php';

    $query = "SELECT cedula, nombre, SUm(valor) from cliente inner join telefono_cliente on cedula=Cliente_cedula inner join paquete on numero=Telefono_Cliente_Numero inner join tipoPaquete t on t.Codigo=tipoPaquete_Codigo group by cedula having sum(valor)>(Select SUm(valor) from cliente inner join telefono_cliente on cedula=Cliente_cedula inner join paquete on numero=Telefono_Cliente_Numero inner join tipoPaquete t on t.Codigo=tipoPaquete_Codigo  where cedula='149503030' group by cedula)";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(60,6,'Cedula:',1,0,'C',1);
    $pdf->Cell(60,6,'Nombre:',1,0,'C',1);
    $pdf->Cell(75,6,'Valor gastado por los clientes',1,1,'C',1);

	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(60,6,utf8_decode($row['cedula']),1,0,'C');
		$pdf->Cell(60,6,utf8_decode($row['nombre']),1,0,'C');
        $pdf->Cell(75,6,utf8_decode($row['SUm(valor)']),1,1,'C');
	}
	$pdf->Output();
?>