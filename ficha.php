<?php

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/London');

/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */

/** PHPExcel */
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';

/** PHPExcel_IOFactory */
require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php';

require 'func_main.php';

$id = $_GET['id'];

if (!file_exists($id."/ficha.xlsx")) {
	exit("Please run 33chartcreate-bar.php first." . EOL);
}

$rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;
$rendererLibrary = 'mpdf60';
$rendererLibraryPath = dirname(__FILE__).'/' . $rendererLibrary;

$objReader = PHPExcel_IOFactory::createReader("Excel2007");
$objReader->setIncludeCharts(TRUE);
$objPHPExcel = $objReader->load($id."/ficha.xlsx");



$exercicio = exercicio();
foreach($exercicio as $e){
	$objPHPExcel->setActiveSheetIndex()
		->setCellValue($e['celula_s'], $e['serie'])
		->setCellValue($e['celula_r'], $e['rep']);
}

// Save Excel 2007 file
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->setIncludeCharts(TRUE);
$objWriter->save($id."/ficha.xlsx");

$objPHPExcel = PHPExcel_IOFactory::load($id."/ficha.xlsx");
$objPHPExcel->getActiveSheet()
			->setShowGridLines(true);

$objPHPExcel->getActiveSheet()
			->getPageSetup()
			->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);



if (!PHPExcel_Settings::setPdfRenderer(
		$rendererName,
		$rendererLibraryPath
	)) {
	die(
		'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
		EOL .
		'at the top of this script as appropriate for your directory structure'
	);
}



$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
$objWriter->setSheetIndex(0);
$objWriter->save($id."/ficha.pdf");