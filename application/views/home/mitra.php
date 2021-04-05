<section id="clients" class="clients">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
       <h2><strong>Mitra PT. Agrikultur Gemilang Indonesia</strong></h2>
      <p>Dengan menjadi mitra dan distributor resmi dari PT. Agrikultur Gemilang Indonesia dapat menjadi peluang bisnis yang sangat menarik karena sektor pertanian di Indonesia memiliki Prospek yang besar. Mitra hanya ada disatu Desa/Kecamatan, jadi tidak perlu khawatir jika akan terjadi persaingan dagang. selain itu dengan menjadi mitra mendapatkan banyak service dan suport dari Perusahaan. saat ini Mitra resmi telah berada dibeberapa daerah seperti berikut: </p>
    </div>
    <div class="row" data-aos="fade-up">
    	<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col" class="table-secondary">No</th>
		      <th scope="col" class="table-secondary">Nama Mitra</th>
		      <th scope="col" class="table-secondary">Wilayah</th>
		      <th scope="col" class="table-secondary">Provinsi</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $no=1; foreach ($mitra as $mitra) { ?>
		    <tr>

		      <th scope="row"><?php echo $no++ ?></th>
		      <td><?php echo $mitra->nama_mitra ?></td>
		      <td><?php echo $mitra->wilayah ?></td>
		      <td><?php echo $mitra->provinsi ?></td>
		    </tr>
		    <?php } ?>
		  </tbody>
		</table>
    </div>
  </div>
</section>