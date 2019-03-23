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

            <form action="{{route('patient.store')}}" method="post">
                @csrf

                <div class="form-row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="prontuarioPatient" class="h6">Number of Patient</label>
                            <input id="prontuarioPatient" type="text" name="prontuarioPatient" class="form-control prontuarioPatient"
                                   placeholder="Ex: 10306" min="1" data-mask="00.000">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="namePatient" class="h6">Nome of Patient</label>
                            <input id="namePatient" type="text" name="namePatient" class="form-control" placeholder="Ex: Michael Vince">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-2">
                        <label for="sexoPatient" class="h6">Nome of Patient</label>
                        <div class="form-group">
                            <select class="form-group" name="sexoPatient" id="sexoPatient">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="telPatient" class="h6">Tel of Patient</label>
                            <input id="telPatient" type="text" name="telPatient" class="form-control"
                                   placeholder="Ex: (00) 00000-0000" data-mask="(00) 00000-0000">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="typeQueryPatient" class="h6">Type query of Patient</label>
                            <input id="typeQueryPatient" type="text" name="typeQueryPatient" class="form-control" placeholder="Ex: Pediatrician">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="doctorNamePatient" class="h6">Doctor of Patient</label>
                            <input id="doctorNamePatient" type="text" name="doctorNamePatient" class="form-control" placeholder="Ex: Luna Andreas">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group" style="margin-top: 5%; margin-left: 30%">
                        <button type="submit" class="genric-btn info radius">Submit</button>
                        <a href="{{route('home')}}" class="genric-btn primary radius">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection