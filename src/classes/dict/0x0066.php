<?php

namespace laravelDicom\dict;

use laravelDicom\Nanodicom_Dictionary;

// Group 0x0066
Nanodicom_Dictionary::$dict[0x0066][0x0001] = array('UL', ' 1', 'NumberOfSurfaces');
Nanodicom_Dictionary::$dict[0x0066][0x0002] = array('SQ', ' 1', 'SurfaceSequence');
Nanodicom_Dictionary::$dict[0x0066][0x0003] = array('UL', ' 1', 'SurfaceNumber');
Nanodicom_Dictionary::$dict[0x0066][0x0004] = array('LT', ' 1', 'SurfaceComments');
Nanodicom_Dictionary::$dict[0x0066][0x0009] = array('CS', ' 1', 'SurfaceProcessing');
Nanodicom_Dictionary::$dict[0x0066][0x000A] = array('FL', ' 1', 'SurfaceProcessingRatio');
Nanodicom_Dictionary::$dict[0x0066][0x000B] = array('LO', ' 1', 'SurfaceProcessingDescription');
Nanodicom_Dictionary::$dict[0x0066][0x000C] = array('FL', ' 1', 'RecommendedPresentationOpacity');
Nanodicom_Dictionary::$dict[0x0066][0x000D] = array('CS', ' 1', 'RecommendedPresentationType');
Nanodicom_Dictionary::$dict[0x0066][0x000E] = array('CS', ' 1', 'FiniteVolume');
Nanodicom_Dictionary::$dict[0x0066][0x0010] = array('CS', ' 1', 'Manifold');
Nanodicom_Dictionary::$dict[0x0066][0x0011] = array('SQ', ' 1', 'SurfacePointsSequence');
Nanodicom_Dictionary::$dict[0x0066][0x0012] = array('SQ', ' 1', 'SurfacePointsNormalsSequence');
Nanodicom_Dictionary::$dict[0x0066][0x0013] = array('SQ', ' 1', 'SurfaceMeshPrimitivesSequence');
Nanodicom_Dictionary::$dict[0x0066][0x0015] = array('UL', ' 1', 'NumberOfSurfacePoints');
Nanodicom_Dictionary::$dict[0x0066][0x0016] = array('OF', ' 1', 'PointCoordinatesData');
Nanodicom_Dictionary::$dict[0x0066][0x0017] = array('FL', ' 3', 'PointPositionAccuracy');
Nanodicom_Dictionary::$dict[0x0066][0x0018] = array('FL', ' 1', 'MeanPointDistance');
Nanodicom_Dictionary::$dict[0x0066][0x0019] = array('FL', ' 1', 'MaximumPointDistance');
Nanodicom_Dictionary::$dict[0x0066][0x001A] = array('FL', ' 6', 'PointsBoundingBoxCoordinates');
Nanodicom_Dictionary::$dict[0x0066][0x001B] = array('FL', ' 3', 'AxisOfRotation');
Nanodicom_Dictionary::$dict[0x0066][0x001C] = array('FL', ' 3', 'CenterOfRotation');
Nanodicom_Dictionary::$dict[0x0066][0x001E] = array('UL', ' 1', 'NumberOfVectors');
Nanodicom_Dictionary::$dict[0x0066][0x001F] = array('US', ' 1', 'VectorDimensionality');
Nanodicom_Dictionary::$dict[0x0066][0x0020] = array('FL', ' 1-n', 'VectorAccuracy');
Nanodicom_Dictionary::$dict[0x0066][0x0021] = array('OF', ' 1', 'VectorCoordinateData');
Nanodicom_Dictionary::$dict[0x0066][0x0023] = array('OW', ' 1', 'TrianglePointIndexList');
Nanodicom_Dictionary::$dict[0x0066][0x0024] = array('OW', ' 1', 'EdgePointIndexList');
Nanodicom_Dictionary::$dict[0x0066][0x0025] = array('OW', ' 1', 'VertexPointIndexList');
Nanodicom_Dictionary::$dict[0x0066][0x0026] = array('SQ', ' 1', 'TriangleStripSequence');
Nanodicom_Dictionary::$dict[0x0066][0x0027] = array('SQ', ' 1', 'TriangleFanSequence');
Nanodicom_Dictionary::$dict[0x0066][0x0028] = array('SQ', ' 1', 'LineSequence');
Nanodicom_Dictionary::$dict[0x0066][0x0029] = array('OW', ' 1', 'PrimitivePointIndexList');
Nanodicom_Dictionary::$dict[0x0066][0x002A] = array('UL', ' 1', 'SurfaceCount');
Nanodicom_Dictionary::$dict[0x0066][0x002B] = array('SQ', ' 1', 'ReferencedSurfaceSequence');
Nanodicom_Dictionary::$dict[0x0066][0x002C] = array('UL', ' 1', 'ReferencedSurfaceNumber');
Nanodicom_Dictionary::$dict[0x0066][0x002D] = array('SQ', ' 1', 'SegmentSurfaceGenerationAlgorithmIdentificationSequence');
Nanodicom_Dictionary::$dict[0x0066][0x002E] = array('SQ', ' 1', 'SegmentSurfaceSourceInstanceSequence');
Nanodicom_Dictionary::$dict[0x0066][0x002F] = array('SQ', ' 1', 'AlgorithmFamilyCodeSequence');
Nanodicom_Dictionary::$dict[0x0066][0x0030] = array('SQ', ' 1', 'AlgorithmNameCodeSequence');
Nanodicom_Dictionary::$dict[0x0066][0x0031] = array('LO', ' 1', 'AlgorithmVersion');
Nanodicom_Dictionary::$dict[0x0066][0x0032] = array('LT', ' 1', 'AlgorithmParameters');
Nanodicom_Dictionary::$dict[0x0066][0x0034] = array('SQ', ' 1', 'FacetSequence');
Nanodicom_Dictionary::$dict[0x0066][0x0035] = array('SQ', ' 1', 'SurfaceProcessingAlgorithmIdentificationSequence');
Nanodicom_Dictionary::$dict[0x0066][0x0036] = array('LO', ' 1', 'AlgorithmName');
