<?php

tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Reporte Empresa";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title,"Empresa de:" .$empre_item['nombre']);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 8);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
ob_start();
    
?>
	
	<style type="text/css">
		th{
			background-color: #6F8E74;
            color: white;
            font-family: sans-serif;
		}

	</style>

	<table>

 	<thead><tr><th>Nombre</th><th>Correo</th><th>Identificacion</th><th>Nombre de Usuario</th><th>Telefono</th><th>Direccion</th></tr></thead>
 	<tbody>
	        <tr>
                <td><?php echo $empre_item['nombre']; ?></td>
                <td><?php echo $empre_item['email']; ?></td>
                <td><?php echo $empre_item['cedula']; ?></td>
                <td><?php echo $empre_item['usuario']; ?></td>
                <td><?php echo $empre_item['telefono']; ?></td>
                <td><?php echo $empre_item['direccion']; ?></td>
	        </tr>
		</tbody>
	 </table>
<br>
 
		<br><br>
    <img src="<?php echo base_url() . '/uploads/user_' . $empre_item['cedula'] . '.png?'?>"  height="80">


<?php
$content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('Reporte Curriculum Empresarial.pdf', 'I');