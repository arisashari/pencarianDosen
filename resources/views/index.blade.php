<!doctype html>
<html>
    <head>
       <title>Pencari Dosen Jurusan Teknik Informatika</title>
       
       <link rel="stylesheet" href="/css/style.css">
    </head>
    
    <body>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="container" >
                <div class="navbar">
                    <a class="nav-link" href="/"><h5>Home</h5></a>
                    <a class="nav-link" href="/about"><h5>About</h5></a>
                </div>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                         <?php if(empty($_SESSION)) { ?>
                            <a class="btn btn-success" href="#" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
                         <?php } else { ?>
                             <a class="btn btn-danger" href="/proseslogout">Logout</a>
                         <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Modal Login -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="/proseslogin" method="post">
                @csrf
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Administrator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                        <input class="form-control" type="text" name="username" id="" placeholder="username">
                        <br>
                        <input class="form-control" type="password" name="password" id="" placeholder="password">

                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Login">
                  </div>
                </form>
            </div>
          </div>
        </div>
        
        <br>
        
        <div class="container">
           <h1 class="text-center">- Jadwal Dosen -</h1>
           
           <br>
           
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Nama</th>
                  <th scope="col">Jam</th>
                  <th scope="col">Tempat</th>
                </tr>
              </thead>
              <tbody>
              
              
               @foreach($jadwal as $jdwl)
                <?php
                  date_default_timezone_set("Asia/Bangkok");
                  $date = number_format(date("H.i"), 2, '.', '');
                  
                  if (($jdwl->waktu_mulai<=$date) and ($jdwl->waktu_selesai>=$date)) { 
                ?>
                    <tr>
                      <td>{{$jdwl->dosen}}</td>
                      <td>{{$jdwl->waktu_mulai}} - {{$jdwl->waktu_selesai}}</td>
                      <td>{{$jdwl->tempat}}</td>
                    </tr>
                    
                 <?php }
                   ?>
                   
                @endforeach
              </tbody>
            </table>
        </div>
        
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.js"></script>
    </body>
</html>