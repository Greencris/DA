<?= 
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
    $_SESSION['route'] = "setting.php";
	 header('Location: login.php');
}else{
	if (isset($_POST["submit"])) {
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
            $SetND1Min = $_POST["SetND1Min"]*10;
            $SetND1MAX = $_POST["SetND1Max"]*10;
            $SetND2Min = $_POST["SetND2Min"]*10;
            $SetND2MAX = $_POST["SetND2Max"]*10;
            $SetND3Min = $_POST["SetND3Min"]*10;
            $SetND3MAX = $_POST["SetND3Max"]*10;
            $SetDA1Min = $_POST["SetDA1Min"]*10;
            $SetDA1MAX = $_POST["SetDA1Max"]*10;
            $SetDA2Min = $_POST["SetDA2Min"]*10;
            $SetDA2MAX = $_POST["SetDA2Max"]*10;
            $SetDA3Min = $_POST["SetDA3Min"]*10;
            $SetDA3MAX = $_POST["SetDA3Max"]*10;
            $SetAS1Min = $_POST["SetAS1Min"]*10;
            $SetAS1MAX = $_POST["SetAS1Max"]*10;
            $SetAS2Min = $_POST["SetAS2Min"]*10;
            $SetAS2MAX = $_POST["SetAS2Max"]*10;
            $SetAS3Min = $_POST["SetAS3Min"]*10;
            $SetAS3MAX = $_POST["SetAS3Max"]*10;
            $timeon = $_POST["TimeOn"];
            $timeoff = $_POST["TimeOff"];
            
           if(!isset($_POST["PS_A1"])){
                $PS_A1 = "0";
           }else{
               $PS_A1 = "1";
           }
            
           if(!isset($_POST["PS_A2"])){
                $PS_A2 = "0";
           }else{
               $PS_A2 = "1";
           }
           if(!isset($_POST["PS_A3"])){
                $PS_A3 = "0";
           }else{
               $PS_A3 = "1";
           }

           if(!isset($_POST["BD_A1"])){
                $BD_A1 = "0";
           }else{
               $BD_A1 = "1";
           }

           if(!isset($_POST["BD_A2"])){
                $BD_A2 = "0";
           }else{
               $BD_A2 = "1";
           }

           if(!isset($_POST["BD_A3"])){
                $BD_A3 = "0";
           }else{
               $BD_A3 = "1";
           }

           if(!isset($_POST["BN_A1"])){
                $BN_A1 = "0";
           }else{
               $BN_A1 = "1";
           }

           if(!isset($_POST["BN_A2"])){
                $BN_A2 = "0";
           }else{
               $BN_A2 = "1";
           }

           if(!isset($_POST["BN_A3"])){
                $BN_A3 = "0";
           }else{
               $BN_A3 = "1";
           }
        
            $control = fwrite($myfilew,"{
    \"DA_A1_MIN\":\"$SetDA1Min\",
    \"DA_A1_MAX\":\"$SetDA1MAX\",
    \"DA_A2_MIN\":\"$SetDA2Min\",
    \"DA_A2_MAX\":\"$SetDA2MAX\",
    \"DA_A3_MIN\":\"$SetDA3Min\",
    \"DA_A3_MAX\":\"$SetDA3MAX\",
    \"ND_A1_MIN\":\"$SetND1Min\",
    \"ND_A1_MAX\":\"$SetND1MAX\",
    \"ND_A2_MIN\":\"$SetND2Min\",
    \"ND_A2_MAX\":\"$SetND2MAX\",
    \"ND_A3_MIN\":\"$SetND3Min\",
    \"ND_A3_MAX\":\"$SetND3MAX\",
    \"AS_A1_MIN\":\"$SetAS1Min\",
    \"AS_A1_MAX\":\"$SetAS1MAX\",
    \"AS_A2_MIN\":\"$SetAS2Min\",
    \"AS_A2_MAX\":\"$SetAS2MAX\",
    \"AS_A3_MIN\":\"$SetAS3Min\",
    \"AS_A3_MAX\":\"$SetAS3MAX\",
    \"TIME_ON\":\"$timeon\",
    \"TIME_OFF\":\"$timeoff\",
    \"BD_A1\": \"$BD_A1\",
    \"BD_A2\": \"$BD_A2\",
    \"BD_A3\": \"$BD_A3\",
    \"PS_A1\": \"$PS_A1\",
    \"PS_A2\": \"$PS_A2\",
    \"PS_A3\": \"$PS_A3\",
    \"BN_A1\": \"$BN_A1\",
    \"BN_A2\": \"$BN_A2\",
    \"BN_A3\": \"$BN_A3\"
}");
            fclose($myfilew);

            header("Location: setting.php");
        die();
        }
	}else{
        echo "Aaa";
    }
}
?>