<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Landing laptop</title>
</head>
<body>
  <div class="container">
  <div class="header-text">
    <div class="d-flex justify-content-between">
    <img src="assets/image/logo-wk.png" width="40" >
    <h3>LANDING LAPTOP</h3>
    <a href="/data" class="btn btn-success">Data</a>
    </div>
            <div class="small-text">
                <a>fill your data</a>
            </div>
        </div>
        <hr>
        <br>
        <form action="/store" method="POST">
          <div class="row">
                <div class="col">
                <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
            <div class="col">
            <label class="form-label">Nis</label>
                <input type="number" class="form-control">
            </div>
        </div>
    <br>
        <div class="col">
            <label class="form-label">Rayon</label>
                <select name="rayon" class="form-select">
                    <option value="Rayon-type">Rayon-type</option>
                    <option value="Cisarua">Cisarua</option>
                    <option value="Cibedug">Cibedug</option>
                    <option value="Ciawi">Ciawi</option>
                </select>
            </div>
            <br>
            <div class="col">
            <label class="form-label">Teacher Name</label>
            <input type="text" name="teacher_name" class="form-control">
            <br>
            <div class="col">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control">
          <br>
          </div>
          <div class="des">
                <label class="form-label">Description</label>
                    <br>
                <textarea name="note"name="description" cols="75" rows="4"></textarea>
            </div>
            <br>
            <div class="actionbutton">
                <button type="submit" class="btn1 btn-primary">Submit</button>
            </div>
            </div>
            </form>
            </div>
</body>
</html>