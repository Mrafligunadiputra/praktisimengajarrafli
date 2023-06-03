@extends('layouts.main')
@section('body')
<div style="background-color: aqua">
    <div class="d-flex justify-content-center">
        <div class="card mt-5">
            <div class="card-body">
              <h5 class="card-title">Login</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Masukan username dan password anda </h6>
              <form method="POST" action="/login">
              <div class="row g-3">
                    @csrf
                  <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                    placeholder="Masukan email">
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                    placeholder="Masukan kata sandi">
                  </div>
                  <input type="submit" class="btn btn-primary" id="submit" name="submit">
              </form>
              </div>
            </div>
          </div>
    </div>
</div>  
@endsection