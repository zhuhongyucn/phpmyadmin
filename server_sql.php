<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Server SQL executor
 *
 * @package PhpMyAdmin
 */
declare(strict_types=1);

use PhpMyAdmin\Config\PageSettings;
use PhpMyAdmin\Response;
use PhpMyAdmin\SqlQueryForm;

/**
 *
 */
require_once 'libraries/common.inc.php';

PageSettings::showGroup('Sql');

/**
 * Does the common work
 */
$response = Response::getInstance();
$header   = $response->getHeader();
$scripts  = $header->getScripts();
$scripts->addFile('sql');

require_once 'libraries/server_common.inc.php';

$sqlQueryForm = new SqlQueryForm();

/**
 * Query box, bookmark, insert data from textfile
 */
$response->addHTML($sqlQueryForm->getHtml());
