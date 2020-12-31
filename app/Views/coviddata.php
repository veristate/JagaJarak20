<section class="judul" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 style="color:#A83F39;">Persebaran di Indonesia</h5>
                <h1>Peta Persebaran</h1>
            </div>
        </div>
    </div>
</section>

<section id="maptable" style="padding: 20px 0; margin-bottom: 100px;">
    <div class="container">
        <div class="row mt-1">
            <div class="col-12 col-md-6">
                <div class="justify-content-evenly" id="mapid" style="width: 1295px; height: 600px;"></div>
                <script>
                    var mymap = L.map('mapid').setView([-1.973104, 117.668911], 6);

                    L.tileLayer('https://api.mapbox.com/styles/v1/%7Bid%7D/tiles/%7Bz%7D/%7Bx%7D/%7By%7D?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        maxZoom: 18,
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright%22%3EOpenStreetMap</a> contributors, ' +
                            'Imagery © <a href="https://www.mapbox.com/%22%3EMapbox</a>',
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1
                    }).addTo(mymap);

                    <?php foreach ($map['features'] as $key => $value) { ?>

                        L.marker([<?= $value['geometry']['y'] ?>, <?= $value['geometry']['x'] ?>]).addTo(mymap)
                            .bindPopup("<?= $value['attributes']['Provinsi'] ?><br>" +
                                "Positif : <?= $value['attributes']['Kasus_Posi'] ?><br>" +
                                "Sembuh : <?= $value['attributes']['Kasus_Semb'] ?><br>" +
                                "Meninggal : <?= $value['attributes']['Kasus_Meni'] ?><br>");
                    <?php } ?>

                    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(mymap);
                </script>
            </div>
        </div>

        <div class="row mt-4">
            <table class="table  table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Provinsi</th>
                        <th>Positif</th>
                        <th>Sembuh</th>
                        <th>Meninggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($provinsi as $key => $value) { ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?= $value['attributes']['Provinsi']; ?></td>
                            <td><?= $value['attributes']['Kasus_Posi']; ?></td>
                            <td><?= $value['attributes']['Kasus_Semb']; ?></td>
                            <td><?= $value['attributes']['Kasus_Meni']; ?></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>