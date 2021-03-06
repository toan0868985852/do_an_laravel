@extends('admin')
@section('content_admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
            <div class="market-updates">
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-1">
                        <div class="col-md-12 market-update-left">
                            <h4>Users</h4>
                            @if(count($user) > 0)
                                <h3>{{count($user)}},000</h3>
                            @else]
                                <h3>0</h3>
                            @endif
                            <span class="badge badge-success mr-1">+100%</span>
                            <span style="font-size: 13px;position: relative; top: 10px;color: #fff">From previous period</span>
                        </div>
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-2">
                        <div class="col-md-12 market-update-left">
                            <h4>Visitors</h4>
                            <h3>13,500</h3>
                            <span style="background: #fd5d90" class="badge badge-pink mr-1">+5%</span>
                            <span style="font-size: 13px;position: relative; top: 10px;color: #fff">From previous period</span>
                        </div>
                        <div class="col-md-4 market-update-right">
                            <i style="font-size: 45px;margin-top: -7px;" class="fa fa-eye"></i>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-3">
                        <div class="col-md-12 market-update-left">
                            <h4>Donate</h4>
                            <h3>$ 1,500</h3>
                            <span style="background: #53d769;" class="badge badge-success mr-1">+15%</span>
                            <span style="font-size: 13px;position: relative; top: 10px;color: #fff">From previous period</span>
                        </div>
                        <div class="col-md-4 market-update-right">
                            <i style="font-size: 45px; color: #fff; margin-left: -5px; margin-top: -5px" class="far fa-money-bill-alt"></i>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-4">
                        <div class="col-md-12 market-update-left">
                            <h4>Share</h4>
                            <h3>1,500</h3>
                            <span class="badge badge-success mr-1">0%</span>
                            <span style="font-size: 13px;position: relative; top: 10px;color: #fff">From previous period</span>
                        </div>
                        <div class="col-md-4 market-update-right">
                            <i style="font-size: 45px;color: #fff" class="fa fa-share-alt-square"></i>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
    <div class="container">
        <div class="row">

            <div class="panel panel-default" style="width: 1064px;margin-left: 12px">

                <div class="panel-body" style="width: 1065px; height: 496px; margin-left: 13px">
                    <canvas id="line-chart" style="height: 493px; width: 1057px;margin-left: -20px"></canvas>
                </div>
            </div>

        </div>
    </div>
            <div class="agileits-w3layouts-stats">
                <div class="col-md-4 stats-info widget">
                    <div class="stats-info-agileits">
                        <div class="stats-title">
                            <h4 class="title">DONATE</h4>
                        </div>
                        <div class="stats-body">
                            <ul class="list-unstyled">
                                <li>Children <span class="pull-right">85%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar green" style="width:85%;"></div>
                                    </div>
                                </li>
                                <li>House <span class="pull-right">35%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar yellow" style="width:35%;"></div>
                                    </div>
                                </li>
                                <li>Heart for you <span class="pull-right">78%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar red" style="width:78%;"></div>
                                    </div>
                                </li>
                                <li>Construct a road <span class="pull-right">50%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar blue" style="width:50%;"></div>
                                    </div>
                                </li>
                                <li>The homeless <span class="pull-right">80%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar light-blue" style="width:80%;"></div>
                                    </div>
                                </li>
                                <li class="last">Others <span class="pull-right">60%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar orange" style="width:60%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 stats-info stats-last widget-shadow">
                    <div class="stats-last-agile">
                        <table class="table stats-table ">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>PROJECT</th>
                                <th>STATUS</th>
                                <th>PROGRESS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Children</td>
                                <td><span class="label label-success">finish</span></td>
                                <td><h5 style="color: #4cc71b">100% <i class="fa fa-thumbs-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>House</td>
                                <td><span class="label label-warning">New</span></td>
                                <td><h5 style="color: orange">0% <i class="fa fa-long-arrow-right"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Heart for you</td>
                                <td><span class="label label-warning">New</span></td>
                                <td><h5 style="color: orange">0% <i class="fa fa-long-arrow-right"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Construct a road</td>
                                <td><span class="label label-info">In process</span></td>
                                <td><h5>55% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>The homeless</td>
                                <td><span class="label label-success">finish</span></td>
                                <td><h5 style="color: #4cc71b">100% <i class="fa fa-thumbs-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Mid-Autumn Festival for kids</td>
                                <td><span class="label label-info">In process</span></td>
                                <td><h5>38% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
    <script type="text/javascript">
        window.onload = function () {
            Chart.defaults.global.defaultFontColor = '#000000';
            Chart.defaults.global.defaultFontFamily = 'Arial';
            var lineChart = document.getElementById('line-chart');
            var myChart = new Chart(lineChart, {
                type: 'line',
                data: {
                    labels: ["Jan", "March", "May", "July", "September", "December"],
                    datasets: [
                        {
                            label: 'Donate',
                            data: [80, 30, 63, 20, 110, 3],
                            backgroundColor: 'rgba(0, 128, 128, 0.3)',
                            borderColor: 'rgba(0, 128, 128, 0.7)',
                            borderWidth: 1
                        },
                        {
                            label: 'Volunteers',
                            data: [18, 72, 10, 39, 19, 75],
                            backgroundColor: 'rgba(0, 128, 128, 0.7)',
                            borderColor: 'rgba(0, 128, 128, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    },
                }
            });
        };
    </script>
@endsection
