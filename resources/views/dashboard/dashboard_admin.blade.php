@extends('admin')
@section('content_admin')
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
                                <th style="color: #fff">STT</th>
                                <th style="color: #fff">PROJECT</th>
                                <th style="color: #fff">STATUS</th>
                                <th style="color: #fff">PROGRESS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th style="color: #fff" scope="row">1</th>
                                <td style="color: #fff">Children</td>
                                <td style="color: #fff"><span class="label label-success">finish</span></td>
                                <td style="color: #fff"><h5 style="color: #4cc71b">100% <i class="fa fa-thumbs-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th style="color: #fff" scope="row">2</th>
                                <td style="color: #fff">House</td>
                                <td style="color: #fff"><span class="label label-warning">New</span></td>
                                <td style="color: #fff"><h5 style="color: orange">0% <i class="fa fa-long-arrow-right"></i></h5></td>
                            </tr>
                            <tr>
                                <th style="color: #fff" scope="row">3</th>
                                <td style="color: #fff">Heart for you</td>
                                <td style="color: #fff"><span class="label label-warning">New</span></td>
                                <td style="color: #fff"><h5 style="color: orange">0% <i class="fa fa-long-arrow-right"></i></h5></td>
                            </tr>
                            <tr>
                                <th style="color: #fff" scope="row">4</th>
                                <td style="color: #fff">Construct a road</td>
                                <td style="color: #fff"><span class="label label-info">In process</span></td>
                                <td style="color: #fff"><h5>55% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th style="color: #fff" scope="row">5</th>
                                <td style="color: #fff">The homeless</td>
                                <td style="color: #fff"><span class="label label-success">finish</span></td>
                                <td style="color: #fff"><h5 style="color: #4cc71b">100% <i class="fa fa-thumbs-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th style="color: #fff" scope="row">6</th>
                                <td style="color: #fff">Mid-Autumn Festival for kids</td>
                                <td style="color: #fff"><span class="label label-info">In process</span></td>
                                <td style="color: #fff"><h5>38% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
@endsection
