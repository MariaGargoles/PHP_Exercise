<?php

$json_booking = 'Booking.json';
$json_contact = 'ContactMessages.json';
$json_rooms = 'Rooms.json';
$json_users = 'Users.json';

$booking_data = json_decode(file_get_contents($json_booking));
$contact_data = json_decode(file_get_contents($json_contact));
$rooms_data = json_decode(file_get_contents($json_rooms));
$users_data = json_decode(file_get_contents($json_users));

echo '<pre>';
echo "Booking Data";
json_encode($booking_data, JSON_PRETTY_PRINT);

echo '<pre>';
echo "Contact Data";
json_encode($contact_data, JSON_PRETTY_PRINT);

echo '<pre>';
echo "Rooms Data";
json_encode($rooms_data, JSON_PRETTY_PRINT);

echo '<pre>';
echo "Users Data";
json_encode($users_data, JSON_PRETTY_PRINT);
echo '</pre>';