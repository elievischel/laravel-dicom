<?php

use elievischel\laravelDicom\Nanodicom_Dictionary;

// Group 0x0020
Nanodicom_Dictionary::$dict[0x0020][0x0000] = array('UL', '1', 'ImageGroupLength', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x000D] = array('UI', ' 1', 'StudyInstanceUID');
Nanodicom_Dictionary::$dict[0x0020][0x000E] = array('UI', ' 1', 'SeriesInstanceUID');
Nanodicom_Dictionary::$dict[0x0020][0x0010] = array('SH', ' 1', 'StudyID');
Nanodicom_Dictionary::$dict[0x0020][0x0011] = array('IS', ' 1', 'SeriesNumber');
Nanodicom_Dictionary::$dict[0x0020][0x0012] = array('IS', ' 1', 'AcquisitionNumber');
Nanodicom_Dictionary::$dict[0x0020][0x0013] = array('IS', ' 1', 'InstanceNumber');
Nanodicom_Dictionary::$dict[0x0020][0x0014] = array('IS', ' 1 ', 'IsotopeNumber', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0015] = array('IS', ' 1 ', 'PhaseNumber', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0016] = array('IS', ' 1 ', 'IntervalNumber', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0017] = array('IS', ' 1 ', 'TimeSlotNumber', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0018] = array('IS', ' 1 ', 'AngleNumber', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0019] = array('IS', ' 1', 'ItemNumber');
Nanodicom_Dictionary::$dict[0x0020][0x0020] = array('CS', ' 2', 'PatientOrientation');
Nanodicom_Dictionary::$dict[0x0020][0x0022] = array('IS', ' 1 ', 'OverlayNumber', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0024] = array('IS', ' 1 ', 'CurveNumber', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0026] = array('IS', ' 1 ', 'LUTNumber', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0030] = array('DS', ' 3 ', 'ImagePosition', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0032] = array('DS', ' 3', 'ImagePositionPatient');
Nanodicom_Dictionary::$dict[0x0020][0x0035] = array('DS', ' 6 ', 'ImageOrientation', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0037] = array('DS', ' 6', 'ImageOrientationPatient');
Nanodicom_Dictionary::$dict[0x0020][0x0050] = array('DS', ' 1 ', 'Location', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0052] = array('UI', ' 1', 'FrameOfReferenceUID');
Nanodicom_Dictionary::$dict[0x0020][0x0060] = array('CS', ' 1', 'Laterality');
Nanodicom_Dictionary::$dict[0x0020][0x0062] = array('CS', ' 1', 'ImageLaterality');
Nanodicom_Dictionary::$dict[0x0020][0x0070] = array('LO', ' 1 ', 'ImageGeometryType', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0080] = array('CS', ' 1-n ', 'MaskingImage', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x0100] = array('IS', ' 1', 'TemporalPositionIdentifier');
Nanodicom_Dictionary::$dict[0x0020][0x0105] = array('IS', ' 1', 'NumberOfTemporalPositions');
Nanodicom_Dictionary::$dict[0x0020][0x0110] = array('DS', ' 1', 'TemporalResolution');
Nanodicom_Dictionary::$dict[0x0020][0x0200] = array('UI', ' 1', 'SynchronizationFrameOfReferenceUID');
Nanodicom_Dictionary::$dict[0x0020][0x0242] = array('UI', ' 1', 'SOPInstanceUIDOfConcatenationSource');
Nanodicom_Dictionary::$dict[0x0020][0x1000] = array('IS', ' 1 ', 'SeriesInStudy', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x1001] = array('IS', ' 1 ', 'AcquisitionsInSeries', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x1002] = array('IS', ' 1', 'ImagesInAcquisition');
Nanodicom_Dictionary::$dict[0x0020][0x1003] = array('IS', ' 1 ', 'ImagesInSeries', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x1004] = array('IS', ' 1 ', 'AcquisitionsInStudy', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x1005] = array('IS', ' 1 ', 'ImagesInStudy', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x1020] = array('CS', ' 1-n ', 'Reference', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x1040] = array('LO', ' 1', 'PositionReferenceIndicator');
Nanodicom_Dictionary::$dict[0x0020][0x1041] = array('DS', ' 1', 'SliceLocation');
Nanodicom_Dictionary::$dict[0x0020][0x1070] = array('IS', ' 1-n ', 'OtherStudyNumbers', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x1200] = array('IS', ' 1', 'NumberOfPatientRelatedStudies');
Nanodicom_Dictionary::$dict[0x0020][0x1202] = array('IS', ' 1', 'NumberOfPatientRelatedSeries');
Nanodicom_Dictionary::$dict[0x0020][0x1204] = array('IS', ' 1', 'NumberOfPatientRelatedInstances');
Nanodicom_Dictionary::$dict[0x0020][0x1206] = array('IS', ' 1', 'NumberOfStudyRelatedSeries');
Nanodicom_Dictionary::$dict[0x0020][0x1208] = array('IS', ' 1', 'NumberOfStudyRelatedInstances');
Nanodicom_Dictionary::$dict[0x0020][0x1209] = array('IS', ' 1', 'NumberOfSeriesRelatedInstances');
Nanodicom_Dictionary::$dict[0x0020][0x3401] = array('CS', ' 1 ', 'ModifyingDeviceID', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x3402] = array('CS', ' 1 ', 'ModifiedImageID', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x3403] = array('DA', ' 1 ', 'ModifiedImageDate', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x3404] = array('LO', ' 1 ', 'ModifyingDeviceManufacturer', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x3405] = array('TM', ' 1 ', 'ModifiedImageTime', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x3406] = array('LO', ' 1 ', 'ModifiedImageDescription', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x4000] = array('LT', ' 1', 'ImageComments');
Nanodicom_Dictionary::$dict[0x0020][0x5000] = array('AT', ' 1-n ', 'OriginalImageIdentification', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x5002] = array('CS', ' 1-n ', 'OriginalImageIdentificationNomenclature', 'RET');
Nanodicom_Dictionary::$dict[0x0020][0x9056] = array('SH', ' 1', 'StackID');
Nanodicom_Dictionary::$dict[0x0020][0x9057] = array('UL', ' 1', 'InStackPositionNumber');
Nanodicom_Dictionary::$dict[0x0020][0x9071] = array('SQ', ' 1', 'FrameAnatomySequence');
Nanodicom_Dictionary::$dict[0x0020][0x9072] = array('CS', ' 1', 'FrameLaterality');
Nanodicom_Dictionary::$dict[0x0020][0x9111] = array('SQ', ' 1', 'FrameContentSequence');
Nanodicom_Dictionary::$dict[0x0020][0x9113] = array('SQ', ' 1', 'PlanePositionSequence');
Nanodicom_Dictionary::$dict[0x0020][0x9116] = array('SQ', ' 1', 'PlaneOrientationSequence');
Nanodicom_Dictionary::$dict[0x0020][0x9128] = array('UL', ' 1', 'TemporalPositionIndex');
Nanodicom_Dictionary::$dict[0x0020][0x9153] = array('FD', ' 1', 'NominalCardiacTriggerDelayTime');
Nanodicom_Dictionary::$dict[0x0020][0x9156] = array('US', ' 1', 'FrameAcquisitionNumber');
Nanodicom_Dictionary::$dict[0x0020][0x9157] = array('UL', ' 1-n', 'DimensionIndexValues');
Nanodicom_Dictionary::$dict[0x0020][0x9158] = array('LT', ' 1', 'FrameComments');
Nanodicom_Dictionary::$dict[0x0020][0x9161] = array('UI', ' 1', 'ConcatenationUID');
Nanodicom_Dictionary::$dict[0x0020][0x9162] = array('US', ' 1', 'InConcatenationNumber');
Nanodicom_Dictionary::$dict[0x0020][0x9163] = array('US', ' 1', 'InConcatenationTotalNumber');
Nanodicom_Dictionary::$dict[0x0020][0x9164] = array('UI', ' 1', 'DimensionOrganizationUID');
Nanodicom_Dictionary::$dict[0x0020][0x9165] = array('AT', ' 1', 'DimensionIndexPointer');
Nanodicom_Dictionary::$dict[0x0020][0x9167] = array('AT', ' 1', 'FunctionalGroupPointer');
Nanodicom_Dictionary::$dict[0x0020][0x9213] = array('LO', ' 1', 'DimensionIndexPrivateCreator');
Nanodicom_Dictionary::$dict[0x0020][0x9221] = array('SQ', ' 1', 'DimensionOrganizationSequence');
Nanodicom_Dictionary::$dict[0x0020][0x9222] = array('SQ', ' 1', 'DimensionIndexSequence');
Nanodicom_Dictionary::$dict[0x0020][0x9228] = array('UL', ' 1', 'ConcatenationFrameOffsetNumber');
Nanodicom_Dictionary::$dict[0x0020][0x9238] = array('LO', ' 1', 'FunctionalGroupPrivateCreator');
Nanodicom_Dictionary::$dict[0x0020][0x9241] = array('FL', ' 1', 'NominalPercentageOfCardiacPhase');
Nanodicom_Dictionary::$dict[0x0020][0x9245] = array('FL', ' 1', 'NominalPercentageOfRespiratoryPhase');
Nanodicom_Dictionary::$dict[0x0020][0x9246] = array('FL', ' 1', 'StartingRespiratoryAmplitude');
Nanodicom_Dictionary::$dict[0x0020][0x9247] = array('CS', ' 1', 'StartingRespiratoryPhase');
Nanodicom_Dictionary::$dict[0x0020][0x9248] = array('FL', ' 1', 'EndingRespiratoryAmplitude');
Nanodicom_Dictionary::$dict[0x0020][0x9249] = array('CS', ' 1', 'EndingRespiratoryPhase');
Nanodicom_Dictionary::$dict[0x0020][0x9250] = array('CS', ' 1', 'RespiratoryTriggerType');
Nanodicom_Dictionary::$dict[0x0020][0x9251] = array('FD', ' 1', 'RRIntervalTimeNominal');
Nanodicom_Dictionary::$dict[0x0020][0x9252] = array('FD', ' 1', 'ActualCardiacTriggerDelayTime');
Nanodicom_Dictionary::$dict[0x0020][0x9253] = array('SQ', ' 1', 'RespiratorySynchronizationSequence');
Nanodicom_Dictionary::$dict[0x0020][0x9254] = array('FD', ' 1', 'RespiratoryIntervalTime');
Nanodicom_Dictionary::$dict[0x0020][0x9255] = array('FD', ' 1', 'NominalRespiratoryTriggerDelayTime');
Nanodicom_Dictionary::$dict[0x0020][0x9256] = array('FD', ' 1', 'RespiratoryTriggerDelayThreshold');
Nanodicom_Dictionary::$dict[0x0020][0x9257] = array('FD', ' 1', 'ActualRespiratoryTriggerDelayTime');
Nanodicom_Dictionary::$dict[0x0020][0x9301] = array('FD', ' 3', 'ImagePositionVolume');
Nanodicom_Dictionary::$dict[0x0020][0x9302] = array('FD', ' 6', 'ImageOrientationVolume');
Nanodicom_Dictionary::$dict[0x0020][0x9307] = array('CS', ' 1', 'UltrasoundAcquisitionGeometry');
Nanodicom_Dictionary::$dict[0x0020][0x9308] = array('FD', ' 3', 'ApexPosition');
Nanodicom_Dictionary::$dict[0x0020][0x9309] = array('FD', ' 16', 'VolumeToTransducerMappingMatrix');
Nanodicom_Dictionary::$dict[0x0020][0x930A] = array('FD', ' 16', 'VolumeToTableMappingMatrix');
Nanodicom_Dictionary::$dict[0x0020][0x930C] = array('CS', ' 1', 'PatientFrameOfReferenceSource');
Nanodicom_Dictionary::$dict[0x0020][0x930D] = array('FD', ' 1', 'TemporalPositionTimeOffset');
Nanodicom_Dictionary::$dict[0x0020][0x930E] = array('SQ', ' 1', 'PlanePositionVolumeSequence');
Nanodicom_Dictionary::$dict[0x0020][0x930F] = array('SQ', ' 1', 'PlaneOrientationVolumeSequence');
Nanodicom_Dictionary::$dict[0x0020][0x9310] = array('SQ', ' 1', 'TemporalPositionSequence');
Nanodicom_Dictionary::$dict[0x0020][0x9311] = array('CS', ' 1', 'DimensionOrganizationType');
Nanodicom_Dictionary::$dict[0x0020][0x9312] = array('UI', ' 1', 'VolumeFrameOfReferenceUID');
Nanodicom_Dictionary::$dict[0x0020][0x9313] = array('UI', ' 1', 'TableFrameOfReferenceUID');
Nanodicom_Dictionary::$dict[0x0020][0x9421] = array('LO', ' 1', 'DimensionDescriptionLabel');
Nanodicom_Dictionary::$dict[0x0020][0x9450] = array('SQ', ' 1', 'PatientOrientationInFrameSequence');
Nanodicom_Dictionary::$dict[0x0020][0x9453] = array('LO', ' 1', 'FrameLabel');
Nanodicom_Dictionary::$dict[0x0020][0x9518] = array('US', ' 1-n', 'AcquisitionIndex');
Nanodicom_Dictionary::$dict[0x0020][0x9529] = array('SQ', ' 1', 'ContributingSOPInstancesReferenceSequence');
Nanodicom_Dictionary::$dict[0x0020][0x9536] = array('US', ' 1', 'ReconstructionIndex');
