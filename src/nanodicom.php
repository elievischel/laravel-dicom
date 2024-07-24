<?php

namespace elievischel\laravelDicom;

// Set the full path to the current folder
define("NANODICOMROOT", "");

/**
 * abstract Nanodicom class.
 *
 * All tools extend this class. Simple wrapper for Core class.
 * @package    Nanodicom
 * @category   Base
 * @author     Nano Documet <nanodocumet@gmail.com>
 * @version       1.3.1
 * @copyright  (c) 2010-2011
 * @license    http://www.opensource.org/licenses/mit-license.php MIT-license
 */
abstract class Nanodicom extends Nanodicom_Core
{
}
