<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acme Web Development</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header { background: #333; color: #fff; padding: 20px 0; text-align: center; }
        nav { background: #444; text-align: center; padding: 10px 0; }
        nav a { color: white; margin: 0 15px; text-decoration: none; }
        section { padding: 40px; }
        footer { background: #333; color: #fff; text-align: center; padding: 20px 0; }
        .contact-form input, .contact-form textarea { width: 100%; padding: 10px; margin-bottom: 10px; }
        .contact-form button { padding: 10px 20px; background: #007BFF; color: #fff; border: none; }
    </style>
</head>
<body>

<header>
    <h1>Acme Web Development</h1>
    <p>We build modern, fast, and scalable websites.</p>
</header>

<nav>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
</nav>

<section id="about">
    <h2>About Us</h2>
    <p>Acme Web Development is a team of passionate developers committed to building stunning websites and web applications that deliver results.</p>
</section>

<section id="services">
    <h2>Our Services</h2>
    <ul>
        <li>Custom Website Design</li>
        <li>Responsive Web Development</li>
        <li>E-commerce Solutions</li>
        <li>SEO Optimization</li>
        <li>Website Maintenance</li>
    </ul>
</section>

<section id="contact">
    <h2>Contact Us</h2>
    <form class="contact-form" method="post" action="">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message..." rows="5" required></textarea>
        <button type="submit">Send Message</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Just a demo – not secure for production!
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        echo "<p>Thank you, <strong>$name</strong>! We'll get back to you at <strong>$email</strong>.</p>";
    }
    ?>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Acme Web Development. All rights reserved.</p>
</footer>

</body>
</html>
