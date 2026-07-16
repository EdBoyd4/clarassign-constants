<?php
declare(strict_types=1);

define('CLARASSIGN_ARCHITECTURE_ROOT', dirname(CLAR_ROOT) . '/Clarassign');
define('ORDER_MANAGEMENT_INTAKE_ROOT', dirname(CLAR_ROOT) . '/clarassign-CAIT');
define('ORDER_MANAGEMENT_WRAPPERS_ROOT', CLARASSIGN_ARCHITECTURE_ROOT . '/orderManagement/wrappers');
define('CLARASSIGN_DATABASES_BUILDERS_ROOT', CLARASSIGN_ARCHITECTURE_ROOT . '/builders');
define('IT_BUILDERS', CLARASSIGN_DATABASES_BUILDERS_ROOT . '/IT-builders');
define('CA_BUILDERS', CLARASSIGN_DATABASES_BUILDERS_ROOT . '/CA-builders');

/*
define('CAIT_INTAKE_PUBLIC', ORDER_MANAGEMENT_INTAKE_ROOT . '/public');
view-CAIT-intake-basic.php
*/

define('ORDER_MANAGEMENT_CONFIG_FILES', CLARASSIGN_ARCHITECTURE_ROOT . '/constants');
/*  
CAIT-constants-file-paths.php
*/

define('ORDER_MANAGEMENT_MODELS', CLARASSIGN_ARCHITECTURE_ROOT . '/models');
/*
model-clarassign-query-forum_and_juris.php
*/

define('ORDER_MANAGEMENT_CA_VIEWS', CLARASSIGN_ARCHITECTURE_ROOT . '/orderManagement/details/views');
/*  
view-CA-basic-sidenav.php
view-CA-basic-clarium-case-number-info.php
view-CA-basic-assignment-notes.php
view-CA-basic-assignment_s_.php
view-CA-basic-case-notes.php
view-CA-basic-case.php
view-CA-basic-investigation_s_.php
view-CA-basic-named-clients.php
view-CA-basic-record-clients.php
view-CA-basic-side-represented.php
*/

define('ORDER_MANAGEMENT_IT_VIEWS', CLARASSIGN_ARCHITECTURE_ROOT . '/orderManagement/details/views');
