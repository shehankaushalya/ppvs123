<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export extends CI_Controller {
 
//  function A()
//  {
// //   $this->load->model("excel_export_model");
// //   $data["employee_data"] = $this->excel_export_model->fetch_data();
//   $this->load->view("AA");
//  }

 function action()
 {
  $this->load->model("excel_export_model");
  $this->load->library("excel");
  $object = new PHPExcel();

  $object->setActiveSheetIndex(0);

  $table_columns = array("Id","Date", "Time", "QrNo", "EntryType","Project", "UserName", "Location", "VehicleNo",
  "Type", "Supplier", "SupplierStatus", "Material","MaterialStatus", "Quantity", "QuantityStatus", "UOM",
  "ViewReferences", "ViewReference2", "ViewReference3");

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  foreach(range('A','T') as $column) {
    $object->getActiveSheet()->getColumnDimension($column)
        ->setAutoSize(true);
}

  $employee_data = $this->excel_export_model->fetch_data();

  $excel_row = 3;

  foreach($employee_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->Id);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->Date);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->Time);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->QrNo);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->EntryType);
   $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->Project);
   $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->UserName);
   $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->Location);
   $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->VehicleNo);
   $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->Type);
   $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->Supplier);
   $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->SupplierStatus);
   $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->Material);
   $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->MaterialStatus);
   $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->Quantity);
   $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->QuantityStatus);
   $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->UOM);
   $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->ViewReferences);
   $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->ViewReference2);
   $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->ViewReference3);

   $excel_row++;
  }


$object->getActiveSheet()->getStyle("A1:T1")->applyFromArray(array("font" => array("bold" => true)));
$object->getActiveSheet()->getStyle('A1:T1')->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

 
    $styleArray = array(
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )   
        )
    );
 
    $object->getDefaultStyle()->applyFromArray($styleArray);

    $object->getActiveSheet()->getStyle(
        'A1:' . 
        $object->getActiveSheet()->getHighestColumn() . 
        $object->getActiveSheet()->getHighestRow()
    )->applyFromArray($styleArray);


// $object->getDefaultStyle()
//     ->getBorders()
//     ->getTop()
//         ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

// $object->getActiveSheet()->getStyle(
//             'A1:' . 
//             $object->getDefaultStyle()->getBorders()->getTop().
//             $object->getActiveSheet()->getHighestColumn() . 
//             $object->getActiveSheet()->getHighestRow()
//         )->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);


$today = date("d/m/Y");  

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header("Content-Disposition: attachment; filename=Supplier Data Verification $today.xls");
  $object_writer->save('php://output');
 }

 
 
}
