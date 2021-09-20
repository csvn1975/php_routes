<?php
define('PAYPAL_CLIENT_ID','AU3tdCgU4RagUR7vsubTOr_E0206GVaN9w4-OTQYF8djAC1B2KdgfyH-GnLL7wOZcn6ZH_lMJn2xtAsG');
define('PAYPAL_SECRET','EP71rIFXoiluS0xofk_YsH1w5hw-fJkCsX-sU6jTUXrbMiEGDlCAbUW0DT3sL3gJMpZavDIsjxIkIHah');

# get data from https://developer.paypal.com/docs/api/overview/#make-rest-api-calls
define('PAYPAL_BASE_URL','https://api.sandbox.paypal.com'); 
// live URL: https://api.paypal.


define('URL_PAYPAL_RETURN', "http://localhost:8800/pages/pay_complete.php");
define('URL_PAYPAL_CANCEL', "http://localhost:8800/pages/cart.php");
