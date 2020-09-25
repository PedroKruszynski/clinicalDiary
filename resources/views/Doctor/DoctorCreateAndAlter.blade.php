@extends('layouts.app')

@section('content')

<div class="container">

    <form @if(isset($doctor))
            action="{{route('doctor.update', $doctor->id)}}"
          @else
            action="{{ route('doctor.save') }}"
          @endif
          method="POST">

        @CSRF

        @if(isset($doctor))
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
                        @elseif(isset($doctor->name))
                            value="{{ $doctor->name }}"
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

            <div class="form-group col-6">

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
                        @elseif(isset($doctor->cpf))
                            value="{{ $doctor->cpf }}"
                        @endif
                        @error('cpf')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                >

            </div>

            <div class="form-group col-6">

                <label for="crm">Crm</label>

                <input  type="text"
                        class="form-control"
                        id="crm"
                        placeholder="Crm"
                        maxlength="7"
                        data-mask="0000000"
                        data-mask-reverse="true"
                        name="crm"
                        required
                        @if(old('crm'))
                            value="{{ old('crm') }}"
                        @elseif(isset($doctor->crm))
                            value="{{ $doctor->crm }}"
                        @endif
                        @error('crm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                >

            </div>

        </div>

        <div class="row col-12">

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
                        @elseif(isset($doctor->telephone))
                            value="{{ $doctor->telephone }}"
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

                <input class="form-control"
                       type="date"
                       name="date"
                       min="1940-01-01"
                       id="date"
                       required
                       @if(old('date'))
                            value="{{ old('date') }}"
                       @elseif(isset($doctor->date_of_birth))
                            value="{{ $doctor->date_of_birth }}"
                       @endif
                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                >

            </div>

            <div class="form-group col-4">

                <label for="specialty">Especialidade</label>

                <input  type="text"
                        class="form-control"
                        id="specialty"
                        placeholder="Especialidade"
                        maxlength="255"
                        minlength="2"
                        name="specialty"
                        required
                        @if(old('specialty'))
                            value="{{ old('specialty') }}"
                        @elseif(isset($doctor->specialty))
                            value="{{ $doctor->specialty }}"
                        @endif
                        @error('specialty')
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
