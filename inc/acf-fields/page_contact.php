<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('adapt_contactpage', [
    'title' => __('Anpassa kontaktsidan', 'kreation')
]);

$layouts = viva_get_flexible_layouts();

$fields
    ->addTab('contact_info', [
        'label' => __('Kontaktinformation', 'kreation'),
    ])
        ->addText('contact_info_header', [
            'label' => __('Rubrik', 'kreation'),
        ])
        ->addText('phone', [
            'label' => __('Telefonnummer', 'kreation'),
        ])
        ->addEmail('email', [
            'label' => __('E-postadress', 'kreation'),
        ])
        ->addTextarea('opening_hours', [
            'label' => __('Öppettider', 'kreation'),
        ])
        ->addTextarea('address', [
            'label' => __('Adress', 'kreation'),
        ])
    ->addTab('staff', [
        'label' => __('Personal', 'kreation'),
    ])
        ->addText('staff_header', [
            'label' => __('Rubrik', 'kreation'),
        ])
        ->addRelationship('staff', [
            'label' => __('Välj personal', 'kreation'),
            'post_type' => 'staff',
            'multiple' => true,
        ])
    ->addTab('contact_block', [
        'label' => __('Kontaktformulär', 'kreation'),
    ])
        ->addWysiwyg('additional_info', [
            'label' => __('Ytterligare information', 'kreation'),
        ])
        ->addText('form_shortcode', [
            'label' => __('Formulär shortcode', 'kreation'),
        ])
    ->setLocation('page_template', '==', 'page_contact.php');

acf_add_local_field_group($fields->build());
