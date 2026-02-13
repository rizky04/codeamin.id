<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Projects | Codeamin.id</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --bg: #050505;
            --accent: #00f2ff;
            --accent-gradient: linear-gradient(135deg, #00f2ff, #0072ff);
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
            line-height: 1.6;
            overflow-x: hidden;
        }

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
        .logo { font-weight: 800; font-size: 1.5rem; color: var(--accent); text-decoration: none; }

        /* --- HEADER --- */
        .project-header {
            padding: 180px 8% 60px;
            text-align: left;
        }
        .project-header h1 { font-size: clamp(2.5rem, 8vw, 5rem); font-weight: 800; letter-spacing: -2px; margin-bottom: 20px; }
        .project-header span { background: var(--accent-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .filter-tags { display: flex; gap: 15px; flex-wrap: wrap; margin-top: 30px; }
        .tag { padding: 8px 20px; border-radius: 30px; border: 1px solid var(--glass-border); font-size: 0.8rem; color: var(--secondary); transition: 0.3s; }
        .tag.active, .tag:hover { border-color: var(--accent); color: var(--accent); background: rgba(0, 242, 255, 0.05); }

        /* --- PROJECT GRID --- */
        .projects-container { padding: 0 8% 100px; }
        .grid-layout {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .project-card {
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            overflow: hidden;
            transition: 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
        }

        .project-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .image-box {
            width: 100%;
            height: 240px;
            background: #111;
            position: relative;
            overflow: hidden;
        }

        .image-box img {
            width: 100%; height: 100%; object-fit: cover;
            opacity: 0.7; transition: 0.5s;
        }

        .project-card:hover .image-box img { opacity: 1; transform: scale(1.05); }

        .content-box { padding: 25px; }
        .content-box .year { font-size: 0.75rem; color: var(--accent); font-weight: 600; margin-bottom: 10px; display: block; }
        .content-box h3 { font-size: 1.4rem; margin-bottom: 10px; }
        .content-box p { color: var(--secondary); font-size: 0.9rem; margin-bottom: 20px; }

        .tech-stack { display: flex; gap: 10px; flex-wrap: wrap; }
        .tech-item { font-family: monospace; font-size: 0.7rem; opacity: 0.6; }

        .btn-back {
            display: inline-flex; align-items: center; gap: 10px;
            color: var(--text); text-decoration: none; margin-bottom: 20px;
            font-size: 0.9rem; opacity: 0.6; transition: 0.3s;
        }
        .btn-back:hover { opacity: 1; color: var(--accent); }

        @media (max-width: 600px) {
            .grid-layout { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <div id="cursor"></div>

    <nav>
        <a href="{{ route('home') }}" class="logo">CODEAMIN.ID</a>
        <div class="nav-links">
            <a href="{{ route('home') }}" style="color: white; text-decoration: none; font-size: 0.9rem;">Back Home</a>
        </div>
    </nav>

    <header class="project-header">
        <a href="{{ route('home') }}" class="btn-back"><i class="fas fa-arrow-left"></i> Back to Home</a>
        <h1 class="reveal">Showcasing All <span>Projects</span></h1>
        <p class="reveal" style="color: var(--secondary); max-width: 600px;">Kumpulan solusi digital yang saya kerjakan, mulai dari otomasi sistem hingga platform skala besar.</p>

        <div class="filter-tags reveal">
            <div class="tag active">All Work</div>
            <div class="tag">Web App</div>
            <div class="tag">IoT</div>
            <div class="tag">Mobile</div>
            <div class="tag">UI/UX</div>
        </div>
    </header>

    <main class="projects-container">
        <div class="grid-layout">

            <div class="project-card reveal">
                <div class="image-box">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800" alt="Dashboard">
                </div>
                <div class="content-box">
                    <span class="year">2026 / FINTECH</span>
                    <h3>SaaS Analytics Dashboard</h3>
                    <p>Visualisasi data real-time untuk performa penjualan UMKM dengan integrasi AI forecasting.</p>
                    <div class="tech-stack">
                        <span class="tech-item">#React</span>
                        <span class="tech-item">#Chart.js</span>
                        <span class="tech-item">#Firebase</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="image-box">
                    <img src="https://images.unsplash.com/photo-1558346490-a72e53ae2d4f?q=80&w=800" alt="IoT">
                </div>
                <div class="content-box">
                    <span class="year">2025 / AGRICULTURE</span>
                    <h3>Smart Farming Kit</h3>
                    <p>Otomasi penyiraman dan pemupukan berbasis kelembapan tanah melalui aplikasi mobile.</p>
                    <div class="tech-stack">
                        <span class="tech-item">#ESP32</span>
                        <span class="tech-item">#MQTT</span>
                        <span class="tech-item">#Flutter</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="image-box">
                    <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?q=80&w=800" alt="Messaging">
                </div>
                <div class="content-box">
                    <span class="year">2025 / SECURITY</span>
                    <h3>Enigma Messenger</h3>
                    <p>Aplikasi chatting dengan End-to-End Encryption menggunakan protokol Signal.</p>
                    <div class="tech-stack">
                        <span class="tech-item">#Socket.io</span>
                        <span class="tech-item">#NodeJS</span>
                        <span class="tech-item">#WebCrypto</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="image-box">
                    <img src="https://images.unsplash.com/photo-1557821552-17105176677c?q=80&w=800" alt="Ecommerce">
                </div>
                <div class="content-box">
                    <span class="year">2024 / E-COMMERCE</span>
                    <h3>Local Brand Marketplace</h3>
                    <p>Platform jual beli khusus brand lokal Madura dengan sistem payment gateway otomatis.</p>
                    <div class="tech-stack">
                        <span class="tech-item">#Laravel</span>
                        <span class="tech-item">#Midtrans</span>
                        <span class="tech-item">#MySQL</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="image-box">
                    <img src="https://images.unsplash.com/photo-1540350394557-8d14678e7f91?q=80&w=800" alt="Hospital">
                </div>
                <div class="content-box">
                    <span class="year">2024 / HEALTH</span>
                    <h3>E-Health Care Bangkalan</h3>
                    <p>Sistem antrean online dan rekam medis digital untuk puskesmas daerah.</p>
                    <div class="tech-stack">
                        <span class="tech-item">#PHP</span>
                        <span class="tech-item">#Bootstrap</span>
                        <span class="tech-item">#PostgreSQL</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="image-box">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=800" alt="Crypto">
                </div>
                <div class="content-box">
                    <span class="year">2024 / BLOCKCHAIN</span>
                    <h3>NFT Portfolio Tracker</h3>
                    <p>Dashboard untuk melacak aset digital lintas berbagai wallet dalam satu layar.</p>
                    <div class="tech-stack">
                        <span class="tech-item">#Next.js</span>
                        <span class="tech-item">#Ethers.js</span>
                        <span class="tech-item">#Tailwind</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="image-box">
                    <img src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?q=80&w=800" alt="Code">
                </div>
                <div class="content-box">
                    <span class="year">2023 / UTILITY</span>
                    <h3>Cloud Code Editor</h3>
                    <p>Editor kode berbasis web yang memungkinkan kolaborasi real-time seperti VS Code.</p>
                    <div class="tech-stack">
                        <span class="tech-item">#VueJS</span>
                        <span class="tech-item">#MonacoEditor</span>
                        <span class="tech-item">#Redis</span>
                    </div>
                </div>
            </div>

            <div class="project-card reveal">
                <div class="image-box">
                    <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?q=80&w=800" alt="Network">
                </div>
                <div class="content-box">
                    <span class="year">2023 / CYBER</span>
                    <h3>Vulnerability Scanner</h3>
                    <p>Tool sederhana untuk melakukan scanning celah keamanan dasar pada website.</p>
                    <div class="tech-stack">
                        <span class="tech-item">#Python</span>
                        <span class="tech-item">#Go</span>
                        <span class="tech-item">#Shell</span>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        const cursor = document.getElementById('cursor');

        // Cursor Movement
        document.addEventListener('mousemove', (e) => {
            gsap.to(cursor, { x: e.clientX - 7, y: e.clientY - 7, duration: 0.3, ease: "power3.out" });
        });

        // Animations
        gsap.registerPlugin(ScrollTrigger);

        document.querySelectorAll('.reveal').forEach((el, index) => {
            gsap.from(el, {
                y: 30,
                opacity: 0,
                duration: 1,
                delay: index * 0.1,
                ease: "power4.out",
                scrollTrigger: {
                    trigger: el,
                    start: "top 95%",
                }
            });
        });

        // Hover Effect on Cards
        document.querySelectorAll('.project-card, .tag, .btn-back, .logo').forEach(item => {
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
