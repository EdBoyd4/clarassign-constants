<?php
// /clarassign/partials/bootstrap.php

declare(strict_types=1);

// Default page title (override per-page)
$pageTitle = $pageTitle ?? 'ClarAssign';

// Top nav active key: 'case-new', 'cases', 'assignments', 'bill-new', 'bills'
$activeTopNav = $activeTopNav ?? '';

// New case left nav active panel: 'case-info', 'clients-info', 'assignment-info'
$activeCaseNewPanel = $activeCaseNewPanel ?? 'case-info';

define('CLAR_ROOT', dirname(__DIR__));

define('CLAR_CONSTANTS', CLAR_ROOT . '/constants');
require_once CLAR_CONSTANTS . '/clarassign-constants-enums.php';
/*
clarassign-constants-system-navigation.php
constants_connection_cases_and_assignments.php
constants_connection_investigations_and_tasks.php
constants_connection_forums_and_juris.php
constants_connection_professionals.php
sup_nav_constants.php
*/


define('CLAR_MODELS',    dirname(CLAR_ROOT) . '/Clarassign/models');

// CAIT Constants
define('ORDER_MANAGEMENT_ROOT', dirname(CLAR_ROOT) . '/Clarassign/orderManagement');
define('ORDER_MANAGEMENT_LISTS_ROOT', dirname(CLAR_ROOT) . '/Clarassign/orderManagement/lists');
define('ORDER_MANAGEMENT_HEADERS_ROOT', dirname(CLAR_ROOT) . '/Clarassign/orderManagement/wrappers/views');
define('CLAR_VIEWS',    CLAR_ROOT . '/clarassign-views');
define('CLAR_VIEW_PARTIALS',    CLAR_ROOT . '/clarassign-view-partials');

//define('CLAR_SHARED',    CLAR_ROOT . '/clarassign-shared'); 
//define('CLAR_ASSETS',    CLAR_ROOT . '/clarassign-assets');

define('ORDER_MANAGEMENT_INTAKE_MODELS', CLAR_ROOT . '/CA-intake-models');
/*
*/