<?php
// contact_submit.php
header('Content-Type: application/json');

// Allow only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Invalid request method.'
    ]);
    exit;
}

/**
 * Simple helper to sanitize/trim input
 */
function clean($key) {
    return isset($_POST[$key]) ? trim(filter_var($_POST[$key], FILTER_SANITIZE_STRING)) : '';
}

$full_name     = clean('full_name');
$email         = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone         = clean('phone');
$project_type  = clean('project_type');
$project_brief = clean('project_brief');
$budget        = clean('budget');
$nda           = isset($_POST['nda']) ? 'Yes' : 'No';

// Basic server-side validation
if ($full_name === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $phone === '' || $project_type === '' || $project_brief === '' || $budget === '') {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Please fill in all required fields with valid information.'
    ]);
    exit;
}

/**
 * DATABASE CONNECTION
 * db      : designcentura_newdb
 * user    : designcentura_newuser
 * pass    : Aw$+$O}ef~A;u+N&
 * table   : contact_form
 *
 * Recommended table columns (example):
 *  id INT AUTO_INCREMENT PRIMARY KEY
 *  full_name VARCHAR(255)
 *  email VARCHAR(255)
 *  phone VARCHAR(100)
 *  project_type VARCHAR(255)
 *  project_brief TEXT
 *  budget VARCHAR(100)
 *  nda VARCHAR(10)
 *  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 */

$host = 'localhost';
$db   = 'designcentura_newdb';
$user = 'designcentura_newuser';
$pass = 'Aw$+$O}ef~A;u+N&';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
} catch (PDOException $e) {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Database connection failed. Please try again later.'
    ]);
    exit;
}

// INSERT into DB
try {
    $stmt = $pdo->prepare("
        INSERT INTO contact_form
            (full_name, email, phone, project_type, project_brief, budget, nda, created_at)
        VALUES
            (:full_name, :email, :phone, :project_type, :project_brief, :budget, :nda, NOW())
    ");

    $stmt->execute([
        ':full_name'     => $full_name,
        ':email'         => $email,
        ':phone'         => $phone,
        ':project_type'  => $project_type,
        ':project_brief' => $project_brief,
        ':budget'        => $budget,
        ':nda'           => $nda
    ]);
} catch (PDOException $e) {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Unable to save your details at the moment. Please try again.'
    ]);
    exit;
}

/**
 * SEND EMAIL NOTIFICATION
 */
$to      = 'info@designcentura.com';
$subject = 'New Project Brief - Logo / Branding / Web (Logo Outlets)';
$body    = "A new project brief has been submitted from the website:\r\n\r\n"
         . "Name: {$full_name}\r\n"
         . "Email: {$email}\r\n"
         . "Phone / WhatsApp: {$phone}\r\n"
         . "Project Type: {$project_type}\r\n"
         . "Budget: {$budget}\r\n"
         . "NDA Requested: {$nda}\r\n"
         . "-------------------------------------------------\r\n"
         . "Project Brief:\r\n{$project_brief}\r\n"
         . "-------------------------------------------------\r\n"
         . "Submitted on: " . date('Y-m-d H:i:s') . "\r\n";

$headers = "From: Logo Outlets <no-reply@designcentura.com>\r\n";
$headers .= "Reply-To: {$full_name} <{$email}>\r\n";
$headers .= "Cc: tloperations.sh@gmail.com, Saa.qualityassurance@gmail.com,babarsleekhive@gmail.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Use @ to avoid warnings breaking JSON output, but you can remove @ for debugging
@mail($to, $subject, $body, $headers);
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$clientIP  = $_SERVER['REMOTE_ADDR'] ?? '';

$briefDataArray['name']    = $full_name;
$briefDataArray['phone_number']   = $phone;
$briefDataArray['email']   = $email; // FIXED
$briefDataArray['service_id']    = $project_type;
$briefDataArray['company_name']= $full_name;
$briefDataArray['client_ip']   = $clientIP;
$briefDataArray['user_agent']  = $userAgent;
$briefDataArray['country_flag']= '';
$briefDataArray['fingerprint'] = '';
$briefDataArray['message_id']  = '';
$briefDataArray['fbclid']      = '';
$briefDataArray['igclid']      = '';
$briefDataArray['ttclid']      = '';
$briefDataArray['fingerprintdata']= '';
$briefDataArray['link']        = "https://designcentura.com/contact";
$briefDataArray['country_flag'] = '';
$briefDataArray['message'] = $project_brief;

 // Encode data properly
$jsonData    = json_encode($briefDataArray);
$base64Data  = base64_encode($jsonData);
$encodedData = urlencode($base64Data);


// Laravel API URL
$crmUrl = "https://designcentura.com/crm/lead/create/contact/{$encodedData}";

// Set headers
$headers = array(
    "User-Agent: $userAgent",
    "Client-IP: $clientIP",

);
   
// Send request using cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $crmUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
curl_close($ch);

// Final JSON response
echo json_encode([
    'status'  => 'success',
    'message' => 'Thank you! Your project brief has been submitted successfully.'
]);
exit;
