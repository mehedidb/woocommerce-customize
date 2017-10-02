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
