<?php
require_once __DIR__ . '/data.php';
?>
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
          base:    "#050308",
          panel:   "#0d0a16",
          neutral: "#e7e4ee",
          primary: "#8b2fd6",
          violet:  "#a855f7",
          magenta: "#ff2e6d",
          cyan:    "#22d3ee",
          muted:   "#9691a8",
        },
        fontFamily: {
          display: ["'Orbitron'", "sans-serif"],
          body: ["'Space Grotesk'", "sans-serif"],
        }
      }
    }
  }
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<style>
  :root{
    --bg:#050308; --panel:#0d0a16; --violet:#a855f7; --violet-dim:#6d28d9;
    --magenta:#ff2e6d; --cyan:#22d3ee; --text:#e7e4ee; --muted:#9691a8;
  }
  html{scroll-behavior:smooth;}
  body{
    font-family:'Space Grotesk', sans-serif;
    background:var(--bg);
    color:var(--text);
  }
  h1,h2,h3,.font-display{font-family:'Orbitron', sans-serif;}

  /* ---------- Ambient background: drifting glow blobs + grid ---------- */
  .ambient-bg{
    position:fixed; inset:0; z-index:0; overflow:hidden; pointer-events:none;
    background:
      radial-gradient(ellipse 900px 600px at 12% -5%, rgba(168,85,247,0.28), transparent 60%),
      radial-gradient(ellipse 800px 600px at 90% 10%, rgba(255,46,109,0.18), transparent 60%),
      radial-gradient(ellipse 700px 700px at 50% 100%, rgba(34,211,238,0.10), transparent 60%),
      #050308;
  }
  .ambient-bg::before{
    content:""; position:absolute; inset:-2px;
    background-image:
      linear-gradient(rgba(168,85,247,0.06) 1px, transparent 1px),
      linear-gradient(90deg, rgba(168,85,247,0.06) 1px, transparent 1px);
    background-size:48px 48px;
    mask-image:radial-gradient(ellipse 80% 60% at 50% 20%, black 40%, transparent 100%);
  }
  .blob{position:absolute; border-radius:9999px; filter:blur(70px); opacity:0.55; animation:drift 22s ease-in-out infinite;}
  .blob-1{width:420px; height:420px; background:var(--violet); top:-10%; left:-8%;}
  .blob-2{width:380px; height:380px; background:var(--magenta); bottom:-12%; right:-6%; animation-duration:26s; animation-delay:-6s;}
  .blob-3{width:320px; height:320px; background:var(--cyan); top:40%; left:60%; opacity:0.28; animation-duration:30s; animation-delay:-12s;}
  @keyframes drift{
    0%,100%{transform:translate(0,0) scale(1);}
    50%{transform:translate(40px,-30px) scale(1.15);}
  }

  main, header, footer{position:relative; z-index:1;}

  /* ---------- Glass cards / signature surface ---------- */
  .glass{
    background:linear-gradient(180deg, rgba(255,255,255,0.045), rgba(255,255,255,0.015));
    border:1px solid rgba(168,85,247,0.18);
    backdrop-filter:blur(14px);
    -webkit-backdrop-filter:blur(14px);
    box-shadow:0 8px 30px rgba(0,0,0,0.35);
  }
  .glass-hover{transition:transform .35s ease, box-shadow .35s ease, border-color .35s ease;}
  .glass-hover:hover{
    transform:translateY(-6px);
    border-color:rgba(168,85,247,0.55);
    box-shadow:0 18px 50px rgba(168,85,247,0.18), 0 0 0 1px rgba(168,85,247,0.15) inset;
  }

  .grad-text{
    background:linear-gradient(90deg, var(--violet), var(--magenta) 55%, var(--cyan));
    -webkit-background-clip:text; background-clip:text; color:transparent;
  }
  .section-eyebrow{
    letter-spacing:0.35em; font-size:0.7rem; color:var(--cyan); font-weight:600;
  }
  .divider-glow{
    height:2px; width:64px; margin:0 auto;
    background:linear-gradient(90deg, var(--violet), var(--magenta));
    box-shadow:0 0 12px rgba(168,85,247,0.8);
  }

  /* Neon buttons */
  .btn-neon{
    position:relative; overflow:hidden; font-family:'Orbitron',sans-serif; font-weight:600;
    letter-spacing:0.04em;
    background:linear-gradient(90deg, var(--violet), var(--magenta));
    color:#0a0710; transition:transform .25s ease, box-shadow .25s ease;
    box-shadow:0 0 20px rgba(168,85,247,0.35);
  }
  .btn-neon:hover{ transform:translateY(-2px); box-shadow:0 8px 30px rgba(255,46,109,0.45); }
  .btn-ghost{
    border:1px solid rgba(168,85,247,0.4); color:var(--text);
    background:rgba(168,85,247,0.06); transition:all .25s ease;
    font-family:'Orbitron',sans-serif; letter-spacing:0.04em;
  }
  .btn-ghost:hover{ border-color:var(--cyan); box-shadow:0 0 20px rgba(34,211,238,0.3); }

  /* ---------- Scroll reveal ---------- */
  .reveal{ opacity:0; transform:translateY(28px); transition:opacity .7s ease, transform .7s ease; }
  .reveal.in-view{ opacity:1; transform:translateY(0); }

  /* ---------- Header ---------- */
  #site-header{
    background:rgba(5,3,8,0.55);
    backdrop-filter:blur(16px); -webkit-backdrop-filter:blur(16px);
    border-bottom:1px solid rgba(168,85,247,0.15);
  }
  .nav-link{position:relative; color:var(--muted); transition:color .25s ease;}
  .nav-link::after{
    content:""; position:absolute; left:0; bottom:-4px; width:0%; height:2px;
    background:linear-gradient(90deg, var(--violet), var(--cyan));
    transition:width .25s ease;
  }
  .nav-link:hover{color:var(--text);}
  .nav-link:hover::after{width:100%;}

  /* ---------- Hero video ---------- */
  #hero{ min-height:92vh; display:flex; align-items:center; }
  .hero-video-frame{
    position:relative; border-radius:1.25rem; overflow:hidden;
    border:1px solid rgba(168,85,247,0.35);
    box-shadow:0 0 0 1px rgba(168,85,247,0.1), 0 30px 80px rgba(168,85,247,0.25);
  }
  .hero-video-frame video{ width:100%; height:100%; object-fit:cover; display:block; }
  .hero-video-frame::after{
    content:""; position:absolute; inset:0;
    background:linear-gradient(180deg, rgba(5,3,8,0) 55%, rgba(5,3,8,0.75) 100%);
    pointer-events:none;
  }
  .hero-video-tag{
    position:absolute; top:14px; left:14px; z-index:2;
    font-family:'Orbitron',sans-serif; font-size:0.65rem; letter-spacing:0.15em;
    padding:6px 12px; border-radius:999px; color:var(--cyan);
    background:rgba(5,3,8,0.6); border:1px solid rgba(34,211,238,0.4);
  }
  .hero-video-tag .dot{
    display:inline-block; width:6px; height:6px; border-radius:999px; background:var(--magenta);
    margin-right:6px; animation:pulse-dot 1.4s ease-in-out infinite;
  }
  @keyframes pulse-dot{ 0%,100%{opacity:1;} 50%{opacity:0.3;} }

  .typewriter-caret{ animation:cursor-blink 1s steps(1) infinite; color:var(--cyan); }
  @keyframes cursor-blink{ 0%,49%{opacity:1;} 50%,100%{opacity:0;} }

  /* ---------- Boot transition overlay ---------- */
  #pc-transition-overlay{ transition:opacity .25s ease; }
  #pc-transition-overlay.active{ opacity:1; pointer-events:all; }
  #pc-transition-overlay.active #pc-transition-screen{ transform:scale(1); opacity:1; transition:transform .6s cubic-bezier(.5,0,.2,1), opacity .3s ease; }
  #pc-transition-overlay.expand #pc-transition-screen{ transform:scale(42); opacity:1; transition:transform .8s cubic-bezier(.6,0,.3,1), opacity .4s ease; }
  #pc-transition-overlay.active .boot-text{ opacity:0.85; }
  #pc-transition-overlay.expand .boot-text{ opacity:0; transition:opacity .3s ease; }

  /* ---------- Accordion arrow ---------- */
  .rotate-180{ transform:rotate(180deg); }

  /* ---------- Certification / project / skill cards ---------- */
  .chip{
    display:inline-flex; align-items:center; gap:6px;
    background:rgba(168,85,247,0.08); border:1px solid rgba(168,85,247,0.25);
    color:var(--text); border-radius:999px; padding:6px 12px; font-size:0.8rem;
  }

  /* ---------- Contact form ---------- */
  .field{
    background:rgba(255,255,255,0.03);
    border:1px solid rgba(168,85,247,0.25);
    color:var(--text);
    transition:border-color .2s ease, box-shadow .2s ease, background .2s ease;
  }
  .field::placeholder{ color:#7c7690; }
  .field:focus{
    outline:none; border-color:var(--cyan);
    box-shadow:0 0 0 3px rgba(34,211,238,0.15);
    background:rgba(255,255,255,0.05);
  }
  #contact-status{ min-height:1.5rem; }

  /* ---------- AI Chat Widget ---------- */
  #ai-chat-toggle{
    box-shadow:0 0 0 0 rgba(168,85,247,0.55);
    animation:chat-pulse 2.5s ease-out infinite;
    background:linear-gradient(135deg, var(--violet), var(--magenta));
  }
  @keyframes chat-pulse{
    0%{ box-shadow:0 0 0 0 rgba(168,85,247,0.55); }
    70%{ box-shadow:0 0 0 16px rgba(168,85,247,0); }
    100%{ box-shadow:0 0 0 0 rgba(168,85,247,0); }
  }
  #ai-chat-panel{
    transform:translateY(16px) scale(.98); opacity:0; pointer-events:none;
    transition:all .22s ease;
  }
  #ai-chat-panel.open{ transform:translateY(0) scale(1); opacity:1; pointer-events:all; }
  .chat-bubble-user{ background:linear-gradient(135deg, var(--magenta), #b0225e); color:#fff; border-radius:14px 14px 2px 14px; }
  .chat-bubble-bot{ background:rgba(168,85,247,0.14); border:1px solid rgba(168,85,247,0.3); color:var(--text); border-radius:14px 14px 14px 2px; }
  @keyframes typing-dot{ 0%,60%,100%{ transform:translateY(0); opacity:.5; } 30%{ transform:translateY(-4px); opacity:1; } }
  .typing-dot{ animation:typing-dot 1.2s ease-in-out infinite; }
  .typing-dot:nth-child(2){ animation-delay:.15s; }
  .typing-dot:nth-child(3){ animation-delay:.3s; }

  ::-webkit-scrollbar{ width:10px; }
  ::-webkit-scrollbar-track{ background:#050308; }
  ::-webkit-scrollbar-thumb{ background:linear-gradient(var(--violet), var(--magenta)); border-radius:999px; }

  @media (prefers-reduced-motion: reduce){
    .blob, .reveal, .typewriter-caret, #ai-chat-toggle{ animation:none !important; transition:none !important; }
  }
</style>
</head>
<body class="font-body">

<div class="ambient-bg">
  <div class="blob blob-1"></div>
  <div class="blob blob-2"></div>
  <div class="blob blob-3"></div>
</div>

<!-- Header/Navigation -->
<header id="site-header" class="sticky top-0 z-50">
  <div class="container mx-auto px-6 py-4">
    <div class="flex items-center justify-between">
      <div>
        <h1 class="text-2xl font-display font-bold grad-text"><?php echo $personal_info['name']; ?></h1>
        <p class="text-muted text-xs tracking-widest uppercase">Computer Science Engineer</p>
      </div>
      <nav class="hidden md:block">
        <ul class="flex space-x-8 text-sm font-medium">
          <li><a href="#about" class="nav-link">About</a></li>
          <li><a href="#skills" class="nav-link">Skills</a></li>
          <li><a href="#projects" class="nav-link">Projects</a></li>
          <li><a href="#experience" class="nav-link">Experience</a></li>
          <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
      </nav>
      <button class="md:hidden focus:outline-none text-neutral" id="menu-toggle">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>
  </div>
  <!-- Mobile Menu -->
  <div class="md:hidden hidden glass" id="mobile-menu">
    <div class="container mx-auto px-6 py-2">
      <ul class="space-y-2 text-sm">
        <li><a href="#about" class="block py-2 nav-link">About</a></li>
        <li><a href="#skills" class="block py-2 nav-link">Skills</a></li>
        <li><a href="#projects" class="block py-2 nav-link">Projects</a></li>
        <li><a href="#experience" class="block py-2 nav-link">Experience</a></li>
        <li><a href="#contact" class="block py-2 nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</header>

<!-- Hero Section -->
<section id="hero" class="relative">
  <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center py-16">
    <div class="reveal">
      <p class="section-eyebrow mb-4">// FULL STACK DEVELOPER · VADODARA</p>
      <h1 class="text-4xl md:text-6xl font-display font-black leading-tight mb-6">
        Hello, I'm<br><span class="grad-text"><?php echo explode(' ', $personal_info['name'])[0]; ?></span>
      </h1>
      <p class="text-lg text-muted mb-8 max-w-md">
        <?php echo $personal_info['greeting']; ?>
      </p>
      <div class="flex flex-wrap gap-4">
        <a href="#contact" class="btn-neon px-6 py-3 rounded-lg inline-block">Contact Me</a>
        <a href="assets/Tej_Joshi_CV.pdf" download class="btn-ghost px-6 py-3 rounded-lg inline-block">Download CV</a>
        <button id="boot-into-projects" class="btn-ghost px-6 py-3 rounded-lg inline-flex items-center gap-2">
          <i class="fas fa-bolt"></i> Enter Projects
        </button>
      </div>
    </div>

    <div class="reveal">
      <div class="hero-video-frame aspect-video">
        <span class="hero-video-tag"><span class="dot"></span>LIVE RIG</span>
        <video
          autoplay muted loop playsinline
          poster="assets/hero-pc-poster.jpg"
          aria-label="Gaming PC assembling then exploding into parts, looping">
          <source src="assets/god_s_eye_from_fast_and_furiou.mp4" type="video/mp4">
        </video>
      </div>
      <p class="text-center text-xs text-muted mt-3 tracking-widest uppercase">assembled <span class="text-magenta">→</span> exploded <span class="text-cyan">→</span> loop</p>
    </div>
  </div>
</section>

<!-- Boot / transition overlay -->
<div id="pc-transition-overlay" class="fixed inset-0 z-[100] opacity-0 pointer-events-none flex items-center justify-center" style="background:#020104;">
  <div id="pc-transition-screen" class="rounded-md" style="width:120px;height:80px; transform:scale(.4); opacity:0; box-shadow:0 0 80px 14px rgba(168,85,247,0.55); background:radial-gradient(circle at 50% 40%, #ff2e6d, #6d28d9 60%, #050308 100%);"></div>
  <div class="boot-text absolute font-display text-cyan tracking-widest text-sm opacity-0" style="bottom:12%;">BOOTING PROJECTS.EXE …</div>
</div>

<!-- About Section -->
<section id="about" class="py-24">
  <div class="container mx-auto px-6">
    <div class="text-center mb-16 reveal">
      <p class="section-eyebrow mb-3">// GET TO KNOW ME</p>
      <h2 class="text-3xl md:text-4xl font-display font-bold grad-text mb-4">About Me</h2>
      <div class="divider-glow"></div>
    </div>

    <div class="flex flex-col md:flex-row gap-10">

      <!-- Personal Info & Education -->
      <div class="md:w-1/2 reveal">
        <div class="glass rounded-2xl p-6 mb-8">
          <h3 class="text-lg font-display font-semibold mb-6 text-cyan">Personal Info</h3>
          <div class="space-y-4">
            <?php foreach ($contact_info as $item): ?>
              <?php
                $brandIcons = ['github', 'linkedin'];
                $isBrand = in_array($item['icon'], $brandIcons);
                $iconClass = $isBrand ? 'fab' : 'fas';
              ?>
              <div class="flex items-start">
                <div class="mr-4 mt-1 text-violet w-6 flex justify-center">
                  <i class="<?php echo $iconClass; ?> fa-<?php echo $item['icon']; ?>"></i>
                </div>
                <div>
                  <?php if ($isBrand): ?>
                    <a href="<?php echo $item['link']; ?>" target="_blank" class="text-neutral hover:text-cyan transition">
                      <?php echo ucfirst($item['icon']); ?>
                    </a>
                  <?php else: ?>
                    <p class="text-neutral"><?php echo $item['text']; ?></p>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Education -->
        <h3 class="text-lg font-display font-semibold mb-6 text-cyan">Education</h3>
        <div class="space-y-5">
          <?php foreach ($education as $edu): ?>
            <div class="glass glass-hover rounded-xl p-5">
              <h4 class="font-semibold text-neutral"><?php echo $edu['degree']; ?></h4>
              <div class="flex items-center text-muted mt-1 text-sm">
                <i class="fas fa-university mr-2 text-violet"></i>
                <span><?php echo $edu['institution']; ?></span>
              </div>
              <div class="flex items-center text-muted text-xs mt-2">
                <i class="fas fa-calendar-alt mr-2 text-magenta"></i>
                <span><?php echo $edu['duration']; ?></span>
              </div>
              <?php if (!empty($edu['description'])): ?>
                <p class="text-sm text-neutral mt-2"><?php echo $edu['description']; ?></p>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Professional Summary & Certifications -->
      <div class="md:w-1/2 reveal">
        <div class="glass rounded-2xl p-6 mb-8">
          <h3 class="text-lg font-display font-semibold mb-4 text-cyan">Professional Summary</h3>
          <p class="text-neutral leading-relaxed"><?php echo $personal_info['summary']; ?></p>
        </div>

        <h3 class="text-lg font-display font-semibold mb-6 text-cyan">Certifications</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <?php foreach ($certifications as $cert): ?>
            <div class="glass glass-hover rounded-xl p-4 border-l-2" style="border-left-color:var(--magenta);">
              <h4 class="font-semibold text-sm text-neutral"><?php echo $cert['title']; ?></h4>
              <div class="flex flex-wrap items-center text-muted text-xs mt-1 gap-1">
                <span><?php echo $cert['issuer']; ?></span>
                <?php if (!empty($cert['issuer']) && !empty($cert['date'])): ?><span>•</span><?php endif; ?>
                <span><?php echo $cert['date']; ?></span>
              </div>
              <?php if (!empty($cert['description'])): ?>
                <p class="text-xs text-neutral mt-2"><?php echo $cert['description']; ?></p>
              <?php endif; ?>
              <?php if (!empty($cert['file'])): ?>
                <a href="<?php echo $cert['file']; ?>" target="_blank"
                class="inline-block mt-3 text-xs btn-neon px-3 py-1.5 rounded-full font-semibold">
                View Certificate
              </a>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Work Experience Section -->
<section id="experience" class="py-24">
  <div class="container mx-auto px-6">
    <div class="text-center mb-16 reveal">
      <p class="section-eyebrow mb-3">// CAREER TIMELINE</p>
      <h2 class="text-3xl md:text-4xl font-display font-bold grad-text mb-4">Work Experience</h2>
      <div class="divider-glow"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <?php foreach ($experiences as $index => $exp): ?>
        <div class="glass glass-hover rounded-2xl p-6 relative overflow-hidden reveal">
          <?php if ($index === 0): ?>
            <div class="absolute top-0 right-0 btn-neon text-xs font-bold px-3 py-1 rounded-bl-xl">
              LATEST
            </div>
          <?php endif; ?>
          <button onclick="toggleExperience(<?php echo $index; ?>)" class="w-full text-left">
            <h3 class="text-lg font-display font-semibold text-neutral flex justify-between items-center pr-4">
              <?php echo $exp['position']; ?>
              <i class="fas fa-chevron-down text-sm ml-2 text-cyan transition-transform duration-300" id="arrow-<?php echo $index; ?>"></i>
            </h3>
            <div class="flex flex-wrap items-center text-muted mt-2 text-sm">
              <i class="fas fa-building mr-2 text-violet"></i>
              <span><?php echo $exp['company']; ?></span>
              <span class="mx-2">•</span>
              <i class="fas fa-map-marker-alt mr-2 text-magenta"></i>
              <span><?php echo $exp['location']; ?></span>
            </div>
            <div class="flex items-center text-muted text-sm mt-2">
              <i class="fas fa-calendar-alt mr-2 text-cyan"></i>
              <span><?php echo $exp['duration']; ?></span>
            </div>
          </button>
          <div id="exp-desc-<?php echo $index; ?>" class="mt-4 text-sm text-neutral hidden transition duration-300">
            <?php echo $exp['description']; ?>
          </div>
          <?php if (!empty($exp['certificate'])): ?>
            <div class="mt-4">
              <a href="<?php echo $exp['certificate']; ?>" download target="_blank"
                class="inline-block btn-ghost text-xs px-4 py-2 rounded-lg">
                Download Certificate
              </a>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-24">
  <div class="container mx-auto px-6">
    <div class="text-center mb-16 reveal">
      <p class="section-eyebrow mb-3">// TOOLKIT</p>
      <h2 class="text-3xl md:text-4xl font-display font-bold grad-text mb-4">Technical Skills</h2>
      <div class="divider-glow"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($skills as $category => $items): ?>
      <div class="glass glass-hover rounded-2xl p-6 reveal">
        <h3 class="font-display font-semibold mb-4 text-cyan"><?php echo $category; ?></h3>
        <div class="flex flex-wrap gap-2">
          <?php foreach ($items as $item): ?>
            <span class="chip"><i class="fas fa-check-circle text-magenta text-xs"></i><?php echo $item; ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-24">
  <div class="container mx-auto px-6">
    <div class="text-center mb-16 reveal">
      <p class="section-eyebrow mb-3">// BUILT & SHIPPED</p>
      <h2 class="text-3xl md:text-4xl font-display font-bold grad-text mb-4">Projects</h2>
      <div class="divider-glow"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($projects as $proj): ?>
      <div class="glass glass-hover rounded-2xl p-6 reveal">
        <h3 class="text-lg font-display font-bold text-neutral mb-2"><?php echo $proj['title']; ?></h3>
        <p class="text-xs text-cyan tracking-widest uppercase mb-3"><?php echo $proj['duration']; ?></p>
        <p class="text-sm text-neutral mb-5"><?php echo $proj['description']; ?></p>
        <?php if (!empty($proj['link'])): ?>
          <a href="<?php echo $proj['link']; ?>" target="_blank" class="btn-neon px-4 py-2 rounded-lg inline-block text-xs font-semibold">View Project</a>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-24">
  <div class="container mx-auto px-6">
    <div class="text-center mb-16 reveal">
      <p class="section-eyebrow mb-3">// LET'S BUILD SOMETHING</p>
      <h2 class="text-3xl md:text-4xl font-display font-bold grad-text mb-4">Contact Me</h2>
      <div class="divider-glow"></div>
      <p class="text-muted mt-4 max-w-lg mx-auto">Interested in working together or have questions? Send a message directly — it lands straight in my inbox.</p>
    </div>

    <div class="flex flex-col lg:flex-row gap-10 max-w-5xl mx-auto">

      <!-- Direct contact info -->
      <div class="lg:w-2/5 reveal">
        <div class="glass rounded-2xl p-6 h-full">
          <h3 class="font-display font-semibold text-cyan mb-6">Direct Lines</h3>
          <div class="space-y-5">
            <?php foreach ($contact_info as $item): ?>
              <?php if ($item['icon'] === 'envelope' || $item['icon'] === 'phone'): ?>
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background:rgba(168,85,247,0.12); border:1px solid rgba(168,85,247,0.3);">
                    <i class="fas fa-<?php echo $item['icon']; ?> text-violet"></i>
                  </div>
                  <span class="text-neutral text-sm"><?php echo $item['text']; ?></span>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>

          <div class="flex gap-4 mt-8">
            <?php foreach ($contact_info as $item): ?>
              <?php
                $brandIcons = ['github', 'linkedin'];
                $isBrand = in_array($item['icon'], $brandIcons);
                $iconClass = $isBrand ? 'fab' : 'fas';
              ?>
              <?php if ($item['icon'] !== 'envelope' && $item['icon'] !== 'phone'): ?>
                <a href="<?php echo $item['link']; ?>" target="_blank" rel="noopener noreferrer"
                class="w-11 h-11 rounded-full flex items-center justify-center text-lg glass glass-hover text-neutral">
                <i class="<?php echo $iconClass; ?> fa-<?php echo $item['icon']; ?>"></i>
              </a>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Contact form -->
      <div class="lg:w-3/5 reveal">
        <form id="contact-form" class="glass rounded-2xl p-6 md:p-8 space-y-5">
          <div>
            <label for="cf-name" class="block text-xs uppercase tracking-widest text-muted mb-2">Name</label>
            <input id="cf-name" name="name" type="text" required maxlength="100"
              class="field w-full rounded-lg px-4 py-3 text-sm" placeholder="Your name" />
          </div>
          <div>
            <label for="cf-email" class="block text-xs uppercase tracking-widest text-muted mb-2">Email</label>
            <input id="cf-email" name="email" type="email" required
              class="field w-full rounded-lg px-4 py-3 text-sm" placeholder="you@example.com" />
          </div>
          <div>
            <label for="cf-message" class="block text-xs uppercase tracking-widest text-muted mb-2">Message</label>
            <textarea id="cf-message" name="message" rows="5" required maxlength="3000"
              class="field w-full rounded-lg px-4 py-3 text-sm resize-none" placeholder="Tell me about your project or opportunity…"></textarea>
          </div>
          <div class="flex items-center justify-between gap-4">
            <button type="submit" id="cf-submit" class="btn-neon px-6 py-3 rounded-lg inline-flex items-center gap-2">
              <i class="fas fa-paper-plane"></i> <span>Send Message</span>
            </button>
            <div id="contact-status" class="text-sm"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="py-8 border-t" style="border-color:rgba(168,85,247,0.15);">
  <p class="text-center text-muted text-sm">&copy; <?php echo date("Y"); ?> <?php echo $personal_info['name']; ?>. All rights reserved.</p>
</footer>

<!-- ===================== AI Chat Widget ===================== -->
<div id="ai-chat-widget" class="fixed bottom-6 right-6 z-[90] flex flex-col items-end">
  <div id="ai-chat-panel" class="w-80 sm:w-96 h-[28rem] rounded-2xl shadow-2xl mb-4 flex flex-col overflow-hidden glass">
    <div class="px-4 py-3 flex items-center justify-between" style="background:linear-gradient(90deg, rgba(168,85,247,0.25), rgba(255,46,109,0.2));">
      <div class="flex items-center gap-2 text-neutral">
        <i class="fas fa-robot text-cyan"></i>
        <span class="font-display font-semibold text-sm">Ask AI about Tej</span>
      </div>
      <button id="ai-chat-close" class="text-neutral hover:text-magenta"><i class="fas fa-times"></i></button>
    </div>
    <div id="ai-chat-messages" class="flex-1 overflow-y-auto px-4 py-3 space-y-3 text-sm"></div>
    <form id="ai-chat-form" class="flex items-center gap-2 border-t p-3" style="border-color:rgba(168,85,247,0.15);">
      <input id="ai-chat-input" type="text" autocomplete="off" placeholder="Ask about projects, skills, experience…"
        class="field flex-1 text-sm rounded-full px-4 py-2" />
      <button type="submit" class="btn-neon w-9 h-9 rounded-full flex items-center justify-center">
        <i class="fas fa-paper-plane text-sm"></i>
      </button>
    </form>
  </div>

  <button id="ai-chat-toggle" class="text-neutral w-16 h-16 rounded-full shadow-xl flex items-center justify-center">
    <i class="fas fa-comment-dots text-2xl"></i>
  </button>
</div>

<script>
/* ---------- Mobile nav ---------- */
const toggleBtn = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
toggleBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));

/* ---------- Experience accordion ---------- */
function toggleExperience(index) {
  const desc = document.getElementById(`exp-desc-${index}`);
  const arrow = document.getElementById(`arrow-${index}`);
  desc.classList.toggle("hidden");
  arrow.classList.toggle("rotate-180");
}

/* ---------- Scroll reveal ---------- */
const revealEls = document.querySelectorAll('.reveal');
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('in-view');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.15 });
revealEls.forEach(el => revealObserver.observe(el));

/* ---------- Boot transition into Projects ---------- */
const bootBtn = document.getElementById('boot-into-projects');
const overlay = document.getElementById('pc-transition-overlay');
const projectsSection = document.getElementById('projects');

function bootIntoProjects() {
  overlay.classList.remove('opacity-0', 'pointer-events-none');
  overlay.classList.add('active');
  setTimeout(() => {
    overlay.classList.add('expand');
    setTimeout(() => {
      projectsSection.scrollIntoView({ behavior: 'instant', block: 'start' });
    }, 350);
  }, 550);
  setTimeout(() => {
    overlay.classList.remove('active', 'expand');
    overlay.classList.add('opacity-0', 'pointer-events-none');
  }, 1500);
}
bootBtn.addEventListener('click', bootIntoProjects);

/* ---------- Contact form ---------- */
const contactForm = document.getElementById('contact-form');
const contactStatus = document.getElementById('contact-status');
const cfSubmit = document.getElementById('cf-submit');

contactForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  const payload = {
    name: document.getElementById('cf-name').value.trim(),
    email: document.getElementById('cf-email').value.trim(),
    message: document.getElementById('cf-message').value.trim(),
  };
  cfSubmit.disabled = true;
  cfSubmit.style.opacity = '0.6';
  contactStatus.textContent = 'Sending…';
  contactStatus.style.color = 'var(--cyan)';

  try {
    const res = await fetch('contact.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    });
    const data = await res.json();
    if (data.success) {
      contactStatus.textContent = 'Message sent — thank you!';
      contactStatus.style.color = 'var(--cyan)';
      contactForm.reset();
    } else {
      contactStatus.textContent = (data.errors && data.errors[0]) || 'Something went wrong.';
      contactStatus.style.color = 'var(--magenta)';
    }
  } catch (err) {
    contactStatus.textContent = 'Network error — please try again.';
    contactStatus.style.color = 'var(--magenta)';
  } finally {
    cfSubmit.disabled = false;
    cfSubmit.style.opacity = '1';
  }
});

/* ---------- AI Chat widget ---------- */
const chatToggle = document.getElementById('ai-chat-toggle');
const chatPanel = document.getElementById('ai-chat-panel');
const chatClose = document.getElementById('ai-chat-close');
const chatForm = document.getElementById('ai-chat-form');
const chatInput = document.getElementById('ai-chat-input');
const chatMessages = document.getElementById('ai-chat-messages');

let chatHistory = [];
let greeted = false;

function addBubble(text, who) {
  const wrap = document.createElement('div');
  wrap.className = 'flex ' + (who === 'user' ? 'justify-end' : 'justify-start');
  const bubble = document.createElement('div');
  bubble.className = (who === 'user' ? 'chat-bubble-user' : 'chat-bubble-bot') + ' px-3 py-2 max-w-[80%] leading-snug';
  bubble.textContent = text;
  wrap.appendChild(bubble);
  chatMessages.appendChild(wrap);
  chatMessages.scrollTop = chatMessages.scrollHeight;
  return bubble;
}

function addTyping() {
  const wrap = document.createElement('div');
  wrap.className = 'flex justify-start';
  wrap.id = 'typing-indicator';
  wrap.innerHTML = `<div class="chat-bubble-bot px-3 py-2 flex gap-1">
    <span class="typing-dot">●</span><span class="typing-dot">●</span><span class="typing-dot">●</span>
  </div>`;
  chatMessages.appendChild(wrap);
  chatMessages.scrollTop = chatMessages.scrollHeight;
}
function removeTyping() {
  const el = document.getElementById('typing-indicator');
  if (el) el.remove();
}

chatToggle.addEventListener('click', () => {
  chatPanel.classList.toggle('open');
  if (!greeted) {
    greeted = true;
    addBubble("Hi! I'm an AI assistant trained on Tej's resume. Ask me about his projects, skills, or experience.", 'bot');
  }
  if (chatPanel.classList.contains('open')) chatInput.focus();
});
chatClose.addEventListener('click', () => chatPanel.classList.remove('open'));

chatForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  const msg = chatInput.value.trim();
  if (!msg) return;
  addBubble(msg, 'user');
  chatHistory.push({ role: 'user', content: msg });
  chatInput.value = '';
  addTyping();

  try {
    const res = await fetch('chat.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ message: msg, history: chatHistory })
    });
    const data = await res.json();
    removeTyping();
    const reply = data.reply || "Sorry, I couldn't generate a response just now.";
    addBubble(reply, 'bot');
    chatHistory.push({ role: 'assistant', content: reply });
  } catch (err) {
    removeTyping();
    addBubble("I'm having trouble connecting right now — please try again in a moment.", 'bot');
  }
});
</script>
</body>
</html>
