@extends('layouts.layout')

@section('conteudo')

    <section class="procedure_category section_gap mt-lg-5">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-10">
                    <h2>Patient Form</h2>
                </div>
                <div class="col-md ml-n5">
                    @auth
                        <a href="{{route('home')}}" class="genric-btn success circle arrow">Back to List
                            <span class="lnr lnr-arrow-right"></span>
                        </a>
                    @endauth
                </div>
            </div>

            <form action="{{route('patient.update', $patientEdit->id)}}" method="post">
                @csrf
                <input name="_method" value="PUT" type="hidden">

                <div class="form-row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="prontuarioPatient" class="h6">Number of Patient</label>
                            <input id="prontuarioPatient" type="text" name="prontuarioPatient" class="form-control prontuarioPatient"
                                   placeholder="Ex: 10306" min="1" data-mask="00.000" value="{{old('prontuarioPatient') ? old('prontuarioPatient') : $patientEdit->prontuarioPatient}}">
                        </div>
                        @if($errors->has('prontuarioPatient'))
                            <div class="badge badge-danger">
                                    {{$errors->first('prontuarioPatient')}}
                            </div>
                        @endif
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="namePatient" class="h6">Nome of Patient</label>
                            <input id="namePatient" type="text" name="namePatient" class="form-control" placeholder="Ex: Michael Vince"
                                   value="{{old('namePatient') ? old('namePatient') : $patientEdit->namePatient}}">
                        </div>
                        @if($errors->has('namePatient'))
                            <div class="badge badge-danger">
                                {{$errors->first('namePatient')}}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-2">
                        <label for="sexoPatient" class="h6">Nome of Patient</label>
                        <div class="form-group">
                            <select class="form-group" name="sexoPatient" id="sexoPatient">

                                @if($patientEdit->sexoPatient == 'male')
                                    <option value="male" selected>Male</option>
                                    <option value="female">Female</option>
                                @else
                                    @if($patientEdit->sexoPatient == 'female')
                                        <option value="male">Male</option>
                                        <option value="female" selected>Female</option>
                                    @else
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    @endif
                                @endif

                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="telPatient" class="h6">Tel of Patient</label>
                            <input id="telPatient" type="text" name="telPatient" class="form-control"
                                   placeholder="Ex: (00) 00000-0000" data-mask="(00) 00000-0000" value="{{old('telPatient') ? old('telPatient') : $patientEdit->telPatient}}">
                        </div>
                        @if($errors->has('telPatient'))
                            <div class="badge badge-danger">
                                {{$errors->first('telPatient')}}
                            </div>
                        @endif
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="typeQueryPatient" class="h6">Type query of Patient</label>
                            <input id="typeQueryPatient" type="text" name="typeQueryPatient" class="form-control"
                                   placeholder="Ex: Pediatrician" value="{{old('typeQueryPatient') ? old('typeQueryPatient') : $patientEdit->typeQueryPatient}}">
                        </div>
                        @if($errors->has('typeQueryPatient'))
                            <div class="badge badge-danger">
                                {{$errors->first('typeQueryPatient')}}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="doctorNamePatient" class="h6">Doctor of Patient</label>
                            <input id="doctorNamePatient" type="text" name="doctorNamePatient"
                                   class="form-control" placeholder="Ex: Luna Andreas" value="{{old('doctorNamePatient') ? old('doctorNamePatient') : $patientEdit->doctorNamePatient}}">
                        </div>
                        @if($errors->has('doctorNamePatient'))
                            <div class="badge badge-danger">
                                {{$errors->first('doctorNamePatient')}}
                            </div>
                        @endif
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group" style="margin-top: 5%; margin-left: 45%">
                        <button type="submit" class="genric-btn success radius large">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection