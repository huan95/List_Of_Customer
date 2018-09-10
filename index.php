<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Customer</title>
</head>
<style>

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid green;
    }

    .thumbnail {
        height: 60px;
        width: 100px;
        overflow: hidden;
    }

    .thumbnail img {
        width: 100%;
    }

</style>
<body>
<table border="0">
    <caption><h1>List Of Customer</h1></caption>
    <tr>
        <th><b>STT</b></th>
        <th><b>Name</b></th>
        <th><b>Birthday</b></th>
        <th><b>Address</b></th>
        <th><b>Image</b></th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("Name" => "Cristiano Ronaldo",
            "Birthday" => "1983-08-20",
            "Address" => "Portugal",
            "Image" => "img/cristiano-ronaldo.jpg"),
        "2" => array("Name" => "Neymar Jr",
            "Birthday" => "1983-08-20",
            "Address" => "Brazil",
            "Image" => "img/neymar jr.jpg"),
        "3" => array("Name" => "Lionen Messi",
            "Birthday" => "1983-08-21",
            "Address" => "Arghentinal",
            "Image" => "img/Messi-The-Best.jpg"),
        "4" => array("Name" => "Fernando Torres",
            "Birthday" => "1983-08-22",
            "Address" => "Spain",
            "Image" => "img/Fernando-Torres-Liverpool.jpg"),
        "5" => array("Name" => "Steven Gerrard",
            "Birthday" => "1983-08-17",
            "Address" => "England",
            "Image" => "img/gerrard.jpg")
    );
    foreach ($customerlist as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['Name'] . "</td>";
        echo "<td>" . $values['Birthday'] . "</td>";
        echo "<td>" . $values['Address'] . "</td>";
        echo "<td><div class='thumbnail'><image src = '" . $values['Image'] . "'</div></td>";
        echo "</tr>";

    }
    ?>

    <h2><b>Search Customer</b></h2>
    <form method="get" action="List%20of%20customer.php">
        <input type="text" name="search" placeholder="Enter words to find"/>
        <input type="submit" id="submit" value="Find"/>
    </form>

</table>
</body>
</html>
