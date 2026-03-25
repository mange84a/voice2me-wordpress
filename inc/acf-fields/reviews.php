<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('adapt_review', [
    'title' => __('Anpassa omdömme', 'kreation')
]);


$fields
    ->addText('author', [
        'label' => 'Författare',
        'instructions' => 'Namn på den som lämnat omdömmet',
        'required' => 1,
    ])
    ->addText('company', [
        'label' => 'Företag',
        'instructions' => 'Företag som givit omdömme',
        'required' => 0,
    ])
    ->addNumber('rating', [
        'label' => 'Betyg',
        'instructions' => 'Betyg i form av ett nummer mellan 1 och 5',
        'required' => 1,
        'min' => 1,
        'max' => 5,
    ])
    ->setLocation('post_type', '==', 'reviews');

acf_add_local_field_group($fields->build());
