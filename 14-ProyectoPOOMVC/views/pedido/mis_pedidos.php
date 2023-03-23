<h1>Mis pedidos</h1>

<table>
    <tr>
        <th>N# Pedido</th>
        <th>Coste</th>
        <th>Fecha</th>
    </tr>
    <?php while ($ped = $pedidos->fetch_object()): ?>

        <tr>
            <td>
                <?=$ped->id?>
            </td>
            <td>
                <?=$ped->coste?>
            </td>
            <td>
                <?=$ped->fecha?>
            </td>
        </tr>
    <?php endwhile; ?>
</table>