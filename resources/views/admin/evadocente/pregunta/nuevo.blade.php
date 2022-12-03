<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('pregunta.store')}}" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="form-label">detalle: </label>
                            <input type="text" class="form-control" name="detalle" required>
                        </div>
                    </div><!-- col-4 -->
                <div class="form-layout-footer">
                    <input type="submit" value="Crear credencial" class="btn btn-info">
                </div><!-- form-layout-footer -->
        </form>
</body>
</html>