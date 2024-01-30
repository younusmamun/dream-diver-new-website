<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Home Page Service</p>
            </div>
            <div class="col-lg-12">


                <form class="row g-3" action="{{ route('home_service_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Section title</label>
                      <input name="section_title" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Image upload</label>
                      <input type="file" id="img" name="service_image" accept="image/*"  class="form-control"  placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Service title</label>
                        <input type="text"  name="service_title"  class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Status</label>
                        <input type="text"  name="status"  class="form-control" id="inputAddress2" value="yes">
                    </div>

                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>

                  </form>
            </div>
        </div>

    </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
