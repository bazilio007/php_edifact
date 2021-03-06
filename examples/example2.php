<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file is part of the PEAR EDI package.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to the MIT license that is available
 * through the world-wide-web at the following URI:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  File_Formats 
 * @package   EDI
 * @author    Mark Foster <mark@myndtech.com>
 * @copyright 2013 Mark Foster
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @link      http://en.wikipedia.org/wiki/Electronic_Data_Interchange
 * @filesource
 */

/**
 * Include the EDI class.
 */
require_once 'EDI.php';

try {
    $interch = EDI::interchangeFactory('EDIFACT', array(
        'directory'        => 'D96A',
        'syntaxIdentifier' => 'UNOC',
        'syntaxVersion'    => 3
    ));
} catch (EDI_Exception $exc) {
    echo $exc->getMessage() . "\n";
    exit(1);
}
