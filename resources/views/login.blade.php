<div class="container-lg justify-content-center" style="align-items: center; max-width:400px; margin-top:100px;">
        <form class="d-flex flex-column  h-50 w-100
        shadow p-3 mb-5 rounded" action="{{ route('logAuth') }}" method="POST">
            @csrf
            <div class="text-center">
                <p>Dont Have an account? <a href="/register" class="text-success" style="text-decoration: none">Register</a></p>
            </div>
            <div class="form-outline mb-4" >
                <label class="form-label" for="email">Email address</label>
              <input type="email" value="" name="email" id="email" class="form-control">
            </div>
          
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control" >
            </div>
          
            <button type="submit" class="btn btn-success btn-block mb-4" style="background-color: #22c55e">Sign in</button>
          

        </form>
</div>