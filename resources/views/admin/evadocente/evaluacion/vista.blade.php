<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <p>Vista Preguntas</p>
    <form action="{{route('docente.store')}}" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="form-label">Selecione su carrera: </label>
                            <select class="form-control" aria-label=".form-select-sm example" id="select-carrera" name="carrera_id" required>
                                <option selected disabled value="">Elija una carrera...</option>
                                @foreach ($carreras as $carrera )
                                   
                                        <option value="{{$carrera->id}}">{{$carrera->detalle}}</option>
                                     
                                @endforeach
							</select>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="form-label">Seleccione el semestre: </label>
                            <select class="form-control" aria-label=".form-select-sm example" id="select-semestre" name="semestre_id" required>
                                <option id="opcion-carrera" selected disabled value="">Elija un semestre...</option>
                                @foreach ($carreras as $carrera )
                                   
                                        <option value="{{$carrera->id}}">{{$carrera->detalle}}</option>
                                     
                                @endforeach
							</select>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="form-label">Apellido Paterno: </label>
                            <input type="text" class="form-control" name="apellido_paterno" required>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="form-label">Apellido Materno: </label>
                            <input type="text" class="form-control" name="apellido_materno" required>
                        </div>
                    </div><!-- col-4 -->
                   
                <div class="form-layout-footer">
                    <input type="submit" value="Crear materia" class="btn btn-info">
                </div><!-- form-layout-footer -->
        </form>  

   
<script src="/js/admin/evadocente/form.js"></script>


</body>


</html>

