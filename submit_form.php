<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Replace 'YOUR_BOT_TOKEN' and 'YOUR_CHAT_ID' with your actual Bot Token and Chat ID
  $botToken = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
  $chatId = 'XXXXXXXXX';

  // Compose the message to be sent to Telegram
  $telegramMessage = "New contact form submission:\n\nName: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message";

  // Send the message to Telegram using the Bot API
  $telegramApiUrl = "https://api.telegram.org/bot$botToken/sendMessage";
  $telegramData = [
    'chat_id' => $chatId,
    'text' => $telegramMessage,
  ];

  $ch = curl_init($telegramApiUrl);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $telegramData);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);

  // Handle the result as needed
  if ($result) {
    // Display success message and redirect to index.php using JavaScript
    echo '<script>alert("Email sent successfully!"); window.location.href = "index.php";</script>';
    exit();
  } else {
    // Display error message
    echo "Error submitting the form.";
  }
}
?>

