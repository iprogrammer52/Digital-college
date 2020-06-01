@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        @if (!empty($certificates))
            <table class="table" id="certificate-table">
                <tbody>
                    <tr>
                        <th>{{__('app.certificated_type')}}</th>
                        <th>{{__('app.status')}}</th>
                    </tr>
                    @foreach ($certificates as $certificate)
                    <tr>
                        <td>{{__('app.' . $certificate->certificated_type)}}</td>
                        <td>
                            <div class="form-group">
                                {{-- TODO: Пересмотреть --}}
                                <select id="certificate-id-{{$certificate->id}}" class="form-control certificate-status" data-certificate-id="{{$certificate->id}}" name="certificate-status" id="certificate-id-{{$certificate->id}}">
                                    <option value="open" @if($certificate->status == 'open') selected @endif>{{__('app.open')}}</option>
                                    <option value="in_progress" @if($certificate->status == 'in_progress') selected @endif>{{__('app.in_progress')}}</option>
                                    <option value="done" @if($certificate->status == 'done') selected @endif>{{__('app.done')}}</option>
                                    <option value="refused" @if($certificate->status == 'refused') selected @endif>{{__('app.refused')}}</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center text-secondary">{{__('app.no_certificates')}}</p>
        @endif
    </div>
</div>
@endsection
