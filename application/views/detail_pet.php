<div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $pet[0]['species'];?>
                    <small><?php echo $pet[0]['ras'];?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="http://localhost/KingKong/pet/<?php echo $pet[0]['gambar'];?>" alt="">
            </div>

            <div class="col-md-4">
                <h3>Pet Description</h3>
                <table class="table">
                    <tbody>
                        <tr>
                          <th scope="row">Age</th>
                          <td><?php echo $pet[0]['umur'];?> yo</td>
                        </tr>
                        
                        <tr>
                          <th scope="row">Birth Date</th>
                          <td><?php echo $pet[0]['tgl_lahir'];?></td>
                        </tr>
                        
                        <tr>
                          <th scope="row">Price</th>
                          <td>Rp. <?php echo number_format($pet[0]['harga']);?></td>
                        </tr>
                    </tbody>
                </table>
                
                <h3>Store Address</h3>
                <p><?php echo $pet[0]['alamat'];?>, <?php echo $pet[0]['kota'];?>, <?php echo $pet[0]['provinsi'];?></p>
                
                <h3>Additional</h3>
                <p><?php echo $pet[0]['deskripsi'];?>.</p>
            </div>

        </div>
        <!-- /.row -->
    </div>
<br>
<br>