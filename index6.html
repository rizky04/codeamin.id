<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeamin.id | Fullstack Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --bg: #050505;
            --accent: #00f2ff;
            --accent-gradient: linear-gradient(90deg, #00f2ff, #0072ff);
            --glass: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.1);
            --text: #ffffff;
            --secondary: #888888;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; cursor: none; }

        body {
            background-color: var(--bg);
            color: var(--text);
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* --- CUSTOM CURSOR --- */
        #cursor {
            width: 15px; height: 15px; background: var(--accent);
            border-radius: 50%; position: fixed; pointer-events: none;
            z-index: 10000; mix-blend-mode: difference;
            box-shadow: 0 0 20px var(--accent);
        }

        /* --- NAVIGATION --- */
        nav {
            position: fixed; top: 0; width: 100%; padding: 25px 8%;
            display: flex; justify-content: space-between; align-items: center;
            z-index: 1000; backdrop-filter: blur(15px); border-bottom: 1px solid var(--glass-border);
        }
        .logo { font-weight: 800; font-size: 1.5rem; letter-spacing: -1px; color: var(--accent); }
        .nav-links a { color: var(--text); text-decoration: none; margin-left: 30px; font-size: 0.9rem; opacity: 0.7; transition: 0.3s; }
        .nav-links a:hover { opacity: 1; color: var(--accent); }

        /* --- HERO --- */
        .hero {
            height: 100vh; display: flex; flex-direction: column;
            justify-content: center; align-items: center; text-align: center; padding: 0 10%;
        }
        .hero h1 { font-size: clamp(2.5rem, 12vw, 8rem); font-weight: 800; line-height: 0.9; letter-spacing: -4px; }
        .hero h1 span { background: var(--accent-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .hero p { font-size: 1.2rem; color: var(--secondary); margin-top: 25px; max-width: 600px; font-weight: 400; }

        /* --- BENTO GRID --- */
        .section-padding { padding: 100px 8%; }
        .section-title { font-size: 2.5rem; margin-bottom: 50px; text-align: left; font-weight: 800; }
        .section-title span { color: var(--accent); }

        .bento-grid {
            display: grid; grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: 300px; gap: 20px;
        }
        .card {
            background: var(--glass); border: 1px solid var(--glass-border);
            border-radius: 24px; padding: 30px; position: relative;
            overflow: hidden; display: flex; flex-direction: column; justify-content: flex-end;
            transition: 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .card:hover { border-color: var(--accent); transform: translateY(-10px); background: rgba(255, 255, 255, 0.05); }
        .card.large { grid-column: span 2; }
        .card h3 { font-size: 1.6rem; margin-bottom: 5px; font-weight: 700; }
        .card p { color: var(--secondary); font-size: 0.95rem; }
        .card-tag { position: absolute; top: 20px; left: 20px; font-size: 0.7rem; background: var(--accent); color: #000; padding: 4px 12px; border-radius: 20px; font-weight: 800; z-index: 2; }

        /* --- MORE PROJECTS BUTTON --- */
        .more-projects { margin-top: 40px; text-align: center; }
        .view-all-btn {
            background: transparent; border: 1px solid var(--accent); color: var(--accent);
            padding: 15px 40px; border-radius: 50px; font-weight: 700; font-size: 1rem;
            transition: 0.3s; margin-top: 40px;
        }
        .view-all-btn:hover { background: var(--accent); color: #000; box-shadow: 0 0 20px rgba(0, 242, 255, 0.4); }

        /* --- OVERLAY MODAL --- */
        #project-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(5, 5, 5, 0.99); z-index: 2000;
            display: none; opacity: 0; overflow-y: auto; padding: 100px 8%;
        }
        .close-overlay {
            position: fixed; top: 40px; right: 8%; font-size: 2.5rem;
            color: var(--accent); z-index: 2001; transition: 0.3s;
        }
        .close-overlay:hover { transform: rotate(90deg); color: #fff; }
        
        .overlay-content h2 { font-size: 3rem; margin-bottom: 50px; text-align: center; font-weight: 800; }
        
        /* Grid in Overlay */
        .project-grid-full {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .archive-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            overflow: hidden;
            transition: 0.4s;
        }
        .archive-card:hover { transform: translateY(-10px); border-color: var(--accent); }
        
        .archive-img {
            width: 100%;
            height: 180px;
            background: #111; /* Placeholder if no image */
            overflow: hidden;
        }
        .archive-img img {
            width: 100%; height: 100%; object-fit: cover; opacity: 0.6; transition: 0.5s;
        }
        .archive-card:hover .archive-img img { opacity: 1; transform: scale(1.1); }
        
        .archive-info { padding: 25px; }
        .archive-info h4 { font-size: 1.3rem; margin-bottom: 10px; color: var(--accent); }
        .archive-info p { font-size: 0.9rem; color: var(--secondary); margin-bottom: 15px; }
        .archive-tag { font-size: 0.7rem; font-family: monospace; color: var(--text); opacity: 0.5; }

        /* --- CONTACT --- */
        .contact-section { background: #080808; border-radius: 60px 60px 0 0; border-top: 1px solid var(--glass-border); }
        .social-icons { display: flex; gap: 15px; margin-bottom: 40px; justify-content: center; flex-wrap: wrap; }
        .social-icons a { 
            width: 55px; height: 55px; border-radius: 50%; background: var(--glass);
            display: flex; align-items: center; justify-content: center;
            color: var(--text); font-size: 1.3rem; text-decoration: none; border: 1px solid var(--glass-border);
            transition: 0.4s;
        }
        .social-icons a:hover { background: var(--accent); color: #000; transform: translateY(-5px) rotate(8deg); }

        .footer-content { text-align: center; }
        .email-link { font-size: clamp(1.2rem, 6vw, 4.5rem); font-weight: 800; text-decoration: none; color: var(--text); transition: 0.3s; letter-spacing: -2px; }
        .email-link:hover { color: var(--accent); }
        
        .footer-bottom { margin-top: 80px; padding-top: 30px; border-top: 1px solid var(--glass-border); display: flex; justify-content: space-between; color: var(--secondary); font-size: 0.85rem; }

        @media (max-width: 900px) {
            .bento-grid { grid-template-columns: 1fr; grid-auto-rows: auto; }
            .card.large { grid-column: span 1; }
            .card { min-height: 280px; }
            .project-grid-full { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <div id="cursor"></div>

    <nav>
        <div class="logo">CODEAMIN.ID</div>
        <div class="nav-links">
            <a href="#work">Work</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <section class="hero">
        <p class="reveal" style="color: var(--accent); margin-bottom: 10px; letter-spacing: 2px; font-weight: 600;">PORTFOLIO 2026</p>
        <h1 class="reveal">CODEAMIN<span>.ID</span></h1>
        <p class="reveal">Saya seorang Full-stack Developer yang membangun solusi digital dari Bangkalan untuk dunia. Fokus pada skalabilitas dan estetika.</p>
    </section>

    <section id="work" class="section-padding">
        <h2 class="section-title reveal">Featured <span>Work</span></h2>
        <div class="bento-grid">
            <div class="card large reveal">
                <span class="card-tag">SYSTEM</span>
                <h3>Puskesmas Digital App</h3>
                <p>Digitalisasi manajemen kesehatan pasca-pandemi dengan sistem cloud terintegrasi.</p>
            </div>
            <div class="card reveal">
                <span class="card-tag">IOT</span>
                <h3>Monitoring Ikan</h3>
                <p>Sistem cerdas pemantau ekosistem air menggunakan Node.js dan sensor real-time.</p>
            </div>
            <div class="card reveal">
                <span class="card-tag">SECURITY</span>
                <h3>Multi-role Auth</h3>
                <p>Arsitektur keamanan login tingkat lanjut untuk skala Enterprise.</p>
            </div>
            <div class="card large reveal">
                <span class="card-tag">REAL-TIME</span>
                <h3>Private Chat App</h3>
                <p>Platform komunikasi terenkripsi menggunakan WebSockets untuk performa tinggi.</p>
            </div>
        </div>

        <!-- <div class="more-projects">
            <button class="view-all-btn reveal" id="btn-view-all">VIEW ALL PROJECTS</button>
        </div> -->
        <div class="more-projects">
    <a href="projects.html" class="view-all-btn reveal" style="text-decoration: none; display: inline-block;">VIEW ALL PROJECTS</a>
</div>
    </section>

    <div id="project-overlay">
        <a href="javascript:void(0)" class="close-overlay" id="btn-close-overlay"><i class="fas fa-times"></i></a>
        <div class="overlay-content">
            <h2>Project <span>Archive</span></h2>
            
            <div class="project-grid-full">
                <div class="archive-card">
                    <div class="archive-img">
                        <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?q=80&w=800" alt="Inventory">
                    </div>
                    <div class="archive-info">
                        <h4>Warehouse System</h4>
                        <p>Manajemen stok otomatis dengan fitur barcode scanner dan laporan bulanan PDF.</p>
                        <span class="archive-tag">/ PHP LARAVEL / 2024</span>
                    </div>
                </div>

                <div class="archive-card">
                    <div class="archive-img">
                        <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?q=80&w=800" alt="Agency">
                    </div>
                    <div class="archive-info">
                        <h4>Agency Landing Page</h4>
                        <p>Website interaktif untuk agensi kreatif dengan animasi ScrollReveal yang halus.</p>
                        <span class="archive-tag">/ HTML CSS JS / 2023</span>
                    </div>
                </div>

                <div class="archive-card">
                    <div class="archive-img">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=800" alt="Payment">
                    </div>
                    <div class="archive-info">
                        <h4>Payment Gateway</h4>
                        <p>Integrasi Midtrans untuk pembayaran otomatis tiket event online.</p>
                        <span class="archive-tag">/ NODE.JS / 2023</span>
                    </div>
                </div>

                <div class="archive-card">
                    <div class="archive-img">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=800" alt="School">
                    </div>
                    <div class="archive-info">
                        <h4>School Management</h4>
                        <p>Sistem informasi akademik sekolah mencakup nilai, absen, dan SPP digital.</p>
                        <span class="archive-tag">/ VUE JS / 2023</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="contact" class="section-padding contact-section">
        <div class="footer-content">
            <h2 class="reveal" style="margin-bottom: 20px; opacity: 0.5;">HUBUNGI SAYA</h2>
            <a href="mailto:admin@codeamin.id" class="email-link reveal">admin@codeamin.id</a>

            <div class="social-icons reveal" style="margin-top: 50px;">
                <a href="https://instagram.com/codeamin" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://tiktok.com/@codeamin" title="TikTok"><i class="fab fa-tiktok"></i></a>
                <a href="https://threads.net/@codeamin" title="Threads"><i class="fa-brands fa-threads"></i></a>
                <a href="https://wa.me/628123456789" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://linkedin.com/in/codeamin" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
            
            <div class="footer-bottom">
                <p>© 2026 Codeamin.id. All Rights Reserved.</p>
                <p>Designed by Codeamin — Bangkalan, ID</p>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        const cursor = document.getElementById('cursor');
        const overlay = document.getElementById('project-overlay');
        const btnViewAll = document.getElementById('btn-view-all');
        const btnCloseOverlay = document.getElementById('btn-close-overlay');

        // Cursor Movement
        document.addEventListener('mousemove', (e) => {
            gsap.to(cursor, { x: e.clientX - 7, y: e.clientY - 7, duration: 0.3, ease: "power3.out" });
        });

        // Overlay Logic
        btnViewAll.addEventListener('click', () => {
            overlay.style.display = 'block';
            gsap.to(overlay, { opacity: 1, duration: 0.5, ease: "power2.out" });
            gsap.from(".archive-card", { 
                y: 50, 
                opacity: 0, 
                stagger: 0.15, 
                duration: 0.8, 
                delay: 0.2,
                ease: "power4.out"
            });
            document.body.style.overflow = 'hidden';
        });

        btnCloseOverlay.addEventListener('click', () => {
            gsap.to(overlay, { opacity: 0, duration: 0.4, onComplete: () => {
                overlay.style.display = 'none';
                document.body.style.overflow = 'auto';
            }});
        });

        // GSAP Revelations
        gsap.registerPlugin(ScrollTrigger);
        document.querySelectorAll('.reveal').forEach((el) => {
            gsap.from(el, {
                scrollTrigger: { trigger: el, start: "top 92%" },
                y: 40, opacity: 0, duration: 1.2, ease: "power4.out"
            });
        });

        // Hover Effect
        const hoverItems = document.querySelectorAll('a, button, .card, .archive-card');
        hoverItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                gsap.to(cursor, { scale: 4, backgroundColor: "rgba(0, 242, 255, 0.15)", duration: 0.3 });
            });
            item.addEventListener('mouseleave', () => {
                gsap.to(cursor, { scale: 1, backgroundColor: "#00f2ff", duration: 0.3 });
            });
        });
    </script>
</body>
</html>