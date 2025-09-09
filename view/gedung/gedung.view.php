<?php

class GedungView extends gedungController
{
    public function show()
    {
        $gedungs = $this->getProducts();
        
        foreach ($gedungs as $gedung) { ?>
        <tr>
            <td><?php echo $gedung['id']; ?></td>
            <td><?php echo $gedung['name']; ?></td>
            <td><?php echo $gedung['lokasi']; ?></td>
            <td><?php echo $gedung['deskripsi']; ?></td>
        </tr>
<?php
        }
    }

    public function find()
    {
        $detailGedung = $this->getProductBy();
        if (empty($detailGedung))
            return;
        foreach ($detailGedung as $detail) { ?>
            <div>
                <h3><?php echo $detail['name']; ?></h3>
                <p>lokasi: . <?php echo $detail['lokasi']; ?></p>
                <p>deskripsi: <?php echo $detail['deskripsi']; ?></p>
            </div>
            <?php
        }
    }
}
?>