@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <input type="date" id="date">
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{__('app.id')}}</th>
                    <th scope="col">{{__('app.reception_time')}}</th>
                    <th scope="col">{{__('app.status')}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                {{-- <tr>
                    <td class="d-flex justify-content-center">

                    </td>
                </tr> --}}
            </tbody>
        </table>
    </div>
</div>
@endsection
