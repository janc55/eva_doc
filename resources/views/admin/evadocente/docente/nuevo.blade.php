<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="{{route('docente.store')}}" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="form-label">Nombre de Usuario: </label>
                            <input type="text" class="form-control" name="username" required>
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
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="form-label">Cedula de identidad: </label>
                            <input type="text" class="form-control" name="cedula_identidad" required>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="form-label">Imagen: </label>
                                <input type="file" class="form-control-file" name="imagen">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="form-label">Celular: </label>
                                <input type="text" class="form-control" name="celular" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="form-label">Fecha de nacimiento: </label>
                                <input type="date" class="form-control" name="fecha_nacimiento" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="form-label">Correo electrónico: </label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="form-label">Genero: </label>
                                <input type="text" class="form-control" name="genero" required>
                            </div>
                        </div><!-- col-4 -->
                <div class="form-layout-footer">
                    <input type="submit" value="Crear materia" class="btn btn-info">
                </div><!-- form-layout-footer -->
        </form>  
</body>
</html>