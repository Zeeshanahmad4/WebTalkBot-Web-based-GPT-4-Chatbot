document.addEventListener("DOMContentLoaded", function() {
    const chatInput = document.getElementById('chat-input');
    const chatForm = document.getElementById('chat-form');
    const chatContainer = document.getElementById('chat-container');

    chatForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Capturing user's input
        let userMessage = chatInput.value.trim();

        if (userMessage) {
            // Display user's message in chat container
            chatContainer.innerHTML += `<div class="user-message">${userMessage}</div>`;
            
            // Send user's message to server (you can define the server endpoint and method)
            fetch('server_endpoint.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ message: userMessage })
            })
            .then(response => response.json())
            .then(data => {
                // Display chatbot's response in chat container
                chatContainer.innerHTML += `<div class="bot-message">${data.response}</div>`;
                
                // Auto-scroll to the latest message
                chatContainer.scrollTop = chatContainer.scrollHeight;
            })
            .catch(error => console.error('Error:', error));

            // Clear the chat input
            chatInput.value = '';
        }
    });
});
