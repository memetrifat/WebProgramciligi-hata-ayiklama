<?php
function tablo($satir, $sutun) { 
 try{ 
 if((is_numeric($satir) && is_numeric($sutun))) //değerler sayı ise
 {
 echo "<table style='border: solid 5px orange'>";
 for($i=0; $i<$satir; $i++) {
 echo "<tr>";
 for($j=0; $j<$sutun; $j++){
 echo "<td style='border: solid 5px gray'>".$i.",".$j."</td>";
}
echo "</tr>";
}
echo "</table>";
}
else{
throw new Exception("<i style='color:red; background-color:gray'>
        Lütfen satır ve sütun bilgisi için sadece sayı giriniz.</i>");
} 
}catch(Exception $e) {
echo $e->getMessage();
}
}
tablo(5,10); 
tablo("dort","beş");
?>