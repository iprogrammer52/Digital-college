@extends('layouts.app')

@section('content')
    @if (!empty($receptionTimes))
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
                        <td scope="row">{{$time->id}}</td>
                        <td>{{$time->time}}</td>
                        <td>
                            <select class="form-control form-control-sm cm-status" data-time-reception-id="{{$time->id}}">
                                <option value="on" @if($time->status == 'on') selected @endif>{{__('app.on')}}</option>
                                <option value="off" @if($time->status == 'off') selected @endif>{{__('app.off')}}</option>
                            </select>
                        </td>
                    </tr>
                @endforeach
                <tr class="d-none" id="reception-time-template">
                    <td scope="row">
                    </td>
                    <td>
                        <input class="form-control" type="time" name="">
                    </td>
                    <td>
                        <input class="form-control btn btn-dark" type="button" value="save" id="save_rt">
                    </td>
                </tr>
            </tbody>
        </table>
        <input class="btn btn-dark" id="add_rt" type="button" name="add_reception_time" value="+">
    @else
        <div class="card mb-3">
            <div class="card-body justify-content-center d-flex">
                <p class="card-text text-muted">Нет записей</p>
            </div>
      </div>
    @endif
@endsection
