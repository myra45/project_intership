@extends('admin.layout.app')

@section('heading', 'Form')

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('dist/images/products/s1.jpg') }}" alt="" class="img-thumbnail">
                        <input type="file" class="form-control mt-3" name="">
                    </div>

                    <div class="col-md-9">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control h_100" cols="30" rows="10"></textarea>
                        </div>

                        <!-- Input type select -->

                        <div class="mb-3">
                            <label class="form-label">Status </label>
                            <select name="" class="form-control">
                                <option value="Show">Show</option>
                                <option value="Hide">Hide</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
