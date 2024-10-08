<ol>
<?php
$json_booking = 'Booking.json';
$json_contact = 'ContactMessages.json';
$json_rooms = 'Rooms.json';
$json_users = 'Users.json';

$booking_data = json_decode(file_get_contents($json_booking));
$contact_data = json_decode(file_get_contents($json_contact));
$rooms_data = json_decode(file_get_contents($json_rooms));
$users_data = json_decode(file_get_contents($json_users));

$bookinpages = $booking_data;
$contactpages = $contact_data;
$roompages = $rooms_data;
$userspages = $users_data;

foreach ($bookinpages as $booking) {
    echo "<li>".$booking->id."</li>";
}

foreach ($contactpages as $contact) {
    echo "<li>".$contact->id."</li>";
}

foreach ($roompages as $room) {
    echo "<li>".$room->id."</li>";
}

foreach ($userspages as $users) {
    echo "<li>".$users->id."</li>";
}


?>
</ol>