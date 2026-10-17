/* ═══════════════════════════════════════════════════════════
   app — Initialisation + UI interactions
   Depends on: theme.js  (loaded before this file)
   ═══════════════════════════════════════════════════════════ */

// ── Bootstrap ─────────────────────────────────────────────────────────────────
applyTheme(currentTheme);

// ── Theme toggle ──────────────────────────────────────────────────────────────
document.getElementById('themeBtn').addEventListener('click', () => {
  applyTheme(resolveTheme(currentTheme) === 'dark' ? 'light' : 'dark');
});

// ── Language switch (a link to the other version: remember it, keep the section)
document.getElementById('langBtn').addEventListener('click', (e) => {
  const link = e.currentTarget;
  try { localStorage.setItem('lang', link.dataset.lang); } catch (err) { }
  link.href = link.getAttribute('href').split('#')[0] + location.hash;
});

// ── Mobile hamburger ──────────────────────────────────────────────────────────
const hamburger = document.getElementById('hamburger');
const navLinks  = document.getElementById('navLinks');

hamburger.addEventListener('click', () => navLinks.classList.toggle('open'));

navLinks.querySelectorAll('a').forEach(a =>
  a.addEventListener('click', () => navLinks.classList.remove('open'))
);

// ── Reference tabs ────────────────────────────────────────────────────────────
document.querySelectorAll('.ref-tab').forEach(tab => {
  tab.addEventListener('click', () => {
    document.querySelectorAll('.ref-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.ref-grid').forEach(g => g.classList.remove('active'));
    tab.classList.add('active');
    document.getElementById('tab-' + tab.dataset.tab).classList.add('active');
  });
});

// ── Scroll animations (fade-up) ───────────────────────────────────────────────
const fadeObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;
    entry.target.classList.add('visible');
    fadeObserver.unobserve(entry.target);
  });
}, { threshold: 0.12 });

document.querySelectorAll('.fade-up').forEach(el => fadeObserver.observe(el));

// ── Skill bar animation (triggered when About section enters viewport) ─────────
const skillObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;
    document.querySelectorAll('.skill-fill').forEach(bar => {
      bar.style.width = bar.getAttribute('data-target');
    });
    skillObserver.disconnect();
  });
}, { threshold: 0.1 });

const aboutSection = document.getElementById('about');
if (aboutSection) skillObserver.observe(aboutSection);
