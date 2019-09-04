<?php

return [
    'title' => 'Header',
    'fields' => [
        [
            'name' => 'Text Content',
            'id'   => 'content',
            'type' => 'wysiwyg',
            'desc' => 'Use italics to indicate that text should display <b>black</b> rather than the standard <b>white</b> header text color.<br>Use shift + enter for putting in newlines without splitting into separate headings or paragraphs!',
            'options' => [
              'textarea_rows' => 9
            ]
        ],
        [
            'name' => 'Style',
            'id'   => 'background-color',
            'type' => 'radio',
            'default' => 'orange-pink',
            'options' => [
                'orange-pink'   => '<div class="cmb2-radio-bg cmb2-radio-bg--orange">Orange → Pink</div>',
                'grey-standard' => '<div class="cmb2-radio-bg cmb2-radio-bg--gray-standard"><span>Grey With Standard h1</div>',
                'grey-gradient' => '<div class="cmb2-radio-bg cmb2-radio-bg--gray-gradient"><span>Grey With Gradient h1</span></div>'
            ]
        ],
        [
	        'name'    => 'Custom Gradient Start', 'cmb2',
          'id'      => 'background-color-1',
          'type'    => 'colorpicker',
          'default' => '#ffffff'
        ],
        [
	        'name'    => 'Custom Gradient End', 'cmb2',
          'id'      => 'background-color-2',
          'type'    => 'colorpicker',
          'default' => '#ffffff'
        ],
        [
            'name' => 'Logo',
            'id'   => 'logo',
            'type' => 'file',
            'desc' => 'Client logo or related image that sits underneath the text. Preferably an SVG with <code>fill="currentColor"</code>'
        ],
        [
            'name' => 'Illustration',
            'id'   => 'image',
            'type' => 'file',
            'desc' => 'Large image displayed on the right of the header'
        ]
    ]
];
