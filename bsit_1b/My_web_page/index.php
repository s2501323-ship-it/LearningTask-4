<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOL LOL IT SERVICE .ORG</title>
    <style>
      
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f4f7f6;
        }

      
        #wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

      
        .site-header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #ffffff;
            text-align: center;
            padding: 2.5rem 1rem;
        }

        .site-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            letter-spacing: 1px;
        }

        .site-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            font-weight: 300;
        }

        
        .main-navigation {
            background-color: #0f2027;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .main-navigation a {
            color: #ffffff;
            text-decoration: none;
            padding: 1rem 1.5rem;
            font-size: 0.95rem;
            font-weight: 500;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .main-navigation a:hover {
            background-color: #2a5298;
            color: #ffffff;
        }

       
        .container {
            flex: 1; 
            max-width: 1100px;
            width: 100%;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

  
        .site-footer {
            background-color: #0f2027;
            color: #a0aec0;
            text-align: center;
            padding: 1.5rem 1rem;
            font-size: 0.9rem;
            border-top: 3px solid #2a5298;
        }

     
        @media (max-width: 768px) {
            .main-navigation {
                flex-direction: column;
                text-align: center;
            }
            
            .main-navigation a {
                border-bottom: 1px solid rgba(255,255,255,0.05);
                padding: 0.8rem;
            }

            .container {
                margin: 1rem;
                padding: 1.5rem;
                width: calc(100% - 2rem);
            }
            
            .site-header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <header class="site-header">
            <h1>LOL LOL IT SERVICE.ORG</h1>
            <p>Innovating the Future of IT</p>
        </header>
        
        <nav class="main-navigation">
            <a href="index.php">Home</a>
            <a href="index.php?page=about-us">About Us</a>
            <a href="index.php?page=mission-vision">Mission & Vision</a>
            <a href="index.php?page=gallery">Gallery</a>
            <a href="index.php?page=projects">Projects</a>
            <a href="index.php?page=contact-us">Contact Us</a>
        </nav>

        <main class="container">
            <?php
           
            $page = filter_input(INPUT_GET, 'page', FILTER_DEFAULT) ?: 'home';

            
            $allowed_pages = [
                'home'           => 'pages/home.php',
                'about-us'       => 'pages/about-us.php',
                'mission-vision' => 'pages/mission-vision.php',
                'gallery'        => 'pages/gallery.php',
                'projects'       => 'pages/projects.php',
                'contact-us'     => 'pages/contact-us.php'
            ];

            
            if (array_key_exists($page, $allowed_pages) && file_exists($allowed_pages[$page])) {
                include($allowed_pages[$page]);
            } else {
                http_response_code(404);
               
                if (file_exists("pages/404.php")) {
                    include("pages/404.php");
                } else {
                    echo "<h2>404 - Page Not Found</h2><p>The page you are looking for does not exist.</p>";
                }
            }
            ?>
        </main>

        <footer class="site-footer">
            <p>&copy; <?= date("Y"); ?> TechSolutions Ltd. | Secure IT Environments</p>
        </footer>
    </div>
</body>
</html>