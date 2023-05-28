<?php

use Appkit\Core\View;
use Appkit\Layouts\Layout;
use Appkit\Layouts\Slots;
use Appkit\Layouts\Template;


if (!function_exists('snippet')) {
    function snippet($name, $data = []): ?string
    {
        if (is_object($data) === true) {
            $data = ['item' => $data];
        }

        return View::snippet($name, $data);
    }
}

if (!function_exists('template')) {
    function template($name = 'default'): string
    {

        return (new Template($name))->render();
    }
}
if (!function_exists('layout')) {
    function layout($name = null, ?array $data = null)
    {
        if (is_array($name) === true) {
            $data = $name;
            $name = null;
        }

        Layout::start($name, $data);
    }
}

if (!function_exists('slot')) {
    function slot(?string $name = null): void
    {
        Slots::start($name);
    }
}

if (!function_exists('endslot')) {
    function endslot(): void
    {
        Slots::end();
    }
}


