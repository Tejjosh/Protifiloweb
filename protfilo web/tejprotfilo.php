<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tej Joshi - Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<style>
  body {
    background-color: #DCD7C9;
    color: #2C3930;
  }

  .gradient-bg {
    background: linear-gradient(135deg, #3F4F44, #2C3930);
  }

  .project-card, .timeline-item, .bg-gray-50, .bg-white {
    background-color: #f5f3ed !important;
    color: #2C3930;
  }

  .project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
  }

  .skill-badge:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }

  .text-blue-600, .text-blue-500, .text-blue-100, .text-blue-200 {
    color: #A27B5C !important;
  }

  .hover\:text-blue-200:hover {
    color: #A27B5C !important;
  }

  .bg-blue-800, .bg-gray-800 {
    background-color: #2C3930 !important;
  }

  .border-blue-500 {
    border-color: #A27B5C !important;
  }

  .bg-white, .border-white {
    background-color: #f5f3ed !important;
    border-color: #2C3930 !important;
  }

  .hover\:bg-blue-100:hover {
    background-color: #A27B5C !important;
    color: #fff !important;
  }

  .text-white {
    color: #fff !important;
  }

  .hover\:text-blue-800:hover {
    color: #3F4F44 !important;
  }

  .profile-pic {
    background-image: url('https://avatars.githubusercontent.com/u/139015203?v=4');
    background-size: cover;
    background-position: center;
  }

  footer {
    background-color: #2C3930;
    color: #DCD7C9;
  }

  .btn-custom {
    background-color: #A27B5C;
    color: white;
  }

  .btn-custom:hover {
    background-color: #8a644c;
    color: white;
  }
</style>


</head>
<body class="font-sans bg-[#e6f0f1] text-[#003f47]">
<?php
$personal_info = [
  'name' => 'Tej Joshi',
  'email' => '26128tejjoshi@gmail.com',
  'phone' => '+91 8401907776',
  'location' => 'Vadodara',
  'objective' => 'Seeking a challenging role in Computer Engineering to apply and grow skills in programming, networking, and emerging technologies while contributing to organizational success and continuous learning.'
];

$experiences = [
  [
    'company' => 'Spider Web Solutions',
    'location' => 'Vadodara',
    'position' => 'Front End Development Intern',
    'duration' => 'May 2025 - Jun 2025',
    'description' => 'Developed responsive full-stack eCommerce platforms using PHP, MySQL, HTML, CSS, and JavaScript. Implemented secure user authentication, session handling, and profile management to enhance customer experience and data safety. Collaborated in an agile team environment delivering high-performance web applications. Performed cross-browser testing, UI optimization, and code refactoring to ensure responsive, scalable solutions. Contributed to debugging, performance tuning, and code reviews for continuous improvement.',
    'certificate' => 'f:\protfilo web\certificatesspider_web_solutions.pdf'
  ],
  [
    'company' => 'Spaculus Software',
    'location' => 'Vadodara',
    'position' => 'Web Developer Intern',
    'duration' => 'May 2025 - Jun 2025',
    'description' => 'Engineered a time tracking software with real-time session logging and idle detection using Python and MySQL. Designed and implemented admin dashboards for time analytics, project-wise tracking, and reporting. Ensured database optimization and backend security through efficient Python ORM queries and MySQL configurations. Collaborated with frontend teams to achieve seamless UI/backend integration and conducted performance testing.',
    'certificate' => 'cf:\protfilo web\Scanned 4 Jul 2025 at 12_47_10 PM.pdf'
  ],
  [
    'company' => 'Ksithub',
    'location' => 'Surat',
    'position' => 'Frontend Developer Intern',
    'duration' => 'Apr 2025 - May 2025',
    'description' => 'Contributed to frontend stability, code quality, and UI consistency across multiple projects. Fixed critical bugs and improved component efficiency to enhance user experience. Actively engaged in cross-functional team discussions to align frontend goals with backend processes. Demonstrated excellent version control practices using Git and GitHub.',
    'certificate' => 'f:\protfilo web\TejjoshiinternshipKISITHUB.pdf'
  ],
  [
    'company' => 'Growthclues',
    'location' => 'Virtual',
    'position' => 'Stock Market Management Intern',
    'duration' => 'Dec 2023 - Jan 2024',
    'description' => 'Conducted detailed stock market research and technical analysis across various industry sectors. Prepared investment reports, risk assessments, and portfolio strategies based on real-time market data. Utilized financial tools and historical datasets to identify profitable investment opportunities and trends. Developed data-driven decision-making skills and gained exposure to stock market operations and investment planning.',
    'certificate' => 'f:\protfilo web\Tej_Joshi_Hired_Certificate.pdf'
  ]
];

$education = [
  [
    'institution' => 'Parul Polytechnic Institute',
    'degree' => 'Diploma In Engineering, Computer Science & Engineering',
    'duration' => '2023 - 2026'
  ],
  [
    'institution' => 'Baroda High School',
    'degree' => 'Secondary (X), SSC',
    'duration' => '2022'
  ]
];

$certifications = [
  [
    'title' => 'Python Using AI Workshop',
    'issuer' => 'AI For Techies, Virtual',
    'date' => 'Jun 2025',
    'description' => 'Learned to create interactive visualizations in Python, debug Python code efficiently using AI, and write Python code with AI assistance.'
  ],
  [
    'title' => 'Tata Cybersecurity Security Analyst Job Simulation',
    'issuer' => 'Forage, Virtual',
    'date' => 'May 2025',
    'description' => 'Completed a real-world cybersecurity job simulation focused on Identity and Access Management (IAM) for Tata Consultancy Services. Gained exposure to cybersecurity consulting, access control strategies, and security frameworks.'
  ],
  [
    'title' => 'Operating System – Networking Focus',
    'issuer' => 'Networking Academy, Virtual',
    'date' => 'Oct 2024',
    'description' => 'Studied how modern operating systems manage network communications and system-level configurations. Gained practical knowledge in computer networking and security protocols.'
  ],
  [
    'title' => 'Data Analytics',
    'issuer' => 'Natacad, Virtual',
    'date' => 'Mar 2024',
    'description' => 'Completed a 20-day intensive data analytics course focused on data cleaning, visualization, and basic statistical analysis using Python and Excel.'
  ]
];

$projects = [
  [
    'title' => 'Tej Joshi – Personal Portfolio Website',
    'duration' => 'Jun 2025 - Jul 2025',
    'description' => 'Developed a responsive personal portfolio website to showcase projects, skills, certifications, and work experiences. Built with HTML, CSS, JavaScript, PHP, and Tailwind CSS focusing on clean design, fast loading, and mobile responsiveness. Integrated dynamic project listing, work timeline, skills display, and contact forms.',
    'link' => 'https://github.com/Tejjosh/Protifiloweb'
  ],
  [
    'title' => 'Animz Max – Anime-Inspired Clothing Brand',
    'duration' => 'May 2025 - Jun 2025',
    'description' => 'Designed and developed a full-stack eCommerce website for anime-themed clothing brand "Animz Max." Implemented product filtering, cart management, and secure checkout using PHP, MySQL, HTML, CSS, and JavaScript. Integrated session-based user tracking, admin dashboard, messaging, and notification systems. Focused on responsive design and cross-browser compatibility.',
    'link' => 'https://github.com/Tejjosh/Animz-max'
  ],
  [
    'title' => 'TockWise Time Tracker Software',
    'duration' => 'May 2025 - Jun 2025',
    'description' => 'Developed a commercial-grade time tracking desktop application in Python for real-time user tracking and session logging. Features include session persistence, idle detection, real-time check-in/out tracking, workload visualization, and admin analytics dashboard. Optimized secure MySQL database storage and cross-platform compatibility.',
    'link' => 'https://github.com/Tejjosh/Tock_Wise'
  ],
  [
    'title' => 'Hydrox – Smart Water Irrigation System',
    'duration' => 'Dec 2024 - Jan 2025',
    'description' => 'Built an IoT-based smart irrigation system with soil moisture sensors and Bluetooth-controlled automation. Developed Python Flask dashboard for plant selection, water calculation, and irrigation scheduling. Enhanced water utilization and agricultural productivity with mobile-friendly real-time monitoring.',
    'link' => 'https://github.com/Tejjosh/Hydrox'
  ],
  [
    'title' => 'Vidyut – Blockchain-Based Data Management System',
    'duration' => 'Sep 2024 - Oct 2024',
    'description' => 'Created a blockchain-powered data management system with tamper-proof records. Integrated Ethereum smart contracts using Solidity for data integrity and transparency. Designed React-based UI with Web3.js integration for seamless blockchain interaction. Suitable for sensitive documents like medical files and certificates.',
    'link' => 'https://github.com/Tejjosh/vidyut'
  ]
];

$skills = [
  'Programming Languages' => ['C', 'C++', 'Java', 'JavaScript', 'Python', 'PHP', 'SQL'],
  'Web Technologies' => ['HTML', 'CSS', 'HTML5', 'WordPress', 'Wix', 'Web Development'],
  'Databases' => ['MySQL', 'DBMS'],
  'Tools & Platforms' => ['Figma', 'Flask', 'GitHub', 'Visual Studio', 'VS Code', 'Microsoft 365', 'GitHub Copilot'],
  'Data & Analysis' => ['MS Excel', 'MS PowerPoint', 'MS Word', 'Risk Assessment', 'Risk Management', 'Data Analytics'],
  'Google Workspace' => ['Google Forms', 'Google Docs', 'Google Drive', 'Google Sheets'],
  'Emerging Tech' => ['Blockchain', 'IoT', 'Data Science', 'Computer Networks', 'ChatGPT', 'Data Engineering'],
  'Soft Skills' => ['Adaptability', 'English Proficiency (Spoken)', 'Gujarati Proficiency (Spoken)', 'Hindi Proficiency (Spoken)']
];

$contact_info = [
  ['icon' => 'envelope', 'text' => $personal_info['email']],
  ['icon' => 'phone', 'text' => $personal_info['phone']],
  ['icon' => 'map-marker-alt', 'text' => $personal_info['location']],
  ['icon' => 'github', 'text' => 'https://github.com/Tejjosh'],
  ['icon' => 'linkedin', 'text' => 'https://www.linkedin.com/in/tej-joshi-66b7bb303/']
];
?>



    <!-- Header/Navigation -->
    <header class="gradient-bg text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold"><?php echo $personal_info['name']; ?></h1>
                    <p class="text-blue-100">Computer Science Engineer</p>
                </div>
                <nav class="hidden md:block">
                    <ul class="flex space-x-8">
                        <li><a href="#about" class="hover:text-blue-200 transition">About</a></li>
                        <li><a href="#skills" class="hover:text-blue-200 transition">Skills</a></li>
                        <li><a href="#projects" class="hover:text-blue-200 transition">Projects</a></li>
                        <li><a href="#experience" class="hover:text-blue-200 transition">Experience</a></li>
                        <li><a href="#contact" class="hover:text-blue-200 transition">Contact</a></li>
                    </ul>
                </nav>
                <button class="md:hidden focus:outline-none" id="menu-toggle">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-blue-800" id="mobile-menu">
            <div class="container mx-auto px-6 py-2">
                <ul class="space-y-2">
                    <li><a href="#about" class="block py-2 hover:text-blue-200 transition">About</a></li>
                    <li><a href="#skills" class="block py-2 hover:text-blue-200 transition">Skills</a></li>
                    <li><a href="#projects" class="block py-2 hover:text-blue-200 transition">Projects</a></li>
                    <li><a href="#contact" class="block py-2 hover:text-blue-200 transition">Contact</a></li>
                    <li><a href="#experience" class="block py-2 hover:text-blue-200 transition">Experience</a></li>

                </ul>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-16">
        <div class="container mx-auto px-6 flex flexocol md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Hello, I'm <?php echo explode(' ', $personal_info['name'])[0]; ?></h1>
                <h2 class="text-2xl md:text-3xl font-semibold mb-4">Computer Science Engineer & Full Stack Developer</h2>
                <p class="text-xl mb-8"><?php echo $personal_info['objective']; ?></p>
                <div class="flex space-x-4">
                    <a href="#contact" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-100 transition">Contact Me</a>
                    <a href="Tej_Joshi_CV.pdf" download class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-100 transition">Download CV</a>                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="relative">
                    <div class="w-64 h-64 md:w-80 md:h-80 rounded-full bg-white bg-opacity-10 border-4 border-white border-opacity-20 flex items-center justify-center">
                        <div class="w-60 h-60 md:w-72 md:h-72 rounded-full bg-white bg-opacity-10 border-4 border-white border-opacity-20 flex items-center justify-center">
                            <div class="w-56 h-56 md:w-64 md:h-64 rounded-full profile-pic bg-cover bg-center bg-no-repeat shadow-xl"></div>
                        </div>
                    </div>
                    <div class="absolute -bottom-4 -right-4 bg-gray-900 rounded-full p-4 shadow-xl flex items-center justify-center">
                        <i class="fas fa-laptop-code text-yellow-400 text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- About Section -->
<section id="about" class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">About Me</h2>

        <div class="flex flex-col md:flex-row">
            <!-- Personal Info -->
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h3 class="text-2xl font-semibold mb-6 text-gray-700">Personal Info</h3>
                <div class="space-y-4">
                    <?php foreach ($contact_info as $item): ?>
                        <?php
                            $brandIcons = ['github', 'linkedin'];
                            $isBrand = in_array($item['icon'], $brandIcons);
                            $iconClass = $isBrand ? 'fab' : 'fas';
                        ?>
                        <div class="flex items-start">
                            <div class="mr-4 mt-1 text-blue-600 w-6 flex justify-center">
                                <i class="<?php echo $iconClass; ?> fa-<?php echo $item['icon']; ?>"></i>
                            </div>
                            <div>
                                <?php if ($isBrand): ?>
                                    <a href="<?php echo $item['text']; ?>" target="_blank" class="text-gray-800 hover:text-blue-600">
                                        <?php echo ucfirst($item['icon']); ?>
                                    </a>
                                <?php else: ?>
                                    <p class="text-gray-800"><?php echo $item['text']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Education -->
                <h3 class="text-2xl font-semibold mt-12 mb-6 text-gray-700">Education</h3>
                <div class="space-y-6">
                    <?php foreach ($education as $edu): ?>
                        <div class="bg-gray-50 p-5 rounded-lg shadow-sm">
                            <h4 class="text-lg font-semibold text-gray-800"><?php echo $edu['degree']; ?></h4>
                            <div class="flex items-center text-gray-600 mt-1">
                                <i class="fas fa-university mr-2"></i>
                                <span><?php echo $edu['institution']; ?></span>
                            </div>
                            <div class="flex items-center text-gray-500 text-sm mt-2">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span><?php echo $edu['duration']; ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Professional Summary & Certifications -->
            <div class="md:w-1/2 md:pl-12">
                <h3 class="text-2xl font-semibold mb-6 text-gray-700">Professional Summary</h3>
                <p class="text-gray-700 leading-relaxed mb-6"><?php echo $personal_info['objective']; ?></p>

                <h3 class="text-2xl font-semibold mt-12 mb-6 text-gray-700">Certifications</h3>
                <div class="space-y-4">
                    <?php foreach ($certifications as $cert): ?>
                        <div class="border-l-4 border-blue-500 pl-4">
                            <h4 class="font-semibold text-gray-800"><?php echo $cert['title']; ?></h4>
                            <div class="flex flex-wrap items-center text-gray-600 text-sm mt-1">
                                <span><?php echo $cert['issuer']; ?></span>
                                <span class="mx-2">•</span>
                                <span><?php echo $cert['date']; ?></span>
                            </div>
                            <p class="text-gray-700 mt-2 text-sm"><?php echo $cert['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Work Experience Section -->
<section id="experience" class="py-16 bg-gray-50">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Work Experience</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      <?php foreach ($experiences as $index => $exp): ?>
        <div class="bg-white p-6 rounded-lg shadow-md relative overflow-hidden">
          <?php if ($index === 0): ?>
            <div class="absolute top-0 right-0 bg-[#A27B5C] text-white px-3 py-1 text-xs font-bold rounded-bl-lg shadow-md">
              Latest
            </div>
          <?php endif; ?>

          <button onclick="toggleExperience(<?php echo $index; ?>)" class="w-full text-left">
            <h3 class="text-xl font-semibold text-gray-800 flex justify-between items-center">
              <?php echo $exp['position']; ?>
              <i class="fas fa-chevron-down text-sm ml-2 transition-transform duration-300" id="arrow-<?php echo $index; ?>"></i>
            </h3>
            <div class="flex flex-wrap items-center text-gray-600 mt-1 text-sm">
              <i class="fas fa-building mr-2"></i>
              <span><?php echo $exp['company']; ?></span>
              <span class="mx-2">•</span>
              <i class="fas fa-map-marker-alt mr-2"></i>
              <span><?php echo $exp['location']; ?></span>
            </div>
            <div class="flex items-center text-gray-500 text-sm mt-2">
              <i class="fas fa-calendar-alt mr-2"></i>
              <span><?php echo $exp['duration']; ?></span>
            </div>
          </button>

          <div id="exp-desc-<?php echo $index; ?>" class="mt-4 text-gray-700 text-sm hidden transition duration-300">
            <?php echo $exp['description']; ?>
          </div>

          <!-- Download Certificate Button -->
          <?php if (!empty($exp['certificate'])): ?>
            <div class="mt-4">
              <a href="<?php echo $exp['certificate']; ?>" download target="_blank"
                class="inline-block bg-[#A27B5C] text-white px-4 py-2 rounded hover:bg-[#8a664a] transition">
                Download Certificate
              </a>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
function toggleExperience(index) {
  const desc = document.getElementById(`exp-desc-${index}`);
  const arrow = document.getElementById(`arrow-${index}`);
  desc.classList.toggle("hidden");
  arrow.classList.toggle("rotate-180");
}
</script>

    <!-- Skills Section -->
    <section id="skills" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Technical Skills</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($skills as $category => $items): ?>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-4 text-blue-600"><?php echo $category; ?></h3>
                    <ul class="space-y-2">
                        <?php foreach ($items as $item): ?>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                            <span class="text-gray-700"><?php echo $item; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
<!-- Projects Section -->
<section id="projects" class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Projects</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($projects as $proj): ?>
            <div class="project-card bg-gray-100 p-6 rounded-xl shadow-md transition transform hover:-translate-y-1">
                <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $proj['title']; ?></h3>
                <p class="text-sm text-gray-500 mb-2"><?php echo $proj['duration']; ?></p>
                <p class="text-gray-700 mb-4"><?php echo $proj['description']; ?></p>
                <a href="<?php echo $proj['link']; ?>" target="_blank" class="btn-custom px-4 py-2 rounded-lg inline-block mt-2 hover:bg-[#8a644c] transition">View Project</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


    <!-- Contact Section -->
<section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Contact Me</h2>
        <p class="text-lg text-gray-700 mb-6">Interested in working together or have questions? Let’s connect!</p>

        <!-- Phone and Email as text -->
        <div class="flex flex-col items-center space-y-4 mb-6">
            <?php foreach ($contact_info as $item): ?>
                <?php if ($item['icon'] === 'envelope' || $item['icon'] === 'phone'): ?>
                    <div class="flex items-center space-x-2 text-blue-600 text-lg">
                        <i class="fas fa-<?php echo $item['icon']; ?>"></i>
                        <span><?php echo $item['text']; ?></span>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <!-- GitHub and LinkedIn as clickable icons -->
        <div class="flex justify-center gap-6">
            <?php foreach ($contact_info as $item): ?>
                <?php
                    // Determine if the icon is a brand icon
                    $brandIcons = ['github', 'linkedin'];
                    $isBrand = in_array($item['icon'], $brandIcons);
                    $iconClass = $isBrand ? 'fab' : 'fas';
                ?>
                <?php if ($item['icon'] !== 'envelope' && $item['icon'] !== 'phone'): ?>
                    <a href="<?php echo $item['text']; ?>" class="text-blue-600 hover:text-blue-800 text-3xl" target="_blank" rel="noopener noreferrer">
                        <i class="<?php echo $iconClass; ?> fa-<?php echo $item['icon']; ?>"></i>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

   
<!-- Footer -->
<footer class="bg-[#A27B5C] text-white text-center py-6">
  <p>&copy; <?php echo date("Y"); ?> <?php echo $personal_info['name']; ?>. All rights reserved.</p>
</footer>

<script>
const toggleBtn = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
toggleBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});
</script>
</body>
</html>
