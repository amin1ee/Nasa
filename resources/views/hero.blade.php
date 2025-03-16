<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASA Astronomy Picture of the Day</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hero {
            background-image: url('https://www.nasa.gov/sites/default/files/thumbnails/2023-02-03-apod.jpg'); 
            background-position: center;
            background-size: cover;
            height: 100vh;
            position: relative;
            display: flex;
            justify-content: center; /* Horizontally center */
            align-items: center; /* Vertically center */
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            color: white;
            text-align: center;
            z-index: 1;
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 900;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.9);
        }

        .hero-content h2 {
            font-size: 2rem;
            font-weight: 600;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.7);
            margin: 1rem 0;
        }

        .cta-button {
            padding: 1rem 2rem;
            font-size: 1.2rem;
            font-weight: bold;
            background-color: #FF6600;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s;
            position: absolute;
            bottom: 50px; 
            left: 50%;
            transform: translateX(-50%); 
        }

        .cta-button:hover {
            background-color: #FF8C00;
        }
    </style>
</head>
<body class="bg-black">

    <div class="hero">
        <div class="hero-overlay"></div>

 
        <div class="hero-content">
            <h1>Explore the Universe</h1>
            <h2>NASA Astronomy Picture of the Day</h2>
            <p>Discover the wonders of our universe through breathtaking images and explanations from NASA.</p>
        </div>

       
        <a href="/home" class="cta-button">Explore The Photo</a>
    </div>

</body>
</html>
