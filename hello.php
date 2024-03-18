<?php
// Определяем ассоциативный массив с информацией о различных городах (название => население)
$cities = [
    "Нью-Йорк" => 8537673,
    "Токио" => 9273000,
    "Шанхай" => 24150000,
    "Москва" => 12615882,
];

// Находим город с самым большим населением
$max_population = 0;
$max_population_city = "";

foreach ($cities as $city => $population) {
    if ($population > $max_population) {
        $max_population = $population;
        $max_population_city = $city;
    }
}

echo "Город с самым большим населением: $max_population_city (Население: $max_population)";
?>





