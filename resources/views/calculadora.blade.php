@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Calculadora</h2>
    <form method="POST">
        @csrf
        <div class="mb-3 text-start">
            <label for="num1" class="form-label">Número 1:</label>
            <input type="number" name="num1" id="num1" class="form-control" placeholder="Escribe un número" required>
        </div>

        <div class="mb-4 text-start">
            <label for="num2" class="form-label">Número 2:</label>
            <input type="number" name="num2" id="num2" class="form-control" placeholder="Escribe otro número" required>
        </div>

        <div class="d-flex gap-2 flex-wrap justify-content-center">
            <button type="submit" formaction="/calculadora/sumar">Sumar +</button>
            <button type="submit" formaction="/calculadora/restar">Restar -</button>
            <button type="submit" formaction="/calculadora/multiplicar">Multiplicar ×</button>
            <button type="submit" formaction="/calculadora/dividir">Dividir ÷</button>
        </div>
    </form>

    @if(isset($resultado))
        <hr class="my-4" style="border-top: 1px solid rgba(255,255,255,0.2)">
        <div class="alert alert-light bg-opacity-25 border-0">
            <h3 class="mb-0">Resultado: <span style="color: black;">{{ $resultado }}</span></h3>
        </div>
    @endif
@endsection

