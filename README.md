# 🚀 Tej Joshi - Personal Portfolio & AI Assistant

![UI Theme](https://img.shields.io/badge/Theme-Cyberpunk%20%2F%20Glassmorphism-8b2fd6?style=flat-square)
![Tech Stack](https://img.shields.io/badge/Tech_Stack-PHP%20%7C%20Tailwind%20%7C%20JS-22d3ee?style=flat-square)
![AI Powered](https://img.shields.io/badge/AI_Powered-Google_Gemini-ff2e6d?style=flat-square)

A dynamic, cyberpunk-themed personal portfolio website built to showcase my projects, skills, and experience as a Full Stack Developer and Computer Engineering student. 

This project goes beyond a static HTML page by implementing a custom PHP backend, a fully functional contact system, and a **built-in AI Chatbot powered by Google Gemini** that acts as a virtual assistant for recruiters.

## ✨ Key Features

*   🤖 **Custom AI Chat Assistant:** An integrated widget powered by the **Google Gemini 1.5 Flash API**. The AI reads dynamically from my resume data to answer visitor questions about my experience, projects, and skills in real-time.
*   🧠 **"Single Source of Truth" Data Architecture:** All portfolio content (skills, projects, education) is stored in a single PHP array file (`data.php`). This feeds both the frontend HTML and the AI's system prompt, ensuring the bot and the website are always perfectly synchronized.
*   ✉️ **Robust Contact Form:** A custom `contact.php` backend handles form validation, sanitization, and session-based rate limiting. It utilizes PHP's native `mail()` function, with a built-in fallback that logs messages to a local JSON file (`contact-log.json`) if an SMTP server is unavailable.
*   🎨 **Cyberpunk / Glassmorphism UI:** Designed with Tailwind CSS, featuring custom CSS animations, drifting ambient background blobs, glassmorphism cards, and a neon color palette.
*   🎥 **Dynamic Hero Section:** Features a looped "God's Eye Uplink" cyber-tech video background.

## 🛠️ Tech Stack

*   **Frontend:** HTML5, CSS3, JavaScript, Tailwind CSS (via CDN), FontAwesome
*   **Backend:** PHP 8.x
*   **AI Integration:** Google Gemini API (REST / cURL)
*   **Architecture:** Component-based data rendering

## 📂 Project Structure

```text
📁 Portfolio-Website/
├── tejprotfilo.php     # Main frontend UI (HTML structure & JS logic)
├── data.php            # The data store (Experience, Projects, Skills)
├── chat.php            # Backend endpoint for the Gemini AI chatbot
├── contact.php         # Backend endpoint for the contact form
├── config.php          # (Ignored) Stores the GEMINI_API_KEY
├── assets/             # Images, Videos, and PDF Certificates
└── README.md

⚙️ Local Setup & Installation
To run this project locally with full backend functionality, you will need a local PHP server environment like XAMPP or [MAMP].

Clone the repository:

Bash
git clone [https://github.com/Tejjosh/Protifiloweb.git](https://github.com/Tejjosh/Protifiloweb.git)
Move to your server directory:
Place the cloned folder inside your htdocs (XAMPP) or www (WAMP) directory.

Configure the AI API Key:
Create a file named config.php in the root directory and add your Google Gemini API key. (Note: Ensure config.php is added to your .gitignore file before committing!)

PHP
<?php
define('GEMINI_API_KEY', 'your_google_gemini_api_key_here');
Run the application:
Open your browser and navigate to: http://localhost/Protifiloweb/tejprotfilo.php

📧 Notes on the Contact Form
If you are testing the contact form on a local environment like XAMPP, PHP's mail() function will likely fail because no SMTP server is configured. The script is designed to safely catch this failure and write the incoming message to a contact-log.json file in the root directory so no messages are lost during development.

To enable live email sending, either host the project on an Apache server with a configured Mail Transfer Agent (MTA) or configure XAMPP's sendmail.ini to use an external SMTP provider like Gmail.

🔗 Let's Connect
LinkedIn: [Your LinkedIn URL]

GitHub: github.com/Tejjosh

Email: 26128tejjoshi@gmail.com
