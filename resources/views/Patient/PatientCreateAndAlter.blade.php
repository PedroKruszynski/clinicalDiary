@extends('layouts.app')

@section('content')

<div class="container">

    <form @if(isset($patient))
            action="{{route('patient.update', $patient->id)}}"
          @else
            action="{{ route('patient.save') }}"
          @endif
          method="POST">

        @CSRF

        @if(isset($patient))
            @METHOD('PUT')
        @endif

        <div class="row col-12">
            <div class="form-group col-12">

                <label for="nome">Nome</label>

                <input  type="text"
                        class="form-control"
                        id="nome"
                        name="name"
                        maxlength="255"
                        minlength="3"
                        placeholder="Nome"
                        required
                        @if(old('name'))
                            value="{{ old('name') }}"
                        @elseif(isset($patient->name))
                            value="{{ $patient->name }}"
                        @endif
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                >

            </div>
        </div>

        <div class="row col-12">

            <div class="form-group col-12">

                <label for="crm">Email</label>

                <input  type="email"
                        class="form-control"
                        id="email"
                        placeholder="email"
                        maxlength="255"
                        name="email"
                        required
                        @if(old('email'))
                            value="{{ old('email') }}"
                        @elseif(isset($patient->email))
                            value="{{ $patient->email }}"
                        @endif
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                >

            </div>

        </div>

        <div class="row col-12">

            <div class="form-group col-4">

                <label for="cpf">Cpf</label>

                <input  type="text"
                        class="form-control"
                        id="cpf"
                        maxlength="10"
                        placeholder="Cpf"
                        data-mask="000.000.000-00"
                        data-mask-reverse="true"
                        name="cpf"
                        required
                        @if(old('cpf'))
                            value="{{ old('cpf') }}"
                        @elseif(isset($patient->cpf))
                            value="{{ $patient->cpf }}"
                        @endif
                        @error('cpf')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                >

            </div>

            <div class="form-group col-4">

                <label for="telephone">Telefone</label>

                <input  type="text"
                        class="form-control"
                        id="telephone"
                        placeholder="Telefone"
                        maxlength="15"
                        data-mask="(00) 0000-0000"
                        name="telephone"
                        required
                        @if(old('telephone'))
                            value="{{ old('telephone') }}"
                        @elseif(isset($patient->telephone))
                            value="{{ $patient->telephone }}"
                        @endif
                        @error('telephone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                >

            </div>

            <div class="form-group col-4">

                <label for="date">Data de nascimento</label>

                <input  class="form-control"
                        type="date"
                        name="date"
                        min="1940-01-01"
                        id="date"
                        required
                        @if(old('date'))
                            value="{{ old('date') }}"
                        @elseif(isset($patient->date_of_birth))
                            value="{{ $patient->date_of_birth }}"
                        @endif
                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                >

            </div>

        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <button type="submit"
                        class="btn btn-primary">
                            Salvar
                </button>
            </div>
        </div>

    </form>

</div>

@endsection
