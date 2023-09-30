<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST["write"])) {
$filename = $_POST["filename"];
$content = $_POST["content"];
$file = fopen($filename, "a");
if ($file) {
fwrite($file, $content . "\n");
fclose($file);
echo "Content written to file successfully.";
} else {
echo "Error opening or creating file.";
}
} elseif (isset($_POST["read"])) {
$filename = $_POST["filename"];
if (file_exists($filename)) {
$content = file_get_contents($filename);
echo "<h2>File Content:</h2>";
echo "<pre>$content</pre>";
} else {
echo "File not found.";
}
}
}
?>
