@extends('layouts.header')

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection

@section('home')
    <div class="home">
        <div class="contaniner-email">
            <div>
                <p class="text-complete">Se envió correctamente la solicitud a tu correo.</p>
            </div>
            <div>
                <p style="font-weight:normal" class="text-complete">Verifica tu bandeja</p>
            </div>
            <div>
                <a class="btn color-buttons" type="button" onclick="location.href='{{ url('/') }}'">Regresar</a>
            </div>
        </div>
    </div>

@endsection
