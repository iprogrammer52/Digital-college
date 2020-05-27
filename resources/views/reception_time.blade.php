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
                <th scope="row">1</th>
                <td>Mark</td>
                </tr>
                <tr>
                    <th></th>
                    <th class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-dark">Добавить</button>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
