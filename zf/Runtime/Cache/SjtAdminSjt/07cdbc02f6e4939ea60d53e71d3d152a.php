<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/Public/SjtAdminSjt/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript">

</script>
<style type="text/css">
#listuser{
	margin-top:10px;
	}
#listuser div{
	width:30%;
	height:40px;
	line-height:40px;
	float:left;
	text-align:left;
	margin-left:3%;
	}
#listuser div input{
	border:0px;
	border-bottom:1px dashed #666;
	color:#369;
	vertical-align:middle;
	}	
</style>
</head>
<base target="_self" />
<body>
<form name="Form1" method="post" action="/SjtAdminSjt_ShangHu_czfledits.html">
<div style="width:100%; margin:0px auto; margin-top:10px; text-align:center; height:auto; font-size:20px; font-weight:bold;">【<span style="color:#03F"><?php echo ($UserName); ?></span>】用户通道设置<br>
  <br>
<table cellpadding="0" cellspacing="0" border="0" id="listuser">
<tr>
<td>
<?php if(is_array($listpaycost)): $i = 0; $__LIST__ = $listpaycost;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
<input type="hidden" name="UserID" value="<?php echo ($UserID); ?>">
<div><?php echo ($vo["myname"]); ?>：<input name="tongdao[]" type="checkbox" value="<?php echo ($vo["id"]); ?>" <?php $td = explode("|",$tongdao);if(in_array($vo['id'],$td)){echo 'checked';} ?>/></div><?php endforeach; endif; else: echo "" ;endif; ?>
</td>
</tr>
</table>
<div style="width:100%; margin:0px auto; margin-top:10px; text-align:center; height:auto; font-size:20px; font-weight:bold;">
<input type="submit" value="确认修改">
</div>
</form>
</body>
</html>