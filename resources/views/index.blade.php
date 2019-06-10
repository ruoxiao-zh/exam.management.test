<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>张家口市万全区教育和体育局成绩查询</title>

    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.1/css/bootstrap-theme.min.css">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <style>
        body, html {
            overflow-x: hidden;
            height: 100%;
            margin: 0;
            padding: 0;
            min-height: 100%;
        }

        .container {
            min-height: 838px;
        }

        .bs-docs-home {
            background-color: #ffffff;
        }

        .header {
            background-color: #428bca;
            height: 45px;
        }

        .header > span {
            vertical-align: middle;
            line-height: 45px;
            margin-left: 20px;
            font-size: 20px;
            color: #ffffff;
        }

        .footer {
            background-color: #428bca;
            height: 35px;
            width: 100%;
            position: relative;
            left: 0;
            bottom: 0;
        }

        .footer > span {
            vertical-align: middle;
            line-height: 35px;
            font-size: 12px;
        }
    </style>
</head>

<body class="bs-docs-home">
<div class="row">
    <div class="col-sm-12 header">
        <span>张家口市万全区教育和体育局成绩查询系统</span>
    </div>
</div>
<div class="container theme-showcase">
    <h3 style=" line-height:1em;"></h3><br/>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align: center;">
                        <strong>张家口市万全区教育和体育局成绩查询系统</strong>
                    </h3>
                </div>
                <div class="panel-body">

                    @include('shared._errors')

                    <form accept-charset="UTF-8" action="{{ route('search') }}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleInputNo">考生号</label>
                            <input type="text" class="form-control" id="exampleInputNo" placeholder="请输入考生号" name="no"
                                   @if(isset($result)) value="{{ $result->no }}" @else value="{{ old('no') }}" @endif>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputExamRegistrationNumber">准考证号</label>
                            <input type="text" class="form-control" id="exampleInputExamRegistrationNumber" placeholder="请输入准考证号"
                                   name="exam_registration_number"
                                   @if(isset($result)) value="{{ $result->exam_registration_number }}" @else value="{{ old('exam_registration_number') }}" @endif>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName">考生姓名</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="请输入考生姓名" name="name"
                                   @if(isset($result)) value="{{ $result->name }}" @else value="{{ old('name') }}" @endif>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">点击查询考试成绩</button>
                        </div>

                    </form>

                    @if(isset($result))
                        <div class="table-responsive">
                            <table border="0" cellspacing="0" cellpadding="0" class="table">
                                <tr class=" label-primary">
                                    <th scope="col" width="50%"><span style="color:white">科目</span></th>
                                    <th scope="col"><span style="color:white">成绩</span></th>
                                </tr>
                                <tr class="active">
                                    <td width="50%">语文</td>
                                    <td>{{ $result->chinese }}</td>
                                </tr>
                                <tr class="success">
                                    <td>数学</td>
                                    <td>{{ $result->mathematics }}</td>
                                </tr>
                                <tr class="active">
                                    <td>英语</td>
                                    <td>{{ $result->english }}</td>
                                </tr>
                                <tr class="success">
                                    <td>理科综合</td>
                                    <td>{{ $result->science }}</td>
                                </tr>
                                <tr class="active">
                                    <td>文科综合</td>
                                    <td>{{ $result->arts }}</td>
                                </tr>
                                <tr class="success">
                                    <td>体育</td>
                                    <td>{{ $result->physical_education }}</td>
                                </tr>
                                <tr class="active">
                                    <td>优惠</td>
                                    <td>{{ $result->discounts }}</td>
                                </tr>
                                <tr class="success">
                                    <td>理化</td>
                                    <td>{{ $result->physicochemical }}</td>
                                </tr>
                                <tr class="active">
                                    <td>信息</td>
                                    <td>{{ $result->information_technology }}</td>
                                </tr>
                                <tr class="success">
                                    <td style="color: red">总分</td>
                                    <td style="color: red">{{ $result->total_points }}</td>
                                </tr>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-sm-3"></div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 footer" style="text-align: center;">
        <span>Copyright © 万全区教育和体育局 冀ICP备18018379号-1</span>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script>
</body>
</html>
