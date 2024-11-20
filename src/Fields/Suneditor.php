<?php

namespace Tmoiseenko\MoonshineSuneditor\Fields;

use MoonShine\Fields\Field;

class Suneditor extends Field
{
    protected string $view = 'moonshine-suneditor::fields.suneditor';

    protected array $assets = [
        'vendor/moonshine-suneditor/css/katex.min.css',
        'vendor/moonshine-suneditor/css/katex.min.css',
        'vendor/moonshine-suneditor/css/suneditor.min.css',
        'vendor/moonshine-suneditor/js/suneditor.min.js',
        'vendor/moonshine-suneditor/js/ru.js',
        'vendor/moonshine-suneditor/js/katex.min.js',
        'vendor/moonshine-suneditor/js/suneditor-init.js',
    ];
}
