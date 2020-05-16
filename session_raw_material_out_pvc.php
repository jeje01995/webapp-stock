<?php
    session_start();
    require "condb.php";
    
                $namepro = $_POST['namepro'];
                $company = $_POST['company'];
                $numpro = $_POST['numpro'];
				$invoice = $_POST['invoice'];
				$po = $_POST['po'];
                $datetype = $_POST['datetype'];
                $timeadd = $_POST['timeadd'];
                $remark = $_POST['remark'];

                $sql = "INSERT INTO จ่ายออก_pvcบวกเบ็ดเตล็ด (namepro,company,numpro,invoice,po,datetype,timeadd,remark) 
                VALUES ('$namepro','$company','$numpro','$invoice','$po','$datetype','$timeadd','$remark')"; 

                $namepro = $_POST['namepro'];
                $company = $_POST['company'];
                $numpro = $_POST['numpro'];
                $invoice = $_POST['invoice'];
                $po = $_POST['po'];
                $datetype = $_POST['datetype'];
                $timeadd = $_POST['timeadd'];
                $remark = $_POST['remark'];
    
                $sql = "UPDATE pvc_in SET namepro = '$namepro', compony = '$company', numpro = '$numpro', invoice = '$invoice',
                po = '$po', datetype = '$datetype', timeadd = '$timeadd', remark = '$remark'"; 

                $result = mysqli_query($link,$sql);

                if ($result) {
                    header("location: raw_report_out_pvc.php");
                }
                else {
                    echo "error" .mysqli_error($link);
                 }
            
             mysqli_close($link);

        ?>