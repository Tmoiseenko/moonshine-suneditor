<x-moonshine::form.textarea
        :attributes="$element->attributes()->merge([
        'name' => $element->name(),
    ])"
        ::id="$id('suneditor')"
        x-data="suneditor"
        :data-language="!empty($element->locale) ? $element->locale : app()->getLocale()"
        :data-buttonList="trim($element->getButtonList())"
        :data-height="trim($element->getHeight())"
        :data-width="trim($element->getWidth())"
>{!! $value ?? '' !!}</x-moonshine::form.textarea>