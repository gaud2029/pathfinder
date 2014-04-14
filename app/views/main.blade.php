@extends('layout')

    @section('content')
    <form role="form" method="post" action="">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">
                    <img id="logo" class="img-responsive" src="{{ asset('img/steigergenootschap.png') }}" alt="Het Steigergenootschap" />
                    {{ $playerForm->render() }}
                </div>
                <div class="col-md-6">
                    {{ $attributesForm->render() }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    {{ $characterForm->render() }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    {{ $skillsForm->render() }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- 'form.special_abilities' -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    {{ $submit->render() }}
                </div>
            </div>

        </div>
    </form>

    <script src="{{ asset('js/alliance.js') }}"></script>
    @stop
