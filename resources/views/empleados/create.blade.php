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
        <h1 class="display-1">Formulario Registro de Empleado</h1>
        <form method="POST" action="{{ route('empleados.store') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                        <label for="nombres" class="control-label">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres">
                    </div>
                    <br>
                    @error('nombres')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col">
                    <div class="form-group"> 
                        <label for="apellidos" class="control-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
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
                        <input type="number" class="form-control" id="Dni" name="Dni" placeholder="DNI">
                    </div>
                    
                    @error('Dni')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col">
                    
            <div class="form-group"> 
                <label for="email" class="control-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
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
                        <input type="text" class="form-control" id="area" name="area" placeholder="Area">
                    </div>
                    
                    
                    @error('area')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col">
                   
                    <div class="form-group"> 
                        <label for="cargo" class="control-label">Cargo</label>
                        <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo">
                    </div>
                    
                    
                    @error('cargo')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col">
                   
                    <div class="form-group"> 
                        <label for="local" class="control-label">Local</label>
                        <input type="text" class="form-control" id="local" name="local" placeholder="Local">
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
                <input type="date" class="form-control" id="nacimiento" name="nacimiento" placeholder="Fecha de Nacimiento">
            </div>
            <br>
            
            @error('nacimiento')
            <div class="error text-danger">{{ $message }}</div>
            @enderror


            <div>
                <div class="row">
                  <div class="col">
                    <div class="form-group"> 
                        <label for="inicio" class="control-label">Inicio de Contrato</label>
                        <input type="date" class="form-control" id="inicio" name="inicio" placeholder="Email">
                    </div>
                    
                    <br>
                    @error('inicio')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col">
                    <div class="form-group"> 
                        <label for="email" class="control-label">Fin de Contrato</label>
                        <input type="date" class="form-control" id="fin" name="fin" placeholder="Fin de contrato">
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
                <input type="text" class="form-control" id="type" name="type" placeholder="Contrato">
            </div>
            
            
            @error('type')
            <div class="error text-danger">{{ $message }}</div>
            @enderror



            <br>
            <br>
         

            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-green">Store</button>
          
            
        </form>
    </div>
    
    
</body>
</html>