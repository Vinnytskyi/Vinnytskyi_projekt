<?php
function validateMenuType(string $type): bool
{
    // Define the valid menu types
    $menuTypes = ['header', 'footer'];
    return in_array($type, $menuTypes);  // Returns true if the $type is in the array
}

function getMenuData(string $type): array
{
    $menu = [];  // Initialize an empty menu array

    if (validateMenuType($type)) {  // Check if the menu type is valid
        if ($type === "header") {  // If it's the header menu
            $menu = [
                'home' => [
                    'name' => 'DOMOV',
                    'path' => 'pp.html',
                ],
                'about' => [
                    'name' => 'O NAS',
                    'path' => '#o nas',
                ],
                'catalog' => [
                    'name' => 'KATALOG',
                    'path' => '#kl',
                ],
                'contact' => [
                    'name' => 'KONTAKT',
                    'path' => '#kontakt',
                ]
            ];
        }
        // You can add more types like 'footer' if needed.
    }
    return $menu;  // Return the menu data
}

function printMenu(array $menu)
{
    // Loop through the $menu array and generate HTML for each item
    foreach ($menu as $menuName => $menuData) {
        echo '<li class="nav-item">';
        echo '<a class="nav-link text-white" href="' . $menuData['path'] . '">' . $menuData['name'] . '</a>';
        echo '</li>';
    }
}
?>
