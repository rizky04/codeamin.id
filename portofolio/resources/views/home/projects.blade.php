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
    @foreach($data as $project)
        <div class="project-card reveal">
            <div class="image-box">
                @if($project->thumbnail)
                    <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}">
                @else
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800" alt="Placeholder">
                @endif
            </div>
            <div class="content-box">
                <span class="year">{{ $project->year }} / {{ strtoupper($project->type) }}</span>
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>

                <div class="tech-stack">
                    @if($project->tools)
                        @foreach(explode(',', $project->tools) as $tool)
                            <span class="tech-item">#{{ trim($tool) }}</span>
                        @endforeach
                    @endif
                </div>

                {{-- Tombol Link Optional --}}
                <div style="margin-top: 20px; display: flex; gap: 15px;">
                    @if($project->github)
                        <a href="{{ $project->github }}" target="_blank" style="color: var(--accent); text-decoration: none; font-size: 0.8rem;"><i class="fab fa-github"></i> GitHub</a>
                    @endif
                    @if($project->link)
                        <a href="{{ $project->link }}" target="_blank" style="color: var(--accent); text-decoration: none; font-size: 0.8rem;"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
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
