@extends('index')

@section('title','Страница информации')

@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{$user->name}}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Профиль</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Имя</label><div class="form-control">{{$user->name}}</div></div>
                        <div class="col-md-12"><label class="labels">Почта</label><div class="form-control">{{$user->email}}</div></div>
                        <div class="col-md-12"><label class="labels">Возраст</label><div class="form-control">{{$user->age}}</div></div>
                        <div class="col-md-12"><label class="labels">Размер</label><div class="form-control">{{$user->size}}</div></div>
                        <div class="col-md-12"><label class="labels">Цвет</label><div class="form-control"><font color="#{{$user->color}}">#{{$user->color}}</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
