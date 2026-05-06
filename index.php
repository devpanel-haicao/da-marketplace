<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drupal Site Templates</title>
    <!-- Thêm font chữ từ Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Thêm thư viện icon FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./assets/style.css">
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
                <a href="#" class="support-btn">Support Drupal</a>
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
        <div class="container">
            <h1>Site templates built for the real world</h1>
            <p>Site templates are complete, configured starting points for your Drupal website. Built for the sectors<br />where Drupal excels, by the agencies who help build Drupal itself.</p>
            <div class="hero-action">
                <a href="#" class="btn-white">Become a creator  &rarr;</a>
            </div>
        </div>
    </section>

    <main class="main">
        <div class="container">
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
                <a href="site-template/byte/" target="_blank" class="card">
                    <img src="./images/site-template/card-1.webp" alt="Byte">
                    <div class="card-body">
                        <h3 class="card-title">Byte</h3>
                        <p class="card-desc">A polished, accessible Drupal theme built for K-12 charter schools, private academies, and educational institutions. Meridian Charter delivers a professional school website out of the box with dedicated layouts for academics, admissions, athletics, events, staff directories, and more — powered by Dripyard.</p>
                        <div class="tags">
                            <span class="tag">Education</span>
                            <span class="tag">Events</span>
                        </div>
                        <div class="card-footer">Free</div>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="site-template/haven/" target="_blank" class="card">
                    <img src="./images/site-template/card-2.webp" alt="Haven">
                    <div class="card-body">
                        <h3 class="card-title">Haven</h3>
                        <p class="card-desc">Designed for non-profit sites, this template features a bright, warm design that can be adapted for many use cases. It comes pre-configured with landing pages, blog, projects and people profiles, as well as newsletter signup, donation add-ons and more.</p>
                        <div class="tags">
                            <span class="tag">Blog & Editorial</span>
                            <span class="tag">Nonprofit & Community</span>
                            <span class="tag">Wellness</span>
                        </div>
                        <div class="card-footer">Free</div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="https://stage.drupalforge.org/template/drupal-cms" target="_blank" class="card">
                    <img src="./images/site-template/card-3.webp" alt="Healthcare">
                    <div class="card-body">
                        <h3 class="card-title">Healthcare</h3>
                        <p class="card-desc">Healthcare is a professional, patient-centered Drupal site template that gets medical clinics and healthcare organizations online in weeks instead of months, with beautiful design, accessibility compliance, and powerful patient discovery features built in.</p>
                        <div class="tags">
                            <span class="tag">Healthcare</span>
                            <span class="tag">Wellness</span>
                        </div>
                        <div class="card-footer">Free</div>
                    </div>
                </a>

                <!-- Card 4 -->
                <a href="https://stage.drupalforge.org/template/drupal-cms" target="_blank" class="card">
                    <img src="./images/site-template/card-4.webp" alt="Dripyard - Meridian Charter">
                    <div class="card-body">
                        <h3 class="card-title">Dripyard - Meridian Charter</h3>
                        <p class="card-desc">A polished, accessible Drupal theme built for K-12 charter schools, private academies, and educational institutions. Meridian Charter delivers a professional school website out of the box with dedicated layouts for academics, admissions, athletics, events, staff directories, and more — powered by Dripyard.</p>
                        <div class="tags">
                            <span class="tag">Education</span>
                            <span class="tag">Events</span>
                        </div>
                        <div class="card-footer">$899.00</div>
                    </div>
                </a>

                <!-- Card 5 -->
                <a href="https://stage.drupalforge.org/template/drupal-cms" target="_blank" class="card">
                    <img src="./images/site-template/card-5.webp" alt="Provus EDU">
                    <div class="card-body">
                        <h3 class="card-title">Provus EDU</h3>
                        <p class="card-desc">A robust, Bootstrap-based educational theme designed specifically for schools, colleges, and universities. Optimized for Drupal Canvas to manage academic programs, course catalogs, and campus life with ease.</p>
                        <div class="tags">
                            <span class="tag">Education</span>
                        </div>
                        <div class="card-footer">Free</div>
                    </div>
                </a>

                <!-- Card 6 -->
                <a href="https://stage.drupalforge.org/template/drupal-cms" target="_blank" class="card">
                    <img src="./images/site-template/card-6.webp" alt="CareSphere - Non-Profit / NGO Website Template">
                    <div class="card-body">
                        <h3 class="card-title">CareSphere - Non-Profit / NGO Website Template</h3>
                        <p class="card-desc">CareSphere is a site template designed for non-profit organizations, community groups, and social initiatives that need a clear and effective online presence. It provides a structured starting point for communicating an organization’s mission, showcasing programs and impact, sharing updates, and encouraging community engagement. </p>
                        <div class="tags">
                            <span class="tag">Nonprofit & Community</span>
                        </div>
                        <div class="card-footer">Free</div>
                    </div>
                </a>

                <!-- Card 7 -->
                <a href="https://stage.drupalforge.org/template/drupal-cms" target="_blank" class="card">
                    <img src="./images/site-template/card-7.webp" alt="Morpht - Convivial Gov">
                    <div class="card-body">
                        <h3 class="card-title">Morpht - Convivial Gov</h3>
                        <p class="card-desc">A starter site for government built on Drupal Canvas and Recipes providing editor-friendly components for best-practice government sites. This is a freemium site template.</p>
                        <div class="tags">
                            <span class="tag">Blog & Editorial</span>
                            <span class="tag">Government</span>
                        </div>
                        <div class="card-footer">Free</div>
                    </div>
                </a>

                <!-- Card 8 -->
                <a href="https://stage.drupalforge.org/template/drupal-cms" target="_blank" class="card">
                    <img src="./images/site-template/card-8.webp" alt="Pulse – Healthcare & Content Platform Site Template">
                    <div class="card-body">
                        <h3 class="card-title">Pulse – Healthcare & Content Platform Site Template</h3>
                        <p class="card-desc">Pulse is a Drupal CMS site template designed to quickly bootstrap healthcare, research, and content-driven websites using modern Drupal CMS capabilities such as Canvas layouts, reusable design system components, and pre-configured content structures.</p>
                        <div class="tags">
                            <span class="tag">Healthcare</span>
                            <span class="tag">Nonprofit & Community</span>
                        </div>
                        <div class="card-footer">Free</div>
                    </div>
                </a>

                <!-- Card 9 -->
                <a href="https://stage.drupalforge.org/template/drupal-cms" target="_blank" class="card">
                    <img src="./images/site-template/card-9.webp" alt="Archimedes">
                    <div class="card-body">
                        <h3 class="card-title">Archimedes</h3>
                        <p class="card-desc">Archimedes is a Drupal CMS site template designed for school websites. It includes landing pages, blog and news functionality, newsletter sign-up, and a range of features tailored to educational organisations.</p>
                        <div class="tags">
                            <span class="tag">Education</span>
                        </div>
                        <div class="card-footer">Free</div>
                    </div>
                </a>

                <!-- Card 10 -->
                <a href="https://stage.drupalforge.org/template/drupal-cms" target="_blank" class="card">
                    <img src="./images/site-template/card-10.webp" alt="Local">
                    <div class="card-body">
                        <h3 class="card-title">Local</h3>
                        <p class="card-desc">Local is a Drupal CMS site template for organisations that help people find the services and information they need — local councils, community support services and community participation organisations.</p>
                        <div class="tags">
                            <span class="tag">Government</span>
                            <span class="tag">Nonprofit & Community</span>
                        </div>
                        <div class="card-footer">Free</div>
                    </div>
                </a>

                <!-- Card 11 -->
                <a href="https://stage.drupalforge.org/template/drupal-cms" target="_blank" class="card">
                    <img src="./images/site-template/card-11.webp" alt="Convene - Event / Conference Marketing Site Template">
                    <div class="card-body">
                        <h3 class="card-title">Convene - Event / Conference Marketing Site Template</h3>
                        <p class="card-desc">The Event / Conference Marketing Site Template provides a ready-to-use structure for creating websites for conferences, festivals, workshops, summits, and community events. It includes a clear structure for presenting event details such as schedules, speakers, venue information, and registration links.</p>
                        <div class="tags">
                            <span class="tag">Events</span>
                        </div>
                        <div class="card-footer">Free</div>
                    </div>
                </a>

            </section>
        </div>
    </main>

    <!-- CTA Banner -->
    <div class="cta-banner-wrap">
        <div class="container">
            <div class="cta-banner">
                <span>Are you looking for a partner to help you build your site?</span>
                <a href="#">Check out our Drupal Certified Partner Marketplace</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-left">
            <div class="footer-logo">
                <img src="./logo-footer.svg" alt="New Drupal template">
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
                <ul class="footer__social-menu">
                    <li class="footer__social-menu-item">
                        <a href="https://www.facebook.com/DrupalOpenSource/">
                            <img src="./images/socials/facebook-logo.svg" alt="facebook logo">
                            <span class="visually-hidden">facebook</span>
                        </a>
                    </li>
                    <li class="footer__social-menu-item">
                        <a href="https://www.instagram.com/drupalassociation/">
                            <img src="./images/socials/instagram-logo.svg" alt="instagram logo">
                            <span class="visually-hidden">instagram</span>
                        </a>
                    </li>
                    <li class="footer__social-menu-item">
                        <a href="https://www.linkedin.com/company/drupal-project/">
                            <img src="./images/socials/linkedin-logo.svg" alt="linkedin logo">
                            <span class="visually-hidden">linkedin</span>
                        </a>
                    </li>
                    <li class="footer__social-menu-item">
                        <a href="https://mastodon.social/@drupal">
                            <img src="./images/socials/mastodon-logo.svg" alt="mastodon logo">
                            <span class="visually-hidden">mastodon</span>
                        </a>
                    </li>
                    <li class="footer__social-menu-item">
                        <a href="https://www.drupal.org/slack">
                            <img src="./images/socials/slack-logo.svg" alt="slack logo">
                            <span class="visually-hidden">slack</span>
                        </a>
                    </li>
                    <li class="footer__social-menu-item">
                        <a href="https://www.youtube.com/@DrupalAssociation">
                            <img src="./images/socials/youtube-logo.svg" alt="youtube logo">
                            <span class="visually-hidden">youtube</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Bottom Bar -->
    <div class="footer__secondary-section">
      <div class="footer__sponsorship">
        <a class="footer__sponsorship-logo" href="https://www.tag1.com/?utm_source=DA&amp;utm_medium=referral&amp;utm_campaign=drupal-org-footer&quot;"><img alt="Tag1 logo" src="./logo-footer-bottom.svg"></a>
        <a class="footer__sponsorship-management" href="https://www.tag1.com/?utm_source=DA&amp;utm_medium=referral&amp;utm_campaign=drupal-org-footer">Tag1 provides infrastructure management for Drupal.org</a>
        <a class="footer__sponsorship-support" href="https://d7es.tag1.com/plans?utm_source=DA&amp;utm_medium=footer&amp;utm_campaign=EOL&amp;utm_id=d7es&amp;utm_term=plans&amp;utm_content=Dec">Need a Drupal 7 extended support partner? <span>Consider Tag1.</span></a>
      </div>
      <div class="footer__copyright">
        <div class="footer__copyright-trademark">
          <span>Drupal is a</span>
          <a href="https://www.drupal.org/about/trademark">registered trademark</a>
          <span>of</span>
          <a href="https://dri.es/">Dries Buytaert</a>.
        </div>
        <div class="footer__copyright-year">Copyright 2026</div>
      </div>
    </div>
    <script src="./assets/script.js"></script>
</body>
</html>
