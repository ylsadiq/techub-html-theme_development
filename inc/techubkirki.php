<?php
new \Kirki\Panel(
	'techub_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Techub Option', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

// section 01
function techub_header_info_section() {
new \Kirki\Section(
	'techub_header_section',
	[
		'title'       => esc_html__( 'Header Info', 'kirki' ),
		'description' => esc_html__( 'My Header Description.', 'kirki' ),
		'panel'       => 'techub_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'header_topbar_switch',
		'label'       => esc_html__( 'Header TopBar Switch', 'kirki' ),
		'description' => esc_html__( 'Header TopBar switch control', 'kirki' ),
		'section'     => 'techub_header_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'address_text',
		'label'    => esc_html__( 'Address Text', 'kirki' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'address_url',
		'label'    => esc_html__( 'Address URL', 'kirki' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'email_address',
		'label'    => esc_html__( 'Email ID', 'kirki' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( 'techubinfo@mail.com', 'kirki' ),
		'priority' => 10,
	]
);
}
techub_header_info_section();

function techub_header_social_section() {
    
// section 02
new \Kirki\Section(
	'techub_header_social_section',
	[
		'title'       => esc_html__( 'Header Social', 'kirki' ),
		'description' => esc_html__( 'My Header Social info.', 'kirki' ),
		'panel'       => 'techub_panel',
		'priority'    => 160,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_facebook_url',
		'label'    => esc_html__( 'Facebook URL', 'kirki' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_instagram_url',
		'label'    => esc_html__( 'Instagram URL', 'kirki' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_x_url',
		'label'    => esc_html__( 'X URL', 'kirki' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_pinterest_url',
		'label'    => esc_html__( 'Pinterest URL', 'kirki' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);
}
techub_header_social_section();


function techub_header_logo_section(){
    new \Kirki\Section(
        'techub_header_logo_section',
        [
            'title'       => esc_html__( 'Header Logo', 'kirki' ),
            'description' => esc_html__( 'My Header Section Description.', 'kirki' ),
            'panel'       => 'techub_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header Logo', 'kirki' ),
            'description' => esc_html__( 'Please set your header logo', 'kirki' ),
            'section'     => 'techub_header_logo_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    );

}
techub_header_logo_section();