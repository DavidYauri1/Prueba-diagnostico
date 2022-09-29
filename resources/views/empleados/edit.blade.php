<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
   
    <div class="container">
        <a href="{{ route('empleados.index') }}" class="">Index Empleado</a>
        <h1 class="display-1">Formulario Edit Empleado</h1>
        <form method="POST" action="{{ route('empleados.update',$empleado->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                        <label for="nombres" class="control-label">Nombres</label>
                        <input  class="form-control" type="text" id="nombres" name="nombres" value="{{ $empleado->nombres }}"/>
                    </div>
                    <br>
                    @error('nombres')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col">
                    <div class="form-group"> 
                        <label for="apellidos" class="control-label">Apellidos</label>
                        <input class="form-control" type="text" id="apellidos" name="apellidos" value="{{ $empleado->apellidos }}"/>
                    </div> 
                    
                    @error('apellidos')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                                         
                  </div>
                </div>
            </div>
              

              <div>
                <div class="row">
                  <div class="col">
                    <div class="form-group"> 
                        <label for="Dni" class="control-label">DNI</label>
                        <input  class="form-control" type="number" id="Dni" name="Dni" value="{{ $empleado->Dni }}"/>
                    </div>
                    
                    @error('Dni')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col">
                    
            <div class="form-group"> 
                <label for="email" class="control-label">Email</label>
                <input class="form-control" type="email" id="email" name="email" value="{{ $empleado->email }}"/>
            </div>
            
            
            @error('email')
            <div class="error text-danger">{{ $message }}</div>
            @enderror
                  </div>
                </div>
            </div>
            <br>

              <div>
                <div class="row">
                  <div class="col">
                    <div class="form-group"> 
                        <label for="area" class="control-label">Area</label>
                        <input class="form-control" type="text" id="area" name="area" value="{{ $empleado->area }}"/>
                    </div>
                    
                    
                    @error('area')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col">
                   
                    <div class="form-group"> 
                        <label for="cargo" class="control-label">Cargo</label>
                        <input class="form-control" type="text" id="cargo" name="cargo" value="{{ $empleado->cargo }}"/>
                    </div>
                    
                    
                    @error('cargo')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col">
                   
                    <div class="form-group"> 
                        <label for="local" class="control-label">Local</label>
                        <input class="form-control" type="text" id="local" name="local" value="{{ $empleado->local }}"/>
                    </div>
                    <br>
                    
                    @error('local')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
            </div>


           


            <div class="form-group"> 
                <label for="nacimiento" class="control-label">Fecha de Nacimiento</label>
                <input class="form-control" type="date" id="nacimiento" name="nacimiento" value="{{ $empleado->nacimiento }}"/>
            </div>
            <br>
            
            @error('nacimiento')
            <div class="error text-danger">{{ $message }}</div>
            @enderror


            <div>
                <div class="row">
                  <div class="col">
                    <div class="form-group"> 
                        <label for="email" class="control-label">Inicio de Contrato</label>
                        <input class="form-control" type="date" id="inicio" name="inicio" value="{{ $empleado->inicio }}"/>
                    </div>
                    
                    <br>
                    @error('inicio')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col">
                    <div class="form-group"> 
                        <label for="email" class="control-label">Fin de Contrato</label>
                        <input class="form-control" type="date" id="fin" name="fin" value="{{ $empleado->fin }}"/>
                    </div>
                    <br>
                    
                    
                    @error('fin')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
        
                  </div>
                </div>
            </div>

           

           

            <div class="form-group"> 
                <label for="type" class="control-label">Contrato</label>
                <input class="form-control" type="text" id="type" name="type" value="{{ $empleado->type }}"/>
            </div>
            
            
            @error('type')
            <div class="error text-danger">{{ $message }}</div>
            @enderror

            <br>
            <br>
         
            
            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-black">Update</button>    
            
        </form>
    </div>
    



</body>
</html>