@extends('layout')

        @section('content')
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-4">
                    <img id="logo" class="img-responsive" src="{{ asset('img/steigergenootschap.png') }}" alt="Het Steigergenootschap" />
                    {{ $playerForm->render() }}
                    {{ $attributesForm->render() }}
                </div>
                <div class="col-md-8">
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
        @stop
