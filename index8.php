<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
<h1>Room created!</h1>
<h2>Name: <?= $_POST['BedType'] ?></h2>
<ul>
    <li>Number: <?= $_POST['number'] ?></li>
    <li>Price: <?= $_POST['rate'] ?></li>
    <li>Discount: <?= $_POST['discount'] ?></li>
</ul>
<?php else: ?>
<h1>New Room:</h1>
<form method="POST">
    Number: <input type="number" min="0" name="number">
    Availability: <select>
        <option value="available">Available</option>
        <option value="booked">Booked</option>
    </select>
    Name: <input type="text" name="BedType">
    Offer: <select>
        <option value="true">True</option>
        <option value="false">False</option>
    </select>
    Price: <input type="number" min="0" name="price">
    Discount: <input type="number" name="discount">
    Amenities:
    <input type="checkbox" name="Amenities[]" value="WiFi"> WiFi
    <input type="checkbox" name="Amenities[]" value="TV"> TV
    <input type="checkbox" name="Amenities[]" value="Air Conditioning"> Air Conditioning
    Photos:
    <input type="text" name="photo[]" multiple>
    <input type="submit">
</form>
<?php endif ?>