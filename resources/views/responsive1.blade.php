<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body>
    <div class="container">
        <div class="mt-4 p-5 bg-success text-white rounded">
        <h1>First Trial's Bootstrap Page</h1>
    </div>
    <div class="alert alert-danger">
        <p>This is an inside of container class</p>
    </div>
    <p>Kaesang dan Erina memposting story ig sedang keluar negeri di saat demo dan Gibran sedang berbelanja di Bandung saat itu</p>


    <div class="row">
        <div class="col-lg-1">
        <p>Left</p>
        </div>
        <div class="col-lg-10 border border-1">
        <p>Center</p>
        </div>
        <div class="col-lg-1 border border-1">
        <p>Right</p>
        </div>
        <div class="col-lg-8 border border-1">
        <p>Kaesang udah dicari KPK</p>
        </div>
        <div class="col-lg-4 border border-1">
        <p>Kaesang belum dicari FPB</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <a href="{{ url('https://nasional.kompas.com/read/2024/09/05/20381231/kpk-sebut-kaesang-tak-punya-kewajiban-lapor-gratifikasi')}}"><button class="btn btn-danger border border-1">True</button></a>
            <button class="btn border border-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 192C0 103.6 71.6 32 160 32s160 71.6 160 160l0 128c0 88.4-71.6 160-160 160S0 408.4 0 320L0 192zM160 96c-53 0-96 43-96 96l0 128c0 53 43 96 96 96s96-43 96-96l0-128c0-53-43-96-96-96z"/></svg><i class="fa-solid fa-rocket"></i>False</button>
            </div>
        </div>
    </div>


    </div>
  </body>
</html>
