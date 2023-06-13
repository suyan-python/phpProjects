<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table border="2">
        <tr>
            <td colspan="4" id="header">This is Table Header</td>
        </tr>

        <tr>
            <td>Std Id</td>
            <td>Std Name</td>
            <td>Std Age</td>
            <td>Std Level</td>
        </tr>

        <tr>
            <td rowspan="2">01</td>
            <td>Harry</td>
            <td>23</td>
            <td>Bachelors</td>
        </tr>

        <tr>
            <td>David</td>
            <td>33</td>
            <td>Masters</td>
        </tr>

        <tr>
            <td>02</td>
            <td>Mia</td>
            <td>24</td>
            <td>+2</td>
        </tr>
        <tr>
        </tr>
    </table>

    <div class="php">
        <?php
            print "This is PHP\n"
        ?>
    </div>

    <?php
        $myfile = fopen("table.txt", "w") or die("Unable to open File");
        $data = "This is Data in File\n";
        fwrite($myfile, $data);
        fclose($myfile);
        
        $myfile = fopen("table.txt", "r") or die("File not Found");
        ?>

    <table border="5">
        <?php
        print "<tr><td>Std Name</td></tr>";
        while(!feof($myfile))
        {
            $data = fgets($myfile);
            print "<tr><td>$data</td></tr>";
            print "<tr><td>$data</td></tr>";
            print "<tr><td>$data</td></tr>";
        }
        ?>
    </table>

</body>

</html>