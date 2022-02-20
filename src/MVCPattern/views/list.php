<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>List data</h1>
    <hr>
    <div style="display: flex;">
        <a href="/run.php/">Home</a>
        <div style="width: 10px;"></div>
        <a href="/run.php/create">Create</a>
    </div>
    <hr>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        foreach ($data as $index => $item) {
            echo "<tr>\n
            <td>" . $index . "</td>\n
            <td>" . $item['name'] . "</td>\n
            <td>" . $item['age'] . "</td>\n
            <td>" . $item['phone'] . "</td>\n
            <td>" . static::getButtonHtml($index, 'update', 'GET') . "</td>\n
            <td>" . static::getButtonHtml($index, 'delete', 'POST') . "</td>\n
            </tr>";
        }
        ?>
    </table>


</body>
</html>