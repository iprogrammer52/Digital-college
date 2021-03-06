@extends('layouts.app')
@section('content')
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        @foreach ($receptionDate as $date)
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="pills-{{$date->id}}-tab"
                    data-toggle="pill"
                    href="#pills-{{$date->id}}"
                    role="tab"
                    aria-controls="pills-{{$date->id}}"
                    aria-selected="true"
                >
                    {{$date->date}}
                </a>
            </li>
        @endforeach
        <li class="nav-item">
            <div class="input-group mb-3">
                <input type="date" class="form-control" id="reception-date-value" aria-label="Recipient's username" aria-describedby="add-reception-date" required>
                <div class="input-group-append">
                    <button class="btn btn-dark" type="button" id="add-reception-date">+</button>
                </div>
            </div>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div
            class="tab-pane fade show active"
            id="pills-warning"
            role="tabpanel"
            aria-labelledby="pills-warning-tab"
        >
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <p class="card-text text-muted">{{__('app.select_a_date')}}</p>
                </div>
            </div>
        </div>
        @foreach ($receptionDate as $date)
            <div
                class="tab-pane fade"
                id="pills-{{$date->id}}"
                role="tabpanel"
                aria-labelledby="pills-{{$date->id}}-tab"
            >
                <table class="table" id="reception-times-table">
                    <thead>
                        <tr>
                        <th scope="col">{{__('app.id')}}</th>
                        <th scope="col">{{__('app.reception_time')}}</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($date->ReceptionTimes as $time)
                            <tr class="">
                                <td scope="row">{{$time->id}}</td>
                                <td>{{$time->time}}</td>
                                @if($time->free == 1)
                                    <td>
                                        <select class="form-control form-control-sm cm-status" data-time-reception-id="{{$time->id}}">
                                            <option value="on" @if($time->status == 'on') selected @endif>{{__('app.on')}}</option>
                                            <option value="off" @if($time->status == 'off') selected @endif>{{__('app.off')}}</option>
                                        </select>
                                    </td>
                                @else
                                    <td>
                                        {{__('app.busy_date')}}
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        <tr class="" id="reception-time-template">
                            <td scope="row">
                            </td>
                            <td>
                                <input class="form-control" type="time" name="time" id="time">
                            </td>
                            <td>
                                <input class="form-control btn btn-dark" type="button" value="save" id="save_rt-{{$date->id}}">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endsection
