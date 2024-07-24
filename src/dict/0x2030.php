<?php

namespace elievischel\laravelDicom\dict;

use elievischel\laravelDicom\Nanodicom_Dictionary;

// Group 0x2030
Nanodicom_Dictionary::$dict[0x2030][0x0010] = array('US', ' 1', 'AnnotationPosition');
Nanodicom_Dictionary::$dict[0x2030][0x0020] = array('LO', ' 1', 'TextString');
