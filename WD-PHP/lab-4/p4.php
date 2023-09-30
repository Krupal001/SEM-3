
<!-- date functions -->
<?php
$isValidDate = checkdate(12, 31, 2023);
echo "Is date valid? " . ($isValidDate ? "Yes" : "No") . "<br>";
$currentDate = date_create();
echo "Current date: " . date_format($currentDate, 'Y-m-d H:i:s') . "<br>";


// time functions

$currentTimestamp = time();
echo "Current timestamp: " . $currentTimestamp . "<br>";

$timestamp = mktime(15, 30, 0, 8, 17, 2023); // Hour, Minute, Second, Month, Day, Year

// Convert the timestamp to a formatted date
$formattedDate = date('Y-m-d H:i:s', $timestamp);

echo "Formatted Date: $formattedDate<br>";

$timeData = gettimeofday();
print_r( $timeData);

$currentTimezone = date_default_timezone_get();
echo "<br>Current timezone: " . $currentTimezone . "<br>";
?>