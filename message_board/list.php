<?php 
include 'conn.php'; 
?> 

<div style="text-align:center"><a href="add.php">继续添加</a></div>
 
<table style="width:500px; border:0px; align:center; background:#add3ef;" cellpadding="5" cellspacing="1"> 
<?php 
$sql="select * from message order by id"; 
$query=mysql_query($sql); 
while ($row=mysql_fetch_array($query)){ 
?> 

<tr style="background:#eff3ff"> 
    <td>标题：<span style="color:red"><?=$row[title]?></span> 用户：<span style="color:red"><?=$row[user] ?></span>
        <div style="text-align:right"><a href="preEdit.php?id=<?=$row[id]?>">编辑</a>  |  <a href="delete.php?id=<?=$row[id]?>">删除</a></div>
    </td> 
</tr> 
<tr style="background:#ffffff"> 
    <td>内容：<?=$row[content]?></td> 
</tr> 
<tr style="background:#ffffff"> 
    <td><div style="text-align:right">发表日期：<?=$row[lastdate]?></div></td> 
</tr> 
<?php }?> 
</table> 
