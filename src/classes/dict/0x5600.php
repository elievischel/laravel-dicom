<?php

namespace laravelDicom\dict;

use laravelDicom\Nanodicom_Dictionary;

// Group 0x5600
Nanodicom_Dictionary::$dict[0x5600][0x0010] = array('OF', ' 1', 'FirstOrderPhaseCorrectionAngle');
Nanodicom_Dictionary::$dict[0x5600][0x0020] = array('OF', ' 1', 'SpectroscopyData');
