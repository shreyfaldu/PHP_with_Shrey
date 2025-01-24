<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        nav {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: space-around;
            padding: 14px 0;
            animation: fadeInDown 1s ease-in-out;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
        }
        nav a:hover {
            background-color: #575757;
        }
        .container {
            padding: 20px;
        }
        .main {
            text-align: center;
            padding: 50px 0;
            animation: fadeIn 2s ease-in-out;
        }
        .main img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            animation: bounceIn 2s ease-in-out;
        }
        .section {
            padding: 20px 0;
            animation: slideInUp 2s ease-in-out;
        }
        .section h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            animation: fadeInUp 1s ease-in-out;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            animation: slideInLeft 2s ease-in-out;
        }
        .contact-form button {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            animation: pulse 2s infinite;
        }
        .contact-form button:hover {
            background-color: #575757;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideInUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes slideInLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes bounceIn {
            from, 20%, 40%, 60%, 80%, to {
                animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }
            from {
                opacity: 0;
                transform: scale3d(.3, .3, .3);
            }
            20% {
                transform: scale3d(1.1, 1.1, 1.1);
            }
            40% {
                transform: scale3d(.9, .9, .9);
            }
            60% {
                opacity: 1;
                transform: scale3d(1.03, 1.03, 1.03);
            }
            80% {
                transform: scale3d(.97, .97, .97);
            }
            to {
                opacity: 1;
                transform: scale3d(1, 1, 1);
            }
        }
        @keyframes pulse {
            from {
                transform: scale3d(1, 1, 1);
            }
            50% {
                transform: scale3d(1.05, 1.05, 1.05);
            }
            to {
                transform: scale3d(1, 1, 1);
            }
        }
    </style>
</head>
<body>

<nav>
    <a href="#main">Home</a>
    <a href="#about">About Me</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact Me</a>
</nav>

<div class="container">

    <!-- Main Section -->
    <div id="main" class="main">
        <img src="your-photo.jpg" alt="Your Photo">
        <h1>Hello, I'm Shrey</h1>
        <p>A passionate computer engineer.</p>
    </div>

    <!-- About Me Section -->
    <div id="about" class="section">
        <h2>About Me</h2>
        <p>I am a final year B.Tech student at CHARUSAT University, passionate about software development and web technologies. I have experience in the MERN stack and digital marketing.</p>
    </div>

    <!-- Skills Section -->
    <div id="skills" class="section">
        <h2>Skills</h2>
        <ul>
            <li>Python</li>
            <li>JavaScript</li>
            <li>React</li>
            <li>PHP</li>
            <li>SQL</li>
            <li>OOP</li>
        </ul>
    </div>

    <!-- Projects Section -->
    <div id="projects" class="section">
        <h2>Projects</h2>
        <ul>
            <li>Password Generator App (React)</li>
            <li>Logo Simple Application (React Router)</li>
            <li>To-Do List Project (JavaScript)</li>
        </ul>
    </div>

    <!-- Contact Me Section -->
    <div id="contact" class="section">
        <h2>Contact Me</h2>
        <form class="contact-form" action="send_email.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>

</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2025 Shrey. All rights reserved.</p>
</div>

</body>
</html>
