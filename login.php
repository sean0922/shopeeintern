<?php
$url = 'http://192.168.1.3:3000/';
$result=file_get_contents($url);
$obj = json_decode($result);
?>
<table border=0 align=center width="100%">
<tr ><td colspan="5" align=center>
<h1 style="background-color:orange;">蝦皮賣家後端<br>ACS 跨運動 運動品牌專賣</h1>
</td></tr>
<tr>
	<td><h2 style="background-color:blue;"  align=center>商品銷售資訊</h2></td>

</tr>
<tr>
	<td align=center>
			<h2>總銷售額:<?php echo $obj->{'totalsalesprice'}; ?>元</h2>
			<h2>總銷售商品數:<?php echo $obj->{'totalsalesnub'}; ?>元</h2>
			<h2>平均一件商品賣價 :<?php echo $obj->{'avgproductprice'}; ?>元</h2>
			<h2>所有商品價錢的中位數:<?php echo $obj->{'medianprice'}; ?>元</h2>
			<h2>最高商品價錢:<?php echo $obj->{'maxprice'}; ?>元</h2>
			<h2>最低商品價錢:<?php echo $obj->{'minprice'}; ?>元</h2>
	</td>


</tr>




</table>
