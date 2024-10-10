<?php
$mysqli = new mysqli("localhost", "root", "Segwanda12", "miranda");
if ($mysqli->connect_errno) {
    echo "Error al conectar con MySQL: " . $mysqli->connect_error;
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $mysqli->prepare("INSERT INTO rooms (number, status, BedType, offer, price, discount, cancellation)
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $number = $_POST['number'];
    $status = $_POST['status'];
    $BedType = $_POST['BedType'];
    $offer = $_POST['offer'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $cancellation = $_POST['cancellation'];
    $stmt->bind_param('ssssddds', $number, $status, $BedType, $description, $offer, $price, $discount, $cancellation);
    $stmt->execute();
    $stmt->close();
}
?>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <h1>Room created!</h1>
    <h2>Name: <?= htmlspecialchars($_POST['BedType']) ?></h2>
    <ul>
        <li>Number: <?= htmlspecialchars($_POST['number']) ?></li>
        <li>Price: <?= htmlspecialchars($_POST['price']) ?></li>
        <li>Discount: <?= htmlspecialchars($_POST['discount']) ?></li>
    </ul>
<?php else: ?>
    <h1>New Room:</h1>
    <form method="POST">
        Number: <input type="number" min="0" name="number" required><br>
        Status:
        <select name="status" required>
            <option value="available">available</option>
            <option value="booked">booked</option>
        </select><br>
        Name: <input type="text" name="BedType" required><br>
        Description: <input type="text" name="description" required><br>
        Offer:
        <select name="offer" required>
            <option value="true">True</option>
            <option value="false">False</option>
        </select><br>
        Price: <input type="number" min="0" name="price" required><br>
        Discount: <input type="number" name="discount" required><br>
        Cancellation: <input type="text" name="cancellation" required><br>
        <input type="submit" value="Create Room">
    </form>
<?php endif ?>