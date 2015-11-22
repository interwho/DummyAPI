<?php
define('PATH', realpath(__DIR__ . '/..'));

// Set Timezone
date_default_timezone_set('America/Toronto');

define('HAVEN_API_KEY', '0b33b80f-771d-436c-9347-88d0312e5a44');
define('BASE_HAVEN_URL', 'https://api.havenondemand.com/1/api/sync/analyzesentiment/v1?apikey=' . HAVEN_API_KEY);
