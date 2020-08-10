@extends('admin')
@section('content_admin')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of supporters
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Support for</th>
                        <th>Amount of money</th>
                        <th>Form</th>
                        <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($donate as $donates)
                    <tr>
                        <td>{{$donates->name}}</td>
                        <td>{{$donates->email}}</td>
                        <td>{{$donates->doi_tuong}}</td>
                        <td>{{$donates->so_tien_donate}}</td>
                        <td>{{$donates->hinh_thuc}}</td>
                        <td>{{$donates->phone}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


