
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<form action="{{route('add')}}" method="POST">
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">UserId</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="userId" placeholder="Add userid">
      </div>
     

    <div class="form-group">
      <label for="exampleInputEmail1">title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Add title">
    </div>


    
    <div class="form-group">
      <label for="exampleInputPassword1">body</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="body" placeholder="Add body">
    </div>
     <button type="submit" class="btn btn-primary">Add</button>
  </form>

   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
