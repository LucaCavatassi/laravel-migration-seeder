@extends('layouts.app')


@section('content')
    <table class="table table-striped table-danger table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company</th>
                <th scope="col">Departure</th>
                <th scope="col">Arrival</th>
                <th scope="col">Time Departure</th>
                <th scope="col">Time Arrival</th>
                <th scope="col">Train Number</th>
                <th scope="col">In Time</th>
                <th scope="col">Cancelled</th>
                <th scope="col">Date</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($trains as $train)
            <tr>
                <th scope="row">{{ $train->id }}</th>
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure }}</td>
                <td>{{ $train->arrival }}</td>
                <td>{{ $train->time_departure }}</td>
                <td>{{ $train->time_arrival }}</td>
                <td>{{ $train->code }}</td>

                @if ($train->in_time === 0)
                    <td>No</td>
                @else
                    <td>Yes</td>
                @endif

                @if ($train->cancelled === 0)
                    <td>No</td>
                @else
                    <td>Yes</td>
                @endif


                @if ($train->date === date("Y-m-d"))
                <td> Today </td>
                @elseif ($train->date === date("Y-m-d", strtotime('+1 day')))
                <td> Tomorrow </td>
                @else
                <td> {{ $train->date }} </td>
                @endif

                
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection