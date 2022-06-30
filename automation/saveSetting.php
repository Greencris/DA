<?php
    $data  = isset($_POST['data']) ? $_POST['data'] : "";

	    if(!file_exists("control.txt")) {
            die("File not found");
        } else {
            $myfile = fopen("control.txt", "r") or die("Unable to open file!");
            $control = fread($myfile,filesize("control.txt"));
            fclose($myfile);
        }
        
        if(!file_exists("control.txt")) {
            die("File not found");
        } else {
            $myfilew = fopen("control.txt", "w") or die("Unable to open file!");
            
            $control = fwrite($myfilew,"{
                    \"ND_A1_MIN\":\"$data[ND_A1_MIN]:\",
                    \"ND_A1_MAX\":\"$data[ND_A1_MAX]\",
                    \"ND_A2_MIN\":\"$data[ND_A2_MIN]\",
                    \"ND_A2_MAX\":\"$data[ND_A2_MAX]\",
                    \"ND_A3_MIN\":\"$data[ND_A3_MIN]\",
                    \"ND_A3_MAX\":\"$data[ND_A3_MAX]\",
                    \"DA_A1_MIN\":\"$data[DA_A1_MIN]\",
                    \"DA_A1_MAX\":\"$data[DA_A1_MAX]\",
                    \"DA_A2_MIN\":\"$data[DA_A2_MIN]\",
                    \"DA_A2_MAX\":\"$data[DA_A2_MAX]\",
                    \"DA_A3_MIN\":\"$data[DA_A3_MIN]\",
                    \"DA_A3_MAX\":\"$data[DA_A3_MAX]\",
                    \"AS_A1_MIN\":\"$data[AS_A1_MIN]\",
                    \"AS_A1_MAX\":\"$data[AS_A1_MAX]\",
                    \"AS_A2_MIN\":\"$data[AS_A2_MIN]\",
                    \"AS_A2_MAX\":\"$data[AS_A2_MAX]\",
                    \"AS_A3_MIN\":\"$data[AS_A3_MIN]\",
                    \"AS_A3_MAX\":\"$data[AS_A3_MAX]\",
                    \"TIME_OFF\":\"$data[TIME_OFF]\",
                    \"TIME_ON\":\"$data[TIME_ON]\",
                    \"BN_A1\": \"$data[BN_A1]\",
                    \"BN_A2\": \"$data[BN_A2]\",
                    \"BN_A3\": \"$data[BN_A3]\",
                    \"PS_A1\": \"$data[PS_A1]\",
                    \"PS_A2\": \"$data[PS_A2]\",
                    \"PS_A3\": \"$data[PS_A3]\",
                    \"BD_A1\": \"$data[BD_A1]\",
                    \"BD_A2\": \"$data[BD_A2]\",
                    \"BD_A3\": \"$data[BD_A3]\",
                }");
            fclose($myfilew);
            header("Location: setting.php");

        }

?>