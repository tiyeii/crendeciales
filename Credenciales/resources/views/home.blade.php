@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(isset($edit))
                        @include('layouts.modificar')
                    
                    @else

                    @include('layouts.formulario')
                    @include('layouts.tabla')

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
