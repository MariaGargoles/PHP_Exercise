<ol>
    <?php

    $json_rooms = 'Rooms.json';

    $rooms_data = json_decode(file_get_contents($json_rooms));

    ?>
    <?php foreach ($rooms_data as $room): ?>
        <li><?= $room['name'] ?></li>
        <ul>
            <li>Number: <?= $room['number'] ?></li>
            <li>Price: <?= $room['price'] ?>$</li>
            <li>Discount: <?= $room['discount'] ?>%</li>
            <li>Price Discount: <?= htmlspecialchars($room['price'] - ($room['price'] * ($room['discount'] / 100))) ?>$</li>
        </ul>
    <?php endforeach; ?>
</ol>