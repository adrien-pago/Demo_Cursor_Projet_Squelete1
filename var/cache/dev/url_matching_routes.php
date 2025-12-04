<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/chef/agenda' => [[['_route' => 'chef_agenda', '_controller' => 'App\\Controller\\ChefController::agenda'], null, null, null, false, false, null]],
        '/chef/entrees' => [[['_route' => 'chef_entrees', '_controller' => 'App\\Controller\\ChefController::entrees'], null, null, null, false, false, null]],
        '/chef/entrees/new' => [[['_route' => 'chef_entrees_new', '_controller' => 'App\\Controller\\ChefController::entreesNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chef/plats' => [[['_route' => 'chef_plats', '_controller' => 'App\\Controller\\ChefController::plats'], null, null, null, false, false, null]],
        '/chef/plats/new' => [[['_route' => 'chef_plats_new', '_controller' => 'App\\Controller\\ChefController::platsNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chef/accompagnements' => [[['_route' => 'chef_accompagnements', '_controller' => 'App\\Controller\\ChefController::accompagnements'], null, null, null, false, false, null]],
        '/chef/accompagnements/new' => [[['_route' => 'chef_accompagnements_new', '_controller' => 'App\\Controller\\ChefController::accompagnementsNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chef/salades' => [[['_route' => 'chef_salades', '_controller' => 'App\\Controller\\ChefController::salades'], null, null, null, false, false, null]],
        '/chef/reservations' => [[['_route' => 'chef_reservations', '_controller' => 'App\\Controller\\ChefController::reservations'], null, null, null, false, false, null]],
        '/chef/settings' => [[['_route' => 'chef_settings', '_controller' => 'App\\Controller\\ChefController::settings'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chef/accounts' => [[['_route' => 'chef_accounts', '_controller' => 'App\\Controller\\ChefController::accounts'], null, ['GET' => 0], null, false, false, null]],
        '/chef/accounts/create' => [[['_route' => 'chef_accounts_create', '_controller' => 'App\\Controller\\ChefController::createAccount'], null, ['POST' => 0], null, false, false, null]],
        '/employee/dashboard' => [[['_route' => 'employee_dashboard', '_controller' => 'App\\Controller\\EmployeeController::dashboard'], null, null, null, false, false, null]],
        '/employee/credit' => [[['_route' => 'employee_credit', '_controller' => 'App\\Controller\\EmployeeController::credit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employee/reserve' => [[['_route' => 'employee_reserve_post', '_controller' => 'App\\Controller\\EmployeeController::reservePost'], null, ['POST' => 0], null, false, false, null]],
        '/employee/reservations' => [[['_route' => 'employee_reservations', '_controller' => 'App\\Controller\\EmployeeController::reservations'], null, null, null, false, false, null]],
        '/employee/mess' => [[['_route' => 'employee_mess', '_controller' => 'App\\Controller\\EmployeeController::mess'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employee/account' => [[['_route' => 'employee_account', '_controller' => 'App\\Controller\\EmployeeController::account'], null, null, null, false, false, null]],
        '/employee/account/credit' => [[['_route' => 'employee_account_credit', '_controller' => 'App\\Controller\\EmployeeController::creditBalance'], null, ['POST' => 0], null, false, false, null]],
        '/employee/account/change-password' => [[['_route' => 'employee_account_change_password', '_controller' => 'App\\Controller\\EmployeeController::changePassword'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/chef/(?'
                    .'|me(?'
                        .'|nu(?'
                            .'|/([^/]++)(*:35)'
                            .'|\\-complet/([^/]++)(*:60)'
                        .')'
                        .'|als/([^/]++)(*:80)'
                    .')'
                    .'|s(?'
                        .'|alades/(?'
                            .'|([^/]++)(*:110)'
                            .'|new(*:121)'
                            .'|([^/]++)/(?'
                                .'|edit(*:145)'
                                .'|delete(*:159)'
                            .')'
                        .')'
                        .'|ettings/check\\-usage/([^/]++)/([^/]++)(*:207)'
                    .')'
                    .'|entrees/([^/]++)/(?'
                        .'|edit(*:240)'
                        .'|delete(*:254)'
                    .')'
                    .'|plats/([^/]++)/(?'
                        .'|edit(*:285)'
                        .'|delete(*:299)'
                    .')'
                    .'|acco(?'
                        .'|mpagnements/([^/]++)/(?'
                            .'|edit(*:343)'
                            .'|delete(*:357)'
                        .')'
                        .'|unts/([^/]++)/(?'
                            .'|edit(*:387)'
                            .'|delete(*:401)'
                        .')'
                    .')'
                    .'|reservation(?'
                        .'|s/(\\d{4}-\\d{2}-\\d{2})(?'
                            .'|(*:449)'
                            .'|/pdf(*:461)'
                        .')'
                        .'|/([^/]++)(?'
                            .'|(*:482)'
                            .'|/mark\\-served(*:503)'
                        .')'
                    .')'
                .')'
                .'|/employee/(?'
                    .'|reserv(?'
                        .'|e/([^/]++)(*:546)'
                        .'|ation/([^/]++)/cancel(*:575)'
                    .')'
                    .'|meal\\-details/([^/]++)(*:606)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'chef_menu_day', '_controller' => 'App\\Controller\\ChefController::menuDay'], ['date'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        60 => [[['_route' => 'chef_select_menu_complet', '_controller' => 'App\\Controller\\ChefController::selectMenuComplet'], ['date'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        80 => [[['_route' => 'chef_manage_meals', '_controller' => 'App\\Controller\\ChefController::manageMeals'], ['date'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        110 => [[['_route' => 'chef_select_salades', '_controller' => 'App\\Controller\\ChefController::selectSalades'], ['date'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        121 => [[['_route' => 'chef_salades_new', '_controller' => 'App\\Controller\\ChefController::saladesNew'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        145 => [[['_route' => 'chef_salades_edit', '_controller' => 'App\\Controller\\ChefController::saladesEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        159 => [[['_route' => 'chef_salades_delete', '_controller' => 'App\\Controller\\ChefController::saladesDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        207 => [[['_route' => 'chef_settings_check_usage', '_controller' => 'App\\Controller\\ChefController::checkUsage'], ['type', 'id'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'chef_entrees_edit', '_controller' => 'App\\Controller\\ChefController::entreesEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        254 => [[['_route' => 'chef_entrees_delete', '_controller' => 'App\\Controller\\ChefController::entreesDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        285 => [[['_route' => 'chef_plats_edit', '_controller' => 'App\\Controller\\ChefController::platsEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        299 => [[['_route' => 'chef_plats_delete', '_controller' => 'App\\Controller\\ChefController::platsDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        343 => [[['_route' => 'chef_accompagnements_edit', '_controller' => 'App\\Controller\\ChefController::accompagnementsEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'chef_accompagnements_delete', '_controller' => 'App\\Controller\\ChefController::accompagnementsDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        387 => [[['_route' => 'chef_accounts_edit', '_controller' => 'App\\Controller\\ChefController::editAccount'], ['id'], ['POST' => 0], null, false, false, null]],
        401 => [[['_route' => 'chef_accounts_delete', '_controller' => 'App\\Controller\\ChefController::deleteAccount'], ['id'], ['POST' => 0], null, false, false, null]],
        449 => [[['_route' => 'chef_reservations_date', '_controller' => 'App\\Controller\\ChefController::reservations'], ['date'], null, null, false, true, null]],
        461 => [[['_route' => 'chef_reservations_pdf', '_controller' => 'App\\Controller\\ChefController::reservationsPdf'], ['date'], null, null, false, false, null]],
        482 => [[['_route' => 'chef_reservation_details', '_controller' => 'App\\Controller\\ChefController::reservationDetails'], ['id'], null, null, false, true, null]],
        503 => [[['_route' => 'chef_reservation_mark_served', '_controller' => 'App\\Controller\\ChefController::markServed'], ['id'], ['POST' => 0], null, false, false, null]],
        546 => [[['_route' => 'employee_reserve', '_controller' => 'App\\Controller\\EmployeeController::reserve'], ['date'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        575 => [[['_route' => 'employee_reservation_cancel', '_controller' => 'App\\Controller\\EmployeeController::cancelReservation'], ['id'], ['POST' => 0], null, false, false, null]],
        606 => [
            [['_route' => 'employee_meal_details', '_controller' => 'App\\Controller\\EmployeeController::mealDetails'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
