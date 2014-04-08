@extends('layout')

    @section('content')
    <form role="form" method="post" action="">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-3">
                    <img id="logo" class="img-responsive" src="{{ asset('img/steigergenootschap.png') }}" alt="Het Steigergenootschap" />
                    {{ $playerForm->render() }}
                </div>
                <div class="col-md-3">
                    {{ $attributesForm->render() }}
                </div>
                <div class="col-md-6">
                    {{ $characterForm->render() }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- 'form.special_abilities' -->
                </div>
                <div class="col-md-8">
                    <!-- 'form.skills' -->
                </div>
            </div>

        </div>
    </form>
    @stop
