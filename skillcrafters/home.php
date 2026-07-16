<?php require_once 'check_auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SkillCrafters</title>
    <link rel="stylesheet" href="after_home.css">
</head>
<body>
    <header>
        <div class="logo">Skill<span>Crafters</span></div>
        <nav>
            <ul>
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="course.html">Courses</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="logout.php" class="btn">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h1>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
            <p>Learn and master new skills with our comprehensive courses</p>
            <a href="course.html" class="btn-primary">Explore Courses</a>
        </div>
        <img src="Group.png" alt="Hero Image">
    </section>

    <section class="about">
        <h2>About Us</h2>
        <div class="about-content">
            <img src="Image1.png" alt="About Image">
            <div>
                <p>We are dedicated to providing high-quality education in web development, programming, and digital skills.</p>
                <a href="about.html" class="btn-primary">Learn More</a>
            </div>
        </div>
    </section>

    <section class="courses">
        <h2>Our Courses</h2>
        <div class="course-container">
            <div class="course-box">
                <h3>Web Development</h3>
                <p>Learn HTML, CSS, JavaScript and more</p>
                <a href="web.html" class="btn-secondary">View Course</a>
            </div>
            <div class="course-box">
                <h3>Android Development</h3>
                <p>Create mobile applications</p>
                <a href="android.html" class="btn-secondary">View Course</a>
            </div>
            <div class="course-box">
                <h3>Python Programming</h3>
                <p>Master Python programming</p>
                <a href="#" class="btn-secondary">Coming Soon</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 SkillCrafters. All rights reserved.</p>
        <div>
            <a href="terms.html">Terms of Service</a> |
            <a href="privacy.html">Privacy Policy</a>
        </div>
    </footer>
</body>
</html> 