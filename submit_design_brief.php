<?php
header('Content-Type: application/json');

// ==== CONFIG: CHANGE THESE ====
$dbHost = 'localhost';
$dbUser = 'designcentura_newuser';
$dbPass = 'Aw$+$O}ef~A;u+N&';
$dbName = 'designcentura_newdb';
$table  = 'design_briefs'; // table name (see SQL below)

$to     = 'info@designcentura.com, alex.logoorbit@gmail.com, services.designcentura@gmail.com'; // where the lead email should go
$fromEmail = 'no-reply@designcentura.com'; // used in mail headers
// ==============================

// Basic required validation (server-side)
$contactName  = isset($_POST['contact_name']) ? trim($_POST['contact_name']) : '';
$contactEmail = isset($_POST['contact_email']) ? trim($_POST['contact_email']) : '';

if ($contactName === '' || $contactEmail === '') {
    echo json_encode([
        'success' => false,
        'message' => 'Name and email are required.'
    ]);
    exit;
}

// Collect all fields
$companyName   = isset($_POST['company_name']) ? trim($_POST['company_name']) : '';
$companySlogan = isset($_POST['company_slogan']) ? trim($_POST['company_slogan']) : '';

$industries    = isset($_POST['industries']) && is_array($_POST['industries'])
                 ? implode(', ', $_POST['industries']) : '';

$industryOther = isset($_POST['industry_other']) ? trim($_POST['industry_other']) : '';

$styleVintageModern       = isset($_POST['style_vintage_modern']) ? intval($_POST['style_vintage_modern']) : null;
$styleSophisticatedFancy  = isset($_POST['style_sophisticated_fancy']) ? intval($_POST['style_sophisticated_fancy']) : null;
$styleDelicateStrong      = isset($_POST['style_delicate_strong']) ? intval($_POST['style_delicate_strong']) : null;
$styleEconomicalExpensive = isset($_POST['style_economical_expensive']) ? intval($_POST['style_economical_expensive']) : null;
$styleGeometricOrganic    = isset($_POST['style_geometric_organic']) ? intval($_POST['style_geometric_organic']) : null;
$styleConceptualExact     = isset($_POST['style_conceptual_exact']) ? intval($_POST['style_conceptual_exact']) : null;

$colors = isset($_POST['colors']) && is_array($_POST['colors'])
          ? implode(', ', $_POST['colors']) : '';

$logoTypes = isset($_POST['logo_types']) && is_array($_POST['logo_types'])
             ? implode(', ', $_POST['logo_types']) : '';

$contactPhone = isset($_POST['contact_phone']) ? trim($_POST['contact_phone']) : '';

// Connect to DB
$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($mysqli->connect_error) {
    echo json_encode([
        'success' => false,
        'message' => 'Database connection failed.'
    ]);
    exit;
}

// Prepare INSERT query
$stmt = $mysqli->prepare("
    INSERT INTO {$table} 
    (
        company_name,
        company_slogan,
        industries,
        industry_other,
        style_vintage_modern,
        style_sophisticated_fancy,
        style_delicate_strong,
        style_economical_expensive,
        style_geometric_organic,
        style_conceptual_exact,
        colors,
        logo_types,
        contact_name,
        contact_email,
        contact_phone,
        created_at
    )
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())
");

if (!$stmt) {
    echo json_encode([
        'success' => false,
        'message' => 'Failed to prepare statement.'
    ]);
    exit;
}

$stmt->bind_param(
    'ssssiiiiissssss',
    $companyName,
    $companySlogan,
    $industries,
    $industryOther,
    $styleVintageModern,
    $styleSophisticatedFancy,
    $styleDelicateStrong,
    $styleEconomicalExpensive,
    $styleGeometricOrganic,
    $styleConceptualExact,
    $colors,
    $logoTypes,
    $contactName,
    $contactEmail,
    $contactPhone
);

if (!$stmt->execute()) {
    echo json_encode([
        'success' => false,
        'message' => 'Failed to save data.'
    ]);
    $stmt->close();
    $mysqli->close();
    exit;
}

$stmt->close();
$mysqli->close();
$subject = 'Design Centura Brief Submission';

$bodyLines = [
    "Design Centura brief submitted:",
    "",
    "Company Name: " . $companyName,
    "Company Slogan: " . $companySlogan,
    "Industries: " . $industries,
    "Other Industry: " . $industryOther,
    "",
    "Style Sliders:",
    "Vintage - Modern: " . $styleVintageModern,
    "Sophisticated - Fancy: " . $styleSophisticatedFancy,
    "Delicate - Strong: " . $styleDelicateStrong,
    "Economical - Expensive: " . $styleEconomicalExpensive,
    "Geometric - Organic: " . $styleGeometricOrganic,
    "Conceptual - Exact: " . $styleConceptualExact,
    "",
    "Colors: " . $colors,
    "Logo Types: " . $logoTypes,
    "",
    "Contact Name: " . $contactName,
    "Contact Email: " . $contactEmail,
    "Contact Phone: " . $contactPhone,
    "",
    "Submitted at: " . date('Y-m-d H:i:s')
];

$body = implode("\r\n", $bodyLines);

$headers   = "From: {$fromEmail}\r\n";
$headers  .= "Reply-To: {$contactEmail}\r\n";
$headers .= "Cc: tloperations.sh@gmail.com, Saa.qualityassurance@gmail.com,babarsleekhive@gmail.com\r\n";
$headers  .= "Content-Type: text/plain; charset=UTF-8\r\n";

// @ to avoid warning if mail is not configured, but you can remove @ if you want
@mail($to, $subject, $body, $headers);

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$clientIP  = $_SERVER['REMOTE_ADDR'] ?? '';

$briefDataArray['cus_name']    =$contactName;
$briefDataArray['cus_phone']   = '000';
$briefDataArray['cus_email']   = $contactEmail; // FIXED
$briefDataArray['industry']    = $industries;
$briefDataArray['company_name']= $contactName;
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


echo json_encode([
    'success' => true,
    'response'=>$response
]);
exit;
