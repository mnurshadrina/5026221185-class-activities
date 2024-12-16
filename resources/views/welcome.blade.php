<!-- Mutiara Nurshadrina Rafifah -->
<!-- 5026221185 -->

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>9669*
        <h1 class="ribbon">Mutiara Nurshadrina Rafifah</h1>
        <nav>
            <button class="nav-button" onclick="showSection('home')">Home</button>
            <button class="nav-button" onclick="showSection('about')">About</button>
            <button class="nav-button" onclick="showSection('skills')">Skills</button>
            <button class="nav-button" onclick="showSection('activities')">Activities</button>
            <button class="nav-button" onclick="showSection('achievements')">Achievements</button>
            <button class="nav-button" onclick="showSection('contact')">Contact</button>
            <ul>
                <li><a href="http://127.0.0.1:8000/hello">Pertemuan 1</li>
                <li><a href="http://127.0.0.1:8000/style">Pertemuan 2-1</li>
                <li><a href="http://127.0.0.1:8000/style2">Pertemuan 2-2</li>
                <li><a href="http://127.0.0.1:8000/responsive">Pertemuan 3</li>
                <li><a href="http://127.0.0.1:8000/5026221185">Pertemuan 4</li>
                <li><a href="http://127.0.0.1:8000/tugas1">Pertemuan 5</li>
                <li><a href="http://127.0.0.1:8000/form">Pertemuan 7</li>
            </ul>
        </nav>
        <button class="toggle-button" onclick="toggleNav()">☰</button>
    </header>

    <main>
        <section id="home" class="content">
            <video autoplay muted loop class="bg-video">
                <source src="{{ asset('assets')}}/images/shadrina.mp4" type="video/mp4">
            </video>
            <div class="intro">
                <h2>Bonjour!</h2>
                <p class="intro-text">I am Mutiara Nurshadrina Rafifah, a third-year Information Systems student, passionate about business development, project management, and learning new languages. A native Indonesian speaker, I am fluent in English and currently exploring Arabic, Mandarin, and French.</p>
            </div>
            <img src="{{ asset('assets')}}/images/profile.jpg" alt="Profile Photo" class="profile-photo">
        </section>

        <section id="about" class="content" style="display:none;">
            <h2>About Me</h2>
            <p>I'm a third-year Information Systems student at Institut Teknologi Sepuluh Nopember (ITS) in Surabaya, Indonesia, driven by a passion for technology's impact on human connection and a desire to contribute to positive change. My academic journey is enriched by a love for languages and internationalization activities. Currently, I'm gaining invaluable experience as a Business Development staff member at a digital agency startup, applying my skills in communication, strategy, and project management to real-world projects. Beyond academics and work, I find joy in exploring new cultures through international activities, immersing myself in literature, and connecting with people from diverse backgrounds. I believe in the power of collaboration and community, and I'm always open to new experiences and challenges. I'm excited to continue learning and growing both personally and professionally, eager to make a positive impact on the world.</p>
        </section>

        <section id="skills" class="content" style="display:none;">
            <h2>Skills</h2>
            <div class="skill">
                <h3>Project Management</h3>
                <div class="bar">
                    <div class="bar-fill" style="width: 90%;"></div>
                </div>
            </div>
            <div class="skill">
                <h3>Business Development</h3>
                <div class="bar">
                    <div class="bar-fill" style="width: 85%;"></div>
                </div>
            </div>
            <div class="skill">
                <h3>English</h3>
                <div class="bar">
                    <div class="bar-fill" style="width: 95%;"></div>
                </div>
            </div>
            <div class="skill">
                <h3>Copywriting</h3>
                <div class="bar">
                    <div class="bar-fill" style="width: 80%;"></div>
                </div>
            </div>
            <div class="skill">
                <h3>Translation</h3>
                <div class="bar">
                    <div class="bar-fill" style="width: 90%;"></div>
                </div>
            </div>
        </section>

        <section id="activities" class="content" style="display:none;">
            <h2>Activities</h2>
            <div class="activity-container">
                <div class="activity-item">
                    <img src="{{ asset('assets')}}/images/gpblbd.jpg" alt="GPBL in Sustainable Building" class="activity-img">
                    <p>GPBL in Sustainable Building: Innovation and Solution with European and Chinese students</p>
                </div>
                <div class="activity-item">
                    <img src="{{ asset('assets')}}/images/gpblsit.jpg" alt="GPBL ITS-SIT-IHI" class="activity-img">
                    <p>GPBL ITS-SIT-IHI with Japanese students</p>
                </div>
                <div class="activity-item">
                    <img src="{{ asset('assets')}}/images/kmutnbth.jpg" alt="KMUTNB Leadership Camp" class="activity-img">
                    <p>KMUTNB Leadership Camp: 21st Century Skills for Global Citizen in Bangkok Thailand</p>
                </div>
                <div class="activity-item">
                    <img src="{{ asset('assets')}}/images/hmsi.jpg" alt="Human Resource Development Staff" class="activity-img">
                    <p>Human Resource Development Staff in Himpunan Mahasiswa Sistem Informasi (HMSI)</p>
                </div>
                <div class="activity-item">
                    <img src="{{ asset('assets')}}/images/digimarly.jpg" alt="Staff of Business Development" class="activity-img">
                    <p>Staff of Business Development in Start Up 'Digimarly'</p>
                </div>
            </div>
        </section>

        <section id="achievements" class="content" style="display:none;">
            <h2>Achievements</h2>
            <div class="achievements-container">
                <div class="achievement-item">
                    <img src="{{ asset('assets')}}/images/kmutnb.jpg" alt="KMUTNB Leadership Camp" class="achievement-img">
                    <p>Awardee of KMUTNB Leadership Camp in Bangkok, Thailand 2024</p>
                </div>
                <div class="achievement-item">
                    <img src="{{ asset('assets')}}/images/gpbl.jpg" alt="Best Water Management Group" class="achievement-img">
                    <p>Best Water Management Group in Global Project Based Learning ITS-SIT-IHI 2024</p>
                </div>
                <div class="achievement-item">
                    <img src="{{ asset('assets')}}/images/3rdwinner.jpg" alt="3rd Winner of Infographic Design" class="achievement-img">
                    <p>3rd Winner of Infographic Design "AI di Sisi Guru" in Ilkom National Design Competition 2024</p>
                </div>
                <div class="achievement-item">
                    <img src="{{ asset('assets')}}/images/favwinner.jpg" alt="Favorite Winner of Infographic Design" class="achievement-img">
                    <p>Favorite Winner of Infographic Design "AI di Sisi Guru" in Ilkom National Design Competition 2024</p>
                </div>
            </div>
        </section>

        <section id="contact" class="content" style="display:none;">
            <h2>Contact Me</h2>
            <form id="contactForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <script src="{{ asset('assets')}}/js/script.js"></script>
</body>
</html>
