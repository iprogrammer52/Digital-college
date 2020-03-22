@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h2 class="h2 text-dark animated bounceInLeft">{{__('app.kei')}}</h2>
            <p class="text animated bounceInRight delay-1s">
                Колледж экономики и информатики (КЭИ) 
                был основан в 3.09. 1999 г. согласно 
                приказу №537 как структурное подразделение 
                Ульяновского государственного технического 
                университета (УлГТУ). Колледж готовит специалистов 
                системы среднего профессионального образования и является 
                действующим звеном системы непрерывного открытого образования 
                в Ульяновской области, реализуя программу "Школа - Колледж - Вуз".
            </p>
        </div>
        <div class="col-md-4">
            <div class="container">
                @yield('auth_form')
            </div>
        </div>
    </div>
</div>
@endsection
