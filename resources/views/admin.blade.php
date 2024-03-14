<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form action="/create-admin" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaProduk" value="{{old('namaProduk')}}">
          @error('namaProduk')
            <p style="color: red">Harus Diisi!!</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Gambar Produk</label>
          <input type="file" class="form-control" id="exampleInputPassword1" name="gambarProduk">
          @error('gambarProduk')
            <p style="color: red">Harus Diisi!!</p>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi Produk</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="deskripsiProduk" value="{{old('deskripsiProduk')}}">
            @error('deskripsiProduk')
            <p style="color: red">Harus Diisi!!</p>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="hargaProduk" value="{{old('hargaProduk')}}">
            @error('hargaProduk')
            <p style="color: red">Harus Diisi!!</p>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Stok Produk</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="stokProduk" value="{{old('stokProduk')}}">
            @error('stokProduk')
            <p style="color: red">Harus Diisi!!</p>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/read-admin">Back</a>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
