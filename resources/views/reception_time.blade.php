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
        <tr>
            <th scope="row">1</th>
            <td>8:30</td>
            <td>
                <select class="form-control form-control-sm">
                    <option>{{__('app.on')}}</option>
                    <option>{{__('app.off')}}</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input class="btn btn-dark" id="add_rt" type="button" name="add_reception_time" value="+">
            </td>
        </tr>
    </tbody>
</table>
@endsection