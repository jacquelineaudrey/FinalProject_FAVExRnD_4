<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <section id="menu">
        <div class="logo">
            <img src="Logos.png" alt="">
        </div>
        <div class="panel">
            <h2>Admin Panel</h2>
        </div>
        <div class="items">
            <li><i class="fas fa-th-large"></i><a href="#">Products</a></li>
        </div>
    </section>
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fas fa-bars"></i>
                </div>
                <div class="search">
                    <i class="far fa-search"></i>
                    <input type="text" placeholder="Search Products here">
                </div>
            </div>

            <div class="profile">
                <img src="profile.png" alt="">
                <h6>Putin</h6>
                <i class="fas fa-cog"></i>
            </div>
        </div>

        <div class="dashboard">
            <div>
                <h3 class="i-name">
                    Product List
                </h3>
            </div>
            <div>
                <h3 class="i-names">
                    Admin/Product List
                </h3>
            </div>
        </div>

        <div class="board">
            <table width="100%"
                <thead>
                    <tr>
                        <td><a href="/admin"><button type="submit" class="btn btn-primary">Add</button></a></td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        @forelse ( $data as $d )
                        <div class="m-3 d-flex">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('storage/'.$d->gambarProduk)}}" alt="Produk">

                                <div class="mt-4 m-5 mb-2">
                                    <h3>{{ $d->namaProduk}}</h3>
                                    <h3>{{ $d->deskripsiProduk}}</h3>
                                    <h3>{{ $d->hargaProduk}}</h3>
                                    <h3>{{ $d->stokProduk}}</h3>
                                </div>

                                <div class="d-flex justify-content-center mb-3 col-xs-3 btn-block">
                                    <a href="/edit-admin/{{ $d ->id}}"><button type="submit" class="btn btn-primary">Edit</button></a>
                                    <form action="/delete-admin/{{$d ->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h3>data is empty</h3>
                        @endforelse




                    </tr>
                    <tr>


                </tbody>
            </table>
            <div></div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
