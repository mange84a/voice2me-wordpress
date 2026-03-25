<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('adapt_page_sidebar', [
    'title' => __('Anpassa sida', 'kreation')
]);

$layouts = viva_get_flexible_layouts();

$fields
    ->addTab('content_tab', [
        'label' => 'Innehåll',
    ])
    ->addFlexibleContent('flexible_content', [
        'label' => 'Innehållsblock',
        'button_label' => 'Lägg till block',
    ])
    ->addLayouts($layouts)
    ->addTab('sidebar_tab', [
        'label' => 'Sidofält',
    ])
    ->setLocation('page_template', '==', 'page_sidebar.php');

acf_add_local_field_group($fields->build());
