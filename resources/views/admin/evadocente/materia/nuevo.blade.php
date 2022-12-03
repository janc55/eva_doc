<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="{{route('materia.store')}}" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="form-label">Código: </label>
                            <input type="text" class="form-control" name="codigo" required>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="form-label">Nombre: </label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="form-label">Docente: </label>
                            <select class="form-control" aria-label=".form-select-sm example" id="docente" name="docente_id" required>
                                <option selected disabled value="">Elija un docente...</option>
                                @foreach ($docentes as $docente )
                                   
                                        <option value="{{$docente->id}}">{{$docente->nombre}} {{$docente->apellido_paterno}}</option>
                                     
                                @endforeach
							</select>
                        </div>
                    </div><!-- col-4 -->
                <div class="form-layout-footer">
                    <input type="submit" value="Crear materia" class="btn btn-info">
                </div><!-- form-layout-footer -->
        </form>  
</body>
</html>