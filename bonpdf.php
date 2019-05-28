<?php

    include ('libary/tcpdf.php');
    include_once ('./func/database.func.php');


    $pdf = new TCPDF('P', 'mm', 'A4');

    $pdf ->AddPage();
    $pdf->Cell(190, 10, "PDF van de Bonnen", 1,1 , 'C');



    $html=
    "
            <table class=\"table table-bordered text-white text-center\">
            <thead class=\"thead-light\">
            <tr>
                <th scope=\"col\">Tafel</th>
                <th scope=\"col\">Naam Eten</th>
                <th scope=\"col\">Prijs Eten</th>
                <th scope=\"col\">Naam Drinken</th>
                <th scope=\"col\">Prijs Drinken</th>
                <th scope=\"col\">Totaal Bedrag</th>
            </tr>            
            </thead>
            
            <tr>
                <td>test1</td>
                <td>test2</td>
                <td>test3</td>
                <td>test4</td>
                <td>test5</td>
                <td>test6</td>
            </tr>
        </table>
";




$pdf->WriteHTMLCell(190, 0, '', '', $html,1);



$pdf->Output();


?>


    <link rel="stylesheet" as="style" type="text/css" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
