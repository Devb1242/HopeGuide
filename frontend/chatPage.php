<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Mentor</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href="css/font-awesome.min.css" rel="stylesheet" />
<!-- nice select -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
<!-- datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />
    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #f8fafc;
            --accent-color: #e2e8f0;
        }

        body {
            background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        .chat-container {
            max-width: 800px;
            margin: 2rem auto;
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            background: white;
            height: 85vh;
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            padding: 1.5rem;
            background: var(--primary-color);
            border-radius: 1rem 1rem 0 0;
            color: white;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .mentor-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
        }

        .chat-messages {
            flex: 1;
            overflow-y: auto;
            padding: 1.5rem;
            background: var(--secondary-color);
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .message {
            max-width: 75%;
            padding: 0.75rem 1rem;
            border-radius: 1rem;
            animation: messageSlide 0.3s ease-out;
            position: relative;
        }

        .message.user {
            background: var(--primary-color);
            color: white;
            align-self: flex-end;
            border-bottom-right-radius: 0.25rem;
        }

        .message.mentor {
            background: white;
            border: 1px solid var(--accent-color);
            align-self: flex-start;
            border-bottom-left-radius: 0.25rem;
        }

        .message-time {
            font-size: 0.75rem;
            color: #64748b;
            margin-top: 0.5rem;
            display: block;
        }

        .message.user .message-time {
            color: #e0e7ff;
        }

        .chat-input-area {
            padding: 1.5rem;
            border-top: 1px solid var(--accent-color);
            background: white;
            border-radius: 0 0 1rem 1rem;
        }

        .typing-indicator {
            padding: 0 1.5rem;
            height: 28px;
            color: #64748b;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .typing-dots {
            display: flex;
            gap: 0.25rem;
        }

        .typing-dot {
            width: 6px;
            height: 6px;
            background: #94a3b8;
            border-radius: 50%;
            animation: typing 1.4s infinite ease-in-out;
        }

        .typing-dot:nth-child(2) { animation-delay: 0.2s; }
        .typing-dot:nth-child(3) { animation-delay: 0.4s; }

        @keyframes typing {
            0%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-4px); }
        }

        @keyframes messageSlide {
            from { transform: translateY(10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .message-input {
            border: 1px solid var(--accent-color);
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
            resize: none;
            transition: all 0.2s ease;
        }

        .message-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .send-button {
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 0.5rem;
            padding: 0.75rem 1.25rem;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .send-button:hover {
            background: #4f46e5;
            transform: translateY(-1px);
        }

        .online-status {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            font-size: 0.875rem;
        }

        .online-dot {
            width: 8px;
            height: 8px;
            background: #34d399;
            border-radius: 50%;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>

<header class="header_section">
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo.png" alt="">
            </a>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="financialAid.php">Financial Aid</a>
                  </li>
    
                  <!-- Legal Aid Dropdown -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="legalAidDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      Legal Aid
                    </a>
                    <div class="dropdown-menu" aria-labelledby="legalAidDropdown">
                      <a class="dropdown-item" href="documentation.php">Documentation</a>
                      <a class="dropdown-item" href="contactLawyer.php">Contact a Lawyer</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="legalAidDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      Emotional Support
                    </a>
                    <div class="dropdown-menu" aria-labelledby="legalAidDropdown">
                      <a class="dropdown-item" href="pshychologists.php">Pshychologists</a>
                      <a class="dropdown-item" href="contactLawyer.php">Mental Health Resources</a>
                      <a class="dropdown-item" href="contactLawyer.php">Support Groups</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="doctor.php"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="mentors.php">Mentor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="communityForum.php">Community Forum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Setting</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>


    <!-- Chat Container -->

<div class="chat-container">
    <!-- Chat Header -->
    <div class="chat-header">
        <img src="avatar-placeholder.jpg" alt="Mentor" class="mentor-avatar">
        <div>
            <h5 class="mb-1">Alex Johnson</h5>
            <div class="online-status">
                <span class="online-dot"></span>
                <span>Online</span>
            </div>
        </div>
    </div>

    <!-- Chat Messages -->
    <div class="chat-messages" id="chat-messages">
        <!-- Mentor Message -->
        <div class="message mentor">
            <div class="message-text">Hi there! How can I help you today? 😊</div>
            <span class="message-time">10:00 AM</span>
        </div>

        <!-- User Message -->
        <div class="message user">
            <div class="message-text">Hello! I need help with my project timeline.</div>
            <span class="message-time">10:02 AM</span>
        </div>
    </div>

    <!-- Typing Indicator -->
    <div class="typing-indicator" id="typing-indicator">
        <div class="typing-dots">
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
        </div>
        <span>Alex is typing...</span>
    </div>

    <!-- Chat Input -->
    <div class="chat-input-area">
        <div class="input-group">
            <textarea 
                id="message-input"
                class="message-input form-control"
                placeholder="Type your message..."
                rows="1"
            ></textarea>
            <button class="send-button" id="send-button">
                <i class="fa fa-send"></i>
                <span>Send</span>
            </button>
        </div>
    </div>
</div>

<script>
    // Auto-expand textarea
    const textarea = document.getElementById('message-input');
    textarea.addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    });

    // Sample message sending
    document.getElementById('send-button').addEventListener('click', function() {
        const messageText = textarea.value.trim();
        if (messageText) {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'message user';
            messageDiv.innerHTML = `
                <div class="message-text">${messageText}</div>
                <span class="message-time">${new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}</span>
            `;
            
            document.getElementById('chat-messages').appendChild(messageDiv);
            textarea.value = '';
            textarea.style.height = 'auto';
            
            // Scroll to bottom
            const chatMessages = document.getElementById('chat-messages');
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    });

    // Handle Enter key
    textarea.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            document.getElementById('send-button').click();
        }
    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>