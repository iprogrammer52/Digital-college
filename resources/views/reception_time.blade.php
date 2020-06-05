@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table" id="reception_time_content">
            <thead>
                <tr>
                    <th colspan="3">
                        <input type="date" class="form-control" name="reception_date" id="reception_date" value="{{date('Y-m-d')}}">
                    </th>
                </tr>
                <tr>
                    <th>{{__('app.reception_time')}}</th>
                    <th>{{__('app.status')}}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reception_time as $time)
                    <tr>
                        <th>{{$time->time}}</th>
                        <th>
                            <select id="my-select" class="custom-select">
                                <option>{{__('app.on')}}</option>
                                <option>{{__('app.off')}}</option>
                            </select>
                        </th>
                        <th class="d-flex justify-content-end">
                            @if (empty($time->user_id))
                                <img src="{{asset('icons/delete.svg')}}" alt="{{__('app.delete')}}">
                            @else
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Извините, время занято его нельзя удалить сейчас">
                                    <img class="opacity-5" src="{{asset('icons/delete.svg')}}" alt="{{__('app.delete')}}">
                                </span>
                            @endif
                        </th>
                    </tr>
                @endforeach
                <tr id="new_reception_time" style="display:none;">
                    <th>
                        <input class="form-control" type="time" name="reception_time" id="reception_time">
                    </th>
                    <th>
                        <select id="my-select" class="custom-select" name="new_status" id="new_status">
                            <option>{{__('app.on')}}</option>
                            <option>{{__('app.off')}}</option>
                        </select>
                    </th>

                    <th class=" d-flex justify-content-end">
                        <button type="button" name="save" id="save" class="btn btn-light">
                            {{__('app.save')}}
                        </button>
                    </th>
                </tr>
                <tr id="progress-bar" style="display:none;" align="center">
                    <th colspan="3">
                        <div class="spinner-grow" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-dark" id="add_reception_time">
                            {{__('app.add')}}
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
