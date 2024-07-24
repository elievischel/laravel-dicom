<?php

namespace laravelDicom\dict;

use laravelDicom\Nanodicom_Dictionary;

// Group 0x0074
Nanodicom_Dictionary::$dict[0x0074][0x1000] = array('CS', ' 1', 'UnifiedProcedureStepState');
Nanodicom_Dictionary::$dict[0x0074][0x1002] = array('SQ', ' 1', 'UnifiedProcedureStepProgressInformationSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1004] = array('DS', ' 1', 'UnifiedProcedureStepProgress');
Nanodicom_Dictionary::$dict[0x0074][0x1006] = array('ST', ' 1', 'UnifiedProcedureStepProgressDescription');
Nanodicom_Dictionary::$dict[0x0074][0x1008] = array('SQ', ' 1', 'UnifiedProcedureStepCommunicationsURISequence');
Nanodicom_Dictionary::$dict[0x0074][0x100a] = array('ST', ' 1', 'ContactURI');
Nanodicom_Dictionary::$dict[0x0074][0x100c] = array('LO', ' 1', 'ContactDisplayName');
Nanodicom_Dictionary::$dict[0x0074][0x100e] = array('SQ', ' 1', 'UnifiedProcedureStepDiscontinuationReasonCodeSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1020] = array('SQ', ' 1', 'BeamTaskSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1022] = array('CS', ' 1', 'BeamTaskType');
Nanodicom_Dictionary::$dict[0x0074][0x1024] = array('IS', ' 1', 'BeamOrderIndex');
Nanodicom_Dictionary::$dict[0x0074][0x1030] = array('SQ', ' 1', 'DeliveryVerificationImageSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1032] = array('CS', ' 1', 'VerificationImageTiming');
Nanodicom_Dictionary::$dict[0x0074][0x1034] = array('CS', ' 1', 'DoubleExposureFlag');
Nanodicom_Dictionary::$dict[0x0074][0x1036] = array('CS', ' 1', 'DoubleExposureOrdering');
Nanodicom_Dictionary::$dict[0x0074][0x1038] = array('DS', ' 1', 'DoubleExposureMeterset');
Nanodicom_Dictionary::$dict[0x0074][0x103A] = array('DS', ' 4', 'DoubleExposureFieldDelta');
Nanodicom_Dictionary::$dict[0x0074][0x1040] = array('SQ', ' 1', 'RelatedReferenceRTImageSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1042] = array('SQ', ' 1', 'GeneralMachineVerificationSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1044] = array('SQ', ' 1', 'ConventionalMachineVerificationSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1046] = array('SQ', ' 1', 'IonMachineVerificationSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1048] = array('SQ', ' 1', 'FailedAttributesSequence');
Nanodicom_Dictionary::$dict[0x0074][0x104A] = array('SQ', ' 1', 'OverriddenAttributesSequence');
Nanodicom_Dictionary::$dict[0x0074][0x104C] = array('SQ', ' 1', 'ConventionalControlPointVerificationSequence');
Nanodicom_Dictionary::$dict[0x0074][0x104E] = array('SQ', ' 1', 'IonControlPointVerificationSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1050] = array('SQ', ' 1', 'AttributeOccurrenceSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1052] = array('AT', ' 1', 'AttributeOccurrencePointer');
Nanodicom_Dictionary::$dict[0x0074][0x1054] = array('UL', ' 1', 'AttributeItemSelector');
Nanodicom_Dictionary::$dict[0x0074][0x1056] = array('LO', ' 1', 'AttributeOccurrencePrivateCreator');
Nanodicom_Dictionary::$dict[0x0074][0x1200] = array('CS', ' 1', 'ScheduledProcedureStepPriority');
Nanodicom_Dictionary::$dict[0x0074][0x1202] = array('LO', ' 1', 'WorklistLabel');
Nanodicom_Dictionary::$dict[0x0074][0x1204] = array('LO', ' 1', 'ProcedureStepLabel');
Nanodicom_Dictionary::$dict[0x0074][0x1210] = array('SQ', ' 1', 'ScheduledProcessingParametersSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1212] = array('SQ', ' 1', 'PerformedProcessingParametersSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1216] = array('SQ', ' 1', 'UnifiedProcedureStepPerformedProcedureSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1220] = array('SQ', ' 1', 'RelatedProcedureStepSequence');
Nanodicom_Dictionary::$dict[0x0074][0x1222] = array('LO', ' 1', 'ProcedureStepRelationshipType');
Nanodicom_Dictionary::$dict[0x0074][0x1230] = array('LO', ' 1', 'DeletionLock');
Nanodicom_Dictionary::$dict[0x0074][0x1234] = array('AE', ' 1', 'ReceivingAE');
Nanodicom_Dictionary::$dict[0x0074][0x1236] = array('AE', ' 1', 'RequestingAE');
Nanodicom_Dictionary::$dict[0x0074][0x1238] = array('LT', ' 1', 'ReasonForCancellation');
Nanodicom_Dictionary::$dict[0x0074][0x1242] = array('CS', ' 1', 'SCPStatus');
Nanodicom_Dictionary::$dict[0x0074][0x1244] = array('CS', ' 1', 'SubscriptionListStatus');
Nanodicom_Dictionary::$dict[0x0074][0x1246] = array('CS', ' 1', 'UnifiedProcedureStepListStatus');