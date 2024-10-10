<?php

$json_rooms = 'Rooms.json';


$rooms_data = json_decode(file_get_contents($json_rooms));

?>

<pre>
<h1>Rooms Data</h1>
<?php print_r($rooms_data, JSON_PRETTY_PRINT) ?>
</pre>