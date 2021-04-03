<form class="row g-3" action="{{ route('post.index') }}" method="GET">
  @include('errors.error')
    <div class="col-auto">
      <label for="inputPassword2" class="visually-hidden">Password</label>
      <select class="form-select" aria-label="Default select example" name="category_id">
        <option value=""></option>
        @foreach ($category as $key => $value )  
        <option value="{{ $key }}" {{ old('category_id', request()->get('category_id')) == $key ? 'selected' : ''  }}>{{ $value }}</option>
        @endforeach   
      </select><br>
      @error('category_id')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

      <input type="text" name="post_name" value="{{ old('post_name',request()->get('post_name')) }}" class="form-control" id="inputPassword2" placeholder="Post Name">
      @error('post_name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div><br>  
      
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-search"></i></button>
    </div>
  </form>