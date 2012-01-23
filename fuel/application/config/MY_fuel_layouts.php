<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Layouts
|--------------------------------------------------------------------------
|
| specify the name of the layouts and their fields associated with them
*/


/*$config['layouts']['main'] = array(
	'parts' => $config['layouts_path'].'main'
);*/

// main layout fields
$config['layout_fields']['main'] =  array(
	'copy' => array('copy' => lang('layout_field_main_copy')),
	'page_title' => array('label' => lang('layout_field_page_title')),
	'meta_description' => array('label' => lang('layout_field_meta_description')),
	'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
	'body' => array('label' => lang('layout_field_body'), 'type' => 'textarea', 'description' => lang('layout_field_body_description')),
	'body_class' => array('label' => lang('layout_field_body_class')),
	);


$config['layout_fields']['uncharted_home'] =  array(
	'copy' => array('copy' => lang('layout_field_main_copy')),
	'page_title' => array('label' => lang('layout_field_page_title')),
	'meta_description' => array('label' => lang('layout_field_meta_description')),
	'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
	'tagline' => array('label' => lang('layout_field_tagline'), 'type' => 'textarea', 'description' => lang('layout_field_tagline_description')),
	'feature_column_1' => array('label' => lang('layout_field_feature_column_1'), 'type' => 'textarea', 'description' => lang('layout_field_feature_column_1_description')),
  'feature_column_2' => array('label' => lang('layout_field_feature_column_2'), 'type' => 'textarea', 'description' => lang('layout_field_feature_column_2_description')),
  'feature_column_3' => array('label' => lang('layout_field_feature_column_3'), 'type' => 'textarea', 'description' => lang('layout_field_feature_column_3_description')),
  'content_block_1' => array('label' => lang('layout_field_content_block_1'), 'type' => 'textarea', 'description' => lang('layout_field_content_block_1_description')),
  'content_block_2' => array('label' => lang('layout_field_content_block_1'), 'type' => 'textarea', 'description' => lang('layout_field_content_block_2_description')),
  'content_block_3' => array('label' => lang('layout_field_content_block_1'), 'type' => 'textarea', 'description' => lang('layout_field_content_block_3_description'))
	);

$config['layout_fields']['uncharted_about'] =  array(
	'copy' => array('copy' => lang('layout_field_main_copy')),
	'page_title' => array('label' => lang('layout_field_page_title')),
	'meta_description' => array('label' => lang('layout_field_meta_description')),
	'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
  'content_section_1' => array('label' => lang('layout_field_content_section_1'), 'type' => 'textarea', 'description' => lang('layout_field_content_section_1_description')),
  'bottom_content' => array('label' => lang('layout_field_bottom_content'), 'type' => 'textarea', 'description' => lang('layout_field_bottom_content_description')),
  'sidebar_content_1' => array('label' => lang('layout_field_sidebar_content_1'), 'type' => 'textarea', 'description' => lang('layout_field_sidebar_content_1_description')),
  'call_to_action_button' => array('label' => lang('layout_field_call_to_action_button'), 'type' => 'textarea', 'description' => lang('layout_field_call_to_action_button_description')),
  'sidebar_link_list' => array('label' => lang('layout_field_sidebar_link_list'), 'type' => 'textarea', 'description' => lang('layout_field_sidebar_link_list_description'))

  );

$config['layout_fields']['uncharted_contact'] =  array(
	'copy' => array('copy' => lang('layout_field_main_copy')),
	'page_title' => array('label' => lang('layout_field_page_title')),
	'meta_description' => array('label' => lang('layout_field_meta_description')),
	'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
  'sidebar_content_1' => array('label' => lang('layout_field_sidebar_content_1'), 'type' => 'textarea', 'description' => lang('layout_field_sidebar_content_1_description')),
  'sidebar_image_1' => array('label' => lang('layout_field_sidebar_image_1'), 'type' => 'textarea', 'description' => lang('layout_field_sidebar_image_1_description')),
  'call_to_action_button' => array('label' => lang('layout_field_call_to_action_button'), 'type' => 'textarea', 'description' => lang('layout_field_call_to_action_button_description')),
  'sidebar_marketing_image' => array('label' => lang('layout_field_sidebar_marketing_image'), 'type' => 'textarea', 'description' => lang('layout_field_sidebar_marketing_image_description')),
  'sidebar_link_list' => array('label' => lang('layout_field_sidebar_link_list'), 'type' => 'textarea', 'description' => lang('layout_field_sidebar_link_list_description'))

  );

$config['layout_fields']['uncharted_hiring'] =  array(
	'copy' => array('copy' => lang('layout_field_main_copy')),
	'page_title' => array('label' => lang('layout_field_page_title')),
	'meta_description' => array('label' => lang('layout_field_meta_description')),
	'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
  'sidebar_content_1' => array('label' => lang('layout_field_sidebar_content_1'), 'type' => 'textarea', 'description' => lang('layout_field_sidebar_content_1_description')),
  'sidebar_image_1' => array('label' => lang('layout_field_sidebar_image_1'), 'type' => 'textarea', 'description' => lang('layout_field_sidebar_image_1_description')),
  'call_to_action_button' => array('label' => lang('layout_field_call_to_action_button'), 'type' => 'textarea', 'description' => lang('layout_field_call_to_action_button_description')),
  'sidebar_marketing_image' => array('label' => lang('layout_field_sidebar_marketing_image'), 'type' => 'textarea', 'description' => lang('layout_field_sidebar_marketing_image_description')),
  'sidebar_link_list' => array('label' => lang('layout_field_sidebar_link_list'), 'type' => 'textarea', 'description' => lang('layout_field_sidebar_link_list_description'))

  );

$config['layout_fields']['uncharted_portfolio_item'] =  array(
	'copy' => array('copy' => lang('layout_field_main_copy')),
	'page_title' => array('label' => lang('layout_field_page_title')),
	'meta_description' => array('label' => lang('layout_field_meta_description')),
	'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
  'project_name' => array('label' => lang('layout_field_project_name'), 'description' => lang('layout_field_project_name_description')),
  'project_type' => array('label' => lang('layout_field_project_type'), 'description' => lang('layout_field_project_type_description')),
  'launch_date' => array('label' => lang('layout_field_launch_date'), 'description' => lang('layout_field_launch_date_description')),
  'web_address' => array('label' => lang('layout_field_web_address'), 'description' => lang('layout_field_web_address_description')),
  'project_description_1' => array('label' => lang('layout_field_project_description_1'), 'type' => 'textarea', 'description' => lang('layout_field_project_description_1_description')),
  'project_description_2' => array('label' => lang('layout_field_project_description_2'), 'type' => 'textarea', 'description' => lang('layout_field_project_description_2_description')),
  'featured_image' => array('label' => lang('layout_field_sidebar_content_1'), 'type' => 'textarea', 'description' => lang('layout_field_sidebar_content_1_description'))
  );

$config['layout_fields']['uncharted_portfolio'] =  array(
	'copy' => array('copy' => lang('layout_field_main_copy')),
	'page_title' => array('label' => lang('layout_field_page_title')),
	'meta_description' => array('label' => lang('layout_field_meta_description')),
	'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
  
  'portfolio_title_1' => array('label' => lang('layout_field_portfolio_title_1')),
  'portfolio_website_1' => array('label' => lang('layout_field_portfolio_website_1')),
  'portfolio_image_1' => array('label' => lang('layout_field_portfolio_image_1'), 'type' => 'textarea', 'description' => lang('layout_field_portfolio_image_1_description')),
  
  'portfolio_title_2' => array('label' => lang('layout_field_portfolio_title_2')),
  'portfolio_website_2' => array('label' => lang('layout_field_portfolio_website_2')),
  'portfolio_image_2' => array('label' => lang('layout_field_portfolio_image_2'), 'type' => 'textarea', 'description' => lang('layout_field_portfolio_image_2_description')),

  'portfolio_title_3' => array('label' => lang('layout_field_portfolio_title_3')),
  'portfolio_website_3' => array('label' => lang('layout_field_portfolio_website_3')),
  'portfolio_image_3' => array('label' => lang('layout_field_portfolio_image_3'), 'type' => 'textarea', 'description' => lang('layout_field_portfolio_image_3_description')),

  'portfolio_title_4' => array('label' => lang('layout_field_portfolio_title_4')),
  'portfolio_website_4' => array('label' => lang('layout_field_portfolio_website_4')),
  'portfolio_image_4' => array('label' => lang('layout_field_portfolio_image_4'), 'type' => 'textarea', 'description' => lang('layout_field_portfolio_image_4_description')),
    
  'portfolio_title_5' => array('label' => lang('layout_field_portfolio_title_5')),
  'portfolio_website_5' => array('label' => lang('layout_field_portfolio_website_5')),
  'portfolio_image_5' => array('label' => lang('layout_field_portfolio_image_5'), 'type' => 'textarea', 'description' => lang('layout_field_portfolio_image_5_description')),

  'portfolio_title_6' => array('label' => lang('layout_field_portfolio_title_6')),
  'portfolio_website_6' => array('label' => lang('layout_field_portfolio_website_6')),
  'portfolio_image_6' => array('label' => lang('layout_field_portfolio_image_16'), 'type' => 'textarea', 'description' => lang('layout_field_portfolio_image_6_description'))


  );


/* End of file MY_fuel_layouts.php */
/* Location: ./application/config/MY_fuel_layouts.php */

