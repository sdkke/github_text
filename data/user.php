<?php

header('Content-Type:application/json;charset=UTF-8');

@$uname=$_REQUEST['uname'] or die('{"code":3,"msg":"用户名必填"}');
@$upwd=$_REQUEST['upwd'] or die('{"code":4,"msg":"密码必填"}');

require('init.php');

$sql="SELECT * FROM o_user WHERE uname='$uname' AND upwd='$upwd'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);
if($row===null){
          $output=['code'=>2,'msg'=>'用户名或密码错误'];
}else{
          $output=['code'=>1,'uname'=>$uname];
}
echo json_encode($output);