<?php
phpinfo();
    $myArray[][] = array();
   // $myArray[] = array();
if(isset($_GET['quant1'])){
$quant1 = $_GET['quant1'];
$myArray[]=array('Earlybird NLP Practitioner',1,701.00, 3,701.00, $quant1 );

}
if(isset($_GET['quant2'])){
/* array_push($myArray,'item_name' => 'Earlybird NLP Practitioner','item_number' => 2,'price' => 3,700.00,'amount' => 3,700.00,'quantity' => $_GET['quant2']); */
$quant2 = $_GET['quant2'];
$myArray[]=array('Earlybird NLP Practitioner2',2,3702.00, 3702.00, $quant2 );
}
if(isset($_GET['quant3'])){
$quant3 = $_GET['quant3'];
$myArray[]=array('Earlybird NLP Practitioner3',3,3703.00, 3703.00, $quant3);
}
if(isset($_GET['quant4'])){
$quant4 = $_GET['quant4'];
$myArray[]=array ('Earlybird NLP Practitioner4',4,3704.00, 3700.00, $quant4);

}
//echo $quant1.",".$quant2.",".$quant3.",".$quant4;
$counter = 0;
//$myArray[0][0];
foreach($myArray AS $value[]) {
    $counter++;
}
//echo $counter;
//echo $myArray[1][1];
//.",".$myArray[2][0];
//$j=0;
for($j=0;$j<$counter; $j++) {
      if($j==0)
    continue;
       
 echo $myArray[$j][4];
 }

print_r($myArray);
 die;
//$j=0;
?>
<html>
<body>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="frm_payment" name="frm_payment">
        <input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="evelyn@realfocus.com.au">
<?php     for($j=0;$j<$counter; $j++) {
      if($j==0)
    continue;
   
    ?>       
    <?php //echo $myArray[$j][0];?>
    <input type="text" name="item_name_<?php echo $j;?>" value="<?php echo $myArray[$j][0];?>">
   
    <input type="text" name="item_number_<?php echo $j;?>" value="<?php echo $myArray[$j][1];?>">
<input type="text" name="pro_price_<?php echo $j;?>" id="pro_price_<?php echo $j;?>" value="<?php echo $myArray[$j][2];?>">
<input type="text" name="amount_<?php echo $j;?>" id="amount_<?php echo $j;?>" value="<?php echo $myArray[$j][3];?>">
<input type="text" name="quantity_item_name_<?php echo $j;?>"  value="<?php echo $myArray[$j][4];?>" class="txt_box_crt">


<input type="hidden" name="shipping_<?php echo $j;?>" value="0">


   

    <?php   }
    ?>
   
   
    <input name="payment_type" value="paypal" type="hidden">
        <input type="hidden" name="currency_code" value="AUD">
<input type="hidden" name="return" value="http://sunilgautam.com/sunil/dashboard1/thanks.php">
<input type="hidden" name="cancel_return" value="http://sunilgautam.com/sunil/dashboard1/error_php">
<input type="hidden" name="image_url" value="http://sunilgautam.com/sunil/dashboard1/images/logo_on_paypal.png">
</form>

<script type="text/javascript">
     function myfunc () {
        var frm = document.getElementById("frm_payment");
        frm.submit();
    }
    window.onload = myfunc; 
</script>
</body>
</html>