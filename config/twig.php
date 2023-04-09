<?php

require __DIR__ . '/../vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/../src/View'); // Utiliser un chemin relatif pour charger le dossier contenant les templates
$twig = new Environment($loader); // Créer une instance de Twig

$twig->addExtension(new Twig\Extension\DebugExtension());

