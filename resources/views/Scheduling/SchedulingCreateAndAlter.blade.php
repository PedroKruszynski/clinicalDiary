@extends('layouts.app')

@section('content')

<div class="container">

    <form @if(isset($scheduling))
                action="{{route('scheduling.update', $scheduling->id)}}"
          @else
                action="{{ route('scheduling.save') }}"
          @endif
          method="POST">

        @CSRF

        @if(isset($scheduling))
            @METHOD('PUT')
        @endif

        <div class="row col-12">
            <div class="form-group col-12">

                <label for="description">Descrição</label>

                <textarea class="form-control"
                          id="description"
                          rows="2"
                          name="description"
                          maxlength="255">@if(isset($scheduling->description)){{$scheduling->description}}@endif</textarea>

                {{-- Deixar a tag textarea junto para não adicionar espaço no front --}}

            </div>
        </div>

        <div class="row col-12">

            <div class="form-group col-4">

                <label for="doctor_id">Doutores</label>

                <select id="doctor_id"
                        class="form-control"
                        name="doctor_id"
                        required>
                        @if(empty($doctors->all()))
                            <option>
                                Nenhum doutor encontrado
                            </option>
                        @else
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">
                                    {{$doctor->name}}
                                </option>
                            @endforeach
                        @endif
                </select>

            </div>

            <div class="form-group col-4">

                <label for="patient_id">Paciente</label>

                <select id="patient_id"
                        class="form-control"
                        name="patient_id"
                        required>
                        @if(empty($patients->all()))
                            <option>
                                Nenhum doutor encontrado
                            </option>
                        @else
                            @foreach ($patients as $patient)
                                <option value="{{ $patient->id }}"
                                        @if(isset($scheduling))
                                            @if($scheduling->patient_id == $patient->id)
                                                selected
                                            @endif
                                        @endif>
                                            {{$patient->name}}
                                </option>
                            @endforeach
                        @endif
                </select>

            </div>

            <div class="form-group col-4">

                <label for="date">Data do agendamento</label>

                <input class="form-control"
                       type="datetime-local"
                       name="date"
                       @if(isset($scheduling->date_of_scheduling))
                            value="{{ date('Y-m-d\TH:i', strtotime($scheduling->date_of_scheduling)) }}"
                       @else
                            min="{{ date("Y-m-d") .'T'. date("h:i") }}"
                       @endif
                       id="date"
                       required>

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
