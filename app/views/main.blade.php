
        @section('content')
        <div class="container-fluid">

            <div class="row">
                <img id="logo" class="img-responsive" src="{{ public_path('img') }}steigergenootschap.png" alt="Het Steigergenootschap" />
            </div>

            <div class="row">
                <div class="col-md-4">
                    {{ $playerForm->render() }}
                    {{ $abilitiesForm->render() }}
                </div>
                <div class="col-md-8">
                    {{ $characterForm->render() }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    @include('form.special_abilities')
                </div>
                <div class="col-md-8">
                    @include('form.skills')
                </div>
            </div>

        </div>
        @stop
