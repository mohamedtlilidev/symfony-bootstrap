<?php
/**
 * Created by PhpStorm.
 * User: g361183
 * Date: 4/13/20
 * Time: 4:41 PM
 */

namespace App\Service;


class ExportCsvFileService
{
    private $pathExport;

    public function __construct(string $pathExport)
    {
        $this->pathExport=$pathExport;
    }

    public function exportCsvReport(array $records=array(), string $filename)
    {
        // tell the browser it's going to be a csv file
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');
        if (count($records)) {
            $csvh=fopen($this->pathExport . $filename, 'w');
            $d=','; // this is the default but i like to be explicit
            $e='"'; // this is the default but i like to be explicit
            // clean output buffer
            foreach ($records as $key=>$record) {
                $record['createTime']=$record['createTime']->format('Y-m-d H:i:s');
                $record['lastUpdatedTime']=$record['lastUpdatedTime']->format('Y-m-d H:i:s');
                fputcsv($csvh, array_values($record), $d,$e);
            }

            fclose($csvh);
            exit;

        }
    }

        public function array_csv_download( $array, $filename = "export.csv", $delimiter=";" )
        {
            header( 'Content-Type: application/csv' );
            header( 'Content-Disposition: attachment; filename="' . $filename . '";' );

            $handle = fopen( 'php://output', 'w' );
            $headerCsv=array('Identifiant','Domaine', 'Nom','Date fin','Status');
// use keys as column titles
            fputcsv( $handle, $headerCsv );

            foreach ( $array as $value ) {
                $value['endTime']=$value['endTime']->format('Y-m-d H:i:s');
                $value['procDefId']=explode($value['procDefId'],':')[0];
                $value['deleateReason']='En cours';
//                $value['lastUpdatedTime']=$value['lastUpdatedTime']->format('Y-m-d H:i:s');
                fputcsv( $handle, array_values($value) , $delimiter );
            }

            fclose( $handle );
            exit();
        }



}