<?php
// Personal Information
$fullname = "Ian M. Capasilan";
$course = "Bachelor of Science in Information Technology";
$school = "Mater Dei College";
$email = "icapasilan@gmail.com";
$address = "Macaas, Tubigon, Bohol";

$about = "Hello! I am an IT student who enjoys learning about
technology, programming, and web development. I love exploring
new things and improving my skills.";

$skills = ["Self Discipline", "Analytical Skills", "Decision Making", "Critical Thinking", "Adaptability"];

$hobbies = ["Playing Online Games", "Coding", "Listening to Music", "Watching Movies"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #101827;
            color: white;
            line-height: 1.6;
        }

        header {
            background: #1e293b;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #6366f1;
        }

        header h1 {
            color: #818cf8;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
        }

        .profile {
            text-align: center;
            background: #1e293b;
            padding: 35px;
            border-radius: 15px;
            margin-bottom: 25px;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #818cf8;
            margin-bottom: 15px;
        }

        .profile h2 {
            color: #818cf8;
            font-size: 28px;
        }

        .profile p {
            color: #cbd5e1;
        }

        .card {
            background: #1e293b;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(99, 102, 241, 0.2);
        }

        .card h2 {
            color: #818cf8;
            margin-bottom: 12px;
            border-bottom: 1px solid #475569;
            padding-bottom: 8px;
        }

        .card p, .card li {
            color: #cbd5e1;
        }

        ul {
            padding-left: 25px;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skills span {
            background: #4f46e5;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
        }

        footer {
            text-align: center;
            background: #1e293b;
            padding: 20px;
            color: #94a3b8;
            margin-top: 30px;
        }

        @media (max-width: 600px) {
            .container {
                margin: 15px auto;
                padding: 12px;
            }

            .profile {
                padding: 25px 15px;
            }

            .profile h2 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>My Personal Profile</h1>
    <p>Welcome to My Website</p>
</header>

<div class="container">

    <!-- Profile Section -->
    <section class="profile">
        <img src="Profile.jpg" alt="My Profile Photo">

        <h2><?php echo $fullname; ?></h2>
        <p><?php echo $course; ?></p>
    </section>

    <!-- About Me -->
    <section class="card">
        <h2>About Me</h2>
        <p><?php echo $about; ?></p>
    </section>

    <!-- Education -->
    <section class="card">
        <h2>Educational Background</h2>
        <p><strong>School:</strong> <?php echo $school; ?></p>
        <p><strong>Course:</strong> <?php echo $course; ?></p>
    </section>

    <!-- Skills -->
    <section class="card">
        <h2>My Skills</h2>

        <div class="skills">
            <?php foreach ($skills as $skill) { ?>
                <span><?php echo $skill; ?></span>
            <?php } ?>
        </div>
    </section>

    <!-- Hobbies -->
    <section class="card">
        <h2>Hobbies and Interests</h2>

        <ul>
            <?php foreach ($hobbies as $hobby) { ?>
                <li><?php echo $hobby; ?></li>
            <?php } ?>
        </ul>
    </section>

    <!-- Contact -->
    <section class="card">
        <h2>Contact Information</h2>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>
    </section>

</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> <?php echo $fullname; ?>. All Rights Reserved.</p>
    <p>Created using PHP, HTML5, and CSS3</p>
</footer>

</body>
</html>