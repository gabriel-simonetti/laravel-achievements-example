@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Achievements</div>
                    <div class="panel-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>Name</th><th>Description</th><th>Progress</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($achievements as $item)
                                    <tr>
                                        <td>{{ $item->details->name }}</td>
                                        <td>{{ $item->details->description }}</td>
                                        @if($item->isUnlocked())
                                            <td>Unlocked</td>
                                        @else
                                            <td>Progress: {{$item->points}}/{{$item->details->points}}</td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
