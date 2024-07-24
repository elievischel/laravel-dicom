<?php

namespace elievischel\laravelDicom\dict;

use elievischel\laravelDicom\Nanodicom_Dictionary;

// Group 0x3006
Nanodicom_Dictionary::$dict[0x3006][0x0002] = array('SH', ' 1', 'StructureSetLabel');
Nanodicom_Dictionary::$dict[0x3006][0x0004] = array('LO', ' 1', 'StructureSetName');
Nanodicom_Dictionary::$dict[0x3006][0x0006] = array('ST', ' 1', 'StructureSetDescription');
Nanodicom_Dictionary::$dict[0x3006][0x0008] = array('DA', ' 1', 'StructureSetDate');
Nanodicom_Dictionary::$dict[0x3006][0x0009] = array('TM', ' 1', 'StructureSetTime');
Nanodicom_Dictionary::$dict[0x3006][0x0010] = array('SQ', ' 1', 'ReferencedFrameOfReferenceSequence');
Nanodicom_Dictionary::$dict[0x3006][0x0012] = array('SQ', ' 1', 'RTReferencedStudySequence');
Nanodicom_Dictionary::$dict[0x3006][0x0014] = array('SQ', ' 1', 'RTReferencedSeriesSequence');
Nanodicom_Dictionary::$dict[0x3006][0x0016] = array('SQ', ' 1', 'ContourImageSequence');
Nanodicom_Dictionary::$dict[0x3006][0x0020] = array('SQ', ' 1', 'StructureSetROISequence');
Nanodicom_Dictionary::$dict[0x3006][0x0022] = array('IS', ' 1', 'ROINumber');
Nanodicom_Dictionary::$dict[0x3006][0x0024] = array('UI', ' 1', 'ReferencedFrameOfReferenceUID');
Nanodicom_Dictionary::$dict[0x3006][0x0026] = array('LO', ' 1', 'ROIName');
Nanodicom_Dictionary::$dict[0x3006][0x0028] = array('ST', ' 1', 'ROIDescription');
Nanodicom_Dictionary::$dict[0x3006][0x002A] = array('IS', ' 3', 'ROIDisplayColor');
Nanodicom_Dictionary::$dict[0x3006][0x002C] = array('DS', ' 1', 'ROIVolume');
Nanodicom_Dictionary::$dict[0x3006][0x0030] = array('SQ', ' 1', 'RTRelatedROISequence');
Nanodicom_Dictionary::$dict[0x3006][0x0033] = array('CS', ' 1', 'RTROIRelationship');
Nanodicom_Dictionary::$dict[0x3006][0x0036] = array('CS', ' 1', 'ROIGenerationAlgorithm');
Nanodicom_Dictionary::$dict[0x3006][0x0038] = array('LO', ' 1', 'ROIGenerationDescription');
Nanodicom_Dictionary::$dict[0x3006][0x0039] = array('SQ', ' 1', 'ROIContourSequence');
Nanodicom_Dictionary::$dict[0x3006][0x0040] = array('SQ', ' 1', 'ContourSequence');
Nanodicom_Dictionary::$dict[0x3006][0x0042] = array('CS', ' 1', 'ContourGeometricType');
Nanodicom_Dictionary::$dict[0x3006][0x0044] = array('DS', ' 1', 'ContourSlabThickness');
Nanodicom_Dictionary::$dict[0x3006][0x0045] = array('DS', ' 3', 'ContourOffsetVector');
Nanodicom_Dictionary::$dict[0x3006][0x0046] = array('IS', ' 1', 'NumberOfContourPoints');
Nanodicom_Dictionary::$dict[0x3006][0x0048] = array('IS', ' 1', 'ContourNumber');
Nanodicom_Dictionary::$dict[0x3006][0x0049] = array('IS', ' 1-n', 'AttachedContours');
Nanodicom_Dictionary::$dict[0x3006][0x0050] = array('DS', ' 3-3n', 'ContourData');
Nanodicom_Dictionary::$dict[0x3006][0x0080] = array('SQ', ' 1', 'RTROIObservationsSequence');
Nanodicom_Dictionary::$dict[0x3006][0x0082] = array('IS', ' 1', 'ObservationNumber');
Nanodicom_Dictionary::$dict[0x3006][0x0084] = array('IS', ' 1', 'ReferencedROINumber');
Nanodicom_Dictionary::$dict[0x3006][0x0085] = array('SH', ' 1', 'ROIObservationLabel');
Nanodicom_Dictionary::$dict[0x3006][0x0086] = array('SQ', ' 1', 'RTROIIdentificationCodeSequence');
Nanodicom_Dictionary::$dict[0x3006][0x0088] = array('ST', ' 1', 'ROIObservationDescription');
Nanodicom_Dictionary::$dict[0x3006][0x00A0] = array('SQ', ' 1', 'RelatedRTROIObservationsSequence');
Nanodicom_Dictionary::$dict[0x3006][0x00A4] = array('CS', ' 1', 'RTROIInterpretedType');
Nanodicom_Dictionary::$dict[0x3006][0x00A6] = array('PN', ' 1', 'ROIInterpreter');
Nanodicom_Dictionary::$dict[0x3006][0x00B0] = array('SQ', ' 1', 'ROIPhysicalPropertiesSequence');
Nanodicom_Dictionary::$dict[0x3006][0x00B2] = array('CS', ' 1', 'ROIPhysicalProperty');
Nanodicom_Dictionary::$dict[0x3006][0x00B4] = array('DS', ' 1', 'ROIPhysicalPropertyValue');
Nanodicom_Dictionary::$dict[0x3006][0x00B6] = array('SQ', ' 1', 'ROIElementalCompositionSequence');
Nanodicom_Dictionary::$dict[0x3006][0x00B7] = array('US', ' 1', 'ROIElementalCompositionAtomicNumber');
Nanodicom_Dictionary::$dict[0x3006][0x00B8] = array('FL', ' 1', 'ROIElementalCompositionAtomicMassFraction');
Nanodicom_Dictionary::$dict[0x3006][0x00C0] = array('SQ', ' 1', 'FrameOfReferenceRelationshipSequence');
Nanodicom_Dictionary::$dict[0x3006][0x00C2] = array('UI', ' 1', 'RelatedFrameOfReferenceUID');
Nanodicom_Dictionary::$dict[0x3006][0x00C4] = array('CS', ' 1', 'FrameOfReferenceTransformationType');
Nanodicom_Dictionary::$dict[0x3006][0x00C6] = array('DS', ' 16', 'FrameOfReferenceTransformationMatrix');
Nanodicom_Dictionary::$dict[0x3006][0x00C8] = array('LO', ' 1', 'FrameOfReferenceTransformationComment');