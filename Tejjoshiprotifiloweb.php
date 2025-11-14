<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tej Joshi - Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            base:   "#0f1516",
            accent: "#7f8c94",
            neutral: "#c9c2c2",
            primary: "#234c58",
            brown: "#5e524b",
            orange: "#bb6830",
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    .gradient-bg {
      background: linear-gradient(90deg, #234c58 0%, #7f8c94 100%);
    }
    .profile-pic {
      background-image: url('https://cdn.jsdelivr.net/gh/alohe/avatars/png/memo_34.png');
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body class="font-sans bg-brown text-base">

<?php
$personal_info = [
  'name' => 'Tej Joshi',
  'email' => '26128tejjoshi@gmail.com',
  'phone' => '+91 8401907776',
  'location' => 'Vadodara',
  'objective' => 'Motivated Computer Engineering student with a passion for problem-solving and innovative technology. Seeking opportunities to apply expertise in programming, networking, and system design to deliver impactful solutions, pursue professional growth, and contribute to organizational success.'
];

$experiences = [
  [
    'company' => 'Spider Web Solutions',
    'location' => 'Vadodara',
    'position' => 'Front End Development Intern',
    'duration' => 'May 2025 - Jun 2025',
    'description' => 'Built and optimized fully responsive eCommerce platforms using PHP, MySQL, HTML, CSS, and JavaScript. Engineered secure user authentication and session management systems. Participated in agile team collaboration, enhanced UI/UX through continuous testing and refactoring, and resolved bugs to ensure peak site performance.',
    'certificate' => 'protfilo_web\Intership\certificate of internship (Tej Joshi).pdf'
  ],
  [
    'company' => 'Spaculus Software',
    'location' => 'Vadodara',
    'position' => 'Web Developer Intern',
    'duration' => 'May 2025 - Jun 2025',
    'description' => 'Developed a time-tracking solution integrating real-time logging and idle state detection, using Python and MySQL. Designed interactive dashboards for analytics and reporting, performed backend optimization, enforced security best practices, and collaborated with cross-functional teams on integration and testing.',
    'certificate' => 'protfilo_web\Intership\Tejjoshi specular software internship certificate.pdf'
  ],
  [
    'company' => 'Ksithub',
    'location' => 'Surat',
    'position' => 'Frontend Developer Intern',
    'duration' => 'Apr 2025 - May 2025',
    'description' => 'Enhanced frontend application quality and stability by improving component consistency and addressing UI bugs. Practiced industry-standard version control in a collaborative DevOps environment and contributed actively to team discussions and code reviews.',
    'certificate' => 'protfilo_web\Intership\TejjoshiinternshipKISITHUB.pdf'
  ],
  [
    'company' => 'Growthclues',
    'location' => 'Virtual',
    'position' => 'Stock Market Management Intern',
    'duration' => 'Dec 2023 - Jan 2024',
    'description' => 'Performed in-depth stock market research and data analysis for investment decision-making. Compiled detailed financial reports and risk assessments, utilized analytical tools, and honed data-driven insights in a virtual team setting.',
    'certificate' => 'protfilo_web\Intership\Tej_Joshi_Hired_Certificate.pdf'
  ]
];

$education = [
  [
    'institution' => 'Parul Polytechnic Institute',
    'degree' => 'Diploma in Computer Science & Engineering',
    'duration' => '2023 - 2026',
    'description' => 'Studying core computer engineering subjects with focus on programming, algorithms, system design, and networking.'
  ],
  [
    'institution' => 'Baroda High School',
    'degree' => 'Secondary (X), SSC',
    'duration' => '2022',
    'description' => 'Completed secondary education with a major emphasis on mathematics and science.'
  ]
];

$certifications = [
  [
    'title' => 'Python Certification Course',
    'issuer' => 'Imellipaat, Virtual',
    'date' => 'Jun 2025',
    'description' => 'Hands-on Python programming, covering core syntax, data structures, and application development.',
    'file' => 'protfilo_web\Course\Python Certification Course Onlineintellipaat certificate.pdf'
  ],
  [
    'title' => 'Python For Data Science Free Course',
    'issuer' => 'Imellipaat, Virtual',
    'date' => 'Jun 2025',
    'description' => 'Gained foundational skills in using Python for data analysis, manipulation, and visualization.',
    'file' => 'protfilo_web\Course\Python for Data Science Free Courseintellipaat certificate.pdf'
  ],
  [
    'title' => 'AI and Data Science',
    'issuer' => 'DRISHTI CPS IIT Indore, Virtual',
    'date' => 'Jun 2025 - Present',
    'description' => 'Studied artificial intelligence concepts and hands-on data science tools through lectures and coursework.',
    'file' => ''
  ],
  [
    'title' => 'SQL Course',
    'issuer' => 'Intellipaat, Virtual',
    'date' => 'Jun 2025 - Jul 2025',
    'description' => 'Comprehensive training in SQL including relational database management, advanced queries, and data analysis.',
    'file' => 'protfilo_web\Course\intellipaat-certificate.pdf'
  ],
  [
    'title' => 'Python Using AI Workshop',
    'issuer' => 'AI For Techies, Virtual',
    'date' => 'Jun 2025',
    'description' => 'Learned to develop interactive visualizations, debug code efficiently, and apply AI tools using Python.',
    'file' => 'protfilo_web\Course\TejjoshiAiwithpythonWORKSHOP.pdf'
  ],
  [
    'title' => 'Tata Cybersecurity Security Analyst Job Simulation',
    'issuer' => 'Forage, Virtual',
    'date' => 'May 2025',
    'description' => 'Completed practical simulation of cybersecurity tasks, focusing on identity and access management and consulting.',
    'file' => 'protfilo_web\Course\tejjoshicybersecurityCOURSE.pdf'
  ],
  [
    'title' => 'Operating System – Networking Focus',
    'issuer' => 'Networking Academy, Virtual',
    'date' => 'Oct 2024',
    'description' => 'Explored OS-level networking, systems configuration, and core protocols for secure communications.',
    'file' => 'protfilo_web\Course\tejjoshioperatingsystemCOURSE.pdf'
  ],
  [
    'title' => 'Data Analytics',
    'issuer' => 'Natacad, Virtual',
    'date' => 'Mar 2024',
    'description' => 'Completed a 20-day course on data cleaning, visualization, and statistical analysis using Python and Excel.',
    'file' => 'protfilo_web\Course\TejjoshidatascienceCOURSE.pdf'
  ]
];

$projects = [
  [
    'title' => 'Tej Joshi – Personal Portfolio Website',
    'duration' => 'Jun 2025 - Jul 2025',
    'description' => 'Launched a mobile-first portfolio site using PHP, HTML, Tailwind CSS, and JavaScript. Features real-time project galleries, testimonials, and secure contact, presenting skills and work with clean UI.',
    'link' => 'https://github.com/Tejjosh/Protifiloweb'
  ],
  [
    'title' => 'Animz Max – Anime-Inspired Clothing Brand',
    'duration' => 'May 2025 - Present',
    'description' => 'Developed an eCommerce site for an anime fashion brand with responsive Tailwind CSS, custom filtering, secure authentication, admin dashboards, and real-time updates for a seamless user experience.',
    'link' => 'https://github.com/Tejjosh/Animz-max'
  ],
  [
    'title' => 'TockWise Time Tracker Software',
    'duration' => 'May 2025 - Jun 2025',
    'description' => 'Created a cross-platform desktop time tracker in Python, featuring session management, idle detection, analytics dashboard, and secure data handling for productivity insights.',
    'link' => 'https://github.com/Tejjosh/Tock_Wise'
  ],
  [
    'title' => 'Hydrox – Smart Water Irrigation System',
    'duration' => 'Dec 2024 - Jan 2025',
    'description' => 'Built an IoT-driven irrigation system with Bluetooth automation, real-time moisture monitoring, and Python Flask dashboard for analytics and scheduling to optimize water use in agriculture.',
    'link' => 'https://github.com/Tejjosh/Hydrox'
  ],
  [
    'title' => 'Vidyut – Blockchain-Based Data Management System',
    'duration' => 'Sep 2024 - Nov 2024',
    'description' => 'Developed a data platform using Ethereum smart contracts and React UI, ensuring data integrity, transparent audits, and tamper-proof storage for sensitive assets.',
    'link' => 'https://github.com/Tejjosh/vidyut'
  ],
  [
    'title' => 'Royal Threads – Aesthetic Professional Clothing Brand',
    'duration' => 'Oct 2025 - Present',
    'description' => 'Founded a professional clothing brand with a modern aesthetic, offering collections that blend classic and contemporary styles, high-quality materials, and a refined online brand identity.',
    'link' => 'https://github.com/Tejjosh/Royal-Threads'
  ]
];
$skills = [
  'Programming Languages' => [
    'C',
    'C++',
    'Java',
    'JavaScript',
    'Python'
  ],
  'Web Technologies' => [
    'HTML5',
    'CSS',
    'PHP',
    'Tailwind CSS',
    'JavaScript',
    'Web Development'
  ],
  'Databases' => [
    'MySQL',
    'SQL',
    'DBMS'
  ],
  'Tools & Platforms' => [
    'Figma',
    'Flask',
    'GitHub',
    'Visual Studio',
    'VS Code',
    'Microsoft 365'
  ],
  'Data & Analysis' => [
    'MS Excel',
    'MS PowerPoint',
    'MS Word',
    'Risk Assessment',
    'Risk Management',
    'Data Analytics'
  ],
  'Google Workspace' => [
    'Google Forms',
    'Google Docs',
    'Google Drive',
    'Google Sheets'
  ],
  'Emerging Technologies' => [
    'Blockchain',
    'IoT',
    'Data Science',
    'Computer Networks',
    'Data Engineering',
    'Cloud Computing',
    'Cybersecurity',
    'Machine Learning',
    'Operating Systems'
  ],
  'Languages' => [
    'English (Fluent)',
    'Hindi (Fluent)',
    'Gujarati (Fluent)',
    'Japanese (Beginner)'
  ],
  'Soft Skills' => [
    'Adaptability',
    'Collaboration',
    'Teamwork',
    'Leadership',
    'Problem-Solving',
    'Critical Thinking',
    'Communication'
    ]
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
<header class="gradient-bg text-neutral shadow-lg sticky top-0 z-50">
  <div class="container mx-auto px-6 py-4">
    <div class="flex items-center justify-between">
      <div>
        <h1 class="text-3xl font-bold"><?php echo $personal_info['name']; ?></h1>
        <p class="text-white">Computer Science Engineer</p>
      </div>
      <nav class="hidden md:block">
        <ul class="flex space-x-8">
          <li><a href="#about" class="text-2xl hover:text-orange transition">About</a></li>
          <li><a href="#skills" class="text-2xl hover:text-orange transition">Skills</a></li>
          <li><a href="#projects" class="text-2xl hover:text-orange transition">Projects</a></li>
          <li><a href="#experience" class="text-2xl hover:text-orange transition">Experience</a></li>
          <li><a href="#contact" class="text-2xl hover:text-orange transition">Contact</a></li>
        </ul>
      </nav>
      <button class="md:hidden focus:outline-none" id="menu-toggle">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>
  </div>
  <!-- Mobile Menu -->
  <div class="md:hidden hidden bg-primary" id="mobile-menu">
    <div class="container mx-auto px-6 py-2">
      <ul class="space-y-2">
        <li><a href="#about" class="block py-2 hover:text-orange transition">About</a></li>
        <li><a href="#skills" class="block py-2 hover:text-orange transition">Skills</a></li>
        <li><a href="#projects" class="block py-2 hover:text-orange transition">Projects</a></li>
        <li><a href="#contact" class="block py-2 hover:text-orange transition">Contact</a></li>
        <li><a href="#experience" class="block py-2 hover:text-orange transition">Experience</a></li>
      </ul>
    </div>
  </div>
</header>

<!-- Hero Section -->
<section class="gradient-bg text-neutral py-16">
  <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
    <div class="md:w-1/2 mb-10 md:mb-0">
      <h1 class="text-4xl md:text-5xl font-bold mb-6">Hello, I'm <?php echo explode(' ', $personal_info['name'])[0]; ?></h1>
      <h2 class="text-2xl md:text-3xl font-semibold mb-4">Computer Science Engineer & Full Stack Developer</h2>
      <p class="text-xl mb-8"><?php echo $personal_info['objective']; ?></p>
      <div class="flex space-x-4">
        <a href="#contact" class="bg-neutral text-primary px-6 py-3 rounded-lg font-semibold hover:bg-accent hover:text-base transition">Contact Me</a>
        <a href="Tej_Joshi_CV.pdf" download class="bg-neutral text-primary px-6 py-3 rounded-lg font-semibold hover:bg-accent hover:text-base transition">Download CV</a>
      </div>
    </div>
    <div class="md:w-1/2 flex justify-center">
      <div class="relative">
        <div class="w-64 h-64 md:w-80 md:h-80 rounded-full bg-neutral bg-opacity-90 border-4 border-neutral border-opacity-30 flex items-center justify-center">
          <div class="w-60 h-60 md:w-72 md:h-72 rounded-full bg-neutral bg-opacity-90 border-4 border-neutral border-opacity-30 flex items-center justify-center">
            <div class="w-56 h-56 md:w-64 md:h-64 rounded-full profile-pic bg-cover bg-center bg-no-repeat shadow-xl"></div>
          </div>
        </div>
        <div class="absolute -bottom-4 -right-4 bg-base rounded-full p-4 shadow-xl flex items-center justify-center">
          <i class="fas fa-laptop-code text-yellow-400 text-2xl"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-16 bg-neutral">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-12 text-primary">About Me</h2>
    <div class="flex flex-col md:flex-row">

      <!-- Personal Info & Education -->
      <div class="md:w-1/2 mb-10 md:mb-0">
        <h3 class="text-2xl font-semibold mb-6 text-primary">Personal Info</h3>
        <div class="space-y-4">
          <?php foreach ($contact_info as $item): ?>
            <?php
              $brandIcons = ['github', 'linkedin'];
              $isBrand = in_array($item['icon'], $brandIcons);
              $iconClass = $isBrand ? 'fab' : 'fas';
            ?>
            <div class="flex items-start">
              <div class="mr-4 mt-1 text-primary w-6 flex justify-center">
                <i class="<?php echo $iconClass; ?> fa-<?php echo $item['icon']; ?>"></i>
              </div>
              <div>
                <?php if ($isBrand): ?>
                  <a href="<?php echo $item['text']; ?>" target="_blank" class="text-base hover:text-primary">
                    <?php echo ucfirst($item['icon']); ?>
                  </a>
                <?php else: ?>
                  <p class="text-base"><?php echo $item['text']; ?></p>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        
        <!-- Education -->
        <h3 class="text-2xl font-semibold mt-12 mb-6 text-primary">Education</h3>
        <div class="space-y-6">
          <?php foreach ($education as $edu): ?>
            <div class="bg-neutral p-5 rounded-lg shadow-sm">
              <h4 class="text-lg font-semibold text-base"><?php echo $edu['degree']; ?></h4>
              <div class="flex items-center text-primary mt-1">
                <i class="fas fa-university mr-2"></i>
                <span><?php echo $edu['institution']; ?></span>
              </div>
              <div class="flex items-center text-primary text-sm mt-2">
                <i class="fas fa-calendar-alt mr-2"></i>
                <span><?php echo $edu['duration']; ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Professional Summary & Certifications -->
      <div class="md:w-1/2 md:pl-12">
        <h3 class="text-2xl font-semibold mb-6 text-primary">Professional Summary</h3>
        <p class="text-base leading-relaxed mb-10"><?php echo $personal_info['objective']; ?></p>
      </div>
    </div>
    <h3 class="text-2xl font-semibold mb-6 text-primary px-6">Certifications</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 px-6">
  <?php foreach ($certifications as $cert): ?>
    <div class="border-l-4 border-primary pl-4 bg-neutral">
      <h4 class="font-semibold text-base"><?php echo $cert['title']; ?></h4>
      <div class="flex flex-wrap items-center text-primary text-sm mt-1">
        <span><?php echo $cert['issuer']; ?></span>
        <span class="mx-2">•</span>
        <span><?php echo $cert['date']; ?></span>
      </div>
      <p class="text-base mt-2 text-sm"><?php echo $cert['description']; ?></p>
      <?php if (!empty($cert['file'])): ?>
        <a href="/path/to/certificates/<?php echo urlencode($cert['file']); ?>" target="_blank"
           class="inline-block mt-4 bg-orange text-neutral px-4 py-2 rounded hover:bg-primary hover:text-neutral transition font-semibold">
          View Certificate
        </a>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>

</section>

<!-- Work Experience Section -->
<section id="experience" class="py-16 bg-neutral">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-12 text-primary">Work Experience</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      <?php foreach ($experiences as $index => $exp): ?>
        <div class="bg-neutral p-6 rounded-lg shadow-md relative overflow-hidden">
          <?php if ($index === 0): ?>
            <div class="absolute top-0 right-0 bg-primary text-base px-3 py-1 text-xs font-bold rounded-bl-lg shadow-md">
              Latest
            </div>
          <?php endif; ?>
          <button onclick="toggleExperience(<?php echo $index; ?>)" class="w-full text-left">
            <h3 class="text-xl font-semibold text-base flex justify-between items-center">
              <?php echo $exp['position']; ?>
              <i class="fas fa-chevron-down text-sm ml-2 transition-transform duration-300" id="arrow-<?php echo $index; ?>"></i>
            </h3>
            <div class="flex flex-wrap items-center text-primary mt-1 text-sm">
              <i class="fas fa-building mr-2"></i>
              <span><?php echo $exp['company']; ?></span>
              <span class="mx-2">•</span>
              <i class="fas fa-map-marker-alt mr-2"></i>
              <span><?php echo $exp['location']; ?></span>
            </div>
            <div class="flex items-center text-primary text-sm mt-2">
              <i class="fas fa-calendar-alt mr-2"></i>
              <span><?php echo $exp['duration']; ?></span>
            </div>
          </button>
          <div id="exp-desc-<?php echo $index; ?>" class="mt-4 text-base text-sm hidden transition duration-300">
            <?php echo $exp['description']; ?>
          </div>
          <!-- Download Certificate Button -->
          <?php if (!empty($exp['certificate'])): ?>
            <div class="mt-4">
              <a href="<?php echo $exp['certificate']; ?>" download target="_blank"
                class="inline-block bg-orange text-base px-4 py-2 rounded hover:bg-primary hover:text-neutral transition">
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
<section id="skills" class="py-16 bg-neutral">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-12 text-primary">Technical Skills</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($skills as $category => $items): ?>
      <div class="bg-neutral p-6 rounded-xl shadow-md hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-4 text-primary"><?php echo $category; ?></h3>
        <ul class="space-y-2">
          <?php foreach ($items as $item): ?>
          <li class="flex items-center">
            <i class="fas fa-check-circle text-orange mr-3"></i>
            <span class="text-base"><?php echo $item; ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-16 bg-neutral">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-12 text-primary">Projects</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($projects as $proj): ?>
      <div class="project-card bg-neutral p-6 rounded-xl shadow-md transition transform hover:-translate-y-1 hover:bg-accent">
        <h3 class="text-xl font-bold text-base mb-2"><?php echo $proj['title']; ?></h3>
        <p class="text-sm text-primary mb-2"><?php echo $proj['duration']; ?></p>
        <p class="text-base mb-4"><?php echo $proj['description']; ?></p>
        <a href="<?php echo $proj['link']; ?>" target="_blank" class="bg-orange text-neutral px-4 py-2 rounded-lg inline-block mt-2 hover:bg-primary hover:text-neutral transition">View Project</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-16 bg-neutral">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-primary mb-8">Contact Me</h2>
    <p class="text-lg text-base mb-6">Interested in working together or have questions? Let’s connect!</p>
    <!-- Phone and Email as text -->
    <div class="flex flex-col items-center space-y-4 mb-6">
      <?php foreach ($contact_info as $item): ?>
      <?php if ($item['icon'] === 'envelope' || $item['icon'] === 'phone'): ?>
        <div class="flex items-center space-x-2 text-primary text-lg">
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
        $brandIcons = ['github', 'linkedin'];
        $isBrand = in_array($item['icon'], $brandIcons);
        $iconClass = $isBrand ? 'fab' : 'fas';
      ?>
      <?php if ($item['icon'] !== 'envelope' && $item['icon'] !== 'phone'): ?>
        <a href="<?php echo $item['text']; ?>" class="text-primary hover:text-accent text-3xl" target="_blank" rel="noopener noreferrer">
          <i class="<?php echo $iconClass; ?> fa-<?php echo $item['icon']; ?>"></i>
        </a>
      <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-neutral text-center py-6">
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
