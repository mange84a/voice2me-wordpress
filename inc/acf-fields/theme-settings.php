<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('theme_settings', [
    'title' => __('Temainställningar', 'webbma')
]);

$alllayouts = viva_get_flexible_layouts();
$layouts = [];
if(isset($alllayouts['contact_block'])) {
    $layouts['contact_block'] = $alllayouts['contact_block'];
}
$fields
    ->addTab(__('Sidhuvud', 'webbma'))
        ->addLink('nav_cta', [
            'label' => __('CTA-länk (Knapp)', 'webbma'),
        ])
    ->addTab(__('Sociala medier', 'webbma'))
        ->addLink('company_facebook', [
            'label' => __('Facebook', 'webbma'),
        ])
        ->addLink('company_x_twitter', [
            'label' => __('X (Twitter)', 'webbma'),
        ])
        ->addLink('company_instagram', [
            'label' => __('Instagram', 'webbma'),
        ])
        ->addLink('company_linkedin', [
            'label' => __('LinkedIn', 'webbma'),
        ])
        ->addLink('company_youtube', [
            'label' => __('YouTube', 'webbma'),
        ])
    ->addTab(__('Kontaktinformation', 'webbma'))
    ->addTab(__('Sidfot', 'webbma'))
        ->addText('footer_header', [
            'label' => __('Sidfotsrubrik', 'webbma'),
        ])
        ->addLink('footer_cta', [
            'label' => __('CTA-länk', 'webbma'),
        ])
        ->addTextarea('footer_copyright', [
            'label' => __('Copyright-text', 'webbma'),
        ])
    ->addTab('Sidebars')
        ->addFlexibleContent('sidebar_flexible_content', [
            'label' => 'Innehållsblock',
            'button_label' => 'Lägg till block',
        ])
        ->addLayouts($layouts)
     
    ->setLocation('options_page', '==', 'theme-options');

acf_add_local_field_group($fields->build());
