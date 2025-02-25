<?php
// URL de l'API REST Countries
$apiUrl = 'https://restcountries.com/v3.1/all';

// Récupération des données JSON depuis l'API
$data = file_get_contents($apiUrl);
$countries = json_decode($data, true); // Décodage des données JSON en tableau associatif

// Filtrage des informations importantes
$importantData = [];
foreach ($countries as $country) {
    $importantData[] = [
        'name' => $country['name']['common'], // Nom du pays
        'official_name' => $country['name']['official'], // Nom officiel
        'capital' => $country['capital'][0] ?? 'N/A', // Capitale (parfois absente)
        'region' => $country['region'], // Région
        'subregion' => $country['subregion'] ?? 'N/A', // Sous-région (parfois absente)
        'languages' => implode(", ", $country['languages'] ?? []), // Langues officielles
        'currency' => implode(", ", array_column($country['currencies'] ?? [], 'name')), // Monnaie
        'population' => $country['population'], // Population
        'area' => $country['area'], // Superficie
        'flag' => $country['flags']['png'], // Drapeau (URL de l'image)
    ];
}

// Sauvegarde des données filtrées dans un fichier JSON
file_put_contents('important_countries_data.json', json_encode($importantData, JSON_PRETTY_PRINT));

// Affichage des données importantes pour vérification
echo '<pre>';
print_r($importantData);
echo '</pre>';
?>
