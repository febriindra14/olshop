<!-- 
    Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">
                   <a href="http://<?php echo ''.$config['share1'];?>"><span class="icon-twitter"></span></a>
                    <a href="http://<?php echo ''.$config['share2'];?>"><span class="icon-facebook"></span></a>
                    <a href="http://<?php echo ''.$config['share3'];?>"><span class="icon-instagram"></span></a>
                </div>
                <a class="active" href="<?php echo base_url('index.php/customer');?>"> <span class="icon-home"></span> Home</a> 
                <a href="<?php echo base_url('index.php/customer/akunku')?>"><span class="icon-user"></span> My Account</a> 
                <a href="<?php echo base_url('index.php/customer/register')?>"><span class="icon-edit"></span> Free Register </a> 
                <a href="<?php echo base_url('index.php/customer/kontak')?>"><span class="icon-envelope"></span> Contact us</a>
                <a href="<?php echo base_url('index.php/customer/keranjang')?>"><span class="icon-shopping-cart"></span> <?php echo $jumlah->num_rows(); ?> items <span class="badge badge-warning"> Rp <?php echo number_format($total,0,",","."); ?> </span></a>
                <a href="<?php echo base_url('index.php/login_customer/logout')?>" >Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- -->

<div class="span12">

    <ul class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/customer')?>">Home</a> <span class="divider">/</span></li>
    <li class="active">History Order</li>
    </ul>

    <div class="well well-small">
   
<?php foreach ($titip as $key => $row) { ?>
    <table> 
            <td><h3>Status</h3></td>
            <td>:</td>
            <td><?php echo $row['keterangan'];?></td>
            
    		<tr>
    			<td>Kode order</td>
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
 <?php }?>             
       
    </div>

</div>   