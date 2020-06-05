@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            {{__('app.certificated_type')}}
        </h5>
        <form action="{{ route('get_cert.store') }}" method="POST">
            @csrf
            {{-- <label for="naming">{{__('app.full_name')}}</label> --}}
            {{-- <div id="naming" class="form-row">
                <div class="form-group col-3">
                    <input type="text" name="surname" id="surname" class="form-control" placeholder="{{__('app.surname')}}" aria-describedby="helpId" value="{{Auth::user()->surname}}" required>
                </div>
                <div class="form-group col-2">
                    <input type="text" name="name" id="name" class="form-control" placeholder="{{__('app.name')}}" aria-describedby="helpId" value="{{Auth::user()->name}}" required>
                </div>
                <div class="form-group col-7">
                    <input type="text" name="middlename" id="middlename" class="form-control" placeholder="{{__('app.middlename')}}" aria-describedby="helpId" value="{{Auth::user()->middlename}}" required>
                </div>
            </div> --}}
            <div class="form-group">
                <select id="certificated-type" class="form-control" name="certificated_type">
                    <option value="about_training">Об обучении по месту требования</option>
                </select>
            </div>
            <div class="form-group d-flex justify-content-end">
                <input id="add" class="btn btn-dark" type="submit" name="add" value="{{ __('app.order') }}">
            </div>
        </form>
    </div>
</div>
@if (!empty($certificates))
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">
            {{__('app.ordered_certificateds')}}
        </h5>
        <table class="table">
            <tbody>
                <tr>
                    <th>{{__('app.certificated_type')}}</th>
                    <th>{{__('app.status')}}</th>
                </tr>
                @foreach ($certificates as $certificate)
                <tr>
                    <td>{{__('app.' . $certificate->certificated_type)}}</td>
                    <td>{{__('app.' . $certificate->status)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif

@endsection
