<div class="row">

    <div class="col-md-12">
        <h2><strong>Detail Order</strong></h2>   
    </div>

</div>

<div class="row">

    <div class="col-md-12">

                <h4>Pembeli : <?php echo ''.$pembeli['nama_lengkap']; ?><small style="float: right;"><strong><?php echo $detail->num_rows(); ?></strong> Order </small></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Kode Order</td>
                                <td>Tanggal</td>
                                <td>Nama Produk</td>
                                <td>Jumlah Produk</td>
                                <td>Harga</td>
                                <td>Total harga</td>
                                <td>Total Bayar</td>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1;
                            foreach ($detail->result_array() as $key => $value) { ?>
                            <tr <?php if ($value['keterangan'] == 'belum bayar') {
                                echo "style='color: blue;font-weight:bold;'";
                            } ?>>
                            <td style="font-weight: bold;"><?php echo $no; ?></td>
                            <td style="font-weight: bold;"><?php echo $value['id_order']; ?></td>
                            <td style="font-weight: bold;"><?php echo $value['tgl_order']; ?></td>
                            <td style="font-weight: bold;"><?php echo $value['nama_produk']; ?></td>
                            <td style="font-weight: bold;"><?php echo $value['jumlah']; ?></td>
                            <td style="font-weight: bold;"><?php echo $value['harga']; ?></td>
                            <td style="font-weight: bold;"><?php echo $value['total_harga']; ?></td>
                            <td style="font-weight: bold;"><?php echo $value['total_bayar']; ?></td>
                            </tr>

                            <?php $no++; } ?>

                        </tbody>
                    </table>
                <br>
                <label style="border: 1px solid blue;background-color: blue;color:blue;width: 20px;height: 20px;">a</label> <label> Belum bayar</label><br>
                <label style="border: 1px solid black;background-color: black;color:black;width: 20px;height: 20px;">a</label> <label>Sudah bayar</label> 

        <div class="panel-body">
           <a href="<?php echo base_url('utama/admin/order'); ?>" class="btn btn-default" style="margin-bottom: 15px; float: right;"><i class="fa fa-arrow-left" style="margin-right: 4px;"></i>Kembali</a>
        </div>

    </div>

</div>