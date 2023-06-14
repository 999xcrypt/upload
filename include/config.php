<?php

//Prevent direct access to the config file
if(!defined("CONFIG_ACCESS")){
  http_response_code(404);
  exit();
}

//Site name (Used in the title of the page)
define("SITE_NAME", "crypt Upload");

//Site URL (include protocol and root path if applicable)
define("SITE_URL", "http://localhost/ripper-upload");

//Site logo
define("SITE_LOGO", "https://www.logoground.com/uploads11/dv11y20222240572022-12-083905362XYZ-Monogram.jpg");

//Site Discord (set as null to disable)
define("SITE_DISCORD", "null");

//Should links to php files include the .php extension?
define('PHP_EXTENSION', true);

//Where should uploaded files be stored?
//This path is relative to the root of the project
define("UPLOAD_DIR", "/uploads");

//What should the maximum file size be?
//This is in megabytes
define("UPLOAD_MAX_SIZE", 60);

//Should the file mime type by checked?
define("UPLOAD_CHECK_MIME", true);

//Should the file extension be checked?
define("UPLOAD_CHECK_EXT", true);

//If UPLOAD_CHECK_MIME is true, only allow these mime types
define("UPLOAD_ALLOW_MIME", ["image/gif", "image/png", "image/jpeg"]);

//If UPLOAD_CHECK_EXT is true, only allow these file extensions
define("UPLOAD_ALLOW_EXT", ["gif", "png", "jpg", "jpeg","exe"]);

//Should ads be enabled?
define("AD_ENABLED", false);
