
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ThreatBuddy - Cyber Threat Library</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@700;800&display=swap" rel="stylesheet" />
</head>
<body>

  <!-- ───────── NAVBAR ───────── -->
  <nav class="navbar">
    <div class="nav-inner">
      <a class="nav-brand" href="../../index.html">
        <img src="../../assets/img/LogoTB.png" alt="ThreatBuddy logo" class="nav-logo" />
        <span class="brand-threat">Threat</span><span class="brand-buddy">Buddy</span>
      </a>
      <ul class="nav-links">
        <li><a href="index.php" class="nav-link active">Library</a></li>
        <li><a href="../ArticlePage/index.php" class="nav-link">TMedia</a></li>
        <li><a href="../Admin/index.php" class="nav-link">Resources ▾</a></li>
        <li><a href="../About/index.html" class="nav-link">About</a></li>
      </ul>
      <div class="nav-actions">
        <a href="../SignIn/index.php" class="btn-outline">Sign In</a>
        <a href="../SignUp/index.php" class="btn-solid">Get Started</a>
        <button class="btn-theme" id="themeToggle" aria-label="Toggle dark mode">🌙</button>
      </div>
    </div>
  </nav>

  <!-- ───────── HERO ───────── -->
  <section class="lib-hero">
    <div class="hero-text">
      <h1 class="hero-title">Cyber Threat Library</h1>
      <p class="hero-sub">Stay informed. Stay Secure.</p>
      <p class="hero-desc">
        Explore different types of cyber threats, how they work,<br />
        and what you can do to protect yourself and your organization.
      </p>
      <span class="hero-underline"></span>
    </div>
    <div class="hero-art">
      <img src="assets/img/hero-library.png" alt="Cyber threat illustration" />
    </div>
  </section>

  <!-- ───────── LIBRARY CONTENT ───────── -->
  <section class="lib-section">
    <div class="lib-container">

      <!-- Filter bar -->
      <div class="filter-bar">
        <div class="search-wrap">
          <span class="search-icon">🔍</span>
          <input type="text" id="searchInput" placeholder="Search threat . . ." class="search-input" />
        </div>
        <select id="categoryFilter" class="filter-select">
          <option value="">All Categories</option>
          <option value="Social Engineering">Social Engineering</option>
          <option value="Malware">Malware</option>
          <option value="Network Attack">Network Attack</option>
          <option value="Exploit">Exploit</option>
        </select>
        <select id="severityFilter" class="filter-select">
          <option value="">All Severity Levels</option>
          <option value="Critical">Critical</option>
          <option value="High">High</option>
          <option value="Medium">Medium</option>
          <option value="Low">Low</option>
        </select>
      </div>

      <!-- Threat accordion list -->
      <div class="threat-list" id="threatList">
        <!-- Content will be populated from SQL -->
      </div><!-- /.threat-list -->

      <p class="no-results" id="noResults" style="display:none;">No threats match your search.</p>

    </div><!-- /.lib-container -->
  </section>

  <!-- ───────── FOOTER ───────── -->
  <footer class="site-footer">
    <div class="footer-inner">
      <div class="footer-brand">
        <a href="../index.html" class="nav-brand footer-logo-link">
          <img src="../../assets/img/LogoTB.png" alt="ThreatBuddy" class="nav-logo" />
          <span class="brand-threat">Threat</span><span class="brand-buddy">Buddy</span>
        </a>
        <p>Your trusted companion for threat intelligence, cybersecurity awareness, and a safer digital future.</p>
        <ul class="footer-features">
          <li>🛡 Real-time threat updates</li>
          <li>👥 Curated by security experts</li>
          <li>✔ Reliable. Relevant. Actionable.</li>
        </ul>
        <div class="footer-socials">
          <a href="#" aria-label="X / Twitter">𝕏</a>
          <a href="#" aria-label="LinkedIn">in</a>
          <a href="#" aria-label="GitHub">⌥</a>
          <a href="#" aria-label="Email">✉</a>
        </div>
      </div>

      <div class="footer-col">
        <h4>Explore</h4>
        <ul>
          <li><a href="index.php">Threat Library</a></li>
          <li><a href="../ArticlePage/index.php">Articles</a></li>
          <li><a href="index.php">Threat Categories</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Resources</h4>
        <ul>
          <li><a href="../Admin/index.php">Cybersecurity Basics</a></li>
          <li><a href="../Admin/index.php">Best Practices</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="../About/index.html">About Us</a></li>
          <li><a href="../About/index.html">Our Mission</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>

      <div class="footer-col footer-newsletter">
        <h4>Stay Updated</h4>
        <p class="newsletter-headline">Cybersecurity info you<br />can't live without</p>
        <p>Want to stay informed on the latest news in cybersecurity? Sign up for our newsletter and learn how to protect your computer from threats.</p>
        <div class="newsletter-form">
          <input type="email" placeholder="Enter your email" />
          <button>➤</button>
        </div>
        <div class="footer-badge">
          🛡 <span><strong>Cyber Threats Don't Sleep.</strong><br />Stay One Step Ahead</span>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <img src="../assets/img/seal.png" alt="" class="footer-seal" />
      <p>© 2026 ThreatBuddy. All rights reserved</p>
    </div>
  </footer>

  <script>
    // ── Accordion ──
    document.querySelectorAll('.threat-header').forEach(btn => {
      btn.addEventListener('click', () => {
        const card = btn.closest('.threat-card');
        const isOpen = card.classList.contains('open');
        // Close all
        document.querySelectorAll('.threat-card').forEach(c => {
          c.classList.remove('open');
          c.querySelector('.threat-header').setAttribute('aria-expanded', 'false');
          c.querySelector('.toggle-btn').textContent = '+';
        });
        if (!isOpen) {
          card.classList.add('open');
          btn.setAttribute('aria-expanded', 'true');
          btn.querySelector('.toggle-btn').textContent = '−';
        }
      });
    });

    // ── Filter / Search ──
    function applyFilters() {
      const q = document.getElementById('searchInput').value.toLowerCase();
      const cat = document.getElementById('categoryFilter').value;
      const sev = document.getElementById('severityFilter').value;
      let visible = 0;
      document.querySelectorAll('.threat-card').forEach(card => {
        const name = card.querySelector('.threat-name').textContent.toLowerCase();
        const cardCat = card.dataset.category;
        const cardSev = card.dataset.severity;
        const matches =
          (!q || name.includes(q)) &&
          (!cat || cardCat === cat) &&
          (!sev || cardSev === sev);
        card.style.display = matches ? '' : 'none';
        if (matches) visible++;
      });
      document.getElementById('noResults').style.display = visible === 0 ? 'block' : 'none';
    }

    document.getElementById('searchInput').addEventListener('input', applyFilters);
    document.getElementById('categoryFilter').addEventListener('change', applyFilters);
    document.getElementById('severityFilter').addEventListener('change', applyFilters);

    // ── Dark mode toggle ──
    const toggle = document.getElementById('themeToggle');
    toggle.addEventListener('click', () => {
      document.body.classList.toggle('dark');
      toggle.textContent = document.body.classList.contains('dark') ? '☀️' : '🌙';
    });
  </script>
</body>
</html>