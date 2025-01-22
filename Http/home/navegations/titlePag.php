<?php
$pages = [
    'pages' => 'Pages',
    'account' => 'Acount',
    'cart' => 'cart',
    'all' => 'Productos',
    'logout' => 'logout',
    'search' => 'search',
    'about_us' => 'about us',
    'contact_us' => 'contact us',
    'documentation' => 'documentation',
    'brands' => 'brands',
    'collections' => 'Collection',
    'estilos' => 'styles',
    'men' => 'men',
    'styles' => 'styles',
    'women' => 'women',
    'dolor' => 'dolor',
    'frontpage' => 'Brands',
    'blogs' => 'Pages',
    'address' => 'address',
    'login' => 'login',
    'register' => 'register'
];

// Obtener el parámetro 'action' de la URL
$query = $_SERVER['QUERY_STRING']; // Ejemplo: action=account/login
if (($query == 'action=account/login') || ($query == 'action=collections/frontpage') || ($query == 'action=collections/all')) {
    //sobre escribe direccion para evitar salto inutil
    $segmento = explode('/', $query );
    $query = 'action='. $segmento[1];
}

parse_str($query, $params);

// Verificar si 'action' está presente en la URL y dividirlo en segmentos
$action = isset($params['action']) ? $params['action'] : 'inicio'; // Valor por defecto: 'inicio'

$pathSegments = explode('/', $action); // Dividir 'account/login' en ['account', 'login']

// Inicializar el breadcrumb
$breadcrumb = [];

// Agregar el primer elemento (Home)
$breadcrumb[] = '<li class="firstItem"><a id="btnHome" href="index.php?action=inicio" class="homepage-link" title="Back to the frontpage">Home</a></li>';

// Variable para la ruta actual
$currentLink = '';

foreach ($pathSegments as $index => $segment) {
    // Verificar si el segmento es una acción válida
    if (array_key_exists($segment, $pages)) {
        // Construir la ruta
        $currentLink .= '/' . $segment; // Agregar el segmento a la ruta

        // Si es el último segmento, no agregar enlace (solo texto)
        if ($index === count($pathSegments) - 1) {
            $breadcrumb[] = '<li>' . ucfirst($pages[$segment]) . '</li>';
        } else {
            // Agregar el enlace para los segmentos anteriores
            $breadcrumb[] = '<li><a id="vuelve" href="index.php?action=' . ltrim($currentLink, '/') . '" class="homepage-link" title="Back to ' . $pages[$segment] . '">' . ucfirst($pages[$segment]) . '</a></li>';
        }
    } else {
        // Si no es una acción válida, solo mostrar el nombre sin enlace
        $breadcrumb[] = '<li>' . ucfirst($segment) . '</li>';
    }
}

// Mostrar el breadcrumb
echo '<ul class="breadcrumb">';
echo implode('', $breadcrumb); // Mostrar todos los elementos del breadcrumb
echo '</ul>';?>
