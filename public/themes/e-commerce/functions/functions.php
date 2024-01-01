<?php

require_once __DIR__ . '/../vendor/autoload.php';

register_page_template([
    'default' => 'Default'
]);

register_sidebar([
    'id' => 'second_sidebar',
    'name' => 'Second sidebar',
    'description' => 'This is a sample sidebar for e-commerce theme',
]);

theme_option()
    ->setArgs(['debug' => config('app.debug')])
    ->setSection([
        'title' => __('General'),
        'desc' => __('General settings'),
        'id' => 'opt-text-subsection-general',
        'subsection' => true,
        'icon' => 'fa fa-home',
    ])
    ->setSection([
        'title' => __('Logo'),
        'desc' => __('Change logo'),
        'id' => 'opt-text-subsection-logo',
        'subsection' => true,
        'icon' => 'fa fa-image',
        'fields' => [
            [
                'id' => 'logo',
                'type' => 'mediaImage',
                'label' => __('Logo'),
                'attributes' => [
                    'name' => 'logo',
                    'value' => null,
                ],
            ],
        ],
    ])
    ->setField([
        'id' => 'copyright',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Copyright'),
        'attributes' => [
            'name' => 'copyright_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change copyright'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('Copyright on footer of site'),
    ])
    ->setField([
        'id' => 'top',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Top'),
        'attributes' => [
            'name' => 'top_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change top'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('top on footer of site'),
    ])
    ->setField([
        'id' => 'sub_header',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Sub Header'),
        'attributes' => [
            'name' => 'sub_header_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change sub_header'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('sub_header on footer of site'),
    ])
    ->setField([
        'id' => 'no_telp',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('No Telp'),
        'attributes' => [
            'name' => 'no_telp_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change no_telp'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('no_telp on footer of site'),
    ])
    ->setField([
        'id' => 'no_wa',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('No WA'),
        'attributes' => [
            'name' => 'no_wa_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change no_wa'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('no_wa on footer of site'),
    ])
    ->setField([
        'id' => 'text_wa',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Text WA'),
        'attributes' => [
            'name' => 'text_wa_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change text_wa'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('no_wa on footer of site'),
    ])
    ->setField([
        'id' => 'alamat',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Alamat'),
        'attributes' => [
            'name' => 'alamat_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change alamat'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('alamat on footer of site'),
    ])
    ->setField([
        'id' => 'email',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Email'),
        'attributes' => [
            'name' => 'email_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change email'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('email on footer of site'),
    ])
    ->setField([
        'id' => 'bekerja_sama',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'editor',
        'label' => __('Bekerja Sama'),
        'attributes' => [
            'name' => 'bekerja_sama_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change bekerja_sama'),
                'data-counter' => 250,
            ]
        ],
        'helper' => __('bekerja_sama on footer of site'),
    ])
    ->setField([
        'id' => 'tentang_kami',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'editor',
        'label' => __('Tentang Kami'),
        'attributes' => [
            'name' => 'tentang_kami_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change tentang_kami'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('tentang_kami on footer of site'),
    ])
    ->setField([
        'id' => 'fb',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('FB'),
        'attributes' => [
            'name' => 'fb_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change fb'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('fb on footer of site'),
    ])
    ->setField([
        'id' => 'IG',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('IG'),
        'attributes' => [
            'name' => 'IG_footer',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change IG'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('IG on footer of site'),
    ])
    ;