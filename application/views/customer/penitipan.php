<!-- 
    Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-youtube"></span></a>
                    <a href="#"><span class="icon-tumblr"></span></a>
                </div>
                <a class="active" href="<?php echo base_url('index.php/customer');?>"> <span class="icon-home"></span> Home</a> 
                <a href="<?php echo base_url('index.php/customer/akunku')?>"><span class="icon-user"></span> My Account</a> 
                <a href="<?php echo base_url('index.php/customer/register')?>"><span class="icon-edit"></span> Free Register </a> 
                <a href="<?php echo base_url('index.php/customer/kontak')?>"><span class="icon-envelope"></span> Contact us</a>
                <a href="<?php echo base_url('index.php/customer/keranjang')?>"><span class="icon-shopping-cart"></span> Keranjang <span class="badge badge-warning"> Rp <?php echo number_format($total,0,",","."); ?> </span></a>
                <a href="<?php echo base_url('index.php/login_customer/logout')?>" >Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- -->

<div class="span12">
    <div class="span6"> 
    <ul class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/customer')?>">Home</a> <span class="divider">/</span></li>
    <li class="active">Penitipan</li>
    </ul>

    <div class="well well-small">
   
<?php foreach ($titip as $key => $row) { ?>
    <table> 
            <td><h3>Status</h3></td>
            <td>:</td>
            <td><?php echo $row['keterangan'];?></td>

    		<tr>
    			<td>Id order</td>
    			<td>:</td>
    			<td><?php echo $row['id_order'] ;?></td>
    		</tr>	
	   		<tr>
    			<td>Total</td>
    			<td>:</td>
                <td>Rp <?php echo number_format($row['total_bayar'],0,",",".");?></td>
    		</tr>
            <tr>
                <td>Datetime</td>
                <td>:</td>
                <td><?php echo $row['tgl_order'] ;?></td>
            </tr>
            <br>
    </table>
              <a href="<?php echo base_url('index.php/customer/rekonfirm/').$row['id_order']?>" class="shopBtn btn-large pull-right">Konfirmasi<span></span></a>
 <?php }?>             
       
    </div>

    </div>
</div>   