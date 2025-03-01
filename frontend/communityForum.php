<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Forum</title>
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
        body {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            font-family: 'Arial', sans-serif;
        }
        .forum-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .thread {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .thread:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        }
        .thread-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .thread-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }
        .thread-username {
            color: #666;
            font-style: italic;
        }
        .thread-date {
            color: #999;
            font-size: 0.875rem;
        }
        .thread-description {
            margin-top: 10px;
            color: #555;
            line-height: 1.6;
        }
        .reply-section {
            margin-top: 15px;
            display: none;
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .reply-section textarea {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
            resize: vertical;
            font-size: 0.9rem;
        }
        .reply-section button {
            margin-top: 10px;
        }
        .replies {
            margin-top: 15px;
            padding-left: 20px;
            border-left: 2px solid #ddd;
            display: none;
        }
        .reply {
            margin-top: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        .reply-username {
            font-weight: bold;
            color: #333;
        }
        .reply-date {
            color: #999;
            font-size: 0.75rem;
        }
        .reply-text {
            margin-top: 5px;
            color: #555;
        }
        .floating-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        .dropdown-menu {
            cursor: pointer;
        }
        .spinner {
            display: none;
            margin: 10px auto;
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
                                <a class="nav-link" href="contact.php">Community Forum</a>
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

<div class="forum-container">
    <h1 class="text-center mb-4">Community Forum</h1>

    <!-- Existing Threads -->
    <div id="threads-container">
        <!-- Thread 1 -->
        <div class="thread">
            <div class="thread-header">
                <div>
                    <span class="thread-title">How to use Bootstrap?</span>
                    <span class="thread-username">by JohnDoe</span>
                </div>
            </div>
            <div class="thread-description">
                I'm new to Bootstrap and would like to know how to get started with it. Any tips or resources would be appreciated!
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <button class="btn btn-primary btn-sm" onclick="toggleReply('reply1')">Reply</button>
                <button class="btn btn-outline-secondary btn-sm" onclick="toggleReplies('replies1')">Show Replies</button>
            </div>
            <div id="reply1" class="reply-section">
                <textarea rows="3" placeholder="Write your reply..." maxlength="200" oninput="updateCharCount(this, 'charCount1')"></textarea>
                <div class="char-count" id="charCount1">200 characters remaining</div>
                <button class="btn btn-success btn-sm" onclick="submitReply('reply1', 'replies1')">Submit Reply</button>
                <div class="spinner-border text-primary spinner" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div id="replies1" class="replies">
                <!-- Replies will be dynamically added here -->
            </div>
        </div>

        <!-- Thread 2 -->
        <div class="thread">
            <div class="thread-header">
                <div>
                    <span class="thread-title">Best practices for responsive design</span>
                    <span class="thread-username">by JaneSmith</span>
                </div>
            </div>
            <div class="thread-description">
                What are some of the best practices for creating responsive designs that work well on all devices?
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <button class="btn btn-primary btn-sm" onclick="toggleReply('reply2')">Reply</button>
                <button class="btn btn-outline-secondary btn-sm" onclick="toggleReplies('replies2')">Show Replies</button>
            </div>
            <div id="reply2" class="reply-section">
                <textarea rows="3" placeholder="Write your reply..." maxlength="200" oninput="updateCharCount(this, 'charCount2')"></textarea>
                <div class="char-count" id="charCount2">200 characters remaining</div>
                <button class="btn btn-success btn-sm" onclick="submitReply('reply2', 'replies2')">Submit Reply</button>
                <div class="spinner-border text-primary spinner" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div id="replies2" class="replies">
                <!-- Replies will be dynamically added here -->
            </div>
        </div>
    </div>
</div>

<!-- Floating "New Thread" Button -->
<button class="btn btn-primary btn-lg floating-btn" data-bs-toggle="modal" data-bs-target="#newThreadModal">+ New Thread</button>

<!-- New Thread Modal -->
<div class="modal fade" id="newThreadModal" tabindex="-1" aria-labelledby="newThreadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newThreadModalLabel">Create a New Thread</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="newThreadForm">
                    <div class="mb-3">
                        <label for="threadTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="threadTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="threadDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="threadDescription" rows="3" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="createNewThread()">Create Thread</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to create a new thread
    function createNewThread() {
        const title = document.getElementById('threadTitle').value.trim();
        const description = document.getElementById('threadDescription').value.trim();

        if (!title || !description) {
            alert("Please fill out both the title and description.");
            return;
        }

        // Create a new thread element
        const threadHtml = `
            <div class="thread">
                <div class="thread-header">
                    <div>
                        <span class="thread-title">${title}</span>
                        <span class="thread-username">by You</span>
                    </div>
                    <span class="thread-date">Posted on: ${new Date().toLocaleDateString()}</span>
                </div>
                <div class="thread-description">${description}</div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <button class="btn btn-primary btn-sm" onclick="toggleReply('replyNew')">Reply</button>
                    <button class="btn btn-outline-secondary btn-sm" onclick="toggleReplies('repliesNew')">Show Replies</button>
                </div>
                <div id="replyNew" class="reply-section">
                    <textarea rows="3" placeholder="Write your reply..." maxlength="200" oninput="updateCharCount(this, 'charCountNew')"></textarea>
                    <div class="char-count" id="charCountNew">200 characters remaining</div>
                    <button class="btn btn-success btn-sm" onclick="submitReply('replyNew', 'repliesNew')">Submit Reply</button>
                    <div class="spinner-border text-primary spinner" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div id="repliesNew" class="replies">
                    <!-- Replies will be dynamically added here -->
                </div>
            </div>
        `;

        // Add the new thread to the threads container
        const threadsContainer = document.getElementById('threads-container');
        threadsContainer.insertAdjacentHTML('afterbegin', threadHtml);

        // Close the modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('newThreadModal'));
        modal.hide();

        // Clear the form
        document.getElementById('newThreadForm').reset();
    }

    // Toggle reply section
    function toggleReply(replyId) {
        const replySection = document.getElementById(replyId);
        replySection.style.display = replySection.style.display === "none" ? "block" : "none";
    }

    // Toggle replies section
    function toggleReplies(repliesId) {
        const repliesSection = document.getElementById(repliesId);
        repliesSection.style.display = repliesSection.style.display === "none" ? "block" : "none";
    }

    // Update character count
    function updateCharCount(textarea, charCountId) {
        const charCount = document.getElementById(charCountId);
        const remaining = 200 - textarea.value.length;
        charCount.textContent = `${remaining} characters remaining`;
    }

    // Submit reply
    function submitReply(replyId, repliesId) {
        const replyTextarea = document.querySelector(`#${replyId} textarea`);
        const replyText = replyTextarea.value.trim();
        if (!replyText) {
            alert("Please write a reply before submitting.");
            return;
        }

        const spinner = document.querySelector(`#${replyId} .spinner`);
        spinner.style.display = "inline-block";

        // Simulate a delay for submission
        setTimeout(() => {
            spinner.style.display = "none";
            replyTextarea.value = ""; // Clear the textarea
            updateCharCount(replyTextarea, `charCount${replyId.slice(-1)}`);

            // Add the reply to the replies section
            const repliesSection = document.getElementById(repliesId);
            const replyHtml = `
                <div class="reply">
                    <div class="reply-username">You</div>
                    <div class="reply-date">Just now</div>
                    <div class="reply-text">${replyText}</div>
                </div>
            `;
            repliesSection.insertAdjacentHTML("beforeend", replyHtml);
            repliesSection.style.display = "block"; // Show replies if hidden
        }, 1000);
    }
</script>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>