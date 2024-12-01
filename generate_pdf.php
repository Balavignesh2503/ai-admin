<?php
// ob_end_clean();
// require('fpdf/fpdf.php');
// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',18);
// $pdf->Cell(60,20,'Hello Muthu');
// $pdf->Output();

require('fpdf/fpdf.php');
include('./db.php');

$data = mysqli_fetch_all(mysqli_query($db,"select * from addcourse"));
// die(print_r($data));

class PDF extends FPDF
{
    function Header()
    {
        $this->Image('./img/anjana.png',0,5,100,20,'png');
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 60, 'Sample Table in PDF', 0, 1, 'C');
        $this->Ln(1); // Line break
    }

    // Footer function to customize footer content
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Set font for the footer
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    // Table function to draw a table
    function CreateTable($header, $data)
    {
        // Set font for the table
        $this->SetFont('Arial', 'B', 12);
        // Set header background color
        // $columnWidths = [30, 70, 50,30,30,30,30];
        $this->SetFillColor(200, 220, 255);
        // Define cell width and height
        $cellWidth = 30;
        $cellHeight = 20;
        // Header
        foreach ($header as $col) {
            $this->Cell($cellWidth, $cellHeight, $col, 1, 0, 'C', true);
        }
        $this->Ln(); // Line break

        // Set font for the table data
        $this->SetFont('Arial', '', 12);
        // Data rows
        foreach ($data as $row) {
            foreach ($row as $col) {
                $this->Cell($cellWidth, $cellHeight, $col, 1, 0, 'C');
            }
            $this->Ln(); // Line break
        }
    }
}

// Data to be displayed in the table
$header = ['ID', 'Course Name', 'Course Fee','Duration','Syllabus','Category','Status'];
$data = mysqli_fetch_all(mysqli_query($db,"select * from addcourse"));
// $data = [
//     ['1', 'John Doe', 'john@example.com'],
//     ['2', 'Jane Smith', 'jane@example.com'],
//     ['3', 'Bob Johnson', 'bob@example.com'],
//     ['4', 'Alice Williams', 'alice@example.com'],
// ];

// Create PDF instance and setup
$pdf = new PDF();
$pdf->AddPage();

// Draw the table in the PDF
$pdf->CreateTable($header, $data);

// Output the PDF
$pdf->Output('I', 'Table.pdf');

?>