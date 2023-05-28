<?php

use Appkit\Core\App;
use Appkit\Core\Image;
use Psr\Http\Message\ServerRequestInterface;

if (!function_exists('app')) {
    function app(): object
    {
        return App::instance();
    }
}

if (!function_exists('env')) {
    function env(string $key, $default = null)
    {
        static $loaded = [];

        if (empty($loaded)) {
            $loaded = parse_ini_file(BASE_DIR . '/.env', false, INI_SCANNER_RAW);
            foreach ($loaded as &$value) {
                $value = trim($value);
                $value = in_array($value, ['true', 'false']) ? ($value === 'true') : $value;
            }
        }

        return $_ENV[$key] ?? $_SERVER[$key] ?? $loaded[$key] ?? $default;
    }
}

if (!function_exists('go')) {
    function go(string $url = '/', int $code = 302)
    {
        header('Location: ' . $url, true, $code);
        exit;
    }
}

if (! function_exists('helper')) {
    function helper(array|string $filenames)
    {
        static $loaded = [];

        if (! is_array($filenames)) {
            $filenames = [$filenames];
        }

        // Store a list of all files to include...
        $includes = [];
        foreach ($filenames as $filename) {
            if (!str_contains($filename, '_helper')) {
                $filename .= '_helper';
            }

            // Check if this helper has already been loaded
            if (in_array($filename, $loaded, true)) {
                continue;
            }
            $includes[] = $filename;
        }

        foreach ($includes as $path) {
            $path = BASE_DIR . '/helpers/' . $path . '.php';
            include $path;
        }
    }
}

if (! function_exists('request')) {
    function request(): ServerRequestInterface
    {
        return App::instance()->request();
    }
}

if (! function_exists('url')) {
    function url($path = null): string
    {
        return App::instance()->url($path);
    }
}

if (! function_exists('image')) {
    function image($path = null): Image
    {
        return new Image($path);
    }
}
