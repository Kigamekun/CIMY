<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
            color: #343a40;
            line-height: 1;
            display: flex;
            justify-content: center;
        }

        table {
            width: 800px;
            margin-top: 80px;
            /* border: 1px solid #343a40; */
            border-collapse: collapse;
            font-size: 18px;
        }

        th,
        td {
            /* border: 1px solid #343a40; */
            padding: 16px 24px;
            text-align: left;
        }

        thead th {
            background-color: #087f5b;
            color: #fff;
            width: 25%;
        }

        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tbody tr:nth-child(odd) {
            background-color: #e9ecef;
        }
    </style>










    <table>
        <thead>
            <tr>
                <th scope="col">Nama</th>
            </tr>
        </thead>
        <tbody>
		<?php foreach ($data as $item) { ?>
										
										<tr>
											
											<td>
												<?= $item->nama ?>
											</td>
	
										
										</tr>
										<?php } ?>
        </tbody>
    </table>








</body>

</html>
