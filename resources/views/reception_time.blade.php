@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="form-group">
            <input type="date" class="form-control" name="reception_date" id="reception_date" aria-describedby="helpId" placeholder="" form="reception_time_form_data">
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{__("app.id")}}</th>
                    <th scope="col">{{__("app.reception_time")}}</th>
                    <th scope="col">{{__("app.status")}}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>12:30</td>
                <td>
                    <div class="form-group">
                        <select id="my-select" class="form-control" name="">
                            <option>{{__("app.on")}}</option>
                            <option>{{__("app.off")}}</option>
                        </select>
                    </div>
                </td>
                <td>
                    X
                </td>
                </tr>
                <tr class="d-none" id="add-reception-time-form">
                    <form action="{{asset('reception_time')}}" method="POST" name="reception_time_form_data" id="reception_time_form_data">
                        @csrf
                        <th scope="row">
                        </th>
                        <td>
                            <input class="form-control" type="time" name="reception_time">
                        </td>
                        <td>
                            <div class="form-group">
                                <select id="my-select" class="form-control" name="status">
                                    <option value="on">{{__("app.on")}}</option>
                                    <option value="off">{{__("app.off")}}</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-dark">{{__('app.save')}}</button>
                        </td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <input name="add_reception_time" id="add_reception_time" class="btn btn-dark w-100 d-flex justify-content-center" type="button" value="+">
    </div>
</div>
@endsection
