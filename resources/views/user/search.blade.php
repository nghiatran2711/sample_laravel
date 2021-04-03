<form class="row g-3" action="{{ route('category.search') }}" method="GET">
    @include('errors.error')
      <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Password</label>
        <input type="text" name="category_name" value="{{ old('category_name',request()->get('category_name')) }}" class="form-control" id="inputPassword2" placeholder="Category Name">
        @error('category_name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div><br>  
        
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Search</button>
      </div>
    </form>