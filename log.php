<?php
$file = 'log.txt';

$log_value = 'This value will be save in log file';

// Open the file to get existing content
$current = file_get_contents($file);

// Append a new person to the file
$current .= $log_value . "\n";

// Write the contents back to the file
file_put_contents($file, $current);

?>

<p>
    First run the log.php file. Then check the log.txt file.
</p>
