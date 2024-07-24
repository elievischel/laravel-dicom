<?php

namespace laravelDicom\dict;

use laravelDicom\Nanodicom_Dictionary;

// Group 0x0022
Nanodicom_Dictionary::$dict[0x0022][0x0001] = array('US', ' 1', 'LightPathFilterPassThroughWavelength');
Nanodicom_Dictionary::$dict[0x0022][0x0002] = array('US', ' 2', 'LightPathFilterPassBand');
Nanodicom_Dictionary::$dict[0x0022][0x0003] = array('US', ' 1', 'ImagePathFilterPassThroughWavelength');
Nanodicom_Dictionary::$dict[0x0022][0x0004] = array('US', ' 2', 'ImagePathFilterPassBand');
Nanodicom_Dictionary::$dict[0x0022][0x0005] = array('CS', ' 1', 'PatientEyeMovementCommanded');
Nanodicom_Dictionary::$dict[0x0022][0x0006] = array('SQ', ' 1', 'PatientEyeMovementCommandCodeSequence');
Nanodicom_Dictionary::$dict[0x0022][0x0007] = array('FL', ' 1', 'SphericalLensPower');
Nanodicom_Dictionary::$dict[0x0022][0x0008] = array('FL', ' 1', 'CylinderLensPower');
Nanodicom_Dictionary::$dict[0x0022][0x0009] = array('FL', ' 1', 'CylinderAxis');
Nanodicom_Dictionary::$dict[0x0022][0x000A] = array('FL', ' 1', 'EmmetropicMagnification');
Nanodicom_Dictionary::$dict[0x0022][0x000B] = array('FL', ' 1', 'IntraOcularPressure');
Nanodicom_Dictionary::$dict[0x0022][0x000C] = array('FL', ' 1', 'HorizontalFieldOfView');
Nanodicom_Dictionary::$dict[0x0022][0x000D] = array('CS', ' 1', 'PupilDilated');
Nanodicom_Dictionary::$dict[0x0022][0x000E] = array('FL', ' 1', 'DegreeOfDilation');
Nanodicom_Dictionary::$dict[0x0022][0x0010] = array('FL', ' 1', 'StereoBaselineAngle');
Nanodicom_Dictionary::$dict[0x0022][0x0011] = array('FL', ' 1', 'StereoBaselineDisplacement');
Nanodicom_Dictionary::$dict[0x0022][0x0012] = array('FL', ' 1', 'StereoHorizontalPixelOffset');
Nanodicom_Dictionary::$dict[0x0022][0x0013] = array('FL', ' 1', 'StereoVerticalPixelOffset');
Nanodicom_Dictionary::$dict[0x0022][0x0014] = array('FL', ' 1', 'StereoRotation');
Nanodicom_Dictionary::$dict[0x0022][0x0015] = array('SQ', ' 1', 'AcquisitionDeviceTypeCodeSequence');
Nanodicom_Dictionary::$dict[0x0022][0x0016] = array('SQ', ' 1', 'IlluminationTypeCodeSequence');
Nanodicom_Dictionary::$dict[0x0022][0x0017] = array('SQ', ' 1', 'LightPathFilterTypeStackCodeSequence');
Nanodicom_Dictionary::$dict[0x0022][0x0018] = array('SQ', ' 1', 'ImagePathFilterTypeStackCodeSequence');
Nanodicom_Dictionary::$dict[0x0022][0x0019] = array('SQ', ' 1', 'LensesCodeSequence');
Nanodicom_Dictionary::$dict[0x0022][0x001A] = array('SQ', ' 1', 'ChannelDescriptionCodeSequence');
Nanodicom_Dictionary::$dict[0x0022][0x001B] = array('SQ', ' 1', 'RefractiveStateSequence');
Nanodicom_Dictionary::$dict[0x0022][0x001C] = array('SQ', ' 1', 'MydriaticAgentCodeSequence');
Nanodicom_Dictionary::$dict[0x0022][0x001D] = array('SQ', ' 1', 'RelativeImagePositionCodeSequence');
Nanodicom_Dictionary::$dict[0x0022][0x0020] = array('SQ', ' 1', 'StereoPairsSequence');
Nanodicom_Dictionary::$dict[0x0022][0x0021] = array('SQ', ' 1', 'LeftImageSequence');
Nanodicom_Dictionary::$dict[0x0022][0x0022] = array('SQ', ' 1', 'RightImageSequence');
Nanodicom_Dictionary::$dict[0x0022][0x0030] = array('FL', ' 1', 'AxialLengthOfTheEye');
Nanodicom_Dictionary::$dict[0x0022][0x0031] = array('SQ', ' 1', 'OphthalmicFrameLocationSequence');
Nanodicom_Dictionary::$dict[0x0022][0x0032] = array('FL', ' 2-2n', 'ReferenceCoordinates');
Nanodicom_Dictionary::$dict[0x0022][0x0035] = array('FL', ' 1', 'DepthSpatialResolution');
Nanodicom_Dictionary::$dict[0x0022][0x0036] = array('FL', ' 1', 'MaximumDepthDistortion');
Nanodicom_Dictionary::$dict[0x0022][0x0037] = array('FL', ' 1', 'AlongScanSpatialResolution');
Nanodicom_Dictionary::$dict[0x0022][0x0038] = array('FL', ' 1', 'MaximumAlongScanDistortion');
Nanodicom_Dictionary::$dict[0x0022][0x0039] = array('CS', ' 1', 'OphthalmicImageOrientation');
Nanodicom_Dictionary::$dict[0x0022][0x0041] = array('FL', ' 1', 'DepthOfTransverseImage');
Nanodicom_Dictionary::$dict[0x0022][0x0042] = array('SQ', ' 1', 'MydriaticAgentConcentrationUnitsSequence');
Nanodicom_Dictionary::$dict[0x0022][0x0048] = array('FL', ' 1', 'AcrossScanSpatialResolution');
Nanodicom_Dictionary::$dict[0x0022][0x0049] = array('FL', ' 1', 'MaximumAcrossScanDistortion');
Nanodicom_Dictionary::$dict[0x0022][0x004E] = array('DS', ' 1', 'MydriaticAgentConcentration');
Nanodicom_Dictionary::$dict[0x0022][0x0055] = array('FL', ' 1', 'IlluminationWaveLength');
Nanodicom_Dictionary::$dict[0x0022][0x0056] = array('FL', ' 1', 'IlluminationPower');
Nanodicom_Dictionary::$dict[0x0022][0x0057] = array('FL', ' 1', 'IlluminationBandwidth');
Nanodicom_Dictionary::$dict[0x0022][0x0058] = array('SQ', ' 1', 'MydriaticAgentSequence');
