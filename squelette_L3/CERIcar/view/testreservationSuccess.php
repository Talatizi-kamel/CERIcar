<?php if ($context->reservations == false) : ?>
    <p style="color:red"> Erreur : Aucun voyage trouvé.</p>
<?php else : ?>
    <table style="border: 1px solid black;width:100%;">
        <tr>
            <th>
                <center>id</center>
            </th>
            <th>
                <center>voyage</center>
            </th>
            <th>
                <center>voyageur</center>
            </th>
            <th>
        </tr>

        <?php foreach ($context->reservations as $reservation) { ?>
            <tr>
                <td>
                    <center> <?php echo $reservation->id ?></center>
                </td>
                <td>
                    <center> <?php echo $reservation->voyage->tarif ?></center>
                </td>
                <td>
                    <center> <?php echo $reservation->voyageur->nom ?></center>
                </td>

            </tr>


    <?php }
    endif; ?>
    </table>