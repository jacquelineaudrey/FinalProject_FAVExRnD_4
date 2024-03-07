<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    @forelse ( $data as $d )
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/'.$d->gambarProduk)}}" alt="Produk">
        <h3>{{ $d->namaProduk}}</h3>
        <h3>{{ $d->deskripsiProduk}}</h3>
        <h3>{{ $d->hargaProduk}}</h3>
        <h3>{{ $d->stokProduk}}</h3>
        <a href="/edit-admin/{{ $d ->id}}"><button type="submit" class="btn btn-primary">Edit</button></a>
        <form action="/delete-admin/{{$d ->id}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    @empty
        <h3>data is empty</h3>
    @endforelse
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
