<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('adapt_service', [
    'title' => __('Anpassa tjänst', 'kreation')
]);

$layouts = viva_get_flexible_layouts();

$fields
    ->addTab('Inställningar', [
        'label' => 'Inställningar',
    ])
        ->addText('readmore_text', [
            'label' => 'Läs mer-text',
            'instructions' => 'Valfri text som visas i länken på kortet',
            'required' => 0,
        ])
    ->addTab('content', [
        'label' => 'Innehåll',
    ])
    ->addFlexibleContent('flexible_content', [
        'label' => 'Innehållsblock',
        'button_label' => 'Lägg till block',
    ])
    ->addLayouts($layouts)
    ->setLocation('post_type', '==', 'services');

acf_add_local_field_group($fields->build());
