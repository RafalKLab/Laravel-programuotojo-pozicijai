@extends('layouts.default')
@section('content')


    <div class="card">
        @if($answers)
            <div class="card-header">
                <h3>Jūsų atsakymai</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="w-50">Jus aptarnavęs darbuotojas:</th>
                            <td>{{ $answers['worker']}}</td>
                        </tr>
                        <tr>
                            <th>Kaip vertinate aptarnavimo greitį?</th>
                            <td>{{ $answers['speed']}} / 10</td>
                        </tr>
                        <tr>
                            <th>Kaip vertinate aptarnavimo kokybę?</th>
                            <td>{{ $answers['quality']}} / 10</td>
                        </tr>
                        <tr>
                            <th>Kokia tikimybė, kad rekomenduosite mus savo draugams?</th>
                            <td>{{ $answers['recommendation']}} / 10</td>
                        </tr>
                        <tr>
                            <th>Gal galite pakomentuoti kodėl pateikėte tokius vertinimus?</th>
                            <td>{{ $answers['comments']}}</td>
                        </tr>
                        <tr>
                            <th>Ar galėsime šį Jūsų vertinimą panaudoti savo svetainėje
                                ar socialiniuose puslapiuose?</th>
                            <td>
                                @if($answers['yes_no'])
                                    Taip
                                @else
                                    Ne
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
                <a href="{{route('home')}}" class="btn btn-primary">Pildyti dar vieną anketą</a>
            </div>
        </div>
    @else
        <div class="card-header" align="center">
            <h3>Jūs dar neužpildėte anketos!</h3>
            <a href="{{route('home')}}" class="btn btn-primary">Pildyti anketą</a>
        </div>
    @endif


@endsection
