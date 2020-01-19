

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>for palm</title>
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
				$nitrogen = 20;
				$phosphorus = 11;
				$potasium = 11;
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*6.6;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
	   }
	  	  case 2 :{
		   	$nitrogen = 20;
				$phosphorus = 11;
				$potasium = 11;
				$prefix2="งาน";
				$area=$_POST['area'];
				$KG= $area*6.6/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $nitrogen = 20;
				$phosphorus = 11;
				$potasium = 11;
				$prefix2="ตารางวา";
				$area=$_POST['area'];
				$KG= $area*6.6/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
				$nitrogen = 20;
				$phosphorus = 11;
				$potasium = 11;
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*6.6;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
	   }
	  	  case 2 :{
		   	$nitrogen = "20";
				$phosphorus = "11";
				$potasium = "11";
				$prefix2="งาน";
				$area=$_POST['area'];
				$KG= $area*6.6/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $nitrogen = "20";
				$phosphorus = "11";
				$potasium = "11";
				$prefix2="ตารางวา";
				$area=$_POST['area'];
				$KG= $area*6.6/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
		$prefix1="2 ปี";
		switch($_POST['prefix3']){
			case 1:{
		switch($_POST['prefix2']){
            case 1 :{
				$nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$prefix2="ไร่";
				$area1=$_POST['area'];
				$KG= $area1*11;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=($nitrogen) - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$prefix2="งาน";
				$area=$_POST['area'];
				$KG= $area*11/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			 $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$prefix2="ตารางวา";
				$area=$_POST['area'];
				$KG= $area*11/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
				$nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*11;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$prefix2="งาน";
				$area=$_POST['area'];
				$KG= $area*11/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			 $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$prefix2="ตารางวา";
				$area=$_POST['area'];
				$KG= $area*11/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
		$prefix1="3 ปี";
		switch($_POST['prefix3']){
			case 1 : {
				$prefix3 = "46-0-0";
		switch($_POST['prefix2']){
            case 1 :{
				$nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$prefix2="ไร่";
				$area=$_POST['area'];
				$KG= $area*17.6;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
	   }
	  	  case 2 :{
		   	$nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$prefix2="งาน";
				$area=$_POST['area'];
				$KG= $area*17.6/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			  $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*17.6/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
			  $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*17.6;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
			  $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*17.6/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			  $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*17.6/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
	   $prefix1 = "4 ปี";
	    switch($_POST['prefix3']){
			case 1 :{ $prefix3="46-0-0";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
			  $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*33;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		    $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*33/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			   $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*33/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
				 $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*33;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		   	 $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*33/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			   $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*33/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
	   case 5:{
		   $prefix1 = "5 ปี";
	    switch($_POST['prefix3']){
			case 1 :{ $prefix3="46-0-0";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
			  $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*44;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		    $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*44/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			   $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*44/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
				 $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*44;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		   	 $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*44/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			   $nitrogen = "14";
				$phosphorus = "9";
				$potasium = "20";
				$area=$_POST['area'];
				$KG= $area*44/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
		   case 6 :{
			   $prefix1 = "6 ปี";
	    switch($_POST['prefix3']){
			case 1 :{ $prefix3="46-0-0";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
			  $nitrogen = "14";
				$phosphorus = "14";
				$potasium = "21";
				$area=$_POST['area'];
				$KG= $area*44;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		    $nitrogen = "14";
				$phosphorus = "14";
				$potasium = "21";
				$area=$_POST['area'];
				$KG= $area*44/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/46;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			   $nitrogen = "14";
				$phosphorus = "14";
				$potasium = "21";
				$area=$_POST['area'];
				$KG= $area*44/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
				 $nitrogen = "14";
				$phosphorus = "14";
				$potasium = "21";
				$area=$_POST['area'];
				$KG= $area*44;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	  	  case 2 :{
		   	$prefix2="งาน";
		   	 $nitrogen = "14";
				$phosphorus = "14";
				$potasium = "21";
				$area=$_POST['area'];
				$KG= $area*44/4;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
				$Urea=($KG*$ND)/21;
				echo round($Urea,2);
				echo "   กิโลกรัม";
				break;
		   }
		  case 3 :{
			  $prefix2="ตารางวา";
			   $nitrogen = "14";
				$phosphorus = "14";
				$potasium = "21";
				$area=$_POST['area'];
				$KG= $area*44/400;
				$DAP=($KG*$phosphorus)/46;
				$N_DAP = (18*$DAP)/$KG;
				$ND=$nitrogen - $N_DAP;
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
				$phosphorus = 20;
				$area=$_POST['area'];
				$KG= $area*6.6;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;	
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   $phosphorus = 20;
				$area=$_POST['area'];
				$KG= $area*6.6/4;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			  $phosphorus = 20;
				$area=$_POST['area'];
				$KG= $area*6.6/400;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
		}
		 }
	   
	}
	break;
	case 2 :
	{
		$prefix1= "2 ปี";
		 switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
			  $phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*11;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
			  $phosphorus = 9;
				$KG= $area*11/4;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			    $phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*11/400;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
		}
		}
		}
		break;
	case 3 :
		{
			$prefix1="3 ปี";
			 switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*17.6;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		    $phosphorus = 9;
			$area=$_POST['area'];
			$KG= $area*17.6/4;
			$DAP=($KG*$phosphorus)/46;
			echo round($DAP,2);
			echo "   กิโลกรัม";
			break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*17.6/400;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
		}
		}
			}
			break;
   case 4 :
   {
	   $prefix1 = "4 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*33;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   $phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*33/4;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*33/400;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
		}
		}
	   }
	   break;
	   case 5 :{
		   $prefix1 = "5 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*44;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   $phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*44/4;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*44/400;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
		}
		}
		   }
		    break;
	   case 5 :{
		   $prefix1 = "5 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*55;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   $phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*55/4;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $phosphorus = 9;
				$area=$_POST['area'];
				$KG= $area*55/400;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
		}
		}
	   }
		break;   
		case 6 :{
			 $prefix1 = "6 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$phosphorus = 14;
				$area=$_POST['area'];
				$KG= $area*55;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   $phosphorus = 14;
				$area=$_POST['area'];
				$KG= $area*55/4;
				$DAP=($KG*$phosphorus)/46;
				echo round($DAP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $phosphorus = 14;
				$area=$_POST['area'];
				$KG= $area*55/400;
				$DAP=($KG*$phosphorus)/46;
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
				$potasium=11;
				$KG= $area*6.6;
				$MOP = ($KG*$potasium)/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		  	 $area=$_POST['area'];
				$potasium=11;
				$KG= $area*6.6/4;
				$MOP = ($KG*$potasium)/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
				$potasium=11;
				$KG= $area*6.6/400;
				$MOP = ($KG*$potasium)/60;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		}
		 }
	   
	}
	break;
	case 2 :{
		$prefix1= "2 ปี";
		switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$potasium=20;
				$KG= $area*11;
				$MOP = (($KG*$potasium)/60)+$KG;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
				$potasium=20;
				$KG= $area*11/4;
				$MOP = (($KG*$potasium)/60)+$KG;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			 $area=$_POST['area'];
				$potasium=20;
				$KG= $area*11/400;
				$MOP = (($KG*$potasium)/60)+$KG;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		}
		 }
		}
		break;
		case 3 : {
			$prefix1="3 ปี";
			switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$potasium=20;
				$KG= $area*17.6;
				$MOP = (($KG*$potasium)/60)+$KG;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   	$area=$_POST['area'];
		  	 $area=$_POST['area'];
				$potasium=20;
				$KG= $area*17.6/4;
				$MOP = (($KG*$potasium)/60)+$KG;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
	   }
	    case 3 :{
			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			 $area=$_POST['area'];
				$potasium=20;
				$KG= $area*17.6/400;
				$MOP = (($KG*$potasium)/60)+$KG;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		}
		 }
			}
			break;
   case 4 :
   {
	   $prefix1 = "4 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$potasium=20;
				$KG= $area*33;
				$MOP = (($KG*$potasium)/60)+$KG;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   $area=$_POST['area'];
				$potasium=20;
				$KG= $area*33/4;
				$MOP = (($KG*$potasium)/60)+$KG;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		  	 
	   }
	    case 3 :{

			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
				$potasium=20;
				$KG= $area*33/400;
				$MOP = (($KG*$potasium)/60)+$KG;
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		}
		 }
	   }
	   break;
	   case 5 :{
		   $prefix1 = "5 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$potasium=20;
				$KG= $area*44;
				$MOP = (($KG*$potasium)/60)+($area*33);
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   $area=$_POST['area'];
				$potasium=20;
				$KG= $area*44/4;
				$MOP = (($KG*$potasium)/60)+($area*33);
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		  	 
	   }
	    case 3 :{

			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			 $area=$_POST['area'];
				$potasium=20;
				$KG= $area*44/400;
				$MOP = (($KG*$potasium)/60)+($area*33);
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		}
		 }
		   }
		   break;
		   case 6 :{
			    $prefix1 = "6 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$area=$_POST['area'];
				$potasium=21;
				$KG= $area*44;
				$MOP = (($KG*$potasium)/60)+($area*33);
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	   case 2 :{
		   	$prefix2="งาน";
		   $area=$_POST['area'];
				$potasium=21;
				$KG= $area*44/4;
				$MOP = (($KG*$potasium)/60)+($area*33);
				echo round($MOP,2);
				echo "   กิโลกรัม";
				break;
		  	 
	   }
	    case 3 :{

			  $prefix2="ตารางวา";
			  $area=$_POST['area'];
			 $area=$_POST['area'];
				$potasium=21;
				$KG= $area*44/400;
				$MOP = (($KG*$potasium)/60)+($area*33);
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
          <th scope="row">ปริมาณ MgO</th>
          <td>
          <?php
		  switch($_POST['prefix1']){
   case 1 :{
	     switch($_POST['prefix2']){
            case 1 :{
				echo round(0,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
				echo round(0,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
				echo round(0,2);
				echo "   กิโลกรัม";
				break;
		 }
			  
		 }
	   
	}
	break;
	case 2 : 
	{
		$prefix1= "2ปี";
		switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
		 }
			  
		 }
		
		}
		break;
		case 3 :{
			$prefix1="3 ปี";
		switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
		 }
			  
		 }
			}
			break;
   case 4 :
   {
	   $prefix1 = "4 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $sm=$DAP+$Urea+$MOP;
				$ok=$KG+$KG-$sm;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		 }  
		 }
	   }
	   break;
	   case 5 :{
		    $prefix1 = "5 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   $MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
		 }  
		 }
		   }
		   break;
		   case 6 :{
			   	    $prefix1 = "6 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			 $MGO=(2/100)*$KG;
				echo round($MGO,2);
				echo "   กิโลกรัม";
				break;
		 }  
		 }
			   }
	}
		  
		  ?>
          
          </td>
        </tr>
        <tr>
          <th scope="row">ราคา MgO</th>
          <td>
          <?php
		  switch ($_POST['prefix1']){
			  case 1:{
		  echo round(0*445/50,2);
		  echo"   บาท" ;
		  break; }
		  break;
		  case 2:{
			  echo round($MGO*445/50,2);
		  echo"   บาท" ;
		  break;
			  }
			  break;
			  case 3:{
			  echo round($MGO*445/50,2);
		  echo"   บาท" ;
		  break;
			  }
			  break;
			  case 4:{
			  echo round($MGO*445/50,2);
		  echo"   บาท" ;
		  break;
			  }
			  break;
			  case 5:{
				  echo round($MGO*445/50,2);
		  echo"   บาท" ;
		  break;
				  }
				  break;
				  case 6 :{
					   echo round($MGO*445/50,2);
		  echo"   บาท" ;
		  break;
					  
					  }
		  }
		  ?>
          </td>
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
				$ok=$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $sm=$DAP+$Urea+$MOP;
				$ok=$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		 }
			  
		 }
	   
	}
	break;
	case 2 : 
	{
		$prefix1= "2ปี";
		switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$sm=$DAP+$Urea+$MOP;
				$ok=$KG+$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$sm=$DAP+$Urea+$MOP;
				$ok=$KG+$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $sm=$DAP+$Urea+$MOP;
				$ok=$KG+$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		 }
			  
		 }
		
		}
		break;
		case 3 :{
			$prefix1="3 ปี";
		switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$sm=$DAP+$Urea+$MOP;
				$ok=$KG+$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$sm=$DAP+$Urea+$MOP;
				$ok=$KG+$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $sm=$DAP+$Urea+$MOP;
				$ok=$KG+$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		 }
			  
		 }
			}
			break;
   case 4 :
   {
	   $prefix1 = "4 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$sm=$DAP+$Urea+$MOP;
				$ok=$KG+$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$sm=$DAP+$Urea+$MOP;
				$ok=$KG+$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $sm=$DAP+$Urea+$MOP;
				$ok=$KG+$KG-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		 }  
		 }
	   }
	   break;
	   case 5 :{
		    $prefix1 = "5 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$sm=$DAP+$Urea+$MOP;
				$ok=$KG+($area*33)-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$sm=$DAP+$Urea+$MOP;
				$ok=$KG+($area*33)-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $sm=$DAP+$Urea+$MOP;
				$ok=$KG+($area*33)-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		 }  
		 }
		   }
		   break;
		   case 6 :{
			   	    $prefix1 = "6 ปี";
	   switch($_POST['prefix2']){
            case 1 :{
				$prefix2="ไร่";
				$sm=$DAP+$Urea+$MOP;
				$ok=$KG+($area*33)-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
				
	   }
	    case 2 :{
		   	$prefix2="งาน";
		   	$sm=$DAP+$Urea+$MOP;
				$ok=$KG+($area*33)-$sm-$MGO;
				echo round($ok,2);
				echo "   กิโลกรัม";
				break;
		}
		 case 3 :{
			  $prefix2="ตารางวา";
			  $sm=$DAP+$Urea+$MOP;
				$ok=$KG+($area*33)-$sm-$MGO;
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
	echo round(($Urea)+($MOP)+($DAP)+($ok)+$MGO,2);
	echo "   กิโลกรัม";
	?></td>
        </tr>
        <tr>
          <th scope="row">ราคาแม่ปุ๋ยทั้งหมด</th>
          <td><?php
	switch ($_POST['prefix3']){
		case 1:{
			echo round(($Urea*595/50)+($MOP*635/50)+($DAP*885/50)+($MGO*445/50),2);
	echo "   บาท";
	break;
			}
			case 2:{
			echo round(($Urea*350/50)+($MOP*635/50)+($DAP*885/50),2);
	echo "   บาท";
	break;
		}
	}
	?></td>
        </tr>
      </table>
    </form>
    <form method="post" action="from1.php">
    <input type="submit" class="t" value="ย้อนกลับ&nbsp; " /></td>
    </form>
</body>
</html>