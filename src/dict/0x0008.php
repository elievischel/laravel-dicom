<?php

use elievischel\laravelDicom\tools\tools\tools\tools\tools\tools\anonymizer\Nanodicom_Dictionary;

// Group 0x0008
Nanodicom_Dictionary::$dict[0x0008][0x0000] = array('UL', '1', 'IdentifyingGroupLength', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x0001] = array('UL', '1', 'LengthToEnd', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x0005] = array('CS', '1-n', 'SpecificCharacterSet');
Nanodicom_Dictionary::$dict[0x0008][0x0006] = array('SQ', '1', 'LanguageCodeSequence');
Nanodicom_Dictionary::$dict[0x0008][0x0008] = array('CS', '2-n', 'ImageType');
Nanodicom_Dictionary::$dict[0x0008][0x000A] = array('US', '1', 'SequenceItemNumber'); // NA
Nanodicom_Dictionary::$dict[0x0008][0x0010] = array('CS', '1', 'RecognitionCode', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x0012] = array('DA', '1', 'InstanceCreationDate');
Nanodicom_Dictionary::$dict[0x0008][0x0013] = array('TM', '1', 'InstanceCreationTime');
Nanodicom_Dictionary::$dict[0x0008][0x0014] = array('UI', '1', 'InstanceCreatorUID');
Nanodicom_Dictionary::$dict[0x0008][0x0016] = array('UI', '1', 'SOPClassUID');
Nanodicom_Dictionary::$dict[0x0008][0x0018] = array('UI', '1', 'SOPInstanceUID');
Nanodicom_Dictionary::$dict[0x0008][0x001A] = array('UI', '1-n', 'RelatedGeneralSOPClassUID');
Nanodicom_Dictionary::$dict[0x0008][0x001B] = array('UI', '1', 'OriginalSpecializedSOPClassUID');
Nanodicom_Dictionary::$dict[0x0008][0x0020] = array('DA', '1', 'StudyDate');
Nanodicom_Dictionary::$dict[0x0008][0x0021] = array('DA', '1', 'SeriesDate');
Nanodicom_Dictionary::$dict[0x0008][0x0022] = array('DA', '1', 'AcquisitionDate');
Nanodicom_Dictionary::$dict[0x0008][0x0023] = array('DA', '1', 'ContentDate');
Nanodicom_Dictionary::$dict[0x0008][0x0024] = array('DA', '1', 'OverlayDate', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x0025] = array('DA', '1', 'CurveDate', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x002A] = array('DT', '1', 'AcquisitionDatetime');
Nanodicom_Dictionary::$dict[0x0008][0x0030] = array('TM', '1', 'StudyTime');
Nanodicom_Dictionary::$dict[0x0008][0x0031] = array('TM', '1', 'SeriesTime');
Nanodicom_Dictionary::$dict[0x0008][0x0032] = array('TM', '1', 'AcquisitionTime');
Nanodicom_Dictionary::$dict[0x0008][0x0033] = array('TM', ' 1', 'ContentTime');
Nanodicom_Dictionary::$dict[0x0008][0x0034] = array('TM', ' 1 ', 'OverlayTime', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x0035] = array('TM', ' 1 ', 'CurveTime', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x0040] = array('US', ' 1 ', 'DataSetType', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x0041] = array('LO', ' 1 ', 'DataSetSubtype', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x0042] = array('CS', ' 1 ', 'NuclearMedicineSeriesType', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x0050] = array('SH', ' 1', 'AccessionNumber');
Nanodicom_Dictionary::$dict[0x0008][0x0051] = array('SQ', ' 1', 'IssuerOfAccessionNumberSequence');
Nanodicom_Dictionary::$dict[0x0008][0x0052] = array('CS', ' 1', 'QueryRetrieveLevel');
Nanodicom_Dictionary::$dict[0x0008][0x0054] = array('AE', ' 1-n', 'RetrieveAETitle');
Nanodicom_Dictionary::$dict[0x0008][0x0056] = array('CS', ' 1', 'InstanceAvailability');
Nanodicom_Dictionary::$dict[0x0008][0x0058] = array('UI', ' 1-n', 'FailedSOPInstanceUIDList');
Nanodicom_Dictionary::$dict[0x0008][0x0060] = array('CS', ' 1', 'Modality');
Nanodicom_Dictionary::$dict[0x0008][0x0061] = array('CS', ' 1-n', 'ModalitiesInStudy');
Nanodicom_Dictionary::$dict[0x0008][0x0062] = array('UI', ' 1-n', 'SOPClassesInStudy');
Nanodicom_Dictionary::$dict[0x0008][0x0064] = array('CS', ' 1', 'ConversionType');
Nanodicom_Dictionary::$dict[0x0008][0x0068] = array('CS', ' 1', 'PresentationIntentType');
Nanodicom_Dictionary::$dict[0x0008][0x0070] = array('LO', ' 1', 'Manufacturer');
Nanodicom_Dictionary::$dict[0x0008][0x0080] = array('LO', ' 1', 'InstitutionName');
Nanodicom_Dictionary::$dict[0x0008][0x0081] = array('ST', ' 1', 'InstitutionAddress');
Nanodicom_Dictionary::$dict[0x0008][0x0082] = array('SQ', ' 1', 'InstitutionCodeSequence');
Nanodicom_Dictionary::$dict[0x0008][0x0090] = array('PN', ' 1', 'ReferringPhysicianName');
Nanodicom_Dictionary::$dict[0x0008][0x0092] = array('ST', ' 1', 'ReferringPhysicianAddress');
Nanodicom_Dictionary::$dict[0x0008][0x0094] = array('SH', ' 1-n', 'ReferringPhysicianTelephoneNumbers');
Nanodicom_Dictionary::$dict[0x0008][0x0096] = array('SQ', ' 1', 'ReferringPhysicianIdentificationSequence');
Nanodicom_Dictionary::$dict[0x0008][0x0100] = array('SH', ' 1', 'CodeValue');
Nanodicom_Dictionary::$dict[0x0008][0x0102] = array('SH', ' 1', 'CodingSchemeDesignator');
Nanodicom_Dictionary::$dict[0x0008][0x0103] = array('SH', ' 1', 'CodingSchemeVersion');
Nanodicom_Dictionary::$dict[0x0008][0x0104] = array('LO', ' 1', 'CodeMeaning');
Nanodicom_Dictionary::$dict[0x0008][0x0105] = array('CS', ' 1', 'MappingResource');
Nanodicom_Dictionary::$dict[0x0008][0x0106] = array('DT', ' 1', 'ContextGroupVersion');
Nanodicom_Dictionary::$dict[0x0008][0x0107] = array('DT', ' 1', 'ContextGroupLocalVersion');
Nanodicom_Dictionary::$dict[0x0008][0x010B] = array('CS', ' 1', 'ContextGroupExtensionFlag');
Nanodicom_Dictionary::$dict[0x0008][0x010C] = array('UI', ' 1', 'CodingSchemeUID');
Nanodicom_Dictionary::$dict[0x0008][0x010D] = array('UI', ' 1', 'ContextGroupExtensionCreatorUID');
Nanodicom_Dictionary::$dict[0x0008][0x010F] = array('CS', ' 1', 'ContextIdentifier');
Nanodicom_Dictionary::$dict[0x0008][0x0110] = array('SQ', ' 1', 'CodingSchemeIdentificationSequence');
Nanodicom_Dictionary::$dict[0x0008][0x0112] = array('LO', ' 1', 'CodingSchemeRegistry');
Nanodicom_Dictionary::$dict[0x0008][0x0114] = array('ST', ' 1', 'CodingSchemeExternalID');
Nanodicom_Dictionary::$dict[0x0008][0x0115] = array('ST', ' 1', 'CodingSchemeName');
Nanodicom_Dictionary::$dict[0x0008][0x0116] = array('ST', ' 1', 'CodingSchemeResponsibleOrganization');
Nanodicom_Dictionary::$dict[0x0008][0x0117] = array('UI', ' 1', 'ContextUID');
Nanodicom_Dictionary::$dict[0x0008][0x0201] = array('SH', ' 1', 'TimezoneOffsetFromUTC');
Nanodicom_Dictionary::$dict[0x0008][0x1000] = array('AE', ' 1 ', 'NetworkID', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x1010] = array('SH', ' 1', 'StationName');
Nanodicom_Dictionary::$dict[0x0008][0x1030] = array('LO', ' 1', 'StudyDescription');
Nanodicom_Dictionary::$dict[0x0008][0x1032] = array('SQ', ' 1', 'ProcedureCodeSequence');
Nanodicom_Dictionary::$dict[0x0008][0x103E] = array('LO', ' 1', 'SeriesDescription');
Nanodicom_Dictionary::$dict[0x0008][0x103F] = array('SQ', ' 1', 'SeriesDescriptionCodeSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1040] = array('LO', ' 1', 'InstitutionalDepartmentName');
Nanodicom_Dictionary::$dict[0x0008][0x1048] = array('PN', ' 1-n', 'PhysiciansOfRecord');
Nanodicom_Dictionary::$dict[0x0008][0x1049] = array('SQ', ' 1', 'PhysiciansOfRecordIdentificationSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1050] = array('PN', ' 1-n', 'PerformingPhysicianName');
Nanodicom_Dictionary::$dict[0x0008][0x1052] = array('SQ', ' 1', 'PerformingPhysicianIdentificationSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1060] = array('PN', ' 1-n', 'NameOfPhysiciansReadingStudy');
Nanodicom_Dictionary::$dict[0x0008][0x1062] = array('SQ', ' 1', 'PhysiciansReadingStudyIdentificationSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1070] = array('PN', ' 1-n', 'OperatorsName');
Nanodicom_Dictionary::$dict[0x0008][0x1072] = array('SQ', ' 1', 'OperatorIdentificationSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1080] = array('LO', ' 1-n', 'AdmittingDiagnosesDescription');
Nanodicom_Dictionary::$dict[0x0008][0x1084] = array('SQ', ' 1', 'AdmittingDiagnosesCodeSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1090] = array('LO', ' 1', 'ManufacturerModelName');
Nanodicom_Dictionary::$dict[0x0008][0x1100] = array('SQ', ' 1 ', 'ReferencedResultsSequence', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x1110] = array('SQ', ' 1', 'ReferencedStudySequence');
Nanodicom_Dictionary::$dict[0x0008][0x1111] = array('SQ', ' 1', 'ReferencedPerformedProcedureStepSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1115] = array('SQ', ' 1', 'ReferencedSeriesSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1120] = array('SQ', ' 1', 'ReferencedPatientSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1125] = array('SQ', ' 1', 'ReferencedVisitSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1130] = array('SQ', ' 1 ', 'ReferencedOverlaySequence', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x1134] = array('SQ', ' 1', 'ReferencedStereometricInstanceSequence');
Nanodicom_Dictionary::$dict[0x0008][0x113A] = array('SQ', ' 1', 'ReferencedWaveformSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1140] = array('SQ', ' 1', 'ReferencedImageSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1145] = array('SQ', ' 1 ', 'ReferencedCurveSequence', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x114A] = array('SQ', ' 1', 'ReferencedInstanceSequence');
Nanodicom_Dictionary::$dict[0x0008][0x114B] = array('SQ', ' 1', 'ReferencedRealWorldValueMappingInstanceSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1150] = array('UI', ' 1', 'ReferencedSOPClassUID');
Nanodicom_Dictionary::$dict[0x0008][0x1155] = array('UI', ' 1', 'ReferencedSOPInstanceUID');
Nanodicom_Dictionary::$dict[0x0008][0x115A] = array('UI', ' 1-n', 'SOPClassesSupported');
Nanodicom_Dictionary::$dict[0x0008][0x1160] = array('IS', ' 1-n', 'ReferencedFrameNumber');
Nanodicom_Dictionary::$dict[0x0008][0x1161] = array('UL', ' 1-n', 'SimpleFrameList');
Nanodicom_Dictionary::$dict[0x0008][0x1162] = array('UL', ' 3-3n', 'CalculatedFrameList');
Nanodicom_Dictionary::$dict[0x0008][0x1163] = array('FD', ' 2', 'TimeRange');
Nanodicom_Dictionary::$dict[0x0008][0x1164] = array('SQ', ' 1', 'FrameExtractionSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1167] = array('UI', ' 1', 'MultiFrameSourceSOPInstanceUID');
Nanodicom_Dictionary::$dict[0x0008][0x1195] = array('UI', ' 1', 'TransactionUID');
Nanodicom_Dictionary::$dict[0x0008][0x1197] = array('US', ' 1', 'FailureReason');
Nanodicom_Dictionary::$dict[0x0008][0x1198] = array('SQ', ' 1', 'FailedSOPSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1199] = array('SQ', ' 1', 'ReferencedSOPSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1200] = array('SQ', ' 1', 'StudiesContainingOtherReferencedInstancesSequence');
Nanodicom_Dictionary::$dict[0x0008][0x1250] = array('SQ', ' 1', 'RelatedSeriesSequence');
Nanodicom_Dictionary::$dict[0x0008][0x2110] = array('CS', ' 1 ', 'LossyImageCompressionRetired', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2111] = array('ST', ' 1', 'DerivationDescription');
Nanodicom_Dictionary::$dict[0x0008][0x2112] = array('SQ', ' 1', 'SourceImageSequence');
Nanodicom_Dictionary::$dict[0x0008][0x2120] = array('SH', ' 1', 'StageName');
Nanodicom_Dictionary::$dict[0x0008][0x2122] = array('IS', ' 1', 'StageNumber');
Nanodicom_Dictionary::$dict[0x0008][0x2124] = array('IS', ' 1', 'NumberOfStages');
Nanodicom_Dictionary::$dict[0x0008][0x2127] = array('SH', ' 1', 'ViewName');
Nanodicom_Dictionary::$dict[0x0008][0x2128] = array('IS', ' 1', 'ViewNumber');
Nanodicom_Dictionary::$dict[0x0008][0x2129] = array('IS', ' 1', 'NumberOfEventTimers');
Nanodicom_Dictionary::$dict[0x0008][0x212A] = array('IS', ' 1', 'NumberOfViewsInStage');
Nanodicom_Dictionary::$dict[0x0008][0x2130] = array('DS', ' 1-n', 'EventElapsedTimes');
Nanodicom_Dictionary::$dict[0x0008][0x2132] = array('LO', ' 1-n', 'EventTimerNames');
Nanodicom_Dictionary::$dict[0x0008][0x2133] = array('SQ', ' 1', 'EventTimerSequence');
Nanodicom_Dictionary::$dict[0x0008][0x2134] = array('FD', ' 1', 'EventTimeOffset');
Nanodicom_Dictionary::$dict[0x0008][0x2135] = array('SQ', ' 1', 'EventCodeSequence');
Nanodicom_Dictionary::$dict[0x0008][0x2142] = array('IS', ' 1', 'StartTrim');
Nanodicom_Dictionary::$dict[0x0008][0x2143] = array('IS', ' 1', 'StopTrim');
Nanodicom_Dictionary::$dict[0x0008][0x2144] = array('IS', ' 1', 'RecommendedDisplayFrameRate');
Nanodicom_Dictionary::$dict[0x0008][0x2200] = array('CS', ' 1 ', 'TransducerPosition', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2204] = array('CS', ' 1 ', 'TransducerOrientation', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2208] = array('CS', ' 1 ', 'AnatomicStructure', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2218] = array('SQ', ' 1', 'AnatomicRegionSequence');
Nanodicom_Dictionary::$dict[0x0008][0x2220] = array('SQ', ' 1', 'AnatomicRegionModifierSequence');
Nanodicom_Dictionary::$dict[0x0008][0x2228] = array('SQ', ' 1', 'PrimaryAnatomicStructureSequence');
Nanodicom_Dictionary::$dict[0x0008][0x2229] = array('SQ', ' 1', 'AnatomicStructureSpaceOrRegionSequence');
Nanodicom_Dictionary::$dict[0x0008][0x2230] = array('SQ', ' 1', 'PrimaryAnatomicStructureModifierSequence');
Nanodicom_Dictionary::$dict[0x0008][0x2240] = array('SQ', ' 1 ', 'TransducerPositionSequence', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2242] = array('SQ', ' 1 ', 'TransducerPositionModifierSequence', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2244] = array('SQ', ' 1 ', 'TransducerOrientationSequence', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2246] = array('SQ', ' 1 ', 'TransducerOrientationModifierSequence', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2251] = array('SQ', ' 1 ', 'AnatomicStructureSpaceOrRegionCodeSequenceTrial', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2253] = array('SQ', ' 1 ', 'AnatomicPortalOfEntranceCodeSequenceTrial', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2255] = array('SQ', ' 1 ', 'AnatomicApproachDirectionCodeSequenceTrial', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2256] = array('ST', ' 1 ', 'AnatomicPerspectiveDescriptionTrial', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2257] = array('SQ', ' 1 ', 'AnatomicPerspectiveCodeSequenceTrial', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2258] = array('ST', ' 1 ', 'AnatomicLocationOfExaminingInstrumentDescriptionTrial', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x2259] = array('SQ', ' 1 ', 'AnatomicLocationOfExaminingInstrumentCodeSequenceTrial', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x225A] = array('SQ', ' 1 ', 'AnatomicStructureSpaceOrRegionModifierCodeSequenceTrial', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x225C] = array('SQ', ' 1 ', 'OnAxisBackgroundAnatomicStructureCodeSequenceTrial', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x3001] = array('SQ', ' 1', 'AlternateRepresentationSequence');
Nanodicom_Dictionary::$dict[0x0008][0x3010] = array('UI', ' 1', 'IrradiationEventUID');
Nanodicom_Dictionary::$dict[0x0008][0x4000] = array('LT', ' 1 ', 'IdentifyingComments', 'RET');
Nanodicom_Dictionary::$dict[0x0008][0x9007] = array('CS', ' 4', 'FrameType');
Nanodicom_Dictionary::$dict[0x0008][0x9092] = array('SQ', ' 1', 'ReferencedImageEvidenceSequence');
Nanodicom_Dictionary::$dict[0x0008][0x9121] = array('SQ', ' 1', 'ReferencedRawDataSequence');
Nanodicom_Dictionary::$dict[0x0008][0x9123] = array('UI', ' 1', 'CreatorVersionUID');
Nanodicom_Dictionary::$dict[0x0008][0x9124] = array('SQ', ' 1', 'DerivationImageSequence');
Nanodicom_Dictionary::$dict[0x0008][0x9154] = array('SQ', ' 1', 'SourceImageEvidenceSequence');
Nanodicom_Dictionary::$dict[0x0008][0x9205] = array('CS', ' 1', 'PixelPresentation');
Nanodicom_Dictionary::$dict[0x0008][0x9206] = array('CS', ' 1', 'VolumetricProperties');
Nanodicom_Dictionary::$dict[0x0008][0x9207] = array('CS', ' 1', 'VolumeBasedCalculationTechnique');
Nanodicom_Dictionary::$dict[0x0008][0x9208] = array('CS', ' 1', 'ComplexImageComponent');
Nanodicom_Dictionary::$dict[0x0008][0x9209] = array('CS', ' 1', 'AcquisitionContrast');
Nanodicom_Dictionary::$dict[0x0008][0x9215] = array('SQ', ' 1', 'DerivationCodeSequence');
Nanodicom_Dictionary::$dict[0x0008][0x9237] = array('SQ', ' 1', 'ReferencedPresentationStateSequence');
Nanodicom_Dictionary::$dict[0x0008][0x9410] = array('SQ', ' 1', 'ReferencedOtherPlaneSequence');
Nanodicom_Dictionary::$dict[0x0008][0x9458] = array('SQ', ' 1', 'FrameDisplaySequence');
Nanodicom_Dictionary::$dict[0x0008][0x9459] = array('FL', ' 1', 'RecommendedDisplayFrameRateInFloat');
Nanodicom_Dictionary::$dict[0x0008][0x9460] = array('CS', ' 1', 'SkipFrameRangeFlag');
