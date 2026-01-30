<?php
// Email and WhatsApp configuration
$recipient_email = "hello@nutritionwell.com"; // Change to dietitian's email
$twilio_account_sid = "YOUR_TWILIO_ACCOUNT_SID";
$twilio_auth_token = "YOUR_TWILIO_AUTH_TOKEN";
$twilio_whatsapp_number = "whatsapp:+233YOUR_TWILIO_NUMBER"; // Twilio WhatsApp number
$dietitian_whatsapp = "whatsapp:+233YOUR_PHONE_NUMBER"; // Your WhatsApp number
$subject = "New Contact Form Submission";

// Get form data
$name = sanitize_input($_POST['name']);
$email = sanitize_input($_POST['email']);
$phone = sanitize_input($_POST['phone']);
$message = sanitize_input($_POST['message']);

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid email address']);
    exit;
}

// Create email body
$email_body = "New Contact Form Submission\n\n";
$email_body .= "Name: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Phone: $phone\n\n";
$email_body .= "Message:\n$message";

// Send Email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$email_sent = mail($recipient_email, $subject, $email_body, $headers);

// Send WhatsApp Message (optional - requires Twilio setup)
$whatsapp_sent = sendWhatsAppMessage($name, $email, $phone, $message, $twilio_account_sid, $twilio_auth_token, $twilio_whatsapp_number, $dietitian_whatsapp);

if ($email_sent) {
    // Send confirmation email to user
    $user_subject = "We received your message";
    $user_message = "Hi $name,\n\nThank you for contacting NutritionWell. We have received your message and will get back to you shortly.\n\nBest regards,\nNutritionWell Team";
    mail($email, $user_subject, $user_message, "From: $recipient_email");
    
    http_response_code(200);
    echo json_encode(['status' => 'success', 'message' => 'Message sent successfully. We will contact you soon!']);
} else {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Failed to send message. Please try again.']);
}

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function sendWhatsAppMessage($name, $email, $phone, $message, $account_sid, $auth_token, $from_number, $to_number) {
    // This function sends WhatsApp via Twilio
    // Only works if Twilio credentials are configured
    
    if (!$account_sid || $account_sid === "YOUR_TWILIO_ACCOUNT_SID") {
        return false; // Skip if not configured
    }
    
    $url = "https://api.twilio.com/2010-04-01/Accounts/$account_sid/Messages.json";
    
    $msg_body = "New Contact from NutritionWell\n\nName: $name\nEmail: $email\nPhone: $phone\n\nMessage: $message";
    
    $post_data = array(
        'From' => $from_number,
        'To' => $to_number,
        'Body' => $msg_body
    );
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    curl_setopt($ch, CURLOPT_USERPWD, "$account_sid:$auth_token");
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return !empty($response);
}
?>
