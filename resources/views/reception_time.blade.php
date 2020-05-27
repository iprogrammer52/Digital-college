@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2">
                        <input type="date" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </th>
                </tr>
                <tr>
                    <th scope="col">Reception time</th>
                    <th scope="col">status</th>
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
                </tr>
                <tr>
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
