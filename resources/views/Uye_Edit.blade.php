<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>
<body>

    <h3 class="text-center">Üye Ekleme Sayfası</h3>

    <div class="container">
        <h3><b>{{$edit->ad}}</b> Adlı Kullanıcıyı Güncelliyorsun</h3>
        <a class="btn btn-info float-end m-2" href="{{route('uye.index')}}">Geri</a>
            <form action="{{ route('uye.update',$edit->id) }}" method="POST">
                @method('PATCH')
                @csrf

                <div class="mb-3">
                    <label for="">Ad</label>
                    <input type="text" class="form-control" value="{{$edit->ad}}" name="ad">
                </div>
                <div class="mb-3">
                    <label for="">Soyad</label>
                    <input type="text" class="form-control" value="{{$edit->soyad}}" name="soyad" >
                </div>
                <div class="mb-3">
                    <label for="">E-Posta</label>
                    <input type="text" class="form-control" value="{{$edit->email}}" name="email">
                </div>
                <button class="btn btn-warning">Güncelle</button>
            </form>



    </div>


</body>
</html>
