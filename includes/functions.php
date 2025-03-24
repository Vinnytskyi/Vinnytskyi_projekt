<?php
function validateMenuType($type) {
    $menuTypes = ['header', 'footer'];
    return in_array($type, $menuTypes);
}
function getMenuType($type) {
    if (!validateMenuType($type)) {
        return []; 
    }

    $menu = [];
    if ($type == 'header') {
        $menu = [
            'home' => [
                'name' => 'Domov',
                'path' => 'pp.html'
            ],
            'about' => [
                'name' => 'O nás',
                'path' => '#o nas'
            ],
            'catalog' => [
                'name' => 'Katalog',
                'path' => '#kl'
            ],
            'contact' => [
                'name' => 'Kontakt',
                'path' => '#kontakt'
            ],

            'sport' => [
                'name' => 'Sport',
                'path' => 'pp2.html' 
            ],
            'classic' => [
                'name' => 'Classic',
                'path' => 'pp3.html' 
            ],
            'modern' => [
                'name' => 'Modern',
                'path' => 'pp4.html' 
            ]
        ];
    }
    return $menu;
}


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
