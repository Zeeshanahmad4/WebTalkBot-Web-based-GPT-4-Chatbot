<?php
// index.php

// Include necessary libraries or modules:
include 'libs/gpt4_integration.php';
include 'libs/web_crawler.php';
include 'libs/context_manager.php';
include 'libs/prompt_engineering.php';
include 'libs/security.php';

// Check if there's a POST request from the chat interface (made by main.js)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message'])) {
    
    // Get the user's message
    $userMessage = sanitizeInput($_POST['message']);
    
    // Enhance the user's message using prompt engineering techniques (if any)
    $enhancedPrompt = enhancePrompt($userMessage);
    
    // Forward the enhanced prompt to the GPT-4 API and get a response
    $botResponse = getGPT4Response($enhancedPrompt);
    
    // Return the response to the frontend. The main.js will handle displaying it to the user.
    header('Content-Type: application/json');
    echo json_encode(['response' => $botResponse]);
    exit; // Exit after sending the response to avoid loading the chat interface again
}

// If there's no POST request or if it's a GET request, serve the chat interface to the user.
include 'chat_interface.php';
<?php // Main chatbot interaction page ?>
