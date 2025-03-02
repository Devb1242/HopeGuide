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

 <!-- Include Navbar -->
 <?php include 'navbar.php'; ?>
    <!-- end header section -->

<div class="forum-container">
    <h1 class="text-center mb-4">Community Forum</h1>

    <!-- Existing Threads -->
    <div id="threads-container">
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
                        <input type="text" class="form-control" id="threadTitle" name = "threadTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="threadDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="threadDescription" name = "threadDescription" rows="3" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitThreadBtn" onclick="createNewThread()">
                    <span class="submit-text">Create Thread</span>
                    <span class="spinner-border spinner-border-sm spinner" style="display: none;"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    async function createNewThread() {
        const title = document.getElementById('threadTitle').value.trim();
        const description = document.getElementById('threadDescription').value.trim();
        const submitBtn = document.getElementById('submitThreadBtn');
        const spinner = submitBtn.querySelector('.spinner');
        const submitText = submitBtn.querySelector('.submit-text');

        if (!title || !description) {
            alert('Please fill in all required fields');
            return;
        }

        try {
            // Show loading state
            submitText.textContent = 'Creating...';
            spinner.style.display = 'inline-block';
            submitBtn.disabled = true;

            // Send POST request to your API
            const response = await fetch('http://localhost:5430/v1/user/community/addThread', {
                method: 'POST',
                headers: {
                    'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiJVMkZzZEdWa1gxL2Qrc1paN20zaUloajhFNnloV2ZSOUlydzd2UGJCbmJTUlVEc1R5dGIySmRqSEJOb3N2S2dsIiwicGFzc3dvcmQiOiJVMkZzZEdWa1gxOWFrenNzOEJIc2lleWx3d0dMNEFUcWdMZkluK2ZGb0hidUtzaHVMYWpVU2pLZVBTS2pjMVFqcHZFMG81eG5rMm0xVmR1cTlDdHdnbWVQZ0hBRXhDSWsrRmZrRGNrd3F3Yz0iLCJpYXQiOjE3NDA4OTM2OTcsImV4cCI6MTc0MDk4MDA5N30.ecQyENiP-71NwEQdFQjdOh468SHwLE5SmpX69zLOlcY',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    title,
                    description,
                    // Add any additional required fields from your API
                })
            });

            if (!response.ok) throw new Error('Failed to create thread');

            // Close modal and clear form
            const modal = bootstrap.Modal.getInstance(document.getElementById('newThreadModal'));
            modal.hide();
            document.getElementById('newThreadForm').reset();

            // Show success message
            alert('Thread created successfully!');
            
            // Refresh threads or prepend new thread to list
            // You can either call your existing fetchThreads() function or:
            const newThread = await response.json();
            window.location.href = "./communityForum.php"

        } catch (error) {
            console.error('Error creating thread:', error);
            alert('Failed to create thread. Please try again.');
        } finally {
            // Reset button state
            submitText.textContent = 'Create Thread';
            spinner.style.display = 'none';
            submitBtn.disabled = false;
        }
    }

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fetch threads from API
        fetch('http://localhost:5430/v1/user/community/getAllThread?page=1&limit=10', {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiJVMkZzZEdWa1gxL2Qrc1paN20zaUloajhFNnloV2ZSOUlydzd2UGJCbmJTUlVEc1R5dGIySmRqSEJOb3N2S2dsIiwicGFzc3dvcmQiOiJVMkZzZEdWa1gxOWFrenNzOEJIc2lleWx3d0dMNEFUcWdMZkluK2ZGb0hidUtzaHVMYWpVU2pLZVBTS2pjMVFqcHZFMG81eG5rMm0xVmR1cTlDdHdnbWVQZ0hBRXhDSWsrRmZrRGNrd3F3Yz0iLCJpYXQiOjE3NDA4OTM2OTcsImV4cCI6MTc0MDk4MDA5N30.ecQyENiP-71NwEQdFQjdOh468SHwLE5SmpX69zLOlcY',
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            const threadsContainer = document.getElementById('threads-container');
            threadsContainer.innerHTML = ''; // Clear existing content

            // Assuming data.data contains array of threads
            data.data.result.forEach((thread, index) => {
                const threadHTML = `
                    <div class="thread">
                        <div class="thread-header">
                            <div>
                                <span class="thread-title">${thread.title || 'No Title'}</span>
                                <span class="thread-username">by ${thread.username || 'Anonymous'}</span>
                            </div>
                        </div>
                        <div class="thread-description">
                            ${thread.description || 'No description available'}
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button class="btn btn-primary btn-sm" onclick="toggleReply('reply${index}')">Reply</button>
                            <button class="btn btn-outline-secondary btn-sm" onclick="toggleReplies('replies${index}')">Show Replies</button>
                        </div>
                        <div id="reply${index}" class="reply-section" style="display: none;">
                            <textarea rows="3" placeholder="Write your reply..." 
                                    maxlength="200" 
                                    oninput="updateCharCount(this, 'charCount${index}')"></textarea>
                            <div class="char-count" id="charCount${index}">200 characters remaining</div>
                            <button class="btn btn-success btn-sm" 
                                    onclick="submitReply()">
                                Submit Reply
                            </button>
                            <div class="spinner-border text-primary spinner" role="status" style="display: none;">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        <div id="replies${index}" class="replies" style="display: none;">
                            ${(thread.replies || []).map(reply => `
                                <div class="reply">
                                    <div class="reply-user">${reply.username}</div>
                                    <div class="reply-content">${reply.content}</div>
                                </div>
                            `).join('')}
                        </div>
                    </div>
                `;
                threadsContainer.insertAdjacentHTML('beforeend', threadHTML);
            });
        })
        .catch(error => {
            console.error('Error fetching threads:', error);
            threadsContainer.innerHTML = '<p class="text-danger">Error loading threads. Please try again later.</p>';
        });
    });

        // Existing forum interaction functions
    function toggleReply(replyId) {
        const replySection = document.getElementById(replyId);
        replySection.style.display = replySection.style.display === 'none' ? 'block' : 'none';
    }

    function toggleReplies(repliesId) {
        const repliesSection = document.getElementById(repliesId);
        repliesSection.style.display = repliesSection.style.display === 'none' ? 'block' : 'none';
    }

    function updateCharCount(textarea, charCountId) {
        const remaining = 200 - textarea.value.length;
        document.getElementById(charCountId).textContent = `${remaining} characters remaining`;
    }

    async function submitReply(replyId, repliesId, threadId) {
        console.log("Pavan")
    const textarea = document.querySelector(`#${replyId} textarea`);
    const content = textarea.value.trim();
    
    if (!content) return;

    try {
        const spinner = document.querySelector(`#${replyId} .spinner`);
        spinner.style.display = 'inline-block';

        // API Request to submit reply
        const response = await fetch('http://localhost:5430/v1/user/community/addThreadReplay/67c4060901422e343d64b308', {
            method: 'POST',
            headers: {
                'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiJVMkZzZEdWa1gxL2Qrc1paN20zaUloajhFNnloV2ZSOUlydzd2UGJCbmJTUlVEc1R5dGIySmRqSEJOb3N2S2dsIiwicGFzc3dvcmQiOiJVMkZzZEdWa1gxOWFrenNzOEJIc2lleWx3d0dMNEFUcWdMZkluK2ZGb0hidUtzaHVMYWpVU2pLZVBTS2pjMVFqcHZFMG81eG5rMm0xVmR1cTlDdHdnbWVQZ0hBRXhDSWsrRmZrRGNrd3F3Yz0iLCJpYXQiOjE3NDA4OTM2OTcsImV4cCI6MTc0MDk4MDA5N30.ecQyENiP-71NwEQdFQjdOh468SHwLE5SmpX69zLOlcY', // Replace with valid token
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                threadId: threadId, // ID of the thread being replied to
                content: content
            })
        });

        const result = await response.json();

        if (response.ok) {
            // Add new reply to UI
            const repliesContainer = document.getElementById(repliesId);
            repliesContainer.insertAdjacentHTML('afterbegin', `
                <div class="reply">
                    <div class="reply-user">You</div>
                    <div class="reply-content">${content}</div>
                </div>
            `);

            textarea.value = '';
            updateCharCount(textarea, `charCount${replyId.replace('reply', '')}`);
        } else {
            alert(`Error: ${result.message || 'Failed to submit reply'}`);
        }
    } catch (error) {
        console.error('Error submitting reply:', error);
        alert('Failed to submit reply. Please try again.');
    } finally {
        document.querySelector(`#${replyId} .spinner`).style.display = 'none';
    }
};
</script>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>