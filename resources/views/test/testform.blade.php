@extends('layouts.layout')

@section('title', 'EngBoss - test page')

@section('content')


    <h1>Now it is time to test Your English!</h1>
    <form {{--action="{{route('test')}}"--}}{{-- method="post">--}}>
        @csrf
    <h6 class="">Напишите свое имя</h6>
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <p>Выберите верный вариант</p>

    <h6>Задание 1.</h6>
    <h5>We ... to work every day.</h5>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" value="0">
        <label class="form-check-label" for="flexRadioDefault">
            goes
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" value="1">
        <label class="form-check-label" for="flexRadioDefault">
            go
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" value="0">
        <label class="form-check-label" for="flexRadioDefault">
            gos
        </label>
    </div>


    <p>Выберите верный вариант</p>
    <h6>Задание 2.</h6>
    <h5>Nick is Russian. He’s ... Russia.</h5>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" value="1">
        <label class="form-check-label" for="flexRadioDefault1">
            from
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" value="0">
        <label class="form-check-label" for="flexRadioDefault1">
            to
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" value="0">
        <label class="form-check-label" for="flexRadioDefault1">
           at
        </label>
    </div>

    <p>Выберите верный вариант</p>
    <h6>Задание 3.</h6>
    <h5>Moscow is ... than London.</h5>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" value="0">
        <label class="form-check-label" for="flexRadioDefault2">
            noise
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" value="0">
        <label class="form-check-label" for="flexRadioDefault2">
            noiser
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" value="1">
        <label class="form-check-label" for="flexRadioDefault2">
            nosier
        </label>
    </div>

    <p>Выберите верный вариант</p>
    <h6>Задание 4.</h6>
    <h5>Look at Emma! She ... a blue skirt today!</h5>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" value="1">
        <label class="form-check-label" for="flexRadioDefault3">
            is wearing
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" value="0">
        <label class="form-check-label" for="flexRadioDefault3">
            wears
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" value="0">
        <label class="form-check-label" for="flexRadioDefault3">
            is wear
        </label>
    </div>

    <p>Выберите верный вариант</p>
    <h6>Задание 5.</h6>
    <h5>There must be ... coffee left in the coffee-pot.</h5>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" value="0">
        <label class="form-check-label" for="flexRadioDefault4">
            few
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" value="1">
        <label class="form-check-label" for="flexRadioDefault4">
            some
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" value="0">
        <label class="form-check-label" for="flexRadioDefault4">
            a few
        </label>
    </div>
        <div class="col-md-4">
            <input type="button" class="btn btn-outline-success" id="calc" value="Подсчитать результаты">
        <button style="margin: 5px;" type="reset" class="btn btn-outline-dark" value="Сброс"> Сброс </button>
        </div>

        <div class="col-md-4 form-check" >
            <label for="result">Итого баллов: </label>
            <input style="width: 73px; margin-left: 24px;" type="text" name="result" id="result">


        </div>


    </form>












@endsection