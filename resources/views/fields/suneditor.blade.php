<x-moonshine::form.textarea
    ::id="$id('suneditor')"
    x-data="suneditor"
    :attributes="$element->attributes()->merge([
        'name' => $element->name(),
    ])"
>{!! $value ?? '' !!}</x-moonshine::form.textarea>
