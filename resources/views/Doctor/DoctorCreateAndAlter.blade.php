@extends('layouts.app')

@section('content')

<div class="container">

    <form @if(isset($doctor)) action="{{route('doctor.update', $doctor->id)}}" @else action="{{ route('doctor.save') }}" @endif
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
                        @if(isset($doctor->name))
                            value="{{$doctor->name}}"
                        @endif
                        placeholder="Nome">
    
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
                        @if(isset($doctor->cpf))
                            value="{{$doctor->cpf}}"
                        @endif
                        name="cpf">
    
            </div>

            <div class="form-group col-6">

                <label for="crm">Crm</label>
    
                <input  type="text" 
                        class="form-control" 
                        id="crm"
                        placeholder="Crm"
                        maxlength="10"
                        @if(isset($doctor->crm))
                            value="{{$doctor->crm}}"
                        @endif
                        name="crm">
    
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
                        @if(isset($doctor->telephone))
                            value="{{$doctor->telephone}}"
                        @endif
                        name="telephone">
    
            </div>

            <div class="form-group col-4">

                <label for="date">Data de nascimento</label>
    
                <input class="form-control" 
                       type="date"
                       name="date" 
                       @if(isset($doctor->date_of_birth))
                            value="{{$doctor->date_of_birth }}"
                       @endif
                       id="date">
    
            </div>

            <div class="form-group col-4">

                <label for="specialty">Especialidade</label>
    
                <input  type="text" 
                        class="form-control" 
                        id="specialty"
                        placeholder="Especialidade"
                        maxlength="255"
                        @if(isset($doctor->specialty))
                            value="{{$doctor->specialty}}"
                        @endif
                        name="specialty">
    
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
