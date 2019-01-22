<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'Home' => [ // Controller
        ['show', '/', 'GET'], // action, url, method
    ],
    'HomeAdmin' => [
        ['show', '/admin', 'GET'],
    ],
    'ContactDetails' => [
        ['show', '/admin/contact-details', 'GET'],
        ['edit', '/admin/contact-details/edit/{id:\d+}', ['GET','POST']],
    ],
    'Dishes' => [ // Controller
        ['show', '/dishes', 'GET'], // action, url, method
    ],  
    'DishCategory' => [ // Controller
        ['add', '/admin/categorie-plats/ajouter', ['GET','POST']],
        ['index', '/admin/categorie-plats', 'GET'], // action, url, method
        ['edit', '/admin/categorie-plats/edit/{id:\d+}', ['GET','POST']],
    ], 
    'Grower' => [
        ['show', '/grower', ['GET','POST']],
    ],
    'LegalNotice' => [
        ['show', '/LegalNotice', 'GET'],
    ],
];
