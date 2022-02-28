<!DOCTYPE html>
<html>
<head>
    <title>09-28-21</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <!-- Set View Size -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Stylesheets -->
    <link href="css/destyle.css" rel="stylesheet" />
    <link href="css/variables.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    
    <!-- Google Font(s) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" href="favicon/favicon.png" type="image/png" sizes="16x16">
    
</head>

<div id="grid">   
    
    <div id="b">

        <?php
            
            //Query
            $sql = "SELECT * FROM coor";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo
                "<table>
                <tr>
                <th>Timestamp A</th>
                <th>Timestamp B</th>
                <th>MAC A</th>
                <th>MAC B</th>
                <th>Coordinates A</th>
                <th>Coordinates B</th>
                </tr>";
            
                while($row =  $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['timestamp_A'] . "</td>";
                    echo "<td>" . $row['timestamp_B'] . "</td>";
                    echo "<td>" . $row['MAC_A'] . "</td>";
                    echo "<td>" . $row['MAC_B'] . "</td>";
                    echo "<td>" . $row['coordinates_A'] . "</td>";
                    echo "<td>" . $row['coordinates_B'] . "</td>";
                    echo  "</tr>";
                } 
                echo "</table>";
            } 
            else {
                echo "0 results";
            }
        ?>

    </div>  
    
</div>
</body>
</html>