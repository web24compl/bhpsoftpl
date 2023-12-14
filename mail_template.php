<html lang="pl">
<body>
<table style="margin-bottom: 20px; border: 1px solid #eee; padding: 10px;">
    <tr>
        <td>
            Imię
        </td>
        <td>
            <?php echo $formData['name']; ?>
        </td>
    </tr>

    <tr>
        <td>
            Email
        </td>
        <td>
            <?php echo $formData['email']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Telefon
        </td>
        <td>
            <a href="tel:<?php echo $formData['phone']; ?>"><?php echo $formData['phone']; ?></a>
        </td>
    </tr>

    <tr>
        <td>
            Firma
        </td>
        <td>
            <?php echo $formData['company']; ?>
        </td>
    </tr>
</table>

Treść:
<hr>
<div>
    <?php echo nl2br(htmlspecialchars($formData['content'], ENT_QUOTES, 'UTF-8')); ?>
</div>

</body>
</html>