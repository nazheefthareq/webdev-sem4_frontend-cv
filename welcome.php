<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nazheef CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <script defer src="js/script.js"></script>
</head>
<body>
    <nav id="desktop-nav">
        <div class="logo">Nazheef</div>
        <div class="nav">
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav">
        <div class="logo">Nazheef</div>
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li><a href="#home" onclick="toggleMenu()">Home</a></li>
                <li><a href="#about" onclick="toggleMenu()">About</a></li>
                <li><a href="#services" onclick="toggleMenu()">Services</a></li>
                <li><a href="#skills" onclick="toggleMenu()">Skills</a></li>
                <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
                <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
            </div>
        </div>
    </nav>
    <section id="hero" class="container">
        <div class="profilepic-container">
            <img src="/img/nazheef-profilepic.png" alt="Nazheef Thareq Profile Picture"
            >
        </div>
        <div class="section-text">
            <h1 class="title">VIDEO EDITING, MOTION GRAPHIC,<br>PROGRAMMING.</h1>
            <div class="btn-container">
                <button class="btn btn-hero"
                onclick="location.href='https:/wa.me/6282141186216'">Contact Me</button>
            </div>
        </div>
    </section>
    <section id="slider">
        <div class="text-slides">
            <ul>
                <li>After Effects</li>
                <li>Premiere Pro</li>
                <li>Photoshop</li>
                <li>Capcut</li>
                <li>HTML5</li>
                <li>CSS</li>
                <li>Figma</li>
            </ul>
            <ul >
                <li>After Effects</li>
                <li>Premiere Pro</li>
                <li>Photoshop</li>
                <li>Capcut</li>
                <li>HTML5</li>
                <li>CSS</li>
                <li>Figma</li>
            </ul>
        </div>
    </section>
    <section id="about" class="container">
        <p class="section-text">Get to Know More</p>
        <h1 class="title">About Me</h1>
        <div class="profilepic-container">
            <img src="/img/nazheef-profilepic.png" alt="nazheef-aboutpic" class="about-pic">
        </div>
        <div class="about-details-container">
            <div class="about-container">
                <div class="details-container">
                    <i class="fa-solid fa-briefcase"></i>
                    <h1>Experience</h1>
                    <p>4+ years <br> Video Editor</p>
                </div>
                <div class="details-container">
                    <i class="fa-solid fa-building-columns"></i>
                    <h1>Education</h1>
                    <p>S.Kom. <br>Bachelors Degree</p>
                </div>
                <div class="text-container">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe odio voluptatum magnam ullam, corporis quasi illo sed delectus modi, hic tempore ab dignissimos blanditiis quae totam quo possimus neque fugit.</p>
                </div>
            </div>
        </div>
    </section>
    <?php
    $services = [
        [
            'title' => 'Music Video',
            'title_class' => 'card-title-primary',
            'subtitle' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse neque ex nobis enim quas, quae impedit consequatur porro velit repudiandae illo eum sed error qui facere ipsam pariatur eveniet veniam.',
            'subtitle_class' => 'card-subtitle-accent'
        ],
        [
            'title' => 'Cinematic',
            'title_class' => 'card-title-accent',
            'subtitle' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse neque ex nobis enim quas, quae impedit consequatur porro velit repudiandae illo eum sed error qui facere ipsam pariatur eveniet veniam.',
            'subtitle_class' => 'card-subtitle-primary'
        ],
        [
            'title' => 'Motion Graphic',
            'title_class' => 'card-title-accent',
            'subtitle' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse neque ex nobis enim quas, quae impedit consequatur porro velit repudiandae illo eum sed error qui facere ipsam pariatur eveniet veniam.',
            'subtitle_class' => 'card-subtitle-primary'
        ],
        [
            'title' => 'Web-Dev',
            'title_class' => 'card-title-primary',
            'subtitle' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse neque ex nobis enim quas, quae impedit consequatur porro velit repudiandae illo eum sed error qui facere ipsam pariatur eveniet veniam.',
            'subtitle_class' => 'card-subtitle-accent'
        ]
    ];
    ?>
    <section id="services">
        <div class="container">
            <h1>My Services<span class="accent">//</span></h1>
        </div>
        <div class="card-container">
            <?php foreach ($services as $service): ?>
                <div class="card">
                    <h2 class="<?php echo $service['title_class']; ?>">
                        <?php echo $service['title']; ?>
                    </h2>
                    <p class="<?php echo $service['subtitle_class']; ?>">
                        <?php echo $service['subtitle']; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section id="projects" class="container">
        <div class="projects-title">
            <h1 class="subtitle-accent">my</h1>
            <h1>PROJECTS</h1></div>
        <div class="projects-card">
            <div class="projects-preview">
                <img src="/img/projects1.png" alt="nazheef-project-1">
            </div>
            <div class="projects-preview">
                <img src="img/projects2.png" alt="nazheef-project-2">
            </div>
        </div>
    </section>
    <section id="footer">
        <footer class="container">
            <div class="footer-desc">
                <p>Get in Touch</p>
                <h1>Contact Me</h1>
            </div>
            <div class="email">
                <i class="fa-solid fa-envelope"></i>
                <p>nazheefthareq15@gmail.com</p>
            </div>
        </footer>
    </section>
</body>
</html>