<?php
// functions.php

// Funkcia na overenie platnosti typu menu
function validateMenuType($type) {
    $menuTypes = ['header', 'footer'];
    return in_array($type, $menuTypes);
}

// Funkcia na načítanie dát pre menu podľa zadaného typu
function getMenuType($type) {
    if (!validateMenuType($type)) {
        return []; // Ak typ nie je platný, vráti prázdne pole
    }

    $menu = [];
    if ($type == 'header') {
        $menu = [
            'home' => [
                'name' => 'Domov',
                'path' => 'pp.html'
            ],
            'sport' => [
                'name' => 'Sport',
                'path' => 'pp2.html' // Nový odkaz pre stránku pp2
            ],
            'classic' => [
                'name' => 'Classic',
                'path' => 'pp3.html' // Nový odkaz pre stránku pp3
            ],
            'modern' => [
                'name' => 'Modern',
                'path' => 'pp4.html' // Nový odkaz pre stránku pp4
            ]
        ];
    }
    return $menu;
}

// Funkcia na generovanie HTML pre menu
function printMenu($menu) {
    if (empty($menu)) return '';
    $html = '<ul class="navbar-nav">';
    foreach ($menu as $menuName => $menuData) {
        $html .= '<li class="nav-item"><a class="nav-link text-white" href="' . $menuData['path'] . '">' . $menuData['name'] . '</a></li>';
    }
    $html .= '</ul>';
    return $html;
}
?>
