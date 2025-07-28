<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// SEO Routes
$routes->get('sitemap.xml', 'Home::sitemap');
$routes->get('robots.txt', 'Home::robots');
