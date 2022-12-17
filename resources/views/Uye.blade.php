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
    <h3 class="text-center">Laravel Crud İşlemleri</h3>
    <div class="container mt-5">
        <a href="{{ route('uye.create') }}" class="btn btn-warning float-end">Ekle</a>
        <table class="table table-striped table-hover">
            <thead>
                <th>$</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>E-Posta</th>
                <th>Eklenme</th>
                <th>Güncellenme</th>
                <th width="50"></th>
                <th width="50"></th>

            </thead>

            <tbody>
                @foreach ($list as $listRow )
                <tr>
                <td>{{$listRow->id}}</td>
                <td>{{$listRow->ad}}</td>
                <td>{{$listRow->soyad}}</td>
                <td>{{$listRow->email}}</td>
                <td>{{$listRow->created_at}}</td>
                <td>{{$listRow->updated_at}}</td>
                <td><a class="btn btn-warning" href="{{route('uye.edit',$listRow->id)}}">Düzenle</a></td>
                <td>
                    <form action="{{route('uye.destroy',$listRow->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Sil</button>
                    </form>

                </td>
            </tr>
                @endforeach

            </tbody>

        </table>


        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif



    </div>

</body>
</html>
