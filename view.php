<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\ViewName;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Definieer een array met planeten
$planeten = ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];

// Definieer de planeteninformatie
$planets = [
    [
        'name' => 'Mars',
        'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
    ],
    [
        'name' => 'Venus',
        'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
    ],
    [
        'name' => 'Earth',
        'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that is inhabited by living things.'
    ],
    [
        'name' => 'Jupiter',
        'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
    ],
];

// Controleer of de huidige URL overeenkomt met '/planeten' om de juiste weergave te selecteren
$currentUrl = $_SERVER['REQUEST_URI'];

// HTML en CSS-inhoud
echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Planeten</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
        }
        
        li {
            background-color: #fff;
            margin: 20px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            color: #333;
        }
        
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Planeten in ons zonnestelsel</h1>
HTML;

// Controleren op de huidige URL en weergeven van de juiste inhoud
if ($currentUrl === '/planeten') {
    echo '<ul>';
    foreach ($planets as $planet) {
        echo '<li>';
        echo '<h2>' . $planet['name'] . '</h2>';
        echo '<p>' . $planet['description'] . '</p>';
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo '<ul>';
    foreach ($planeten as $planet) {
        echo '<li>' . $planet . '</li>';
    }
    echo '</ul>';
}

// Sluit de HTML
echo <<<HTML
</body>
</html>
HTML;
