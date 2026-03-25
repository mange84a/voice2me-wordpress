<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

function viva_get_flexible_layouts() {
    $layouts = [];
    $halfhalf = new FieldsBuilder('halfhalf', [
        'label' => 'Sektion med bild och text',
        'button_label' => 'Lägg till sektion',
    ]);
    $halfhalf
        ->addImage('image', [
            'label' => 'Bild',
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'required' => 1,
        ])
        ->addText('heading', [
            'label' => 'Rubrik',
            'required' => 1,
        ])
        ->addWysiwyg('text', [
            'label' => 'Text',
            'media_upload' => 0,
            'tabs' => 'all',
            'toolbar' => 'basic',
            'delay' => 0,
            'required' => 0,
        ])
        ->addLink('link', [
            'label' => 'Länk',
            'required' => 0,
        ])
        ->addTrueFalse('has_background', [
            'label' => 'Vit bakgrund?',
            'default_value' => 0,
            'ui' => 1,
            'required' => 0,
        ])
        ->addTrueFalse('reverse', [
            'label' => 'Spegelvänd layout?',
            'default_value' => 0,
            'ui' => 1,
            'required' => 0,
        ]);
    $layouts['halfhalf'] = $halfhalf;

    $loggos = new FieldsBuilder('loggos', [
        'label' => 'Loggor',
        'button_label' => 'Lägg till logga',
    ]);
    $loggos
        ->addText('heading', [
            'label' => 'Rubrik',
            'required' => 1,
        ])
        ->addGallery('loggos', [
            'label' => 'Loggor',
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'required' => 1,
        ])
        ->addTrueFalse('has_background', [
            'label' => 'Vit bakgrund?',
            'default_value' => 0,
            'ui' => 1,
            'required' => 0,
        ]);

    $layouts['loggos'] = $loggos;


    $services = new FieldsBuilder('services', [
        'label' => 'Tjänster',
        'button_label' => 'Lägg till sektion med tjänst',
    ]);

    $services
        ->addText('heading', [
            'label' => 'Rubrik',
            'required' => 0,
        ])
        ->addLink('link', [
            'label' => 'Länk till alla tjänster',
            'required' => 0,
        ])
        ->addRelationship('services', [
            'label' => 'Välj tjänster att visa',
            'post_type' => ['services'],
            'return_format' => 'object',
            'multiple' => 1,
            'required' => 1,
        ])->addTrueFalse('has_background', [
            'label' => 'Vit bakgrund?',
            'default_value' => 0,
            'ui' => 1,
            'required' => 0,
        ]);

    $layouts['services'] = $services;

    $reviews = new FieldsBuilder('reviews', [
        'label' => 'Omdömmen',
        'button_label' => 'Lägg till sektion med omdömmen',
    ]);

    $reviews
        ->addText('heading', [
            'label' => 'Rubrik',
            'required' => 1,
        ])
        ->addRelationship('reviews', [
            'label' => 'Välj omdömmen att visa',
            'post_type' => ['reviews'],
            'return_format' => 'object',
            'multiple' => 1,
            'required' => 1,
        ])
        ->addTrueFalse('has_background', [
            'label' => 'Vit bakgrund?',
            'default_value' => 0,
            'ui' => 1,
            'required' => 0,
        ]);

    $layouts['reviews'] = $reviews;


    $latest_news = new FieldsBuilder('latest_news', [
        'label' => 'Senaste nytt',
        'button_label' => 'Lägg till sektion med senaste nytt',
    ]);
    $latest_news
        ->addText('heading', [
            'label' => 'Rubrik',
            'required' => 1,
        ])
        ->addLink('link', [
            'label' => 'Länk till alla nyheter',
            'required' => 0,
        ])
        ->addNumber('posts_to_show', [
            'label' => 'Antal nyheter att visa',
            'required' => 1,
            'min' => 1,
            'max' => 20,
        ])
        ->addTrueFalse('has_background', [
            'label' => 'Vit bakgrund?',
            'default_value' => 0,
            'ui' => 1,
            'required' => 0,
        ]);

    $layouts['latest_news'] = $latest_news;


    //Contactblock
    $contact_block = new FieldsBuilder('contact_block', [
        'label' => 'Kontaktblock',
        'button_label' => 'Lägg till kontaktblock',
    ]);
    $contact_block
        ->addText('heading', [
            'label' => 'Rubrik',
        ])
        ->addText('subheading', [
            'label' => 'Underrubrik',
            'required' => 0,
        ])
        ->addPostObject('contact', [
            'label' => 'Välj kontakt att visa',
            'post_type' => ['staff'],
            'return_format' => 'object',
            'required' => 1,
        ])
        ->addWysiwyg('additional_info', [
            'label' => 'Ytterligare information (valfri)',
            'media_upload' => 0,
            'tabs' => 'all',
            'toolbar' => 'basic',
            'delay' => 0,
            'required' => 0,
        ])
        ->addText('form_shortcode', [
            'label' => 'Formulär shortcode',
            'required' => 0,
        ])
        ->addTrueFalse('has_background', [
            'label' => 'Vit bakgrund?',
            'default_value' => 0,
            'ui' => 1,
            'required' => 0,
        ]);

    $layouts['contact_block'] = $contact_block;

    //Staff
    $staff = new FieldsBuilder('staff', [
        'label' => 'Personal',
        'button_label' => 'Lägg till personal',
    ]);   
    $staff
       ->addText('heading', [
            'label' => 'Rubrik',
            'required' => 1,
        ])
        ->addRelationship('staff_members', [
            'label' => 'Välj personal att visa',
            'post_type' => ['staff'],
            'return_format' => 'object',
            'multiple' => 1,
            'required' => 1,
        ])
        ->addTrueFalse('has_background', [
            'label' => 'Vit bakgrund?',
            'default_value' => 0,
            'ui' => 1,
            'required' => 0,
        ]);

    $layouts['staff'] = $staff;

    $faq = new FieldsBuilder('faq', [
        'label' => 'FAQ',
        'button_label' => 'Lägg till FAQ-sektion',
    ]);
    $faq
        ->addText('heading', [
            'label' => 'Rubrik',
            'required' => 1,
        ])
        ->addRepeater('faqs', [
            'label' => 'Frågor och svar',
            'min' => 1,
            'layout' => 'row',
        ])
            ->addText('question', [
                'label' => 'Fråga',
                'required' => 1,
            ])
            ->addWysiwyg('answer', [
                'label' => 'Svar',
                'media_upload' => 0,
                'tabs' => 'all',
                'toolbar' => 'basic',
                'delay' => 0,
                'required' => 1,
            ])
        ->endRepeater()
        ->addTrueFalse('has_background', [
            'label' => 'Vit bakgrund?',
            'default_value' => 0,
            'ui' => 1,
            'required' => 0,
        ]);

    $layouts['faq'] = $faq;
    return $layouts;
}
