<?php

if (file_exists(dirname(__DIR__).'/.env')) {
    if (class_exists(\Symfony\Component\Dotenv\Dotenv::class)) {
        (new \Symfony\Component\Dotenv\Dotenv())->usePutenv()->bootEnv(dirname(__DIR__).'/.env');
    } else {
        // Fallback: charger le .env manuellement
        $lines = file(dirname(__DIR__).'/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue;
            }
            if (strpos($line, '=') !== false) {
                [$key, $value] = explode('=', $line, 2);
                $key = trim($key);
                $value = trim($value, ' "\'');
                if (!isset($_SERVER[$key])) {
                    $_SERVER[$key] = $value;
                }
                if (!isset($_ENV[$key])) {
                    $_ENV[$key] = $value;
                }
                putenv("$key=$value");
            }
        }
    }
}

$_SERVER += $_ENV += [
    'APP_ENV' => $_SERVER['APP_ENV'] ?? $_ENV['APP_ENV'] ?? 'dev',
    'APP_DEBUG' => ($_SERVER['APP_DEBUG'] ?? $_ENV['APP_DEBUG'] ?? ('prod' !== ($_SERVER['APP_ENV'] ?? $_ENV['APP_ENV'] ?? 'dev'))) && filter_var($_SERVER['APP_DEBUG'] ?? $_ENV['APP_DEBUG'] ?? '1', FILTER_VALIDATE_BOOLEAN),
];

