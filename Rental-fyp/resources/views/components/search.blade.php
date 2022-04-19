<form action="{{ route('user.search') }}" method="GET" class="form-inline ">
    <div class="row">
      <div class="col-auto">
        <input class="form-control" name="query" type="text" value="{{ request()->input('query') }}" placeholder="Search" aria-label="Search">
      </div>
      <div class="col-auto">
        <button class="btn btn-outline-success " type="submit">Search</button>
      </div>
    </div>
  </form>