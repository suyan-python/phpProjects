<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $file = fopen("Document.txt", "w") or die("Unable to Open");
    $data = "This is sample document";
    fwrite($file, $data);
    fclose($file);
    
    $file = fopen("Document.txt", "r") or die("Unable to Open");
    while(!feof($file))
    {
        $file_data = fgets($file);
        print $file_data;
    }
?>

</body>

</html>