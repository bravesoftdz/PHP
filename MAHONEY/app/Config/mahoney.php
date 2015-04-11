<?php

define("PLUGIN_FOLDER", APP . 'Plugin' . DS);
define("MAHONEY_PLUGIN_FOLDER", APP . 'Vendor' . DS . 'Mahoney' . DS);
define("MAHONEY_ACL_ROOT_NODE", "controllers");
define("MAHONEY_IS_INSTALLED", file_exists(APP . 'Config' . DS . 'installed') ? TRUE : FALSE);
