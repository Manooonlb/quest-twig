<?php

require __DIR__ . '/../config/twig.php';

$products = ['Guitare', 'Bass', 'Trompette', 'Bonjo', 'Piano', ' Harpe', 'Lyre']; // Tableau de produits

echo $twig->render('products.html.twig', ['products' => $products]); // Appeler la méthode render() pour afficher le template en lui passant le tableau de produits
?>

