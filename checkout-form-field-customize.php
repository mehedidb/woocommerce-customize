#if you don't want to use this code in functions.php you must need to do..  ( global $wp_filter; )





// write the php code in functions php for remove field form checkout form.

<?php
  add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

  function custom_override_checkout_fields( $fields ) {
  unset( $fields['billing']['billing_company'] );

  return $fields;
  }
?>


// write the php code in functions php for required false field in checkout form.

<?php
  add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

  function custom_override_checkout_fields( $fields ) {
  $fields['billing']['billing_first_name']['required'] = 0;

  return $fields;
  }
?>



// write the php code in functions php for add custom class in woocommerce checkout form field or replace other classes.

<?php
  add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

  function custom_override_checkout_fields( $fields ) {
  $fields['billing']['billing_first_name']['class']['0'] = 'your custom class name here';

  return $fields;
  }
?>


// write the php code in functions php for add custom field class in woocommerce checkout form.

<?php
  add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

  function custom_override_checkout_fields( $fields ) {
  $fields['billing']['new_field_name'] = array(
                                          'type' => 'your field type', //like textarea..
                                          'label' => 'Your Label', // simple name here..
                                          'required' => 1, // 1 = true, and 0=false.. if you use 1 this fied would be required.
                                          'class' => array(
                                            '0'   =>  'your class name',
                                            '1'   =>  'your class name'
                                          )
                                        )

  return $fields;
  }
?>
