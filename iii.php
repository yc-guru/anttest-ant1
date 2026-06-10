<?php
// iii.php: repeat a message 500 times using a loop

$message = "we was a man who was truly humble and kind to me and i was man who was truly humble and kind to me";

header('Content-Type: text/html; charset=utf-8');

echo '<!DOCTYPE html><html><head><meta charset="utf-8"/><title>Loop 500 Demo</title></head><body>';

echo '<h1>Loop 500 Output</h1>';

echo '<ol>';
for ($i = 1; $i <= 700; $i++) {
    echo '<li>' . $i . '. ' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '</li>';
}
echo '</ol>';

echo '<p>Done: outputted 500 lines.</p>';

echo '</body></html>';
?>