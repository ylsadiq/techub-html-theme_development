<?php
new \Kirki\Panel(
	'techub_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Techub Option', 'techub' ),
		'description' => esc_html__( 'My Panel Description.', 'techub' ),
	]
);

// section 01
function techub_header_info_section() {
new \Kirki\Section(
	'techub_header_section',
	[
		'title'       => esc_html__( 'Header Info', 'techub' ),
		'description' => esc_html__( 'My Header Description.', 'techub' ),
		'panel'       => 'techub_panel',
		'priority'    => 160,
	]
);
// Header Topbar Switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'header_topbar_switch',
		'label'       => esc_html__( 'Header TopBar Switch', 'techub' ),
		'description' => esc_html__( 'Header TopBar switch control', 'techub' ),
		'section'     => 'techub_header_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'techub' ),
			'off' => esc_html__( 'Disable', 'techub' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'address_text',
		'label'    => esc_html__( 'Address Text', 'techub' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'techub' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'address_url',
		'label'    => esc_html__( 'Address URL', 'techub' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( '#', 'techub' ),
		'priority' => 10,
	]
);
//Email Address
new \Kirki\Field\Text(
	[
		'settings' => 'email_address',
		'label'    => esc_html__( 'Email ID', 'techub' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( 'techubinfo@mail.com', 'techub' ),
		'priority' => 10,
	]
);
}
techub_header_info_section();

function techub_header_right_side_section(){
// Header Right Side button and search box
new \Kirki\Section(
	'techub_header_right_side_section',
	[
		'title'       => esc_html__( 'Header Right Side', 'techub' ),
		'description' => esc_html__( 'Header Right Side Description.', 'techub' ),
		'panel'       => 'techub_panel',
		'priority'    => 160,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'header_right_side_switch',
		'label'       => esc_html__( 'Header Right slide Switch', 'techub' ),
		'description' => esc_html__( 'Header Right slide switch control', 'techub' ),
		'section'     => 'techub_header_right_side_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'techub' ),
			'off' => esc_html__( 'Disable', 'techub' ),
		],
	]
);
// Header Button Text
new \Kirki\Field\Text(
	[
		'settings' => 'header_button_text',
		'label'    => esc_html__( 'Button Text', 'techub' ),
		'section'  => 'techub_header_right_side_section',
		'default'  => esc_html__( 'Get A Quote', 'techub' ),
		'priority' => 10,
	]
);
// Header Button URL
new \Kirki\Field\Text(
	[
		'settings' => 'header_button_url',
		'label'    => esc_html__( 'Button URL', 'techub' ),
		'section'  => 'techub_header_right_side_section',
		'default'  => esc_html__( '#', 'techub' ),
		'priority' => 10,
	]
);
}
techub_header_right_side_section();


function techub_header_offcanvas_section() {
	new \Kirki\Section(
		'techub_header_offcanvas_section',
		[
			'title'       => esc_html__( 'Header Offcanvas', 'techub' ),
			'description' => esc_html__( 'My Header Description.', 'techub' ),
			'panel'       => 'techub_panel',
			'priority'    => 160,
		]
	);
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'header_offcanvas_switch',
			'label'       => esc_html__( 'Header offcanva Switch', 'techub' ),
			'description' => esc_html__( 'Header offcanva switch control', 'techub' ),
			'section'     => 'techub_header_offcanvas_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'techub' ),
				'off' => esc_html__( 'Disable', 'techub' ),
			],
		]
	);
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'header_offcanvas_social_switch',
			'label'       => esc_html__( 'Header offcanva Social Switch', 'techub' ),
			'description' => esc_html__( 'Header offcanva Social switch control', 'techub' ),
			'section'     => 'techub_header_offcanvas_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'techub' ),
				'off' => esc_html__( 'Disable', 'techub' ),
			],
		]
	);
	
	new \Kirki\Field\Textarea(
		[
			'settings' => 'header_offcanvas_side_content',
			'label'    => esc_html__( 'Header Side Switch', 'techub' ),
			'section'  => 'techub_header_offcanvas_section',
			'default'  => esc_html__( 'Techub is the partner of choice for many of the world’s leading enterprises. We help businesses development.', 'techub' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Image(
        [
            'settings'    => 'header_offcanvas_logo',
            'label'       => esc_html__( 'Header Logo', 'techub' ),
            'description' => esc_html__( 'Please set your header logo', 'techub' ),
            'section'     => 'techub_header_offcanvas_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    );
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_address_text',
			'label'    => esc_html__( 'Address Text', 'techub' ),
			'section'  => 'techub_header_offcanvas_section',
			'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'techub' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_address_url',
			'label'    => esc_html__( 'Address URL', 'techub' ),
			'section'  => 'techub_header_offcanvas_section',
			'default'  => esc_html__( '#', 'techub' ),
			'priority' => 10,
		]
	);
	//Email Address
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_email_address',
			'label'    => esc_html__( 'Email ID', 'techub' ),
			'section'  => 'techub_header_offcanvas_section',
			'default'  => esc_html__( 'techubinfo@mail.com', 'techub' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_phone_number',
			'label'    => esc_html__( 'Phone Number', 'techub' ),
			'section'  => 'techub_header_offcanvas_section',
			'default'  => esc_html__( '(+00) 678 345 98568', 'techub' ),
			'priority' => 10,
		]
	);
	}
techub_header_offcanvas_section();

function techub_header_social_section() {
    
// section 02
new \Kirki\Section(
	'techub_header_social_section',
	[
		'title'       => esc_html__( 'Header Social', 'techub' ),
		'description' => esc_html__( 'My Header Social info.', 'techub' ),
		'panel'       => 'techub_panel',
		'priority'    => 160,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_facebook_url',
		'label'    => esc_html__( 'Facebook URL', 'techub' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'techub' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_instagram_url',
		'label'    => esc_html__( 'Instagram URL', 'techub' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'techub' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_x_url',
		'label'    => esc_html__( 'X URL', 'techub' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'techub' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_pinterest_url',
		'label'    => esc_html__( 'Pinterest URL', 'techub' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'techub' ),
		'priority' => 10,
	]
);
}
techub_header_social_section();


function techub_header_logo_section(){
    new \Kirki\Section(
        'techub_header_logo_section',
        [
            'title'       => esc_html__( 'Header Logo', 'techub' ),
            'description' => esc_html__( 'My Header Section Description.', 'techub' ),
            'panel'       => 'techub_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header Logo', 'techub' ),
            'description' => esc_html__( 'Please set your header logo', 'techub' ),
            'section'     => 'techub_header_logo_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    );

}
techub_header_logo_section();
// techub footer logo section
function techub_footer_section(){
    new \Kirki\Section(
        'techub_footer_section',
        [
            'title'       => esc_html__( 'Footer', 'techub' ),
            'description' => esc_html__( 'My footer Section Description.', 'techub' ),
            'panel'       => 'techub_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_bg_img',
            'label'       => esc_html__( 'footer background Image', 'techub' ),
            'description' => esc_html__( 'Please set your footer background image', 'techub' ),
            'section'     => 'techub_footer_section',
        ]
    );

	new \Kirki\Field\Text(
		[
			'settings' => 'footer_copyright',
			'label'    => esc_html__( 'Pinterest URL', 'techub' ),
			'section'  => 'techub_footer_section',
			'default'  => esc_html__( 'Full Copyright & Design By Theme pure – 2024', 'techub' ),
			'priority' => 10,
		]
	);

}
techub_footer_section();
// techub_breadcrumb_section 
function techub_breadcrumb_section(){
    new \Kirki\Section(
        'techub_breadcrumb_section',
        [
            'title'       => esc_html__( 'Breadcrumb', 'techub' ),
            'description' => esc_html__( 'My Breadcrumb Section Description.', 'techub' ),
            'panel'       => 'techub_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'breadcrumb_bg_img',
            'label'       => esc_html__( 'Breadcrumb BG Image', 'techub' ),
            'description' => esc_html__( 'Please set your footer breadcrunmb image', 'techub' ),
            'section'     => 'techub_breadcrumb_section',
        ]
    );

}
techub_breadcrumb_section();