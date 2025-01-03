<x-moonshine::form.textarea
        :attributes="$element->attributes()->merge([
        'name' => $element->name(),
    ])"
        ::id="$id('suneditor')"
        x-data="suneditor"
        :data-language="!empty($element->locale) ? $element->locale : app()->getLocale()"
        :data-buttonList="trim($element->buttonList . ' ' . $element->addedButtonList)"
>{!! $value ?? '' !!}</x-moonshine::form.textarea>
