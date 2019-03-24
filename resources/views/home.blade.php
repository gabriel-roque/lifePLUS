@extends('layouts.layout')

@section('conteudo')
    <section class="procedure_category section_gap mt-lg-5">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-10">
                    <h2>Patient List</h2>
                </div>
                <div class="col-md ml-n5">
                    @auth
                    <a href="{{route('patient.create')}}" class="genric-btn success circle arrow">Register Query/Patient
                        <span class="lnr lnr-arrow-right"></span>
                    </a>
                    @endauth
                </div>
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Search your query</span>
                </div>
                <input type="text" class="form-control" id="myInput" onkeyup="filterSearchTable()"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Ex: Mark Drake or Susan Andraes ....">
            </div>


            <table class="table" id="myTable">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Pront.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type of Query</th>
                    <th scope="col">Doctor</th>
                    @auth
                    <th scope="col">Actions</th>
                    @endauth
                </tr>
                </thead>
                <tbody>
                    @foreach($patients as $pat)
                        <tr>
                            <th scope="row">{{$pat->prontuarioPatient}}</th>
                            <td>{{$pat->namePatient}}</td>
                            <td>{{$pat->typeQueryPatient}}</td>
                            <td>{{$pat->doctorNamePatient}}</td>
                            @auth
                                <td>
                                    <a href="{{route('patient.edit', $pat->id)}}" class="genric-btn info circle small">Edit</a>
                                    <a href="#" class="genric-btn danger circle small">Delete</a>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <script>
        function filterSearchTable() {
            var input, filter, table, tr, td, td1, i, txtValue, txtValue1 ;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                td1 = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue =  td.textContent || td.innerText;
                    txtValue1 =  td1.textContent || td1.innerText;
                    //Verifica primeira coluna
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                        //Verifica segunda coluna
                        if (txtValue1.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        }
    </script>
@endsection