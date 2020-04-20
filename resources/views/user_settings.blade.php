@extends('layouts.app')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Ф.И.О</th>
        <th scope="col">Пользовательская группа</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>
                    {{$user->id}}
                </td>
                <td>
                    {{$user->surname}} {{$user->name}} {{$user->middlename}}
                </td>
                <td>
                    {{$user->usergroup}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection