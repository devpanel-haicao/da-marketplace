<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drupal Site Templates</title>
    <!-- Thêm font chữ từ Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Thêm thư viện icon FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* CSS Reset & Variables */
        :root {
            --primary-blue: #005cb9;
            --dark-blue: #0b1a30;
            --text-main: #333;
            --text-muted: #666;
            --bg-light: #f3f4f6;
            --border-color: #e5e7eb;
            --font-family: 'Open Sans', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-family);
            color: var(--text-main);
            background-color: var(--bg-light);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* --- HEADER --- */
        header {
            background-color: #fff;
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
            position: absolute;
            width: calc(100% - 40px);
            left: 20px;
            right: 20px;
            top: 20px;
            border-radius: 10px;
            z-index: 99;
        }

        .logo-nav {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .logo {
          width: 142px;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            align-items: center;
        }

        .nav-links a:hover {
            color: var(--primary-blue);
        }

        .support-btn {
            border: 1px solid var(--primary-blue);
            padding: 5px 15px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .btn-get-started {
            background-color: var(--primary-blue);
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: 600;
        }

        /* --- HERO SECTION --- */
        .hero {
            background: linear-gradient(135deg, #004488, #0077cc);
            /* Có thể thay bằng ảnh pattern nếu có */
            color: #fff;
            padding: 150px 5% 80px 5%;
            text-align: left;
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            max-width: 800px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn-white {
            background-color: #fff;
            color: var(--primary-blue);
            padding: 12px 24px;
            border-radius: 4px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        /* --- FILTER SECTION --- */
        .filters {
            background-color: #fff;
            margin: 0 5%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            gap: 20px;
            align-items: flex-end;
            transform: translateY(-30px);
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
            flex: 1;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 600;
        }

        .form-group input, .form-group select {
            padding: 10px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            font-family: inherit;
        }

        .btn-apply {
            background-color: #e0f2fe;
            color: var(--primary-blue);
            border: none;
            padding: 10px 30px;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            height: 40px;
        }

        /* --- TEMPLATES GRID --- */
        .templates-container {
            padding: 20px 5% 60px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid var(--border-color);
        }

        .card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .card-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .card-desc {
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tag {
            font-size: 12px;
            padding: 4px 12px;
            border: 1px solid var(--border-color);
            border-radius: 15px;
            color: var(--text-muted);
        }

        .card-footer {
            border-top: 1px solid var(--border-color);
            padding-top: 15px;
            font-weight: 600;
            color: var(--text-main);
        }

        /* --- CTA BANNER --- */
        .cta-banner {
            background-color: #e0f2fe;
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cta-banner a {
            font-weight: 700;
            color: var(--primary-blue);
            text-decoration: underline;
        }

        /* --- FOOTER --- */
        footer {
            display: flex;
            min-height: 250px;
        }

        .footer-left {
            background-color: var(--dark-blue);
            color: #fff;
            width: 50%;
            padding: 50px 5%;
            display: flex;
            gap: 50px;
        }

        .footer-links {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px 40px;
        }

        .footer-links a {
            font-size: 14px;
            font-weight: 600;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .footer-right {
            background: linear-gradient(135deg, #4da6ff, #d9b3ff);
            width: 50%;
            padding: 50px 5%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-icons {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            font-size: 30px;
            color: var(--dark-blue);
        }

        /* --- BOTTOM BAR --- */
        .bottom-bar {
            background-color: #e5e7eb;
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: var(--text-muted);
        }

        .bottom-bar img {
            height: 20px;
            margin-right: 10px;
            vertical-align: middle;
        }

        /* Responsive cơ bản */
        @media (max-width: 1024px) {
            .nav-links { display: none; } /* Giấu menu trên mobile, cần làm menu hamburger thực tế */
            .filters { flex-direction: column; transform: none; margin: 20px 5%; }
            .btn-apply { width: 100%; }
            footer { flex-direction: column; }
            .footer-left, .footer-right { width: 100%; }
            .cta-banner { flex-direction: column; gap: 10px; text-align: center; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo-nav">
            <div class="logo">
              <img src="logo.svg" alt="logo" width="142" height="51">
            </div>
            <nav class="nav-links">
                <a href="#">Discover Drupal</a>
                <a href="#">Build with Drupal</a>
                <a href="#">Partners & Services</a>
                <a href="#">Community</a>
                <a href="#" class="support-btn">Support Drupal <i class="fa-regular fa-heart"></i></a>
            </nav>
        </div>
        <div class="header-actions">
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="#"><i class="fa-regular fa-user"></i></a>
            <a href="#" class="btn-get-started">Get Started &rarr;</a>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <h1>Site templates built for the real world</h1>
        <p>Site templates are complete, configured starting points for your Drupal website. Built for the sectors where Drupal excels, by the agencies who help build Drupal itself.</p>
        <a href="#" class="btn-white">Become a creator &rarr;</a>
    </section>

    <!-- Filters -->
    <form class="filters" id="filterForm">
        <div class="form-group">
            <label for="price">Price lower than (USD)</label>
            <input type="text" id="price" placeholder="e.g. 100">
        </div>
        <div class="form-group">
            <label for="accessibility">Accessibility</label>
            <select id="accessibility">
                <option>- Any -</option>
                <option>WCAG 2.1 AA</option>
                <option>WCAG 2.1 AAA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" placeholder="Search by title">
        </div>
        <button type="submit" class="btn-apply">Apply</button>
    </form>

    <!-- Templates Grid -->
    <section class="templates-container">
        
        <!-- Card 1 -->
        <a href="https://www.drupalforge.org/" target="_blank" class="card">
            <img src="https://images.unsplash.com/photo-1538108149393-cebb47acddb2?auto=format&fit=crop&w=600&q=80" alt="Healthcare">
            <div class="card-body">
                <h3 class="card-title">Healthcare</h3>
                <p class="card-desc">Healthcare is a professional, patient-centered Drupal site template that gets medical clinics and healthcare organizations online in weeks instead of months, with beautiful design...</p>
                <div class="tags">
                    <span class="tag">Healthcare</span>
                    <span class="tag">Wellness</span>
                </div>
                <div class="card-footer">Free</div>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="https://www.drupalforge.org/" target="_blank" class="card">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80" alt="Byte">
            <div class="card-body">
                <h3 class="card-title">Byte</h3>
                <p class="card-desc">Designed for a SaaS product website, this template includes drag-and-drop landing pages, a blog, newsletter sign up and other features as well as curated add-ons targeted at product sites.</p>
                <div class="tags">
                    <span class="tag">Blog & Editorial</span>
                    <span class="tag">Portfolio & Agency</span>
                    <span class="tag">Technology and SaaS</span>
                </div>
                <div class="card-footer">Free</div>
            </div>
        </a>

        <!-- Card 3 -->
        <a href="https://www.drupalforge.org/" target="_blank" class="card">
            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=600&q=80" alt="Haven">
            <div class="card-body">
                <h3 class="card-title">Haven</h3>
                <p class="card-desc">Designed for non-profit sites, this template features a bright, warm design that can be adapted for many use cases. It comes pre-configured with landing pages, blog, projects and people profiles...</p>
                <div class="tags">
                    <span class="tag">Blog & Editorial</span>
                    <span class="tag">Nonprofit & Community</span>
                </div>
                <div class="card-footer">Free</div>
            </div>
        </a>

        <!-- Card 4 -->
        <a href="https://www.drupalforge.org/" target="_blank" class="card">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=600&q=80" alt="Dripyard">
            <div class="card-body">
                <h3 class="card-title">Dripyard - Meridian Charter</h3>
                <p class="card-desc">A polished, accessible Drupal theme built for K-12 charter schools, private academies, and educational institutions. Meridian Charter delivers a professional school website out of the box...</p>
                <div class="tags">
                    <span class="tag">Education</span>
                    <span class="tag">Events</span>
                </div>
                <div class="card-footer">$899.00</div>
            </div>
        </a>

        <!-- Card 5 -->
        <a href="https://www.drupalforge.org/" target="_blank" class="card">
            <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?auto=format&fit=crop&w=600&q=80" alt="Morph">
            <div class="card-body">
                <h3 class="card-title">Morph - Convivial Gov</h3>
                <p class="card-desc">A starter site for government built on Drupal Canvas and Recipes providing editor-friendly components for best-practice government sites. This is a freemium site template.</p>
                <div class="tags">
                    <span class="tag">Blog & Editorial</span>
                    <span class="tag">Government</span>
                </div>
                <div class="card-footer">Free</div>
            </div>
        </a>

        <!-- Card 6 -->
        <a href="https://www.drupalforge.org/" target="_blank" class="card">
            <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?auto=format&fit=crop&w=600&q=80" alt="CareSphere">
            <div class="card-body">
                <h3 class="card-title">CareSphere - Non-Profit / NGO</h3>
                <p class="card-desc">CareSphere is a site template designed for non-profit organizations, community groups, and social initiatives that need a clear and effective online presence...</p>
                <div class="tags">
                    <span class="tag">Nonprofit & Community</span>
                </div>
                <div class="card-footer">Free</div>
            </div>
        </a>

    </section>

    <!-- CTA Banner -->
    <div class="cta-banner">
        <span>Are you looking for a partner to help you build your site?</span>
        <a href="#">Check out our Drupal Certified Partner Marketplace</a>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-left">
            <div class="logo">
                <i class="fa-brands fa-drupal" style="font-size: 40px; color:#fff;"></i>
            </div>
            <div class="footer-links">
                <a href="#">About Drupal</a>
                <a href="#">Code of Conduct</a>
                <a href="#">News</a>
                <a href="#">Planet Drupal</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Signup for Drupal News</a>
                <a href="#">Terms of Service</a>
                <a href="#">Web Accessibility</a>
            </div>
        </div>
        <div class="footer-right">
            <div class="social-icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-mastodon"></i>
                <i class="fa-brands fa-slack"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
        </div>
    </footer>

    <!-- Bottom Bar -->
    <div class="bottom-bar">
        <div>
            <strong>TAG1</strong> provides infrastructure management for Drupal.org<br>
            Need a Drupal 7 extended support partner? <a href="#" style="text-decoration: underline;">Consider Tag1.</a>
        </div>
        <div style="text-align: right;">
            Drupal is a <a href="#" style="text-decoration: underline;">registered trademark</a> of Dries Buytaert.<br>
            Copyright 2026
        </div>
    </div>

    <!-- JavaScript xử lý sự kiện form (Mô phỏng) -->
    <script>
        document.getElementById('filterForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Ngăn form load lại trang
            
            // Lấy giá trị từ form
            const price = document.getElementById('price').value;
            const title = document.getElementById('title').value;
            
            // Log ra console hoặc hiển thị thông báo mô phỏng
            console.log(`Lọc với giá: ${price}, Tiêu đề: ${title}`);
            alert("Tính năng lọc đang được mô phỏng. Sẽ tích hợp API sau!");
        });
    </script>
</body>
</html>
