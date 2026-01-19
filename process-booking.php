<?php
// 1. Set Headers to allow JSON interaction (API Style)
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

// 2. Get the raw POST data (from the Alpine.js fetch call)
$input = json_decode(file_get_contents("php://input"), true);

if (!$input) {
    echo json_encode(["status" => "error", "message" => "No data received"]);
    exit;
}

// 3. Extract and Sanitize Inputs (Security Layer)
// 'strip_tags' removes HTML tags. 'htmlspecialchars' converts special chars to entities.
$name = htmlspecialchars(strip_tags(trim($input['name'])));
$phone = htmlspecialchars(strip_tags(trim($input['phone'])));
$service = htmlspecialchars(strip_tags(trim($input['service'])));

// 4. Basic Validation
if (empty($name) || empty($phone)) {
    echo json_encode(["status" => "error", "message" => "Name and Phone are required"]);
    exit;
}

// 5. Action: Save to File or Send Email
// For this demo, we will log it to a text file so you can see it working immediately without setting up SMTP.

$logEntry = sprintf(
    "[%s] New Lead: %s | Phone: %s | Service: %s" . PHP_EOL,
    date("Y-m-d H:i:s"),
    $name,
    $phone,
    $service
);

// Append to leads.txt (Ensure this file is writable or created by PHP)
file_put_contents("leads.txt", $logEntry, FILE_APPEND);

// --- Optional: Send Email Code (Uncomment to use) ---
// $to = "az9887928199@gmail.com";
// $subject = "New Astrology Booking: $name";
// $headers = "From: noreply@astroprime.com";
// mail($to, $subject, $logEntry, $headers);

// 6. Return Success Response
echo json_encode(["status" => "success", "message" => "Booking confirmed"]);
?>