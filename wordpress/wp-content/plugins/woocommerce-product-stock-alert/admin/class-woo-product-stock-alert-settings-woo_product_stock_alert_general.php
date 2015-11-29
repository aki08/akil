<?php
class WOO_Product_Stock_Alert_Settings_Gneral {
  /**
   * Holds the values to be used in the fields callbacks
   */
  private $options;
  
  private $tab;

  /**
   * Start up
   */
  public function __construct($tab) {
    $this->tab = $tab;
    $this->options = get_option( "dc_{$this->tab}_settings_name" );
    $this->settings_page_init();
  }
  
  /**
   * Register and add settings
   */
  public function settings_page_init() {
    global $WOO_Product_Stock_Alert;
    
    $settings_tab_options = array("tab" => "{$this->tab}",
                                  "ref" => &$this,
                                  "sections" => array(
                                                      "basic_settings" => array( "title" =>  __('Basic Settings', $WOO_Product_Stock_Alert->text_domain), // Section one
																																								 "fields" => array("is_enable" => array('title' => __('Enable Stock Alert', $WOO_Product_Stock_Alert->text_domain), 'type' => 'checkbox', 'dfvalue' => 'Enable', 'value' => 'Enable'), // Checkbox
																																																	 "is_enable_backorders" => array('title' => __('Enable with Backorders', $WOO_Product_Stock_Alert->text_domain), 'type' => 'checkbox', 'value' => 'Enable'), // Checkbox
																																																	 )
																																								 ),
                                                      "form_customization" => array( "title" =>  __('Form Customization', $WOO_Product_Stock_Alert->text_domain), // Section one
																																										 "fields" => array( "alert_text" => array('title' => __('Edit Alert text', $WOO_Product_Stock_Alert->text_domain), 'type' => 'text', 'hints' => __('Enter the text which you want to display as alert text.', $WOO_Product_Stock_Alert->text_domain), 'desc' => __('It will represent alert text.', $WOO_Product_Stock_Alert->text_domain)), // Text
																																																				"alert_text_color" => array('title' => __('Choose Alert text Color', $WOO_Product_Stock_Alert->text_domain), 'type' => 'colorpicker', 'default' => '#000000', 'hints' => __('Choose alert text color here.', $WOO_Product_Stock_Alert->text_domain), 'desc' => __('This lets you choose alert text color.', $WOO_Product_Stock_Alert->text_domain)), // Colorpicker
																																																				"button_text" => array('title' => __('Edit Button text', $WOO_Product_Stock_Alert->text_domain), 'type' => 'text', 'hints' => __('Enter the text which you want to display on button.', $WOO_Product_Stock_Alert->text_domain), 'desc' => __('It will represent button text.', $WOO_Product_Stock_Alert->text_domain)), // Text
																																																				"button_background_color" => array('title' => __('Choose Button Background Color', $WOO_Product_Stock_Alert->text_domain), 'type' => 'colorpicker', 'default' => '#000000', 'hints' => __('Choose alert button background color here.', $WOO_Product_Stock_Alert->text_domain), 'desc' => __('This lets you choose alert button background color.', $WOO_Product_Stock_Alert->text_domain)), // Colorpicker
																																																				"button_border_color" => array('title' => __('Choose Button Border Color', $WOO_Product_Stock_Alert->text_domain), 'type' => 'colorpicker', 'default' => '#000000', 'hints' => __('Choose alert button border color here.', $WOO_Product_Stock_Alert->text_domain), 'desc' => __('This lets you choose alert button border color.', $WOO_Product_Stock_Alert->text_domain)), // Colorpicker
																																																				"button_text_color" => array('title' => __('Choose Button Text Color', $WOO_Product_Stock_Alert->text_domain), 'type' => 'colorpicker', 'default' => '#000000', 'hints' => __('Choose alert button text color here.', $WOO_Product_Stock_Alert->text_domain), 'desc' => __('This lets you choose alert button text color.', $WOO_Product_Stock_Alert->text_domain)), // Colorpicker
																																																				"button_background_color_onhover" => array('title' => __('Choose Button Background Color on Hover', $WOO_Product_Stock_Alert->text_domain), 'type' => 'colorpicker', 'default' => '#000000', 'hints' => __('Choose alert button background color on hover here.', $WOO_Product_Stock_Alert->text_domain), 'desc' => __('This lets you choose alert button background color on hover.', $WOO_Product_Stock_Alert->text_domain)), // Colorpicker
																																																				"button_border_color_onhover" => array('title' => __('Choose Button Border Color on Hover', $WOO_Product_Stock_Alert->text_domain), 'type' => 'colorpicker', 'default' => '#000000', 'hints' => __('Choose alert button border color on hover here.', $WOO_Product_Stock_Alert->text_domain), 'desc' => __('This lets you choose alert button border color on hover.', $WOO_Product_Stock_Alert->text_domain)), // Colorpicker
																																																				"button_text_color_onhover" => array('title' => __('Choose Button Text Color on Hover', $WOO_Product_Stock_Alert->text_domain), 'type' => 'colorpicker', 'default' => '#000000', 'hints' => __('Choose alert button text color on hover here.', $WOO_Product_Stock_Alert->text_domain), 'desc' => __('This lets you choose alert button text color on hover.', $WOO_Product_Stock_Alert->text_domain)) // Colorpicker
																																																			 )
																																										 ),
																											"form_submission" => array( "title" =>  __('Form Submission', $WOO_Product_Stock_Alert->text_domain), // Section one
																																									"fields" => array( "alert_success" => array('title' => __('Edit Alert text when form submitted successfully', $WOO_Product_Stock_Alert->text_domain), 'type' => 'textarea', 'desc' => __('Hint: Use %product_title% as product title and %customer_email% as customer email.<br/> Example: Thank you for your interest in %product_title%, you will receive an email alert when it becomes available.', $WOO_Product_Stock_Alert->text_domain)), // Textarea
																																																		 "alert_email_exist" => array('title' => __('Edit Alert text when email is already submitted', $WOO_Product_Stock_Alert->text_domain), 'type' => 'textarea', 'desc' => __('Hint: Use %product_title% as product title and %customer_email% as customer email.<br/> Example: %customer_email% is already registered with %product_title%. Please try again.', $WOO_Product_Stock_Alert->text_domain)), // Textarea
																																																		 "valid_email" => array('title' => __('Edit Alert text for valid email check', $WOO_Product_Stock_Alert->text_domain), 'type' => 'textarea', 'desc' => __('Hint: Use %product_title% as product title and %customer_email% as customer email.<br/> Example: Please enter a valid email id and try again.', $WOO_Product_Stock_Alert->text_domain)), // Textarea
																																																		)
																																									)
                                                      )
                                  );
                                                                                                                                                                                                                                         
    $WOO_Product_Stock_Alert->admin->settings->settings_field_init(apply_filters("settings_{$this->tab}_tab_options", $settings_tab_options));
  }

  /**
   * Sanitize each setting field as needed
   *
   * @param array $input Contains all settings fields as array keys
   */
  public function dc_woo_product_stock_alert_general_settings_sanitize( $input ) {
    global $WOO_Product_Stock_Alert;
    $new_input = array();
    
    $hasError = false;
    
    if( isset( $input['is_enable'] ) && !empty( $input['is_enable'] ) )
      $new_input['is_enable'] = sanitize_text_field( $input['is_enable'] );
    
    if( isset( $input['is_enable_backorders'] ) && !empty( $input['is_enable_backorders'] ) )
      $new_input['is_enable_backorders'] = sanitize_text_field( $input['is_enable_backorders'] );
    
    if( isset( $input['alert_text'] ) && !empty( $input['alert_text'] ) )
      $new_input['alert_text'] = $input['alert_text'];
    
    if( isset( $input['alert_text_color'] ) && !empty( $input['alert_text_color'] ) )
      $new_input['alert_text_color'] = sanitize_text_field( $input['alert_text_color'] );
    
    if( isset( $input['button_text'] ) && !empty( $input['button_text'] ) )
      $new_input['button_text'] = $input['button_text'];
    
    if( isset( $input['button_background_color'] ) && !empty( $input['button_background_color'] ) )
      $new_input['button_background_color'] = sanitize_text_field( $input['button_background_color'] );
    
    if( isset( $input['button_border_color'] ) && !empty( $input['button_border_color'] ) )
      $new_input['button_border_color'] = sanitize_text_field( $input['button_border_color'] );
    
    if( isset( $input['button_text_color'] ) && !empty( $input['button_text_color'] ) )
      $new_input['button_text_color'] = sanitize_text_field( $input['button_text_color'] );
    
    if( isset( $input['button_background_color_onhover'] ) && !empty( $input['button_background_color_onhover'] ) )
      $new_input['button_background_color_onhover'] = sanitize_text_field( $input['button_background_color_onhover'] );
    
    if( isset( $input['button_text_color_onhover'] ) && !empty( $input['button_text_color_onhover'] ) )
      $new_input['button_text_color_onhover'] = sanitize_text_field( $input['button_text_color_onhover'] );
    
    if( isset( $input['button_border_color_onhover'] ) && !empty( $input['button_border_color_onhover'] ) )
      $new_input['button_border_color_onhover'] = sanitize_text_field( $input['button_border_color_onhover'] );
    
    if( isset( $input['alert_success'] ) && !empty( $input['alert_success'] ) )
      $new_input['alert_success'] = $input['alert_success'];
    
    if( isset( $input['alert_email_exist'] ) && !empty( $input['alert_email_exist'] ) )
      $new_input['alert_email_exist'] = $input['alert_email_exist'];
    
    if( isset( $input['valid_email'] ) && !empty( $input['valid_email'] ) )
      $new_input['valid_email'] = $input['valid_email'];
    
    if(!$hasError) {
      add_settings_error(
        "dc_{$this->tab}_settings_name",
        esc_attr( "dc_{$this->tab}_settings_admin_updated" ),
        __('General settings updated', $WOO_Product_Stock_Alert->text_domain),
        'updated'
      );
    }

    return $new_input;
  }
  
  /** 
   * Print the Section text
   */
  public function basic_settings_info() {
    global $WOO_Product_Stock_Alert;
  }

  /** 
   * Print the Section text
   */
  public function form_customization_info() {
    global $WOO_Product_Stock_Alert;
    _e('Customize your stock alert form from here', $WOO_Product_Stock_Alert->text_domain);
  }
  
  /** 
   * Print the Section text
   */
  public function form_submission_info() {
    global $WOO_Product_Stock_Alert;
  }
  
}