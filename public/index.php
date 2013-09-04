<?php
// {{{ICINGA_LICENSE_HEADER}}}
// {{{ICINGA_LICENSE_HEADER}}}

/*
 * Set timezone before bootstrapping the application and therefore before calling `setupTimezone()` because in case an
 * error occurred whilst, the logger calls date/time functions which would generate a warning if the php.ini lacks a
 * valid timezone.
 */
date_default_timezone_set('UTC');

require_once dirname(__FILE__). '/../library/Icinga/Application/ApplicationBootstrap.php';
require_once dirname(__FILE__). '/../library/Icinga/Application/Web.php';

use Icinga\Application\Web;

Web::start(dirname(__FILE__) . '/../config/')->dispatch();
