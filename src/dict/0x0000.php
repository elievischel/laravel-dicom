<?php

use elievischel\laravelDicom\tools\tools\tools\tools\tools\tools\anonymizer\Nanodicom_Dictionary;

// Group 0x0000
Nanodicom_Dictionary::$dict[0x0000][0x0000] = array('UL', '1', 'GroupLength');
Nanodicom_Dictionary::$dict[0x0000][0x0001] = array('UL', '1', 'CommandLengthToEnd');
Nanodicom_Dictionary::$dict[0x0000][0x0002] = array('UI', '1', 'AffectedSOPClassUID');
Nanodicom_Dictionary::$dict[0x0000][0x0003] = array('UI', '1', 'RequestedSOPClassUID');
Nanodicom_Dictionary::$dict[0x0000][0x0010] = array('CS', '1', 'CommandRecognitionCode');
Nanodicom_Dictionary::$dict[0x0000][0x0100] = array('US', '1', 'CommandField');
Nanodicom_Dictionary::$dict[0x0000][0x0110] = array('US', '1', 'MessageID');
Nanodicom_Dictionary::$dict[0x0000][0x0120] = array('US', '1', 'MessageIDBeingRespondedTo');
Nanodicom_Dictionary::$dict[0x0000][0x0200] = array('AE', '1', 'Initiator');
Nanodicom_Dictionary::$dict[0x0000][0x0300] = array('AE', '1', 'Receiver');
Nanodicom_Dictionary::$dict[0x0000][0x0400] = array('AE', '1', 'FindLocation');
Nanodicom_Dictionary::$dict[0x0000][0x0600] = array('AE', '1', 'MoveDestination');
Nanodicom_Dictionary::$dict[0x0000][0x0700] = array('US', '1', 'Priority');
Nanodicom_Dictionary::$dict[0x0000][0x0800] = array('US', '1', 'DataSetType');
Nanodicom_Dictionary::$dict[0x0000][0x0850] = array('US', '1', 'NumberOfMatches');
Nanodicom_Dictionary::$dict[0x0000][0x0860] = array('US', '1', 'ResponseSequenceNumber');
Nanodicom_Dictionary::$dict[0x0000][0x0900] = array('US', '1', 'Status');
Nanodicom_Dictionary::$dict[0x0000][0x0901] = array('AT', '1-n', 'OffendingElement');
Nanodicom_Dictionary::$dict[0x0000][0x0902] = array('LO', '1', 'ErrorComment');
Nanodicom_Dictionary::$dict[0x0000][0x0903] = array('US', '1', 'ErrorID');
Nanodicom_Dictionary::$dict[0x0000][0x0904] = array('OT', '1-n', 'ErrorInformation');
Nanodicom_Dictionary::$dict[0x0000][0x1000] = array('UI', '1', 'AffectedSOPInstanceUID');
Nanodicom_Dictionary::$dict[0x0000][0x1001] = array('UI', '1', 'RequestedSOPInstanceUID');
Nanodicom_Dictionary::$dict[0x0000][0x1002] = array('US', '1', 'EventTypeID');
Nanodicom_Dictionary::$dict[0x0000][0x1003] = array('OT', '1-n', 'EventInformation');
Nanodicom_Dictionary::$dict[0x0000][0x1005] = array('AT', '1-n', 'AttributeIdentifierList');
Nanodicom_Dictionary::$dict[0x0000][0x1007] = array('AT', '1-n', 'ModificationList');
Nanodicom_Dictionary::$dict[0x0000][0x1008] = array('US', '1', 'ActionTypeID');
Nanodicom_Dictionary::$dict[0x0000][0x1009] = array('OT', '1-n', 'ActionInformation');
Nanodicom_Dictionary::$dict[0x0000][0x1013] = array('UI', '1-n', 'SuccessfulSOPInstanceUIDList');
Nanodicom_Dictionary::$dict[0x0000][0x1014] = array('UI', '1-n', 'FailedSOPInstanceUIDList');
Nanodicom_Dictionary::$dict[0x0000][0x1015] = array('UI', '1-n', 'WarningSOPInstanceUIDList');
Nanodicom_Dictionary::$dict[0x0000][0x1020] = array('US', '1', 'NumberOfRemainingSuboperations');
Nanodicom_Dictionary::$dict[0x0000][0x1021] = array('US', '1', 'NumberOfCompletedSuboperations');
Nanodicom_Dictionary::$dict[0x0000][0x1022] = array('US', '1', 'NumberOfFailedSuboperations');
Nanodicom_Dictionary::$dict[0x0000][0x1023] = array('US', '1', 'NumberOfWarningSuboperations');
Nanodicom_Dictionary::$dict[0x0000][0x1030] = array('AE', '1', 'MoveOriginatorApplicationEntityTitle');
Nanodicom_Dictionary::$dict[0x0000][0x1031] = array('US', '1', 'MoveOriginatorMessageID');
Nanodicom_Dictionary::$dict[0x0000][0x4000] = array('AT', '1', 'DialogReceiver');
Nanodicom_Dictionary::$dict[0x0000][0x4010] = array('AT', '1', 'TerminalType');
Nanodicom_Dictionary::$dict[0x0000][0x5010] = array('SH', '1', 'MessageSetID');
Nanodicom_Dictionary::$dict[0x0000][0x5020] = array('SH', '1', 'EndMessageSet');
Nanodicom_Dictionary::$dict[0x0000][0x5110] = array('AT', '1', 'DisplayFormat');
Nanodicom_Dictionary::$dict[0x0000][0x5120] = array('AT', '1', 'PagePositionID');
Nanodicom_Dictionary::$dict[0x0000][0x5130] = array('CS', '1', 'TextFormatID');
Nanodicom_Dictionary::$dict[0x0000][0x5140] = array('CS', '1', 'NormalReverse');
Nanodicom_Dictionary::$dict[0x0000][0x5150] = array('CS', '1', 'AddGrayScale');
Nanodicom_Dictionary::$dict[0x0000][0x5160] = array('CS', '1', 'Borders');
Nanodicom_Dictionary::$dict[0x0000][0x5170] = array('IS', '1', 'Copies');
Nanodicom_Dictionary::$dict[0x0000][0x5180] = array('CS', '1', 'OldMagnificationType');
Nanodicom_Dictionary::$dict[0x0000][0x5190] = array('CS', '1', 'Erase');
Nanodicom_Dictionary::$dict[0x0000][0x51A0] = array('CS', '1', 'Print');
Nanodicom_Dictionary::$dict[0x0000][0x51B0] = array('US', '1-n', 'Overlays');