<?php // Chatbot interface template ?>
<?php
// chat_interface.php

// Include necessary libraries or modules. For example:
// include 'libs/gpt4_integration.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Interface</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <h2>Chatbot Interface</h2>
    
    <!-- Chat container to display chat messages -->
    <div id="chat-container" class="chatbot-container">
        <!-- Messages will be dynamically appended here -->
    </div>

    <!-- Chat input form -->
    <form id="chat-form" class="chatbot-input">
        <input type="text" id="chat-input" placeholder="Type your message..." required>
        <button type="submit">Send</button>
    </form>
</div>

<script src="assets/js/main.js"></script>
</body>
</html>
