@extends('layouts.app')
  @section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">
      @if($message = Session::get('status'))
      <div class="alert alert-danger">
          {{$message}}
      </div>
      @endif
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Generar un nuevo Estudiante
                </div>
                <div class="float-end">
                    <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm">&larr; Volver</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('students.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="dni_student" class="col-md-4 col-form-label text-md-end text-start">DNI</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('dni_student') is-invalid @enderror" id="dni_student" name="dni_student" value="{{ old('dni_student') }}">
                            @if ($errors->has('dni_student'))
                                <span class="text-danger">{{ $errors->first('dni_student') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Nombre</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="last_name" class="col-md-4 col-form-label text-md-end text-start">Apellido</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}">
                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="birthday" class="col-md-4 col-form-label text-md-end text-start">Fecha de Nacimiento</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ old('birthday') }}">
                            @if ($errors->has('birthday'))
                                <span class="text-danger">{{ $errors->first('birthday') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="group_student" class="col-md-4 col-form-label text-md-end text-start">Grupo</label>
                        <div class="col-md-6">
                          <select class="form-control @error('group_student') is-invalid @enderror" id="group_student" name="group_student" value="{{ old('group_student') }}">
                            <option value="A">A</option>
                            <option value="B">B</option>
                          </select>
                            @if ($errors->has('group_student'))
                                <span class="text-danger">{{ $errors->first('group_student') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="year_id" class="col-md-4 col-form-label text-md-end text-start">Año</label>
                        <div class="col-md-6">
                          <select class="form-control @error('year_id') is-invalid @enderror" id="year_id" name="year_id" value="{{ old('year_id') }}">
                            <option value="1">Primero</option>
                            <option value="2">Segundo</option>
                            <option value="3">Tercero</option>
                            <option value="4">Cuarto</option>
                            <option value="5">Quinto</option>
                          </select>
                            @if ($errors->has('year_id'))
                                <span class="text-danger">{{ $errors->first('year_id') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Agregar Estudiante">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection