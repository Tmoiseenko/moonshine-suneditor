<?php

namespace Tmoiseenko\MoonshineSuneditor\Fields;

use MoonShine\Fields\Textarea;

class Suneditor extends Textarea
{
    protected string $view = 'moonshine-suneditor::fields.suneditor';

    public array $buttonList = [
        [
            "undo",
            "redo",
            "font",
            "fontSize",
            "formatBlock",
            "paragraphStyle",
            "blockquote",
            "bold",
            "underline",
            "italic",
            "strike",
            "subscript",
            "superscript",
            "fontColor",
            "hiliteColor",
            "textStyle",
            "removeFormat",
            "outdent",
            "indent",
            "align",
            "horizontalRule",
            "list",
            "lineHeight",
            "table",
            "link",
            "image",
            "video",
            "audio",
            "math",
            "imageGallery",
            "fullScreen",
            "showBlocks",
            "codeView",
            "preview",
            "print",
            "save",
            "template"
        ]
    ];
    public array $addedButtonList = [];

    public string $locale = '';

    protected array $assets = [
        'vendor/moonshine-suneditor/css/katex.min.css',
        'vendor/moonshine-suneditor/css/katex.min.css',
        'vendor/moonshine-suneditor/css/suneditor.min.css',
        'vendor/moonshine-suneditor/js/suneditor.min.js',
        'vendor/moonshine-suneditor/js/ru.js',
        'vendor/moonshine-suneditor/js/katex.min.js',
        'vendor/moonshine-suneditor/js/suneditor-init.js',
    ];
    public string $height = '300';
    public string $width = '100%';

    public function buttonList(array $buttonList): self
    {
        $this->buttonList = $buttonList;

        return $this;
    }

    public function addedButtonList(array $buttonList): self
    {
        $this->addedButtonList = $buttonList;

        return $this;
    }

    public function locale(string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getButtonList(): string
    {
        return json_encode(array_merge($this->buttonList, $this->addedButtonList));
    }

    public function getHeight(): string
    {
        return $this->height;
    }

    public function getWidth(): string
    {
        return $this->width;
    }

    public function setHeight($height): object
    {
        $this->height = $height;
        return $this;
    }

    public function setWidth(string $width): object
    {
        $this->width = $width;
        return $this;
    }
}
