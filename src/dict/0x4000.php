<?php

namespace elievischel\laravelDicom\dict;

use elievischel\laravelDicom\Nanodicom_Dictionary;

// Group 0x4000
Nanodicom_Dictionary::$dict[0x4000][0x0010] = array('LT', ' 1 ', 'Arbitrary', 'RET');
Nanodicom_Dictionary::$dict[0x4000][0x4000] = array('LT', ' 1 ', 'TextComments', 'RET');
