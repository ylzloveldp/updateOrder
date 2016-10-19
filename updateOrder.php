<?php
$nums = file_get_contents('num1.txt') ?: 0;//读取num1.txt中得数字并判断是否为0；
$nums = (int)$nums;
$nums++;
file_put_contents('num1.txt',$nums);//将更新的数字写入num1.txt文件中
//echo $nums;
/*$myfile=fopen("num1.txt", "r") or die("Unacle to open file!");
if(fread($myfile, filesize("num1.txt"))==null){
	file_put_contents("num1.txt", 1);
	fclose($myfile);
	echo 1;
}
else{
	$num2=fread($myfile, filesize("num1.txt"))+1;
	file_put_contents("num1.txt", $num2);
	fclose($myfile);
	echo $num2;
}*/
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>order form</title>
	<script type="text/javascript">
	//获取日期
	function getTime() {
		var today=new Date();
		var y=today.getFullYear();
		var m=today.getMonth()+1;
		var d=today.getDate();
		m=checkTime(m);
		d=checkTime(d);
		var x=document.getElementById("time2");
		x.innerHTML=y+""+m+""+d+"";
	}
	function checkTime(i){
		if(i<10){
			i="0"+i;
		}
		return i;
	}
	//获取编号的字母
function getIndex(){
	var myselect=document.getElementById("ordernum");
	var index=myselect.selectedIndex;
	var text1=myselect.options[index].text;
	document.getElementById("or").innerHTML=text1;
}
//输出更新的数字
function getNums(){
	var getnums=<?php echo $nums ?>;
	document.getElementById("nums").innerHTML=getnums;
}
</script>
<style type="text/css">
	select{float:left;}
	#time2 {float:left;
		margin-top: 1px;
		margin-left:1px;
	}
	#or {float:left;
		margin-top: 1px;
		margin-left:5px;
	}
	#nums {float:left;
		margin-top: 1px;
		margin-left:1px;
	}
	#bh {float:left;
		margin-top: 1px;
		margin-left:5px;
	}
	.clear{clear:both;}
</style>
</head>
<div>
<select id="ordernum" style="margin-top:16px;">
	<option value="ab">ab</option>
	<option value="cd">cd</option>
	<option value="ef">ef</option>
	<option value="gh">gh</option>
</select>
</div>
<p class="clear"></p>
<p id="bh">订单编号：</p>
<p id="or"></p>
<p id="time2"></p>
<p id="nums"></p>
<p class="clear"></p>
<input type="button" onclick="getIndex();getTime();getNums()" value="生成订单编号">
</body>
</html>