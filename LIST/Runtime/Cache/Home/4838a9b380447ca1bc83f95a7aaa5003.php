<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加员工</title>
    <style type="text/css">
        span{
            visibility: hidden; 
            color:red;
        }
        textarea{
            resize:none;
        }
    </style>
</head>
<link rel="stylesheet" href="/list/Public/css/bootstrap.min.css">
<link rel="stylesheet" href="/list/Public/css/dashboard.css">
<link rel="stylesheet" href="/list/Public/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css">

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="index.html">show</a></li>
                <li class="active"><a href="add.html">add</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item</a></li>
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
                <li><a href="">More navigation</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <!-- <h1 class="page-header">Dashboard</h1>

            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
            </div> -->
            <!-- 添加员工 -->
            <h2 class="sub-header">Add people</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <form action="<?php echo U('Home/index/apiAdd');?>" method="post">
                    <tbody>
                   <tr>
                        <td>name</td>
                        <td><input type="text" class="name"></td>
                        <td>grade</td>
                        <td><input type="text" class="grade"></td>
                    </tr>
                     <tr>
                        <td>sex</td>
                        <td><input type="text" class="sex"></td>
                        <td>major</td>
                        <td><input type="text" class="major"></td>
                    </tr>
                    <tr>
                        <td>class</td>
                        <td><input type="text" class="class"></td>
                        <td>position</td>
                        <td><textarea name="" id="position" cols="50" rows="1"></textarea></td>
                    </tr>
                     <tr>
                        <td>birthday</td>
                       <!--  <td colspan="2">
                        <input type="text" id="birthday">
                        </td> -->
                        <td><div class="right col-xs-6 text-left">
        <div class="input-group">
          <input type="text" class="form-control form_datetime" id="addtime" name="addtime" value="" placeholder="">
          <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
        </div>
    </div></td>
                        <!-- birthday格式 -->
                    </tr>
                    <tr>
                        <td>summary</td>
                        <td colspan="3"><textarea name="" id="summary" cols="100" rows="4"></textarea></td>
                    </tr>
                     <tr>
                        <td>motto</td>
                        <td colspan="3"><textarea name="" id="motto" cols="50" rows="1"></textarea></td>
                    </tr>
                    </tbody>
                    </form>
                </table>
                <input type="button" class="submit" value="提交" style="float:right;margin-right:100px;">
            </div>
        </div>
    </div>
</div>
<script src="/list/Public/js/jquery.min.js"></script>
<script src="/list/Public/js/bootstrap.min.js"></script>
<script src="/list/Public/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js"></script>
<script src="/list/Public/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>

<script src="/list/Public/js/docs.min.js"></script>
<script src="/list/Public/js/ie-emulation-modes-warning.js"></script>
<script src="/list/Public/js/add.js"></script>
<script type="text/javascript">
    var addPeopleURL='<?php echo U('Home/index/apiAdd');?>';
    $('.form_datetime').datetimepicker();
</script>

</body>
</html>