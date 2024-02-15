<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Output</title>
</head>
<body>
    <h1>Command Output</h1>
    <?php
        // Execute the command and capture output
        $output = shell_exec('ping -n 1 192.168.0.35');
        // Display the output
        echo "<pre>$output</pre>";
    ?>
</body>
</html>
