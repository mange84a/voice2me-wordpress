<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('adapt_frontpage', [
    'title' => __('Anpassa startsida', 'kreation')
]);

$layouts = viva_get_flexible_layouts();

$fields
    ->addTab('Huvudsektion')
        ->addText('main_heading', [
            'label' => 'Huvudrubrik',
            'required' => 1,
        ])
        ->addRepeater('main_usp', [
            'label' => 'USP:ar',
            'button_label' => 'Lägg till USP',
        ])
            ->addText('usp_title', [
                'label' => 'USP-rubrik',
                'required' => 1,
            ])
            ->addText('usp_text', [
                'label' => 'USP-text',
                'required' => 1,
            ])
        ->endRepeater()
    ->addTab('Innehållsblock')
        ->addFlexibleContent('flexible_content', [
            'label' => 'Innehållsblock',
            'button_label' => 'Lägg till block',
        ])
        ->addLayouts($layouts)
    ->setLocation('page_type', '==', 'front_page');

acf_add_local_field_group($fields->build());
