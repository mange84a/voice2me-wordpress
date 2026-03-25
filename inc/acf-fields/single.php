<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('adapt_post', [
    'title' => __('Anpassa inlägg', 'kreation')
]);

$layouts = viva_get_flexible_layouts();

$fields
    ->addFlexibleContent('flexible_content', [
        'label' => 'Innehållsblock',
        'button_label' => 'Lägg till block',
    ])
    ->addLayouts($layouts)
    ->setLocation('post_type', '==', 'post');

acf_add_local_field_group($fields->build());
