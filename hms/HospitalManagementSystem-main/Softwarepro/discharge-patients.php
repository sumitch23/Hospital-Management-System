<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discharge Patients</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      .container {
    margin: 20px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #333;
}

th, td {
    padding: 10px;
    text-align: left;
}

thead {
    background-color: #333;
    color: white;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
<div class="container">
    <h1>Discharge Patients</h1>
    <table>
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Admission Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>John Doe</td>
                <td>45</td>
                <td>Male</td>
                <td>2024-05-20</td>
                <td><button>Discharge</button></td>
            </tr>
            <!-- Add more rows for other patients if needed -->
        </tbody>
    </table>
</div>

</body>
</html>
