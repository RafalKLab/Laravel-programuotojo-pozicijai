@extends('layouts.default')
@section('content')

<h3>Aptarnaviumo vertinimo anketa</h3>
    <form method="post" id="anketa">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jus aptarnavęs darbuotojas: </label>
            <select class="form-control{{ $errors->has('worker') ? ' is-invalid' : '' }}" id="exampleFormControlSelect1" name="worker">
                @foreach($workers as $worker_id => $worker_name)
                    <option value="{{$worker_id}}">{{$worker_name}}</option>
                @endforeach
            </select>
            @if ($errors->has('worker'))
                <span class="help-block text-danger">
                            {{ $errors->first('worker')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Kaip vertinate aptarnavimo greitį?</label>
            <select class="form-control" id="exampleFormControlSelect1" name="speed">
                @for($i = 1; $i<=10; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Kaip vertinate aptarnavimo kokybę?</label>
            <select class="form-control" id="exampleFormControlSelect1" name="quality">
                @for($i = 1; $i<=10; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Kokia tikimybė, kad rekomenduosite mus savo draugams?</label>
            <select class="form-control" id="exampleFormControlSelect1" name="recommendation">
                @for($i = 1; $i<=10; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Gal galite pakomentuoti kodėl pateikėte tokius vertinimus?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="comments"></textarea>
        </div>
        <div class="form-group">
            <label for="yes_no_radio">Ar galėsime šį Jūsų vertinimą panaudoti savo svetainėje
                ar socialiniuose puslapiuose?</label><br>
            <input type="radio" name="yes_no" value="1" checked>Yes</input>
            <input type="radio" name="yes_no" value="0">No</input>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
