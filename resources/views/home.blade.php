@extends('layouts.mainlayout')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="panel-group">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3>You can access keywords in the panel below!</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>No.</th>
                        <th>List</th>
                    </tr>
                    @foreach($help as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <!-- @for($i = 0; $i < 5; $i++) 
            {{$i}} <br>
        @endfor -->
</div>
@endsection