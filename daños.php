<?php
include "layout/menu.php";
include "layout/header.php";
?>

<!-- Page Heading -->
    <div class="h3 text-gray>
        <h1 class="h3 mb-0 text-gray-800">Daños comunes en autos y sus costos de reparación</h1>
    </div>

    <div>
        <style>
            .h3 {
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            transform: translate(0%, -7%);
            }
        </style>
    </div>
<table>
    <tr>
        <th>Tipo de Daño</th>
        <th>Costo Estimado de Reparación</th>
    </tr>
    <tr>
        <td>Rayones en la pintura</td>
        <td>$200 - $500</td>
    </tr>
    <tr>
        <td>Choque frontal</td>
        <td>$1,000 - $3,000</td>
    </tr>
    <tr>
        <td>Daño en el parabrisas</td>
        <td>$150 - $300</td>
    </tr>
    <tr>
        <td>Abrir puertas sin cuidado</td>
        <td>$100 - $500</td>
    </tr>
    <tr>
        <td>Rotura de espejos laterales</td>
        <td>$200 - $400</td>
    </tr>
    <tr>
        <td>Choque trasero</td>
        <td>$800 - $2,000</td>
    </tr>
    <tr>
        <td>Daño en la suspensión</td>
        <td>$500 - $1,500</td>
    </tr>
    <tr>
        <td>Desgaste de neumáticos</td>
        <td>$300 - $800 (dependiendo del tamaño y calidad de los neumáticos)</td>
    </tr>
</table>

<style>

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
<div>
<!-- End of Main Content -->
<?php
include "layout/footer.php";
?>
    </div>