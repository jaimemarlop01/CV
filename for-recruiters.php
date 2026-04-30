<?php
$roles = [
    'frontend' => [
        'num'   => '01',
        'title' => 'Front End Developer',
        'sub'   => 'HTML · CSS · JavaScript',
        'desc'  => 'Interfaces web, diseño responsive, experiencia de usuario y rendimiento en el navegador.',
        'tags'  => ['HTML/CSS', 'JavaScript', 'Responsive'],
    ],
    'backend' => [
        'num'   => '02',
        'title' => 'Back End Developer',
        'sub'   => 'PHP · SQL · Servidor',
        'desc'  => 'Lógica de negocio, APIs, bases de datos relacionales y mantenimiento de sistemas en servidor.',
        'tags'  => ['PHP', 'SQL', 'APIs'],
    ],
    'fullstack' => [
        'num'   => '03',
        'title' => 'Full Stack Developer',
        'sub'   => 'Web completo',
        'desc'  => 'Ciclo completo de desarrollo web: desde la interfaz de usuario hasta el servidor y la base de datos.',
        'tags'  => ['HTML/CSS', 'PHP', 'SQL', 'JS'],
    ],
    'java' => [
        'num'   => '04',
        'title' => 'Desarrollador Java',
        'sub'   => 'Aplicaciones empresariales',
        'desc'  => 'Aplicaciones multiplataforma con Java, integración con bases de datos y entornos empresariales.',
        'tags'  => ['Java', 'SQL', 'DAM'],
    ],
    'dotnet' => [
        'num'   => '05',
        'title' => 'Desarrollador .NET / C#',
        'sub'   => 'Ecosistema Microsoft',
        'desc'  => 'Aplicaciones de escritorio y web con C# y .NET, en entornos Windows y servicios empresariales.',
        'tags'  => ['C#', '.NET', 'SQL'],
    ],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jaime Martínez López — Para reclutadores</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Syne:wght@400;500;700&family=JetBrains+Mono:wght@300;400&display=swap" rel="stylesheet">
<style>
:root {
  --bg: #f4f1ea;
  --ink: #0f0e0b;
  --muted: #7a7770;
  --line: #d8d4cb;
  --accent: #c8410a;
}
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
  background: var(--bg);
  color: var(--ink);
  font-family: 'Syne', sans-serif;
  min-height: 100vh;
  overflow-x: hidden;
}
body::after {
  content: '';
  position: fixed; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='g'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23g)' opacity='0.035'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 100;
}
header {
  padding: 48px 72px 32px;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  border-bottom: 1px solid var(--line);
  opacity: 0;
  animation: fadeUp .6s .1s ease forwards;
}
.header-name {
  font-family: 'Playfair Display', serif;
  font-size: 22px;
  font-weight: 400;
  letter-spacing: -.01em;
}
.header-name em { font-style: italic; color: var(--accent); }
.header-meta {
  font-family: 'JetBrains Mono', monospace;
  font-size: 10px;
  letter-spacing: .15em;
  color: var(--muted);
  text-transform: uppercase;
  text-align: right;
  line-height: 1.8;
}
.hero-copy {
  padding: 80px 72px 0;
  max-width: 680px;
  opacity: 0;
  animation: fadeUp .6s .25s ease forwards;
}
.hero-tag {
  font-family: 'JetBrains Mono', monospace;
  font-size: 10px;
  letter-spacing: .2em;
  text-transform: uppercase;
  color: var(--accent);
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 28px;
}
.hero-tag::before { content: ''; width: 36px; height: 1px; background: var(--accent); }
.hero-h1 {
  font-family: 'Playfair Display', serif;
  font-size: clamp(36px, 5vw, 58px);
  font-weight: 400;
  line-height: 1.1;
  letter-spacing: -.02em;
  margin-bottom: 24px;
}
.hero-h1 em { font-style: italic; }
.hero-sub {
  font-size: 15px;
  color: var(--muted);
  line-height: 1.75;
  max-width: 520px;
  border-left: 2px solid var(--line);
  padding-left: 20px;
}
.selector-wrap { padding: 72px 72px 100px; }
.selector-label {
  font-family: 'JetBrains Mono', monospace;
  font-size: 10px;
  letter-spacing: .2em;
  color: var(--muted);
  text-transform: uppercase;
  margin-bottom: 36px;
  display: flex;
  align-items: center;
  gap: 16px;
}
.selector-label::after { content: ''; flex: 1; height: 1px; background: var(--line); }
.cards-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 2px;
}
.role-card {
  background: white;
  border: 1px solid var(--line);
  padding: 36px 32px;
  text-decoration: none;
  color: var(--ink);
  display: block;
  position: relative;
  overflow: hidden;
  transition: background .2s, border-color .2s;
  opacity: 0;
  animation: fadeUp .5s ease forwards;
}
.role-card:nth-child(1) { animation-delay: .30s; }
.role-card:nth-child(2) { animation-delay: .38s; }
.role-card:nth-child(3) { animation-delay: .46s; }
.role-card:nth-child(4) { animation-delay: .54s; }
.role-card:nth-child(5) { animation-delay: .62s; }
.role-card::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0;
  height: 3px; width: 0;
  background: var(--accent);
  transition: width .35s ease;
}
.role-card:hover { background: #fdf9f4; border-color: #c5bfb5; }
.role-card:hover::before { width: 100%; }
.card-num {
  font-family: 'JetBrains Mono', monospace;
  font-size: 10px;
  letter-spacing: .15em;
  color: var(--muted);
  margin-bottom: 24px;
}
.card-title {
  font-family: 'Playfair Display', serif;
  font-size: 24px;
  font-weight: 400;
  line-height: 1.2;
  margin-bottom: 10px;
  letter-spacing: -.01em;
}
.card-sub {
  font-family: 'JetBrains Mono', monospace;
  font-size: 11px;
  color: var(--accent);
  letter-spacing: .05em;
  margin-bottom: 18px;
}
.card-desc { font-size: 13px; color: var(--muted); line-height: 1.7; margin-bottom: 28px; }
.card-tags { display: flex; flex-wrap: wrap; gap: 6px; }
.tag {
  font-family: 'JetBrains Mono', monospace;
  font-size: 10px;
  letter-spacing: .08em;
  padding: 4px 10px;
  border: 1px solid var(--line);
  color: var(--muted);
}
.card-arrow {
  position: absolute;
  top: 32px; right: 32px;
  font-size: 18px;
  color: var(--line);
  transition: color .2s, transform .2s;
}
.role-card:hover .card-arrow { color: var(--accent); transform: translate(3px, -3px); }
footer {
  border-top: 1px solid var(--line);
  padding: 28px 72px;
  display: flex;
  justify-content: space-between;
  font-family: 'JetBrains Mono', monospace;
  font-size: 10px;
  color: var(--muted);
  letter-spacing: .1em;
  opacity: 0;
  animation: fadeUp .5s .8s ease forwards;
}
@keyframes fadeUp {
  from { opacity: 0; transform: translateY(18px); }
  to   { opacity: 1; transform: none; }
}
@media (max-width: 720px) {
  header, .hero-copy, .selector-wrap, footer { padding-left: 28px; padding-right: 28px; }
  .cards-grid { grid-template-columns: 1fr; }
}
</style>
</head>
<body>

<header>
  <div class="header-name">Jaime <em>Martínez</em> López</div>
  <div class="header-meta">
    Madrid, España<br>
    jaimemarlop01@gmail.com<br>
    +34 644 55 01 68
  </div>
</header>

<div class="hero-copy">
  <div class="hero-tag">Para reclutadores</div>
  <h1 class="hero-h1">¿Qué perfil<br><em>estás buscando?</em></h1>
  <p class="hero-sub">
    Selecciona el tipo de puesto que necesitas cubrir. Verás mi CV
    reescrito con exactamente lo que importa para ese rol — sin ruido,
    sin información de relleno.
  </p>
</div>

<div class="selector-wrap">
  <div class="selector-label">Elige el perfil</div>
  <div class="cards-grid">
    <?php foreach ($roles as $key => $r): ?>
    <a class="role-card" href="cv.php?role=<?= htmlspecialchars($key) ?>">
      <div class="card-arrow">↗</div>
      <div class="card-num"><?= htmlspecialchars($r['num']) ?></div>
      <div class="card-title"><?= nl2br(htmlspecialchars($r['title'])) ?></div>
      <div class="card-sub"><?= htmlspecialchars($r['sub']) ?></div>
      <p class="card-desc"><?= htmlspecialchars($r['desc']) ?></p>
      <div class="card-tags">
        <?php foreach ($r['tags'] as $tag): ?>
          <span class="tag"><?= htmlspecialchars($tag) ?></span>
        <?php endforeach; ?>
      </div>
    </a>
    <?php endforeach; ?>
  </div>
</div>

<footer>
  <span>Jaime Martínez López — 2025</span>
  <span>Desarrollador Web &amp; Multiplataforma · Madrid</span>
</footer>

</body>
</html>
