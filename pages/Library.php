<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ThreatBuddy - Cyber Threat Library</title>
  <link rel="stylesheet" href="../assets/css/library.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@700;800&display=swap" rel="stylesheet" />
</head>
<body>

  <!-- ───────── NAVBAR ───────── -->
  <nav class="navbar">
    <div class="nav-inner">
      <a class="nav-brand" href="../index.html">
        <img src="../assets/img/logo.png" alt="ThreatBuddy logo" class="nav-logo" />
        <span class="brand-threat">Threat</span><span class="brand-buddy">Buddy</span>
      </a>
      <ul class="nav-links">
        <li><a href="Library.php" class="nav-link active">Library</a></li>
        <li><a href="Articles.php" class="nav-link">TMedia</a></li>
        <li class="nav-dropdown">
          <a href="Resources.php" class="nav-link">Resources ▾</a>
        </li>
        <li><a href="About.php" class="nav-link">About</a></li>
      </ul>
      <div class="nav-actions">
        <a href="SignIn.php" class="btn-outline">Sign In</a>
        <a href="SignUp.php" class="btn-solid">Get Started</a>
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
      <img src="../assets/img/hero-library.png" alt="Cyber threat illustration" />
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

        <!-- PHISHING -->
        <div class="threat-card" data-category="Social Engineering" data-severity="High">
          <button class="threat-header" aria-expanded="false">
            <div class="threat-icon-wrap">
              <img src="../assets/img/lock.png" alt="" class="threat-icon" />
            </div>
            <span class="threat-name">Phishing</span>
            <span class="toggle-btn">+</span>
          </button>
          <div class="threat-body">
            <div class="tb-media">
              <video controls preload="none">
                <source src="../assets/video/phishing.mp4" type="video/mp4" />
                Your browser does not support video.
              </video>
            </div>
            <div class="tb-info">
              <p><strong>Category:</strong> Social Engineering</p>
              <p><strong>Severity:</strong> <span class="badge badge-high">High</span></p>
              <p><strong>About:</strong> Phishing is a cyber attack where attackers impersonate legitimate entities to steal sensitive information like passwords, credit card details, or personal data.</p>
              <p><strong>How it Works:</strong></p>
              <ol>
                <li>Attacker sends a fraudulent message.</li>
                <li>Victim clicks a link or opens an attachment.</li>
                <li>Victim is redirected to a fake site or malware is installed.</li>
                <li>Attacker steals information.</li>
              </ol>
              <p><strong>Prevention Tips:</strong></p>
              <ol>
                <li>Don't click on suspicious links or attachments.</li>
                <li>Verify the sender's email address.</li>
                <li>Enable multi-factor authentication.</li>
              </ol>
            </div>
          </div>
        </div>

        <!-- RANSOMWARE -->
        <div class="threat-card" data-category="Malware" data-severity="Critical">
          <button class="threat-header" aria-expanded="false">
            <div class="threat-icon-wrap">
              <img src="../assets/img/icons/lock.png" alt="" class="threat-icon" />
            </div>
            <span class="threat-name">Ransomware</span>
            <span class="toggle-btn">+</span>
          </button>
          <div class="threat-body">
            <div class="tb-media">
              <video controls preload="none">
                <source src="../assets/video/ransomware.mp4" type="video/mp4" />
                Your browser does not support video.
              </video>
            </div>
            <div class="tb-info">
              <p><strong>Category:</strong> Malware</p>
              <p><strong>Severity:</strong> <span class="badge badge-critical">Critical</span></p>
              <p><strong>About:</strong> Ransomware is malicious software that encrypts a victim's files and demands payment for the decryption key, crippling individuals and organizations.</p>
              <p><strong>How it Works:</strong></p>
              <ol>
                <li>Malware enters via phishing email or vulnerability.</li>
                <li>Files are encrypted silently.</li>
                <li>Ransom note demands cryptocurrency payment.</li>
                <li>Decryption key may or may not be provided.</li>
              </ol>
              <p><strong>Prevention Tips:</strong></p>
              <ol>
                <li>Maintain regular offline backups.</li>
                <li>Keep software and OS updated.</li>
                <li>Avoid opening unknown email attachments.</li>
              </ol>
            </div>
          </div>
        </div>

        <!-- SPEAR PHISHING -->
        <div class="threat-card" data-category="Social Engineering" data-severity="High">
          <button class="threat-header" aria-expanded="false">
            <div class="threat-icon-wrap">
              <img src="../assets/img/icons/lock.png" alt="" class="threat-icon" />
            </div>
            <span class="threat-name">Spear Phishing</span>
            <span class="toggle-btn">+</span>
          </button>
          <div class="threat-body">
            <div class="tb-media">
              <video controls preload="none">
                <source src="../assets/video/spear-phishing.mp4" type="video/mp4" />
                Your browser does not support video.
              </video>
            </div>
            <div class="tb-info">
              <p><strong>Category:</strong> Social Engineering</p>
              <p><strong>Severity:</strong> <span class="badge badge-high">High</span></p>
              <p><strong>About:</strong> Spear Phishing is a targeted form of phishing where attackers customize their message for a specific individual or organization using personal information.</p>
              <p><strong>How it Works:</strong></p>
              <ol>
                <li>Attacker researches the target's personal details.</li>
                <li>Crafts a convincing, personalized message.</li>
                <li>Victim trusts the message and complies.</li>
                <li>Attacker gains access or data.</li>
              </ol>
              <p><strong>Prevention Tips:</strong></p>
              <ol>
                <li>Be cautious of unsolicited requests even from known contacts.</li>
                <li>Verify via a secondary channel before acting.</li>
                <li>Use email authentication protocols (SPF, DKIM, DMARC).</li>
              </ol>
            </div>
          </div>
        </div>

        <!-- TROJAN -->
        <div class="threat-card" data-category="Malware" data-severity="High">
          <button class="threat-header" aria-expanded="false">
            <div class="threat-icon-wrap">
              <img src="../assets/img/icons/lock.png" alt="" class="threat-icon" />
            </div>
            <span class="threat-name">Trojan</span>
            <span class="toggle-btn">+</span>
          </button>
          <div class="threat-body">
            <div class="tb-media">
              <video controls preload="none">
                <source src="../assets/video/trojan.mp4" type="video/mp4" />
                Your browser does not support video.
              </video>
            </div>
            <div class="tb-info">
              <p><strong>Category:</strong> Malware</p>
              <p><strong>Severity:</strong> <span class="badge badge-high">High</span></p>
              <p><strong>About:</strong> A Trojan is malware disguised as legitimate software that, once installed, grants attackers unauthorized access to the victim's system.</p>
              <p><strong>How it Works:</strong></p>
              <ol>
                <li>Disguised as a useful or trusted program.</li>
                <li>User installs it voluntarily.</li>
                <li>Backdoor opens for the attacker.</li>
                <li>Data theft or system damage occurs.</li>
              </ol>
              <p><strong>Prevention Tips:</strong></p>
              <ol>
                <li>Download software only from official sources.</li>
                <li>Scan files with antivirus before running.</li>
                <li>Keep your system and applications up to date.</li>
              </ol>
            </div>
          </div>
        </div>

        <!-- ROOTKIT -->
        <div class="threat-card" data-category="Malware" data-severity="Critical">
          <button class="threat-header" aria-expanded="false">
            <div class="threat-icon-wrap">
              <img src="../assets/img/icons/lock.png" alt="" class="threat-icon" />
            </div>
            <span class="threat-name">Rootkit</span>
            <span class="toggle-btn">+</span>
          </button>
          <div class="threat-body">
            <div class="tb-media">
              <video controls preload="none">
                <source src="../assets/video/rootkit.mp4" type="video/mp4" />
                Your browser does not support video.
              </video>
            </div>
            <div class="tb-info">
              <p><strong>Category:</strong> Malware</p>
              <p><strong>Severity:</strong> <span class="badge badge-critical">Critical</span></p>
              <p><strong>About:</strong> A Rootkit is a stealthy type of malware that hides itself and other malicious software deep within a system, often at the OS or firmware level.</p>
              <p><strong>How it Works:</strong></p>
              <ol>
                <li>Attacker gains initial access through an exploit or phishing.</li>
                <li>Rootkit installs itself at the kernel level.</li>
                <li>Hides processes, files, and registry keys.</li>
                <li>Provides persistent, hidden access to the attacker.</li>
              </ol>
              <p><strong>Prevention Tips:</strong></p>
              <ol>
                <li>Use trusted boot and Secure Boot features.</li>
                <li>Employ rootkit-specific detection tools.</li>
                <li>Reinstall OS if infection is confirmed.</li>
              </ol>
            </div>
          </div>
        </div>

        <!-- DDOS ATTACK -->
        <div class="threat-card" data-category="Network Attack" data-severity="High">
          <button class="threat-header" aria-expanded="false">
            <div class="threat-icon-wrap">
              <img src="../assets/img/icons/lock.png" alt="" class="threat-icon" />
            </div>
            <span class="threat-name">DDoS Attack</span>
            <span class="toggle-btn">+</span>
          </button>
          <div class="threat-body">
            <div class="tb-media">
              <video controls preload="none">
                <source src="../assets/video/ddos.mp4" type="video/mp4" />
                Your browser does not support video.
              </video>
            </div>
            <div class="tb-info">
              <p><strong>Category:</strong> Network Attack</p>
              <p><strong>Severity:</strong> <span class="badge badge-high">High</span></p>
              <p><strong>About:</strong> A Distributed Denial of Service (DDoS) attack floods a server, service, or network with massive traffic to exhaust resources and cause downtime.</p>
              <p><strong>How it Works:</strong></p>
              <ol>
                <li>Attacker controls a botnet of infected devices.</li>
                <li>All devices send traffic simultaneously to the target.</li>
                <li>Target's bandwidth or resources are exhausted.</li>
                <li>Legitimate users are denied service.</li>
              </ol>
              <p><strong>Prevention Tips:</strong></p>
              <ol>
                <li>Use DDoS protection services (e.g., Cloudflare).</li>
                <li>Rate-limit incoming traffic.</li>
                <li>Deploy Web Application Firewalls (WAF).</li>
              </ol>
            </div>
          </div>
        </div>

      </div><!-- /.threat-list -->

      <p class="no-results" id="noResults" style="display:none;">No threats match your search.</p>

    </div><!-- /.lib-container -->
  </section>

  <!-- ───────── FOOTER ───────── -->
  <footer class="site-footer">
    <div class="footer-inner">
      <div class="footer-brand">
        <a href="../index.html" class="nav-brand footer-logo-link">
          <img src="../assets/img/logo.png" alt="ThreatBuddy" class="nav-logo" />
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
          <li><a href="Library.php">Threat Library</a></li>
          <li><a href="Articles.php">Articles</a></li>
          <li><a href="Library.php">Threat Categories</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Resources</h4>
        <ul>
          <li><a href="Resources.php">Cybersecurity Basics</a></li>
          <li><a href="Resources.php">Best Practices</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="About.php">About Us</a></li>
          <li><a href="About.php">Our Mission</a></li>
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