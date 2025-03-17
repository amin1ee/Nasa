<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASA Astronomy Picture of the Day</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .planet {
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 25%, rgba(0, 0, 0, 0.5) 100%);
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            animation: rotate 30s infinite linear;
        }

        @keyframes rotate {
            0% { transform: rotateY(0deg); }
            100% { transform: rotateY(360deg); }
        }

        .planet-img {
            border-radius: 50%;
            object-fit: cover;
        }

        .planet-container {
            perspective: 1500px;
        }

        .text-shadow {
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.8), 0 0 10px rgba(255, 255, 255, 0.8), 0 0 15px rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body class="bg-black">
    <button wire:click="export">
        Download File
    </button>
    <div class="min-h-screen flex flex-col justify-center items-center planet-container">
        
        <div class="planet w-72 h-72 mb-8 flex justify-center items-center">
            <a href="{{ $data['url'] }}">
            <img src="{{ $data['url'] }}" alt="NASA Image" class="planet-img w-full h-full">
        </a>
        </div>


        <h1 class="text-white text-5xl font-extrabold text-center text-shadow mb-4">
            NASA Astronomy Picture of the Day
        </h1>
        <h2 class="text-white text-3xl font-bold text-center text-shadow mb-8">
            {{ $data['title'] }}
        </h2>
        <h3 class="text-white text-3xl font-bold text-center text-shadow mb-8">
            {{ $data['date'] }}
        </h3>
        <p class="text-white text-lg text-center max-w-xl px-4 text-shadow">
            {{ $data['explanation'] }}
        </p>
    </div>

</body>
</html>
