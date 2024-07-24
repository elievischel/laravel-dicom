<?php

namespace laravelDicom\dict;

use laravelDicom\Nanodicom_Dictionary;

// Group 0x0046
Nanodicom_Dictionary::$dict[0x0046][0x0012] = array('LO', ' 1', 'LensDescription');
Nanodicom_Dictionary::$dict[0x0046][0x0014] = array('SQ', ' 1', 'RightLensSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0015] = array('SQ', ' 1', 'LeftLensSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0016] = array('SQ', ' 1', 'UnspecifiedLateralityLensSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0018] = array('SQ', ' 1', 'CylinderSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0028] = array('SQ', ' 1', 'PrismSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0030] = array('FD', ' 1', 'HorizontalPrismPower');
Nanodicom_Dictionary::$dict[0x0046][0x0032] = array('CS', ' 1', 'HorizontalPrismBase');
Nanodicom_Dictionary::$dict[0x0046][0x0034] = array('FD', ' 1', 'VerticalPrismPower');
Nanodicom_Dictionary::$dict[0x0046][0x0036] = array('CS', ' 1', 'VerticalPrismBase');
Nanodicom_Dictionary::$dict[0x0046][0x0038] = array('CS', ' 1', 'LensSegmentType');
Nanodicom_Dictionary::$dict[0x0046][0x0040] = array('FD', ' 1', 'OpticalTransmittance');
Nanodicom_Dictionary::$dict[0x0046][0x0042] = array('FD', ' 1', 'ChannelWidth');
Nanodicom_Dictionary::$dict[0x0046][0x0044] = array('FD', ' 1', 'PupilSize');
Nanodicom_Dictionary::$dict[0x0046][0x0046] = array('FD', ' 1', 'CornealSize');
Nanodicom_Dictionary::$dict[0x0046][0x0050] = array('SQ', ' 1', 'AutorefractionRightEyeSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0052] = array('SQ', ' 1', 'AutorefractionLeftEyeSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0060] = array('FD', ' 1', 'DistancePupillaryDistance');
Nanodicom_Dictionary::$dict[0x0046][0x0062] = array('FD', ' 1', 'NearPupillaryDistance');
Nanodicom_Dictionary::$dict[0x0046][0x0063] = array('FD', ' 1', 'IntermediatePupillaryDistance');
Nanodicom_Dictionary::$dict[0x0046][0x0064] = array('FD', ' 1', 'OtherPupillaryDistance');
Nanodicom_Dictionary::$dict[0x0046][0x0070] = array('SQ', ' 1', 'KeratometryRightEyeSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0071] = array('SQ', ' 1', 'KeratometryLeftEyeSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0074] = array('SQ', ' 1', 'SteepKeratometricAxisSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0075] = array('FD', ' 1', 'RadiusOfCurvature');
Nanodicom_Dictionary::$dict[0x0046][0x0076] = array('FD', ' 1', 'KeratometricPower');
Nanodicom_Dictionary::$dict[0x0046][0x0077] = array('FD', ' 1', 'KeratometricAxis');
Nanodicom_Dictionary::$dict[0x0046][0x0080] = array('SQ', ' 1', 'FlatKeratometricAxisSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0092] = array('CS', ' 1', 'BackgroundColor');
Nanodicom_Dictionary::$dict[0x0046][0x0094] = array('CS', ' 1', 'Optotype');
Nanodicom_Dictionary::$dict[0x0046][0x0095] = array('CS', ' 1', 'OptotypePresentation');
Nanodicom_Dictionary::$dict[0x0046][0x0097] = array('SQ', ' 1', 'SubjectiveRefractionRightEyeSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0098] = array('SQ', ' 1', 'SubjectiveRefractionLeftEyeSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0100] = array('SQ', ' 1', 'AddNearSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0101] = array('SQ', ' 1', 'AddIntermediateSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0102] = array('SQ', ' 1', 'AddOtherSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0104] = array('FD', ' 1', 'AddPower');
Nanodicom_Dictionary::$dict[0x0046][0x0106] = array('FD', ' 1', 'ViewingDistance');
Nanodicom_Dictionary::$dict[0x0046][0x0121] = array('SQ', ' 1', 'VisualAcuityTypeCodeSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0122] = array('SQ', ' 1', 'VisualAcuityRightEyeSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0123] = array('SQ', ' 1', 'VisualAcuityLeftEyeSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0124] = array('SQ', ' 1', 'VisualAcuityBothEyesOpenSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0125] = array('CS', ' 1', 'ViewingDistanceType');
Nanodicom_Dictionary::$dict[0x0046][0x0135] = array('SS', ' 2', 'VisualAcuityModifiers');
Nanodicom_Dictionary::$dict[0x0046][0x0137] = array('FD', ' 1', 'DecimalVisualAcuity');
Nanodicom_Dictionary::$dict[0x0046][0x0139] = array('LO', ' 1', 'OptotypeDetailedDefinition');
Nanodicom_Dictionary::$dict[0x0046][0x0145] = array('SQ', ' 1', 'ReferencedRefractiveMeasurementsSequence');
Nanodicom_Dictionary::$dict[0x0046][0x0146] = array('FD', ' 1', 'SpherePower');
Nanodicom_Dictionary::$dict[0x0046][0x0147] = array('FD', ' 1', 'CylinderPower');
