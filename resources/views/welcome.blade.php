<?php
// Portfolio Configuration
$portfolio = [
    'name' => 'Yi-Monirom',
    'title' => 'Computer Science Student & Aspiring Developer',
    'tagline' => 'Turning ideas into code.',
    'email' => 'yimonirom@example.com',
    'github' => 'https://github.com',
    'linkedin' => 'https://linkedin.com',
    'bio' => 'Computer Science student with a passion for building clean, efficient software. I love exploring algorithms, web development, and new technologies. Always learning, always building — driven by curiosity and a love for problem-solving.',
    'skills' => [
        'Languages' => ['Python', 'Java', 'C/C++', 'JavaScript', 'PHP'],
        'Web Dev' => ['HTML/CSS', 'React', 'Node.js', 'Laravel', 'MySQL'],
        'CS Fundamentals' => ['Data Structures', 'Algorithms', 'OOP', 'OS', 'Networking'],
        'Tools' => ['Git', 'VS Code', 'Linux', 'Docker', 'Figma'],
    ],
    'projects' => [
        [
            'title' => 'Student Grade Tracker',
            'desc' => 'Web app for students to track GPA, manage courses, and visualize academic progress with charts.',
            'tags' => ['PHP', 'MySQL', 'JavaScript', 'Chart.js'],
            'color' => '#C8B5FF',
            'icon' => '📚',
            'year' => '2024',
        ],
        [
            'title' => 'Sorting Visualizer',
            'desc' => 'Interactive visualizer for 8 sorting algorithms — Bubble, Merge, Quick, Heap and more — with speed controls.',
            'tags' => ['JavaScript', 'HTML/CSS', 'Algorithms'],
            'color' => '#4ECDC4',
            'icon' => '📊',
            'year' => '2024',
        ],
        [
            'title' => 'Chat Application',
            'desc' => 'Real-time chat app with rooms, private messaging, and online presence indicators using WebSockets.',
            'tags' => ['Node.js', 'Socket.io', 'React', 'MongoDB'],
            'color' => '#FF6B35',
            'icon' => '💬',
            'year' => '2024',
        ],
        [
            'title' => 'Library Management System',
            'desc' => 'Full CRUD system for managing books, members, and borrowing records with admin dashboard.',
            'tags' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap'],
            'color' => '#F59E0B',
            'icon' => '🏫',
            'year' => '2023',
        ],
        [
            'title' => 'Pathfinding Visualizer',
            'desc' => "Visual demo of Dijkstra's and A* algorithms on a dynamic grid — built for my Data Structures class.",
            'tags' => ['Python', 'Pygame', 'Algorithms'],
            'color' => '#34D399',
            'icon' => '🗺️',
            'year' => '2023',
        ],
        [
            'title' => 'Personal Budget App',
            'desc' => 'Mobile-friendly expense tracker with category breakdowns, monthly summaries, and CSV export.',
            'tags' => ['React', 'Node.js', 'SQLite', 'REST API'],
            'color' => '#F472B6',
            'icon' => '💰',
            'year' => '2023',
        ],
    ],
    'experience' => [
        ['role' => 'CS Major Student', 'company' => 'University', 'period' => '2022 – Present', 'desc' => 'Studying Computer Science with focus on algorithms, software engineering, and web development. Dean\'s list student.'],
        ['role' => 'Freelance Web Developer', 'company' => 'Self-Employed', 'period' => '2023 – Present', 'desc' => 'Building websites and small web apps for local businesses and clients during studies.'],
        ['role' => 'CS Tutor', 'company' => 'University Lab', 'period' => '2023 – Present', 'desc' => 'Helping fellow students with programming fundamentals, data structures, and debugging.'],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($portfolio['name']) ?> — Portfolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,700;1,9..144,400&family=DM+Mono:wght@300;400;500&display=swap" rel="stylesheet">
<style>
  :root {
    --bg: #0A0A0F;
    --surface: #111118;
    --border: rgba(255,255,255,0.07);
    --text: #E8E6FF;
    --muted: #7A7895;
    --accent: #C8B5FF;
    --accent2: #FF6B6B;
    --accent3: #4ECDC4;
    --glow: rgba(200,181,255,0.15);
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

  body {
    background: var(--bg);
    color: var(--text);
    font-family: 'DM Mono', monospace;
    font-size: 14px;
    line-height: 1.7;
    overflow-x: hidden;
  }

  /* Noise texture overlay */
  body::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
    pointer-events: none;
    z-index: 9999;
    opacity: 0.4;
  }

  /* Cursor glow */
  .cursor-glow {
    position: fixed;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(200,181,255,0.06) 0%, transparent 70%);
    pointer-events: none;
    transform: translate(-50%, -50%);
    transition: all 0.3s ease;
    z-index: 9998;
  }

  /* NAV */
  nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 100;
    padding: 1.5rem 4rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid var(--border);
    backdrop-filter: blur(20px);
    background: rgba(10,10,15,0.8);
  }

  .nav-logo {
    font-family: 'Fraunces', serif;
    font-size: 1.2rem;
    color: var(--accent);
    text-decoration: none;
    letter-spacing: -0.02em;
  }

  .nav-links {
    display: flex;
    gap: 2.5rem;
    list-style: none;
  }

  .nav-links a {
    color: var(--muted);
    text-decoration: none;
    font-size: 12px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    transition: color 0.2s;
  }

  .nav-links a:hover { color: var(--text); }

  /* HERO */
  .hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 0 4rem;
    position: relative;
    overflow: hidden;
  }

  .hero-grid {
    position: absolute;
    inset: 0;
    background-image: 
      linear-gradient(var(--border) 1px, transparent 1px),
      linear-gradient(90deg, var(--border) 1px, transparent 1px);
    background-size: 60px 60px;
    mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 20%, transparent 100%);
  }

  .hero-content {
    max-width: 900px;
    position: relative;
    z-index: 2;
  }

  .hero-tag {
    display: inline-block;
    color: var(--accent3);
    font-size: 12px;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    margin-bottom: 1.5rem;
    padding: 0.35rem 1rem;
    border: 1px solid rgba(78,205,196,0.3);
    border-radius: 2px;
  }

  .hero h1 {
    font-family: 'Fraunces', serif;
    font-size: clamp(3.5rem, 8vw, 7rem);
    font-weight: 700;
    line-height: 1.0;
    letter-spacing: -0.03em;
    margin-bottom: 1.5rem;
    color: #fff;
  }

  .hero h1 em {
    color: var(--accent);
    font-style: italic;
    font-weight: 300;
  }

  .hero-sub {
    font-size: 15px;
    color: var(--muted);
    max-width: 500px;
    margin-bottom: 3rem;
    line-height: 1.8;
  }

  .hero-cta {
    display: flex;
    gap: 1rem;
    align-items: center;
    flex-wrap: wrap;
  }

  .btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.85rem 2rem;
    font-family: 'DM Mono', monospace;
    font-size: 12px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    text-decoration: none;
    border-radius: 2px;
    transition: all 0.2s;
    cursor: pointer;
    border: none;
  }

  .btn-primary {
    background: var(--accent);
    color: #0A0A0F;
    font-weight: 500;
  }

  .btn-primary:hover {
    background: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(200,181,255,0.3);
  }

  .btn-ghost {
    background: transparent;
    color: var(--muted);
    border: 1px solid var(--border);
  }

  .btn-ghost:hover {
    color: var(--text);
    border-color: var(--accent);
  }

  /* SECTIONS */
  section {
    padding: 6rem 4rem;
    max-width: 1200px;
    margin: 0 auto;
  }

  .section-label {
    font-size: 11px;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--accent);
    margin-bottom: 0.75rem;
  }

  .section-title {
    font-family: 'Fraunces', serif;
    font-size: clamp(2rem, 4vw, 3.5rem);
    font-weight: 700;
    letter-spacing: -0.02em;
    line-height: 1.1;
    color: #fff;
    margin-bottom: 3rem;
  }

  /* ABOUT */
  .about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 6rem;
    align-items: start;
  }

  .about-text p {
    color: var(--muted);
    margin-bottom: 1.5rem;
    font-size: 14px;
    line-height: 1.9;
  }

  .about-text p strong { color: var(--text); font-weight: 400; }

  .skills-grid {
    display: grid;
    gap: 1.5rem;
  }

  .skill-group h4 {
    font-size: 11px;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--accent3);
    margin-bottom: 0.75rem;
  }

  .skill-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
  }

  .skill-tag {
    padding: 0.3rem 0.75rem;
    border: 1px solid var(--border);
    border-radius: 2px;
    font-size: 12px;
    color: var(--muted);
    transition: all 0.2s;
  }

  .skill-tag:hover {
    border-color: var(--accent);
    color: var(--accent);
  }

  /* PROJECTS */
  .projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 1.5px;
    border: 1.5px solid var(--border);
  }

  .project-card {
    padding: 2.5rem;
    border: 1.5px solid var(--border);
    margin: -1.5px;
    position: relative;
    transition: all 0.3s;
    overflow: hidden;
    cursor: default;
  }

  .project-card::before {
    content: '';
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity 0.3s;
    background: radial-gradient(circle at 50% 0%, var(--card-color), transparent 70%);
  }

  .project-card:hover::before { opacity: 0.1; }
  .project-card:hover { background: var(--surface); }

  .project-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1.5rem;
  }

  .project-icon {
    font-size: 2rem;
    line-height: 1;
  }

  .project-year {
    font-size: 11px;
    color: var(--muted);
    letter-spacing: 0.1em;
  }

  .project-card h3 {
    font-family: 'Fraunces', serif;
    font-size: 1.25rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 0.75rem;
    letter-spacing: -0.01em;
  }

  .project-card p {
    color: var(--muted);
    font-size: 13px;
    line-height: 1.7;
    margin-bottom: 1.5rem;
  }

  .project-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.4rem;
  }

  .project-tag {
    padding: 0.2rem 0.6rem;
    font-size: 11px;
    letter-spacing: 0.05em;
    border-radius: 2px;
    background: rgba(255,255,255,0.05);
    color: var(--muted);
  }

  /* EXPERIENCE */
  .exp-list {
    position: relative;
    padding-left: 2rem;
  }

  .exp-list::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0.5rem;
    bottom: 0;
    width: 1px;
    background: var(--border);
  }

  .exp-item {
    position: relative;
    padding-bottom: 3rem;
  }

  .exp-item::before {
    content: '';
    position: absolute;
    left: -2rem;
    top: 0.5rem;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--accent);
    transform: translateX(-3px);
    box-shadow: 0 0 12px var(--accent);
  }

  .exp-period {
    font-size: 11px;
    color: var(--accent3);
    letter-spacing: 0.1em;
    margin-bottom: 0.4rem;
  }

  .exp-role {
    font-family: 'Fraunces', serif;
    font-size: 1.3rem;
    color: #fff;
    letter-spacing: -0.01em;
    margin-bottom: 0.2rem;
  }

  .exp-company {
    color: var(--muted);
    font-size: 12px;
    letter-spacing: 0.1em;
    margin-bottom: 0.75rem;
  }

  .exp-desc {
    color: var(--muted);
    font-size: 13px;
    line-height: 1.7;
    max-width: 500px;
  }

  /* CONTACT */
  .contact-wrap {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 6rem;
    align-items: center;
  }

  .contact-left p {
    color: var(--muted);
    margin-bottom: 2rem;
    line-height: 1.8;
  }

  .contact-links {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }

  .contact-link {
    display: flex;
    align-items: center;
    gap: 1rem;
    color: var(--muted);
    text-decoration: none;
    font-size: 13px;
    padding: 1rem 1.5rem;
    border: 1px solid var(--border);
    border-radius: 2px;
    transition: all 0.2s;
  }

  .contact-link:hover {
    color: var(--accent);
    border-color: var(--accent);
    background: var(--glow);
    transform: translateX(4px);
  }

  .contact-link span { color: var(--text); }

  .contact-form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }

  .form-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .form-group label {
    font-size: 11px;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--muted);
  }

  .form-group input,
  .form-group textarea {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 2px;
    padding: 0.85rem 1rem;
    color: var(--text);
    font-family: 'DM Mono', monospace;
    font-size: 13px;
    outline: none;
    transition: border-color 0.2s;
    resize: vertical;
  }

  .form-group input:focus,
  .form-group textarea:focus {
    border-color: var(--accent);
  }

  .form-group input::placeholder,
  .form-group textarea::placeholder {
    color: var(--muted);
    opacity: 0.5;
  }

  /* FOOTER */
  footer {
    border-top: 1px solid var(--border);
    padding: 2rem 4rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--muted);
    font-size: 12px;
  }

  /* ANIMATIONS */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .fade-up {
    opacity: 0;
    animation: fadeUp 0.7s ease forwards;
  }

  .delay-1 { animation-delay: 0.1s; }
  .delay-2 { animation-delay: 0.2s; }
  .delay-3 { animation-delay: 0.3s; }
  .delay-4 { animation-delay: 0.4s; }
  .delay-5 { animation-delay: 0.5s; }

  /* Divider */
  .divider {
    width: 100%;
    height: 1px;
    background: var(--border);
  }

  @media (max-width: 768px) {
    nav { padding: 1.2rem 1.5rem; }
    .hero { padding: 0 1.5rem; }
    section { padding: 4rem 1.5rem; }
    .about-grid, .contact-wrap { grid-template-columns: 1fr; gap: 3rem; }
    .projects-grid { grid-template-columns: 1fr; }
    footer { flex-direction: column; gap: 1rem; text-align: center; }
    .nav-links { display: none; }
  }
</style>
</head>
<body>

<div class="cursor-glow" id="glow"></div>

<!-- NAV -->
<nav>
  <a href="#" class="nav-logo"><?= strtoupper(explode(' ', $portfolio['name'])[0]) ?>.</a>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#experience">Experience</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <a href="mailto:<?= htmlspecialchars($portfolio['email']) ?>" class="btn btn-primary" style="padding:0.6rem 1.2rem;">Hire me</a>
</nav>

<!-- HERO -->
<div class="hero" id="home">
  <div class="hero-grid"></div>
  <div class="hero-content">
    <div class="hero-tag fade-up delay-1">CS Student · Open to Internships</div>
    <h1 class="fade-up delay-2">
      Hi, I'm<br><em><?= htmlspecialchars($portfolio['name']) ?></em>
    </h1>
    <p class="hero-sub fade-up delay-3"><?= htmlspecialchars($portfolio['title']) ?> — <?= htmlspecialchars($portfolio['tagline']) ?></p>
    <div class="hero-cta fade-up delay-4">
      <a href="#projects" class="btn btn-primary">View Projects →</a>
      <a href="#contact" class="btn btn-ghost">Get in touch</a>
    </div>
  </div>
</div>

<div class="divider"></div>

<!-- ABOUT -->
<section id="about">
  <p class="section-label">01 / About</p>
  <h2 class="section-title">The human<br>behind the code.</h2>
  <div class="about-grid">
    <div class="about-text">
      <p><?= htmlspecialchars($portfolio['bio']) ?></p>
      <p>I specialize in <strong>web development with PHP & JavaScript</strong>, and enjoy working on algorithms and data structures. I care deeply about <strong>writing clean, readable code</strong> and learning best practices.</p>
      <a href="mailto:<?= htmlspecialchars($portfolio['email']) ?>" class="btn btn-ghost" style="margin-top:1rem;">Download CV →</a>
    </div>
    <div class="skills-grid">
      <?php foreach ($portfolio['skills'] as $group => $items): ?>
      <div class="skill-group">
        <h4><?= htmlspecialchars($group) ?></h4>
        <div class="skill-tags">
          <?php foreach ($items as $skill): ?>
          <span class="skill-tag"><?= htmlspecialchars($skill) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- PROJECTS -->
<section id="projects" style="max-width:100%; padding-left:4rem; padding-right:4rem;">
  <div style="max-width:1200px; margin:0 auto">
    <p class="section-label">02 / Projects</p>
    <h2 class="section-title">Things I've<br>built.</h2>
    <div class="projects-grid">
      <?php foreach ($portfolio['projects'] as $project): ?>
      <div class="project-card" style="--card-color: <?= htmlspecialchars($project['color']) ?>;">
        <div class="project-top">
          <span class="project-icon"><?= $project['icon'] ?></span>
          <span class="project-year"><?= htmlspecialchars($project['year']) ?></span>
        </div>
        <h3><?= htmlspecialchars($project['title']) ?></h3>
        <p><?= htmlspecialchars($project['desc']) ?></p>
        <div class="project-tags">
          <?php foreach ($project['tags'] as $tag): ?>
          <span class="project-tag"><?= htmlspecialchars($tag) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- EXPERIENCE -->
<section id="experience">
  <p class="section-label">03 / Experience</p>
  <h2 class="section-title">Where I've<br>worked.</h2>
  <div class="exp-list">
    <?php foreach ($portfolio['experience'] as $exp): ?>
    <div class="exp-item">
      <div class="exp-period"><?= htmlspecialchars($exp['period']) ?></div>
      <div class="exp-role"><?= htmlspecialchars($exp['role']) ?></div>
      <div class="exp-company">@ <?= htmlspecialchars($exp['company']) ?></div>
      <p class="exp-desc"><?= htmlspecialchars($exp['desc']) ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<div class="divider"></div>

<!-- CONTACT -->
<section id="contact">
  <p class="section-label">04 / Contact</p>
  <h2 class="section-title">Let's work<br>together.</h2>
  <div class="contact-wrap">
    <div class="contact-left">
      <p>Have a project in mind? I'm open to freelance opportunities, full-time roles, and interesting collaborations. Let's make something great.</p>
      <div class="contact-links">
        <a href="mailto:<?= htmlspecialchars($portfolio['email']) ?>" class="contact-link">
          ✉ <span><?= htmlspecialchars($portfolio['email']) ?></span>
        </a>
        <a href="<?= htmlspecialchars($portfolio['github']) ?>" class="contact-link" target="_blank">
          ⌥ <span>GitHub Profile</span>
        </a>
        <a href="<?= htmlspecialchars($portfolio['linkedin']) ?>" class="contact-link" target="_blank">
          ◈ <span>LinkedIn Profile</span>
        </a>
      </div>
    </div>
    <form class="contact-form" onsubmit="handleSubmit(event)">
      <div class="form-group">
        <label>Your Name</label>
        <input type="text" placeholder="Jane Smith" required>
      </div>
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" placeholder="jane@company.com" required>
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea rows="5" placeholder="Tell me about your project..." required></textarea>
      </div>
      <button type="submit" class="btn btn-primary" style="align-self:flex-start;">Send Message →</button>
    </form>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <span>© <?= date('Y') ?> <?= htmlspecialchars($portfolio['name']) ?>. Built with PHP.</span>
  <span style="color:rgba(200,181,255,0.4);">Made with ♥ & lots of coffee</span>
</footer>

<script>
  // Cursor glow
  const glow = document.getElementById('glow');
  document.addEventListener('mousemove', e => {
    glow.style.left = e.clientX + 'px';
    glow.style.top = e.clientY + 'px';
  });

  // Intersection observer for reveal
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.project-card, .exp-item, .skill-group').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'all 0.6s ease';
    observer.observe(el);
  });

  // Form handler
  function handleSubmit(e) {
    e.preventDefault();
    const btn = e.target.querySelector('button');
    btn.textContent = 'Sent! ✓';
    btn.style.background = '#34D399';
    setTimeout(() => {
      btn.textContent = 'Send Message →';
      btn.style.background = '';
      e.target.reset();
    }, 3000);
  }
</script>
</body>
</html>