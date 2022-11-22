<center>
    <h1>le voyage correspondant </h1>
</center>
<?php if ($context->voyages == false) : ?>
    <p style="color:red"> Erreur : Aucun voyage trouvé.</p>
<?php else : ?>
    <table style="border: 1px solid black;width:100%;">
        <tr>
            <th>
                <center>id</center>
            </th>
            <th>
                <center>conducteur</center>
            </th>
            <th>
                <center>tarif</center>
            </th>
            <th>
                <center>nombre de places</center>
            </th>
            <th>
                <center>heure de depart</center>
            </th>
            <th>
                <center>contraintes</center>
            </th>
        </tr>

        <?php foreach ($context->voyages as $voyage) { ?>
            <tr>
                <td>
                    <center> <?php echo $voyage->id ?></center>
                </td>
                <td>
                    <center> <?php echo $voyage->conducteur->nom ?></center>
                </td>
                <td>
                    <center> <?php echo $voyage->tarif ?></center>
                </td>
                <td>
                    <center> <?php echo $voyage->nbPlace ?></center>
                </td>
                <td>
                    <center> <?php echo $voyage->heureDepart ?></center>
                </td>
                <td>
                    <center> <?php echo $voyage->contraintes ?></center>
                </td>
            </tr>


    <?php }
    endif; ?>
    </table>