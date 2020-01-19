

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>for rubber</title>
<style type="text/css">
    body {
	background-color: #FFF;
	background-image: url(0.png);
	font-family: "Comic Sans MS", cursive;
	font-size: large;
}
    .y {
	text-align: center;
}
    .obj {
	font-weight: bold;
}
    .n {
	font-weight: bold;
}
.g {
	font-weight: bold;
}
.obj {
	font-size: large;
}
.g {
	font-weight: bold;
}
</style>
</head>
<body tracingsrc="OTOP1.jpg" tracingopacity="100">
   
    <center>
    <span class="obj">    ปริมาณแม่ปุ๋ยและราคา</span>
<tr>
    <form id="form1" name="form1" method="post" action="">
      <table width="600" border="1" cellspacing="2" cellpadding="2">
        <tr>
          <th width="184" scope="row">แม่ปุ๋ยไนโตรเจน</th>
          <td width="396"><div align="left">
            <?php
   switch($_POST['prefix1']){
   case 1 :{
	    switch($_POST['prefix3']){
			case 1 : { $prefix3 = "46-0-0";
	     switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*10.500;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$_POST['nitrogen'] - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*10.500/4;
		  	 $DAP=($KG*$_POST['phosphorus'])/46;
		  	 $N_DAP = (18*$DAP)/$KG;
		  	 $ND=$_POST['nitrogen'] - $N_DAP;
		  	 $Urea=($KG*$ND)/46;
		  	 echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*10.500/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
		  	  $N_DAP = (18*$DAP)/$KG;
		  	  $ND=$_POST['nitrogen'] - $N_DAP;
		  	  $Urea=($KG*$ND)/46;
		  	  echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;
		  }
		 
			}	
	}
	break;
	 case 2 : { $prefix3 = "21-0-0";
	 switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*10.500;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$_POST['nitrogen'] - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*10.500/4;
		  	 $DAP=($KG*$_POST['phosphorus'])/46;
		  	 $N_DAP = (18*$DAP)/$KG;
		  	 $ND=$_POST['nitrogen'] - $N_DAP;
		  	 $Urea=($KG*$ND)/21;
		  	 echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*10.500/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
		  	  $N_DAP = (18*$DAP)/$KG;
		  	  $ND=$_POST['nitrogen'] - $N_DAP;
		  	  $Urea=($KG*$ND)/21;
		  	  echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;
		  }
		 
			}	
	 }
	}
   }
	break;
	case 2 :{
		$prefix1="3-6 ปี";
		switch($_POST['prefix3']){
			case 1:{
		switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area1=$_POST['area'];
				$KG= $area1*35.00;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=($_POST['nitrogen']) - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*35/4;
		  	 $DAP=($KG*$_POST['phosphorus'])/46;
		  	 $N_DAP = (18*$DAP)/100;
		  	 $ND=$_POST['nitrogen'] - $N_DAP;
		  	 $Urea=($KG*$ND)/46;
		  	 echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*35/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
		  	  $N_DAP = (18*$DAP)/100;
		  	  $ND=$_POST['nitrogen'] - $N_DAP;
		  	  $Urea=($KG*$ND)/46;
		  	  echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break; 
		  }
		}
			}
		 break;
	    case 2 :{
		$prefix3 = "21-0-0";
		
		switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area1=$_POST['area'];
				$KG= $area1*35.00;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=($_POST['nitrogen']) - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*35/4;
		  	 $DAP=($KG*$_POST['phosphorus'])/46;
		  	 $N_DAP = (18*$DAP)/100;
		  	 $ND=$_POST['nitrogen'] - $N_DAP;
		  	 $Urea=($KG*$ND)/21;
		  	 echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*35/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
		  	  $N_DAP = (18*$DAP)/100;
		  	  $ND=$_POST['nitrogen'] - $N_DAP;
		  	  $Urea=($KG*$ND)/21;
		  	  echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break; 
		  }
		}
			}
		}
		
	}
	break;
	case 3 :{
		$prefix1="7-15 ปี";
		switch($_POST['prefix3']){
			case 1 : {
				$prefix3 = "46-0-0";
		switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area1=$_POST['area'];
				$KG= $area1*49.00;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=($_POST['nitrogen']) - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*49/4;
		  	 $DAP=($KG*$_POST['phosphorus'])/46;
		  	 $N_DAP = (18*$DAP)/100;
		  	 $ND=$_POST['nitrogen'] - $N_DAP;
		  	 $Urea=($KG*$ND)/46;
		  	 echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*49/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
		  	  $N_DAP = (18*$DAP)/100;
		  	  $ND=$_POST['nitrogen'] - $N_DAP;
		  	  $Urea=($KG*$ND)/46;
		  	  echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;	   
		  }
		}
			}
			break;
			case 2:{ $prefix3 = "21-0-0";
				switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area1=$_POST['area'];
				$KG= $area1*49.00;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=($_POST['nitrogen']) - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*49/4;
		  	 $DAP=($KG*$_POST['phosphorus'])/46;
		  	 $N_DAP = (18*$DAP)/100;
		  	 $ND=$_POST['nitrogen'] - $N_DAP;
		  	 $Urea=($KG*$ND)/21;
		  	 echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*49/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
		  	  $N_DAP = (18*$DAP)/100;
		  	  $ND=$_POST['nitrogen'] - $N_DAP;
		  	  $Urea=($KG*$ND)/21;
		  	  echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;	   
		  }
		}
				
				}
		}
		}
		break;
   case 4 :
   {
	   $prefix1 = "15 ปีขึ้นไป";
	    switch($_POST['prefix3']){
			case 1 :{ $prefix3="46-0-0";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area1=$_POST['area'];
				$KG= $area1*70.00;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=($_POST['nitrogen']) - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*70/4;
		  	 $DAP=($KG*$_POST['phosphorus'])/46;
		  	 $N_DAP = (18*$DAP)/100;
		  	 $ND=$_POST['nitrogen'] - $N_DAP;
		  	 $Urea=($KG*$ND)/46;
		  	 echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*70/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
		  	  $N_DAP = (18*$DAP)/100;
		  	  $ND=$_POST['nitrogen'] - $N_DAP;
		  	  $Urea=($KG*$ND)/46;
		  	  echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;   
		  }
	   }
			}
			break ;
			case 2 :{
				switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area1=$_POST['area'];
				$KG= $area1*70.00;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=($_POST['nitrogen']) - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*70/4;
		  	 $DAP=($KG*$_POST['phosphorus'])/46;
		  	 $N_DAP = (18*$DAP)/100;
		  	 $ND=$_POST['nitrogen'] - $N_DAP;
		  	 $Urea=($KG*$ND)/21;
		  	 echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*70/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
		  	  $N_DAP = (18*$DAP)/100;
		  	  $ND=$_POST['nitrogen'] - $N_DAP;
		  	  $Urea=($KG*$ND)/21;
		  	  echo round($Urea,2);
		 	  echo "   กิโลกรัม";
				break;   
		  }
	   }
				}
		}
		break;
	   }
	}
    ?>
          </div>
    </td>
        </tr>
        <tr>
          <th scope="row">ราคาแม่ปุ๋ยไนโตรเจน</th>
          <td><?php
	 switch($_POST['prefix3']){
		 case 1 :{
  echo round($Urea*595/50,2);
  echo "   บาท";
  break;
		 }
		 case 2:{
			 echo round($Urea*350/50,2);
  				echo "   บาท";
 				 break;
			 }
	 }
  ?></td>
        </tr>
        <tr>
          <th scope="row">แม่ปุ๋ย DAP</th>
          <td><?php
   switch($_POST['prefix1']){
   case 1 :{
	     switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*10.500;
				$DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*10.500/4;
			 $DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*10.500/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
		}
		 }
	   
	}
	break;
	case 2 :
	{
		$prefix1= "3-6 ปี";
		 switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*35;
				$DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*35/4;
			 $DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*35/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
		}
		}
		}
		break;
	case 3 :
		{
			$prefix1="7-15 ปี";
			 switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*49;
				$DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*49/4;
			 $DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*49/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
		}
		}
			}
			break;
   case 4 :
   {
	   $prefix1 = "15 ปีขึ้นไป";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*70;
				$DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*70/4;
			 $DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*70/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
		}
		}
	   }
	}  
    ?></td>
        </tr>
        <tr>
          <th scope="row">ราคาแม่ปุ๋ย DAP</th>
          <td><?php
  echo round($DAP*885/50,2);
  echo "   บาท";
  ?></td>
        </tr>
        <tr>
          <th scope="row">แม่ปุ๋ย MOP</th>
          <td><?php
   switch($_POST['prefix1']){
   case 1 :{
	     switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*10.500;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*10.500/4;
			 $DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*10.500/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		}
		 }
	   
	}
	break;
	case 2 :{
		$prefix1= "3-6 ปี";
		switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*35;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*35/4;
			 $DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*35/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		}
		 }
		}
		break;
		case 3 : {
			$prefix1="7-15 ปี";
			switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*49;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*49/4;
			 $DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*49/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		}
		 }
			}
			break;
   case 4 :
   {
	   $prefix1 = "15 ปีขึ้นไป";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*70;
				$DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $KG=$area*70/4;
			 $DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $KG=$area*70/400;
			  $DAP=($KG*$_POST['phosphorus'])/46;
				$MOP = ($KG*$_POST['potasium'])/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		}
		 }
	   }
	}
    ?></td>
        </tr>
        <tr>
          <th scope="row">ราคาแม่ปุ๋ย MOP</th>
          <td><?php
  echo round($MOP*635/50,2);
  echo "   บาท";
  ?></td>
        </tr>
        <tr>
          <th scope="row">สารเติมเต็ม</th>
          <td><?php
   switch($_POST['prefix1']){
   case 1 :{
	     switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		 }
			  
		 }
	   
	}
	break;
	case 2 : 
	{
		$prefix1= "3-6 ปี";
		switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		 }
			  
		 }
		
		}
		break;
		case 3 :{
			$prefix1="7-15 ปี";
		switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		 }
			  
		 }
			}
			break;
   case 4 :
   {
	   $prefix1 = "15 ปีขึ้นไป";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		 }  
		 }
	   }
	}
    ?></td>
        </tr>
        <tr>
          <th scope="row">น้ำหนักแม่ปุ๋ยรวม</th>
          <td><?php
	echo round(($Urea)+($MOP)+($DAP)+($ok),2);
	echo "   กิโลกรัม";
	?></td>
        </tr>
        <tr>
          <th scope="row">ราคาแม่ปุ๋ยทั้งหมด</th>
          <td><?php
	switch ($_POST['prefix3']){
		case 1:{
			echo round(($Urea*595/50)+($MOP*635/50)+($DAP*885/50),2);
	echo "   บาท";
	break;
			}
			case 2:{
			echo round(($Urea*-350/50)+($MOP*635/50)+($DAP*885/50),2);
	echo "   บาท";
	break;
		}
	}
	
	?></td>
        </tr>
      </table>
    </form>
    <form method="post" action="from.php">
    <input type="submit" class="t" value="ย้อนกลับ&nbsp; " /></td>
    </form>
</body>
</html>