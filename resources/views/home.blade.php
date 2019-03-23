@extends('layouts.layout')

@section('conteudo')
    <section class="procedure_category section_gap mt-lg-5">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-10">
                    <h2>Lista de Pacientes</h2>
                </div>
                <div class="col-md ml-n5">
                    @auth
                    <a href="#" class="genric-btn success circle arrow">Success
                        <span class="lnr lnr-arrow-right"></span>
                    </a>
                    @endauth
                </div>
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Pesquise sua consulta</span>
                </div>
                <input type="text" class="form-control" id="myInput" onkeyup="pesquisar()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>


            <table class="table" id="myTable">
                <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipo da Consulta</th>
                    <th scope="col">Doutor(a)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>Lucas</td>
                    <td>Pediatra</td>
                    <td>Dr. Maria</td>
                </tr>
                </tbody>
            </table>



        </div>
    </section>

    <script>
        function pesquisar() {
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