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
                <?php echo csrf_field(); ?>
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
           <h1 class="">About</h1>
           
           <hr>
           
           <p style="margin-bottom: 30px;">
            Tujuan aplikasi ini adalah untuk mempermudah mahasiswa jurusan TI dalam mencari dosen dengan keperluan masing masing. <br>
            Aplikasi ini masih membutuhkan pengembangan lebih lanjut guna untuk lebih memudahkan mahasiswa.   
           </p>
           
           <div class="row text-center">
              <div class="col-md-4">
               <img class="col-md-12" src="/image/3.jpeg" alt="">
               <h4>Alfiro Siowanta Pratama</h4>
               <h5>16051204010</h5>
              </div>
              
              <div class="col-md-4">
               <img class="col-md-12" src="/image/1.jpg" alt="">
               <h4>Muhammad Aris Ashari</h4>
               <h5>16051204018</h5>
              </div>
              
              <div class="col-md-4">
               <img class="col-md-12" src="/image/2.jpeg" alt="">
               <h4>Rifky Fajar Oktanugraha</h4>
               <h5>16051204020</h5>
              </div>
              
              <div class="col-md-2"></div>
              
              <div class="col-md-4" style="margin-top: 20px;">
               <img class="col-md-12" src="/image/4.jpeg" alt="">
               <h4>Aganda Maulana D D</h4>
               <h5>16051204038</h5>
              </div>
              
              <div class="col-md-4" style="margin-top: 20px;">
               <img class="col-md-12" src="/image/5.jpg" alt="">
               <h4>Yudhistira Dendy</h4>
               <h5>16051204045</h5>
              </div>
               
           </div>
        
        </div>
        
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.js"></script>
    </body>
</html><?php /**PATH C:\Users\asus\pencariDosen\resources\views/about.blade.php ENDPATH**/ ?>