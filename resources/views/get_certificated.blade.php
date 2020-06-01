@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
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
                <label for="certificated-type">{{__('app.certificated_type')}}</label>
                <select id="certificated-type" class="form-control" name="certificated_type">
                    <option value="about_training">Об обучении по месту требования</option>
                </select>
            </div>
            <div class="form-group d-flex justify-content-end">
                <input id="add" class="btn btn-dark" type="submit" name="add" value="{{ __('app.order') }}">
            </div>
        </form>
        @if (!empty($certificates))
            <label for="">{{__('app.ordered_certificateds')}}</label>
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
        @endif
    </div>
</div>
@endsection
