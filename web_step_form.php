<?php
// web_step_form.php
// IMPORTANT: is line se pehle bilkul kuch bhi na ho (no spaces, no BOM).

error_reporting(E_ALL);
ini_set('display_errors', 0); // live pe 0 theek hai

header('Content-Type: application/json; charset=utf-8');

// Simple helper for JSON responses
function json_response(string $status, string $message): void
{
    echo json_encode([
        'status'  => $status,
        'message' => $message,
    ]);
    exit;
}

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response('error', 'Invalid request method.');
}

// Collect and sanitize input
$company_name = isset($_POST['company_name']) ? trim($_POST['company_name']) : null;
$slogan       = isset($_POST['slogan']) ? trim($_POST['slogan']) : null;
$industry     = isset($_POST['industry']) ? trim($_POST['industry']) : null;
$keyword      = isset($_POST['keyword']) ? trim($_POST['keyword']) : null;
$phone        = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$email        = isset($_POST['email']) ? trim($_POST['email']) : '';

// Validate required fields
// if ($phone === '') {
//     json_response('error', 'Phone number is required.');
// }

if ($email === '') {
    json_response('error', 'Email address is required.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    json_response('error', 'Please provide a valid email address.');
}

// DB credentials
$host     = 'localhost';
$dbname   = 'designcentura_newdb';
$username = 'designcentura_newuser';
$password = 'Aw$+$O}ef~A;u+N&';

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);

    $sql = "INSERT INTO web_step_form_leads 
            (company_name, slogan, industry, keyword, phone, email, created_at)
            VALUES 
            (:company_name, :slogan, :industry, :keyword, :phone, :email, NOW())";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':company_name' => $company_name,
        ':slogan'       => $slogan,
        ':industry'     => $industry,
        ':keyword'      => $keyword,
        ':phone'        => $phone,
        ':email'        => $email,
    ]);

    // Send notification email
    $to      = 'info@designcentura.com, alex.logoorbit@gmail.com, services.designcentura@gmail.com,tloperations.sh@gmail.com,Saa.qualityassurance@gmail.com';
    $subject = 'New Web Step Form Submission - Design Centura';

    $body  = "A new web step form has been submitted.\n\n";
    $body .= "Company Name: " . ($company_name ?: 'N/A') . "\n";
    $body .= "Slogan: " . ($slogan ?: 'N/A') . "\n";
    $body .= "Industry: " . ($industry ?: 'N/A') . "\n";
    $body .= "Keyword: " . ($keyword ?: 'N/A') . "\n";
    $body .= "Phone: " . $phone . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Submitted At: " . date('Y-m-d H:i:s') . "\n";

    $headers  = "From: Design Centura <no-reply@designcentura.com>\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Cc: tloperations.sh@gmail.com, Saa.qualityassurance@gmail.com,babarsleekhive@gmail.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    @mail($to, $subject, $body, $headers);
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $clientIP  = $_SERVER['REMOTE_ADDR'] ?? '';
    
    $briefDataArray['cus_name']    = $company_name;
    $briefDataArray['cus_phone']   = $phone;
    $briefDataArray['cus_email']   = $email; // FIXED
    $briefDataArray['industry']    = $industry;
    $briefDataArray['company_name']= $company_name;
    $briefDataArray['client_ip']   = $clientIP;
    $briefDataArray['user_agent']  = $userAgent;
    $briefDataArray['country_flag']= '';
    $briefDataArray['fingerprint'] = '';
    $briefDataArray['message_id']  = '';
    $briefDataArray['fbclid']      = '';
    $briefDataArray['igclid']      = '';
    $briefDataArray['ttclid']      = '';
    $briefDataArray['fingerprintdata']= '';
    $briefDataArray['link']        = "https://designcentura.com/";
    $briefDataArray['country_flag'] = '';
    
     // Encode data properly
    $jsonData    = json_encode($briefDataArray);
    $base64Data  = base64_encode($jsonData);
    $encodedData = urlencode($base64Data);
    
    
    // Laravel API URL
    $crmUrl = "https://designcentura.com/crm/lead/create/webBrief/{$encodedData}";
    
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
    json_response('success', 'Form submitted successfully.');
} catch (PDOException $e) {
    // Debug ke liye temporarily uncomment kar sakte ho:
    // json_response('error', 'Database error: ' . $e->getMessage());
    json_response('error', 'Database error. Please try again later.');
}
