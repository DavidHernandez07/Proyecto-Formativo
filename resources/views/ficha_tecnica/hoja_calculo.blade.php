
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <h1>Ficha Tecnica</h1>
                <table class="table table-hover table full-color-table full-inverse-table hover-table">
                    <thead>
                            <tr scope="col">
                                <td>Id</td>
                                <td>
                                    {{ $ficha_tecnica->id }}
                                </td>
                            </tr>
                            <tr scope="col">
                                <td>Capacidad de Producción</td>
                                <td>
                                    {{ $ficha_tecnica->Num_Unidades }}
                                </td>
                            </tr>
                            <tr scope="col">
                                <td>Tiempo Promedio de Fabricación</td>
                                <td>
                                    {{ $ficha_tecnica->tiempo }}
                                </td>
                            </tr>
                            <tr scope="col">
                                <td>Descripción</td>
                                <td>
                                    {{ $ficha_tecnica->descripcion }}
                                </td>
                            </tr>
                        </thead>
                </table>
                <br>

                <table class="table table-light table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Costo total de materia Prima</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php ($suma=0)
                        @foreach($ficha_tecnica->materias_primas as $mp)
                        @php ($suma=$suma+$mp->costo*$mp->pivot->cantidad)
                        @endforeach
                        <tr>
                            <td>{{$suma}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-light table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Costo total de mano de Obra</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php ($suma1=0)
                        @foreach($ficha_tecnica->mano_obras as $mo)
                        @php ($suma1=$suma1+$mo->costo*$mo->pivot->cantidad_tiempo)
                        @endforeach
                        <tr>
                            <td>{{$suma1}}</td>
                        </tr>

                    </tbody>
                </table>

                <table class="table table-light table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Costo CIFS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php ($suma2=($ficha_tecnica->cifs()/$ficha_tecnica->Num_Unidades))

                        <tr>
                            <td>{{$suma2}}</td>
                        </tr>

                    </tbody>
                </table>



                <table class="table table-light table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$suma+$suma1+$suma2}}</td>
                        </tr>
                    </tbody>
                </table>






                @endsection