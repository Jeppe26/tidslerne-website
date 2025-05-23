<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php
$OmOsTitel = get_field("om_os_titel");
$OmOsTekst = get_field("om_os_tekst");
$OmOsBillede = get_field("om_os_image");
$MedlemsBillede = get_field("medlems_billede");
$OmOsMedlemsTitel = get_field("om_os_medlem_titel");
$OmOsMedlemsTekst = get_field("om_os_medlem_tekst");
$OmOsLokation = get_field("om_os_lokation");
$OmOsIndbetalingTitel = get_field("om_os_indbetaling_titel");
$OmOsIndbetalingTekst = get_field("om_os_indbetaling_tekst");
$KontigentTitel = get_field("kontigent_titel");
$RegNrTekst = get_field("reg_nr_tekst");
$GaverTitel = get_field("gaver_titel");
$MobilepayTekst = get_field("mobilepay_tekst");
$OmOsTidslerne = get_field("om_os_kraeftforeningen_titel");
$OmOsFormand = get_field("om_os_formand");
$OmOsMail = get_field("om_os_mail");
$OmOsTlf = get_field("om_os_tlf");
$OmOsAdresseTitel = get_field("om_os_adresse_titel");
$OmOsAdresse = get_field("om_os_adresse");
$OmOsKontaktInfo = get_field("om_os_kontakt_info");

?>


<section class="omOs">
    <div class="wrapperOmOs">
<div class="omOsText">
<h2><?php echo $OmOsTitel?></h2>
<p><?php echo $OmOsTekst?></p>
</div>
<div class="omOsBillede">
<img src="<?php echo esc_url($OmOsBillede["url"]) ?>" alt="">
</div>
</div>
</section>

<section class="medlemmer">
    <div class="row">
<div class="medlemLeft">
<img src="<?php echo esc_url($MedlemsBillede["url"]) ?>" alt="">
</div>
<div class="medlemRight">
<h2><?php echo $OmOsMedlemsTitel?></h2>
<p><?php echo $OmOsMedlemsTekst?></p>
<button>Bliv medlem her</button>
</div>
</div>
</section>

<section class="kontakt">
<h2>Kontakt</h2>
<div class="kontaktContainer">

    <div class="map">
    <img src="<?php echo esc_url($OmOsLokation["url"]) ?>" alt="">
    </div>

    <div class="indbetalinger">
        <h3><?php echo $OmOsIndbetalingTitel?></h3>
        <h4><?php echo $KontigentTitel?></h4>
        <p><?php echo $RegNrTekst?></p>
        <h4><?php echo $GaverTitel?></h4>
        <p><?php echo $MobilepayTekst?></p>
    </div>

    <div class="info">
        <h3><?php echo $OmOsTidslerne?></h3>
        <h4><?php echo $OmOsFormand?></h4>
        <div class="mail">
            <img src="" alt="">
            <p><?php echo $OmOsMail?></p>
        </div>
        <div class="phoneNr">
            <img src="" alt="">
            <p><?php echo $OmOsTlf?></p>
        </div>
        <h4><?php echo $OmOsAdresseTitel?></h4>
        <p><?php echo $OmOsAdresse?>
    
        <?php echo $OmOsKontaktInfo?></p>
    </div>
</div>

</section>


<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>