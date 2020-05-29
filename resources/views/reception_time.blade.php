@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="3">
                        <input type="date" class="form-control" name="reception_date" id="reception_date" aria-describedby="helpId">
                    </th>
                </tr>
                <tr>
                    <th>{{__('app.reception_time')}}</th>
                    <th>{{__('app.status')}}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>12:30</th>
                    <th>
                        <select id="my-select" class="custom-select" name="">
                            <option>{{__('app.on')}}</option>
                            <option>{{__('app.off')}}</option>
                        </select>
                    </th>
                    <th class=" d-flex justify-content-end">
                        <img src="{{asset('icons/delete.svg')}}" alt="">
                    </th>
                </tr>
                <tr id="new_reception_time" style="display:none;">
                    <th>
                        <input class="form-control" type="time" name="reception_time">
                    </th>
                    <th>
                        <select id="my-select" class="custom-select" name="">
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
