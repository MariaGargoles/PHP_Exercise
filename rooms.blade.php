<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
</head>

<body>
    <h1>Rooms</h1>

    @foreach ($rooms as $room)
    <ul>
        <li><strong>Name:</strong> {{ htmlspecialchars($room['BedType']) }}</li>
        <li><strong>Number:</strong> {{ htmlspecialchars($room['number']) }}</li>
        <li><strong>Price:</strong> {{ htmlspecialchars($room['price']) }}$</li>
        <li><strong>Discount:</strong> {{ htmlspecialchars($room['discount']) }}%</li>
        <li><strong>Price Discount:</strong>
            {{ htmlspecialchars($room['price'] - ($room['price'] * ($room['discount'] / 100))) }}$</li>
    </ul>
    @endforeach

</body>

</html>