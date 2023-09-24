<?php
/*
  Plugin Name: Q2A Verified Users
  Plugin URI: https://github.com/Kuddus95/q2a-verified-users-master
  Plugin Description: Display verified badges to users with certain level or above.
  Plugin Version: 1.0
  Plugin Date: 2022-04-18
  Plugin Author: Sshuicchi
  Plugin Editor: Aman
  Plugin License: GPLv2
  Plugin Minimum Question2Answer Version: 1.8
  Plugin Update Check URI:
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
    header('Location: ../../');
    exit;
}


qa_register_plugin_layer(
    'q2a-verified-users-layer.php', 'Q2A Verified Users' // human-readable name of layer
);
