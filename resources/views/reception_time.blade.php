@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
        <tr>
        <th scope="col">{{__('app.id')}}</th>
        <th scope="col">{{__('app.reception_time')}}</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($receptionTimes as $time)
            <tr>
                <th scope="row">{{$time->id}}</th>
                <td>{{$time->time}}</td>
                <td>
                    <select class="form-control form-control-sm" id="time-reception-status">
                        <option value="on" @if($time->status == 'on') selected @endif>{{__('app.on')}}</option>
                        <option value="off" @if($time->status == 'off') selected @endif>{{__('app.off')}}</option>
                    </select>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3" align="center">
                <input class="btn btn-dark" id="add_rt" type="button" name="add_reception_time" value="+">
            </td>
        </tr>
    </tbody>
</table>
@endsection
