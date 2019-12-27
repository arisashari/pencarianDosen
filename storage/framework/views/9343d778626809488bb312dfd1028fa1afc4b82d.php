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
                    <a class="nav-link" href="#"><h5>Home</h5></a>
                    <a class="nav-link" href="#"><h5>About</h5></a>
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
        
        <br>
        
        <div class="container">
          
           <h1 class="text-center">- Administrator -</h1>
           
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
               <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdwl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($jdwl->dosen); ?></td>
                  <td><?php echo e($jdwl->waktu_mulai); ?> - <?php echo e($jdwl->waktu_selesai); ?></td>
                  <td><?php echo e($jdwl->tempat); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
        </div>
        
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.js"></script>
    </body>
</html><?php /**PATH C:\Users\asus\pencariDosen\resources\views/admin/home.blade.php ENDPATH**/ ?>