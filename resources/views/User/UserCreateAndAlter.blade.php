@extends('layouts.app')

@section('content')

<div class="container">

    <form @if(isset($user)) action="{{route('user.update', $user->id)}}" @else action="{{ route('user.save') }}" @endif
          method="POST">

        @CSRF

        @if(isset($user))
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
                        @if(isset($user->name))
                            value="{{$user->name}}"
                        @endif
                        placeholder="Nome"
                        required>
    
            </div>
        </div>

        <div class="row col-12">

            <div class="form-group col-6">

                <label for="crm">Email</label>
    
                <input  type="email" 
                        class="form-control" 
                        id="email"
                        placeholder="email"
                        maxlength="255"
                        @if(isset($user->email))
                            value="{{$user->email}}"
                        @endif
                        name="email"
                        required>
    
            </div>

            <div class="form-group col-6">
    
                <label for="cpf">Senha</label>
    
                <input  type="password" 
                        class="form-control" 
                        id="password"
                        maxlength="255"
                        placeholder="Senha"
                        name="password">
    
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
