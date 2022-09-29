<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="display-1">Lista de Empleados</h1>
        <br>
        <form class="form-inline mp-4 my-lg-0">
           
           
        </form>

        <form>
            <div class="row">
              <div class="col">
                <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="{{ $buscarpor }}">
              </div>
              <div class="col">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </div>
            </div>
          </form>
    </div>

   
   


   
    

   
    <div class="container"> 
        <br>
        <a href="{{ route('empleados.create') }}" class="">Crear Empleado</a>
        <table class="table  table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">DNI</th>
                    <th scope="col">email</th>
                    <th scope="col">Area</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Local</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Inicio</th>
                    <th scope="col">Fin</th>
                    <th scope="col">Contrato</th>
                    <th colspan="1"></th>
                </tr>
            </thead>

            <tbody>
                @forelse ($empleados as $empleado )
                    <tr>
                        <td>
                            {{ $empleado->id }}
                        </td>
                        <td>
                            {{ $empleado->nombres }}
                        </td>

                        <td>
                            {{ $empleado->apellidos }}
                        </td>
                        <td>
                            {{ $empleado->Dni }}
                        </td>
                        <td>
                            {{ $empleado->email }}
                        </td>
                        <td>
                            {{ $empleado->area }}
                        </td>
                        <td>
                            {{ $empleado->cargo }}
                        </td>
                        <td>
                            {{ $empleado->local }}
                        </td>
                        <td>
                            {{ $empleado->nacimiento }}
                        </td>
                        <td>
                            {{ $empleado->inicio }}
                        </td>
                        <td>
                            {{ $empleado->fin }}
                        </td>
                        <td>
                            {{ $empleado->type }}
                        </td>

                        <td width="10px">
                            <a class="btn btn-secondary"  href="{{ route('empleados.edit',$empleado) }}">Editar</a>
                        </td>

                        <td width="10px">
                            <form action="{{route('empleados.destroy',$empleado)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty

               
                    
                @endforelse

            </tbody>


        </table>
      

    </div>



    
</body>
</html>