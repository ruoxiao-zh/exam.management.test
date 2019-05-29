<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>万全区教育局考试成绩查询</title>

    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.1/css/bootstrap-theme.min.css">

    <!--[if lt IE 9]>
    <script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style>
        html{
            height: 100%;
        }
        body{
            min-height: 100%;
        }
        body, html {
            overflow-x: hidden;
        }
        .bs-docs-home {
            background-color: #ffffff;
        }

        .header {
            background-color: #428bca;
            height: 80px;
        }

        .header > span {
            vertical-align:middle;
            line-height: 80px;
            margin-left: 20px;
            font-size: 25px;
            color: #ffffff;
        }

        .footer {
            background-color: #428bca;
            height: 50px;
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .footer > span {
            vertical-align: middle;
            line-height: 50px;
        }
    </style>
</head>

<body class="bs-docs-home">
<div class="row">
    <div class="col-sm-12 header">
        <span>万全区教育局考试成绩查询系统</span>
    </div>
</div>
<div class="container theme-showcase">
    <h1 style=" line-height:2em;"></h1><br/>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align: center;">
                        <strong>万全区教育局考试成绩查询系统</strong>
                    </h3>
                </div>
                <div class="panel-body">
                    @include('shared._errors')
                    {{--                    <div class="alert alert-danger alert-dismissable">--}}
                    {{--                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
                    {{--                        <strong>注意!</strong> 本站查询的分数来源于12333官网，详情请到官网咨询--}}
                    {{--                    </div>--}}

                    <div class="flash-message">
                        <p class="alert alert-info">
                            温馨提示: 请输入正确的姓名与准考证号, 如果查询结果有误, 请联系负责老师
                        </p>
                    </div>
                    <form role="form" name="form1">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1"
                                   placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-block btn-lg">点击查询考试成绩</button>
                        </div>

                    </form>

{{--                    <div class="alert alert-danger alert-dismissable">--}}
{{--                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
{{--                        <strong>注意!</strong> 没有查到成绩，请检查身份证号码和科目后，再次查询--}}
{{--                    </div>--}}

                    <div class="table-responsive">
                        <table border="0" cellspacing="0" cellpadding="0" class="table">
                            <tr class=" label-primary">
                                <th scope="col" width="50%"><span style="color:white">科目</span></th>
                                <th scope="col"><span style="color:white">成绩</span></th>
                            </tr>
                            <tr class="active">
                                <td width="50%">计算机操作员</td>
                                <td>没有成绩</td>
                            </tr>
                            <tr class="success">
                                <td>计算机操作员</td>
                                <td>优秀</td>
                            </tr>
                            <tr class="active">
                                <td>多媒体操作员</td>
                                <td>良好</td>
                            </tr>
                            <tr class="success">
                                <td>网页设计</td>
                                <td>不及格</td>
                            </tr>
                            <tr class="active">
                                <td>多媒体操作员</td>
                                <td>良好</td>
                            </tr>
                            <tr class="success">
                                <td>网页设计</td>
                                <td>不及格</td>
                            </tr>
                            <tr class="active">
                                <td>多媒体操作员</td>
                                <td>良好</td>
                            </tr>
                            <tr class="success">
                                <td>网页设计</td>
                                <td>不及格</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3"></div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 footer" style="text-align: center;">
        <span>Copyright ©2019 万全区教育局 v1.0.0 All Rights Reserved.</span>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script>
</body>
</html>
