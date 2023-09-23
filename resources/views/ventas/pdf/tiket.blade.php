<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        * {
            font-size: 9px;
            font-family: 'DejaVu Sans', serif;
        }

        h1 {
            font-size: 12px;
        }

        .ticket {
            margin: 1px;
        }

        td,
        th,
        tr,
        table {
            border-top: 1px solid black;
            border-collapse: collapse;
            margin: 0 auto;
        }

        td.precio {
            text-align: right;
            font-size: 10px;
        }

        td.cantidad {
            font-size: 10px;
        }

        td.producto {
            text-align: center;
        }

        th {
            text-align: center;
        }


        .centrado {
            text-align: center;
            align-content: center;
        }

        .ticket {
            width: 100%;
        }

        img {
            max-width: inherit;
            width: inherit;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .ticket {
            margin: 0;
            padding: 0;
        }

        body {
            text-align: center;
        }
    </style>

</head>
<body>
    <div class="ticket centrado">
        <h1>LA GRAN FAMILIA</h1>
        <h2>Ticket de venta {{ $venta->id }}</h2>
        <h2>{{ $venta->fecha_venta }}</h2>
        <?php
        $productos = [
            [
                "cantidad" => 31,
                "descripcion" => "Cheetos verdes 80 g",
                "precio" => 123,
            ],
            [
                "cantidad" => 12,
                "descripcion" => "Teclado HyperX",
                "precio" => 1233,
            ],
            [
                "cantidad" => 12,
                "descripcion" => "Mouse Logitech ASD123",
                "precio" => 841,
            ],
            [
                "cantidad" => 15,
                "descripcion" => "Monitor Samsung 123",
                "precio" => 3546,
            ],
        ];
        ?>
        <table>
            <tbody>
                @php
                    $total=0;
                @endphp
                @foreach ($venta->detalle_ventas as $item)
                    <tr class="centrado">
                        <th class="cantidad">CANT</th>
                        <th class="producto">PRODUCTO</th>
                    </tr>
                    <tr>
                        <td class="cantidad">{{ $item->cantidad }}</td>
                        <td class="producto">{{ $item->producto->nombre }}</td>
                        <td class="precio">{{ $item->precio_unidad }}</td>
                    </tr>
                    <tr class="centrado">
                        <th class="cantidad">PRECIO UNIDAD</th>
                        <th class="producto">IMPORTE</th>
                    </tr>
                    <tr>
                        <td class="precio">{{ number_format($item->precio_unidad,2) }}</td>
                        <td class="precio">{{ number_format($item->importe,2) }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tr>
                <td class="cantidad"></td>
                <td class="producto">
                    <strong>TOTAL</strong>
                </td>
                <td class="precio">

                </td>
            </tr>
        </table>
        <p class="centrado">¡GRACIAS POR SU COMPRA!
            <br>Cristian Wilmer Figueroa Ferrer</p>
    </div>
</body>
</html>