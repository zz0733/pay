<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/Public/SjtAdminSjt/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Public/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    
	$("#sousuo").click(function(e) {
        
		window.location.href = "SjtAdminSjt_Jilu_XTongji.html?ks_date="+$("#ks_date").val()+"&js_date="+$("#js_date").val();
		
    });
	
});
</script>
</head>

<body>
<form name="Form1" method="post" action="">
<table cellpadding="0" cellspacing="0" border="0" id="listuser">
<tr>
  <td style="height:40px;" colspan="2">
  <span style="font-size:20px; font-weight:bold; color:#00F;"><?php echo ($daydate); ?></span>
  </td>
</tr>

<tr>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
申请提款：<span style="color:#F00"><?php echo ($sqtkbs); ?></span> 笔
</td>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
申请提款总额：<span style="color:#F00"><?php echo ($sqtkbsmoney); ?></span> 元
</td>
</tr>

<tr>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
成功提款：<span style="color:#F00"><?php echo ($sqtkbsy); ?></span> 笔
</td>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
成功提款总额：<span style="color:#F00"><?php echo ($sqtkbsmoneyy); ?></span> 元
</td>
</tr>

<tr>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
实际提款利润总额：<span style="color:#F00"><?php echo ($sqtklr); ?></span> 元
</td>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
<!--平台账上未提款总额：<span style="color:#F00"><?php echo ($jssqtklr); ?></span> 元-->&nbsp;
</td>
</tr>

<tr>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
掉单数量：<span style="color:#F00"><?php echo ($ddsl); ?></span> 笔
</td>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
掉单总金额：<span style="color:#F00"><?php echo ($ddzje); ?></span> 元
</td>
</tr>

<tr>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
平台转账：<span style="color:#F00"><?php echo ($ptzzbs); ?></span> 笔
</td>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
平台转账手续费总额：<span style="color:#F00"><?php echo ($ptzzsxfze); ?></span> 元
</td>
</tr>


<tr>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
减金额账户数：<span style="color:#F00"><?php echo ($jjzhs); ?></span>个
</td>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
减金额总额：<span style="color:#F00"><?php echo ($jjzje); ?></span> 元
</td>
</tr>

<tr>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
网银网关成本：<span style="color:#F00"><?php echo ($wywgcb); ?></span> 元
</td>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
点卡网关成本：<span style="color:#F00"><?php echo ($yxwgcb); ?></span> 元
</td>
</tr>

<tr>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
网银实收利润总额：<span style="color:#F00"><?php echo ($wysjsxf); ?></span> 元
</td>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
点卡实收利润总额：<span style="color:#F00"><?php echo ($yxsjsxf); ?></span> 元
</td>
</tr>

<tr>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
合计利润总额：<span style="color:#F00"><?php echo ($hjlr); ?></span> 元
</td>
<td style="height:40px; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
技术利润总额：<span style="color:#F00"><?php echo ($jshjlr); ?></span> 元
</td>
</tr>

<tr>
<td style="height:40px; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;" colspan="2">
交易时间（开始）：<input type="text" name="ks_date" id="ks_date" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',isShowClear:false,readOnly:false})" style="width:100px;" value="<?php echo ($_GET['ks_date']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;
交易时间（结束）：<input type="text" name="js_date" id="js_date" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',isShowClear:false,readOnly:false})" style="width:100px;" value="<?php echo ($_GET['js_date']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="搜 索" style="font-size:20px;" id="sousuo">
</td>
</tr>
</table>
</form>
</body>
</html>