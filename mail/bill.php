<?php

require_once('tc-lib-pdf-main');  // Include TCPDF library

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $price = $_POST['price'];
    $company = $_POST['company'];

    // Create a new PDF instance
    $pdf = new TCPDF();

    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor($company);
    $pdf->SetTitle('Invoice');
    $pdf->SetSubject('Invoice PDF');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 12);

    // Add a title
    $pdf->Cell(0, 10, 'Invoice', 0, 1, 'C');

    // Company Name
    $pdf->Cell(0, 10, 'Company: ' . $company, 0, 1, 'L');

    // Customer Name
    $pdf->Cell(0, 10, 'Customer Name: ' . $name, 0, 1, 'L');

    // Price
    $pdf->Cell(0, 10, 'Price: $' . number_format($price, 2), 0, 1, 'L');

    // Generate the PDF
    $pdf->Output('invoice.pdf', 'I');  // 'I' will display the PDF in the browser
}
?>

the all my univercity year is great but 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Generator</title>
</head>
<body>
    <h1>Invoice Generator</h1>
    <form action="/mail/bill.php" method="POST">
        <label for="name">Customer Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="company">Company Name:</label>
        <input type="text" id="company" name="company" required><br><br>

        <input type="submit" value="Generate Invoice">
    </form>
</body>
</html>
