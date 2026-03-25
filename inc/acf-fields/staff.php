<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('adapt_staff', [
    'title' => __('Anpassa medarbetare', 'kreation')
]);


$fields
    ->addText('title', [
        'label' => 'Titel',
    ])
    ->addEmail('email', [
        'label' => 'Epost',
    ])
    ->addText('phone', [
        'label' => 'Telefonnummer',
    ])
    ->setLocation('post_type', '==', 'staff');

acf_add_local_field_group($fields->build());
