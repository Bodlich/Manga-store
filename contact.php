<?php include('header.php'); ?>

<fieldset id="contact">
    <form action="submit_contact.php" method="Post" enctype="multipart/form-data">
        <div class="contact">
            <label for="email">Email :</label><br />
            <input type="email" name="email" id="email">
        </div>
        <div class="contact">
            <label for="message">Votre message :</label><br />
            <textarea rows="5" cols="50" placeholder="Exprimez vous" name="message" id="message"></textarea>
        </div>
        <div class="contact">
            <label for="screenshot">Votre capture d'écran :</label><br />
            <input type="file" class="form-control" id="screenshot" name="screenshot" /><br />
            <button type="submit">Envoyer</button>
        </div>
    </form>
</fieldset>