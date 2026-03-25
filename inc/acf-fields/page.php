<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('adapt_page', [
    'title' => __('Anpassa sida', 'kreation')
]);

$layouts = viva_get_flexible_layouts();

$fields
    ->addFlexibleContent('flexible_content', [
        'label' => 'Innehållsblock',
        'button_label' => 'Lägg till block',
    ])
    ->addLayouts($layouts)
    ->setLocation('page_template', '==', 'default')
    ->and('page_type', '!=', 'front_page');

acf_add_local_field_group($fields->build());
