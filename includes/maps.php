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
    <link href="../css/destyle.css" rel="stylesheet" />
    <link href="../css/variables.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    
    <!-- Google Font(s) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" href="favicon/favicon.png" type="image/png" sizes="16x16">
    
</head>

<div id="grid">  
<div id="a">
        <h1>MerrySort</h1>
        <h2>Suspicious Data for the Masses</h2>
        <br>
        <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="maps.php">Maps</a></li>
    </ul> 
    </div> 
    <div id="b">

    <?php

        //Get a list of file paths using the glob function.
        $fileList = glob('../maps/*');
        echo
                "<table>
                <th>Map</th>
                <th>Download</th>";
        //Loop through the array that glob returned.
        foreach($fileList as $filename){
        //Simply print them out onto the screen.
        echo "<tr>";
        echo '<td><a href="'.$filename.'">'.$filename.'</a></td>'; 
        echo '<td><a href="'.$filename.'"download>download</a></td>';
        echo "</tr>";
        }
        echo "</table>";
    ?>

    </div>  
    
</div>
</body>
</html>

