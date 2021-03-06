<?php

/* ----------------------------------------------------------------------------
 * This file was automatically generated by SWIG (http://www.swig.org).
 * Version 1.3.40
 *
 * This file is not intended to be easily readable and contains a number of
 * coding conventions designed to improve portability and efficiency. Do not make
 * changes to this file unless you know what you are doing--modify the SWIG
 * interface file instead.
 * ----------------------------------------------------------------------------- */

// Try to load our extension if it's not already loaded.
if (!extension_loaded('gdalconst')) {
  if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
    if (!dl('php_gdalconst.dll')) return;
  } else {
    // PHP_SHLIB_SUFFIX gives 'dylib' on MacOS X but modules are 'so'.
    if (PHP_SHLIB_SUFFIX === 'dylib') {
      if (!dl('gdalconst.so')) return;
    } else {
      if (!dl('gdalconst.'.PHP_SHLIB_SUFFIX)) return;
    }
  }
}



abstract class gdalconst {
	const GDT_Unknown = GDT_Unknown;

	const GDT_Byte = GDT_Byte;

	const GDT_UInt16 = GDT_UInt16;

	const GDT_Int16 = GDT_Int16;

	const GDT_UInt32 = GDT_UInt32;

	const GDT_Int32 = GDT_Int32;

	const GDT_Float32 = GDT_Float32;

	const GDT_Float64 = GDT_Float64;

	const GDT_CInt16 = GDT_CInt16;

	const GDT_CInt32 = GDT_CInt32;

	const GDT_CFloat32 = GDT_CFloat32;

	const GDT_CFloat64 = GDT_CFloat64;

	const GDT_TypeCount = GDT_TypeCount;

	const GA_ReadOnly = GA_ReadOnly;

	const GA_Update = GA_Update;

	const GF_Read = GF_Read;

	const GF_Write = GF_Write;

	const GCI_Undefined = GCI_Undefined;

	const GCI_GrayIndex = GCI_GrayIndex;

	const GCI_PaletteIndex = GCI_PaletteIndex;

	const GCI_RedBand = GCI_RedBand;

	const GCI_GreenBand = GCI_GreenBand;

	const GCI_BlueBand = GCI_BlueBand;

	const GCI_AlphaBand = GCI_AlphaBand;

	const GCI_HueBand = GCI_HueBand;

	const GCI_SaturationBand = GCI_SaturationBand;

	const GCI_LightnessBand = GCI_LightnessBand;

	const GCI_CyanBand = GCI_CyanBand;

	const GCI_MagentaBand = GCI_MagentaBand;

	const GCI_YellowBand = GCI_YellowBand;

	const GCI_BlackBand = GCI_BlackBand;

	const GCI_YCbCr_YBand = GCI_YCbCr_YBand;

	const GCI_YCbCr_CrBand = GCI_YCbCr_CrBand;

	const GCI_YCbCr_CbBand = GCI_YCbCr_CbBand;

	const GRA_NearestNeighbour = GRA_NearestNeighbour;

	const GRA_Bilinear = GRA_Bilinear;

	const GRA_Cubic = GRA_Cubic;

	const GRA_CubicSpline = GRA_CubicSpline;

	const GRA_Lanczos = GRA_Lanczos;

	const GPI_Gray = GPI_Gray;

	const GPI_RGB = GPI_RGB;

	const GPI_CMYK = GPI_CMYK;

	const GPI_HLS = GPI_HLS;

	const CXT_Element = CXT_Element;

	const CXT_Text = CXT_Text;

	const CXT_Attribute = CXT_Attribute;

	const CXT_Comment = CXT_Comment;

	const CXT_Literal = CXT_Literal;

	const CE_None = CE_None;

	const CE_Debug = CE_Debug;

	const CE_Warning = CE_Warning;

	const CE_Failure = CE_Failure;

	const CE_Fatal = CE_Fatal;

	const CPLE_None = CPLE_None;

	const CPLE_AppDefined = CPLE_AppDefined;

	const CPLE_OutOfMemory = CPLE_OutOfMemory;

	const CPLE_FileIO = CPLE_FileIO;

	const CPLE_OpenFailed = CPLE_OpenFailed;

	const CPLE_IllegalArg = CPLE_IllegalArg;

	const CPLE_NotSupported = CPLE_NotSupported;

	const CPLE_AssertionFailed = CPLE_AssertionFailed;

	const CPLE_NoWriteAccess = CPLE_NoWriteAccess;

	const CPLE_UserInterrupt = CPLE_UserInterrupt;

	const DMD_LONGNAME = DMD_LONGNAME;

	const DMD_HELPTOPIC = DMD_HELPTOPIC;

	const DMD_MIMETYPE = DMD_MIMETYPE;

	const DMD_EXTENSION = DMD_EXTENSION;

	const DMD_CREATIONOPTIONLIST = DMD_CREATIONOPTIONLIST;

	const DMD_CREATIONDATATYPES = DMD_CREATIONDATATYPES;

	const DCAP_CREATE = DCAP_CREATE;

	const DCAP_CREATECOPY = DCAP_CREATECOPY;

	const DCAP_VIRTUALIO = DCAP_VIRTUALIO;

	const CPLES_BackslashQuotable = CPLES_BackslashQuotable;

	const CPLES_XML = CPLES_XML;

	const CPLES_URL = CPLES_URL;

	const CPLES_SQL = CPLES_SQL;

	const CPLES_CSV = CPLES_CSV;

	const GFT_Integer = GFT_Integer;

	const GFT_Real = GFT_Real;

	const GFT_String = GFT_String;

	const GFU_Generic = GFU_Generic;

	const GFU_PixelCount = GFU_PixelCount;

	const GFU_Name = GFU_Name;

	const GFU_Min = GFU_Min;

	const GFU_Max = GFU_Max;

	const GFU_MinMax = GFU_MinMax;

	const GFU_Red = GFU_Red;

	const GFU_Green = GFU_Green;

	const GFU_Blue = GFU_Blue;

	const GFU_Alpha = GFU_Alpha;

	const GFU_RedMin = GFU_RedMin;

	const GFU_GreenMin = GFU_GreenMin;

	const GFU_BlueMin = GFU_BlueMin;

	const GFU_AlphaMin = GFU_AlphaMin;

	const GFU_RedMax = GFU_RedMax;

	const GFU_GreenMax = GFU_GreenMax;

	const GFU_BlueMax = GFU_BlueMax;

	const GFU_AlphaMax = GFU_AlphaMax;

	const GFU_MaxCount = GFU_MaxCount;

	const GMF_ALL_VALID = GMF_ALL_VALID;

	const GMF_PER_DATASET = GMF_PER_DATASET;

	const GMF_ALPHA = GMF_ALPHA;

	const GMF_NODATA = GMF_NODATA;

	const GARIO_PENDING = GARIO_PENDING;

	const GARIO_UPDATE = GARIO_UPDATE;

	const GARIO_ERROR = GARIO_ERROR;

	const GARIO_COMPLETE = GARIO_COMPLETE;
}

/* PHP Proxy Classes */

?>
