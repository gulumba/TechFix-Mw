<?php
require_once 'includes/config.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

$form_type = $_POST['form_type'] ?? 'contact';
$full_name = trim($_POST['full_name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? $_POST['problem'] ?? '');
$email = trim($_POST['email'] ?? '');
$service = trim($_POST['service'] ?? $form_type);
$appliance_type = trim($_POST['appliance_type'] ?? '');
$preferred_date = trim($_POST['preferred_date'] ?? '');
$location = trim($_POST['location'] ?? '');
$issue_type = trim($_POST['issue_type'] ?? '');

// Basic validation
if (empty($full_name) || empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Name and phone are required.']);
    exit;
}

if (strlen($phone) < 9) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid phone number.']);
    exit;
}

$entry = [
    'id' => generate_id(),
    'form_type' => $form_type,
    'full_name' => htmlspecialchars($full_name),
    'phone' => htmlspecialchars($phone),
    'email' => htmlspecialchars($email),
    'service' => htmlspecialchars($service),
    'appliance_type' => htmlspecialchars($appliance_type),
    'preferred_date' => htmlspecialchars($preferred_date),
    'location' => htmlspecialchars($location),
    'issue_type' => htmlspecialchars($issue_type),
    'message' => htmlspecialchars($message),
    'status' => 'pending',
    'created_at' => date('Y-m-d H:i:s'),
    'ip' => $_SERVER['REMOTE_ADDR'] ?? ''
];

// Save to appropriate data file
$data_file = 'enquiries';
if ($form_type === 'appliance_repair') {
    $data_file = 'appliance_bookings';
} elseif ($form_type === 'computer_repair') {
    $data_file = 'computer_requests';
} elseif ($form_type === 'tracking') {
    $data_file = 'tracking_requests';
}

$records = load_data($data_file);
$records[] = $entry;
save_data($data_file, $records);

// Also log to general enquiries
if ($data_file !== 'enquiries') {
    $all = load_data('enquiries');
    $all[] = $entry;
    save_data('enquiries', $all);
}

echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your request has been received. We will contact you shortly via phone or WhatsApp.'
]);
