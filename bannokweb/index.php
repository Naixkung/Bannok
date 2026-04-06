<?php
$response = file_get_contents('http://bannokapi:8080/WeatherForecast');
$data = json_decode($response, true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Weather Forecast</title>
</head>
<body>
    <h1>Weather Forecast</h1>
    <table border="1">
        <tr>
            <th>Date</th>
            <th>Temp (C)</th>
            <th>Temp (F)</th>
            <th>Summary</th>
        </tr>
        <?php foreach ($data as $item): ?>
        <tr>
            <td><?= $item['date'] ?></td>
            <td><?= $item['temperatureC'] ?></td>
            <td><?= $item['temperatureF'] ?></td>
            <td><?= $item['summary'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>