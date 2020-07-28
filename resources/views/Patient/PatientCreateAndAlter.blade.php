@extends('layouts.app')

@section('content')

<div class="container">

    <form @if(isset($patient)) action="{{route('patient.update', $patient->id)}}" @else action="{{ route('patient.save') }}" @endif
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
                        @if(isset($patient->name))
                            value="{{$patient->name}}"
                        @endif
                        placeholder="Nome">
    
            </div>
        </div>

        <div class="row col-12">

            <div class="form-group col-12">

                <label for="crm">Email</label>
    
                <input  type="text" 
                        class="form-control" 
                        id="email"
                        placeholder="email"
                        maxlength="255"
                        @if(isset($patient->email))
                            value="{{$patient->email}}"
                        @endif
                        name="email">
    
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
                        @if(isset($patient->cpf))
                            value="{{$patient->cpf}}"
                        @endif
                        name="cpf">
    
            </div>

            <div class="form-group col-4">

                <label for="telephone">Telefone</label>
    
                <input  type="text" 
                        class="form-control" 
                        id="telephone"
                        placeholder="Telefone"
                        maxlength="15"
                        @if(isset($patient->telephone))
                            value="{{$patient->telephone}}"
                        @endif
                        name="telephone">
    
            </div>

            <div class="form-group col-4">

                <label for="date">Data de nascimento</label>
    
                <input class="form-control" 
                       type="date"
                       name="date" 
                       @if(isset($patient->date_of_birth))
                            value="{{$patient->date_of_birth }}"
                       @endif
                       id="date">
    
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
