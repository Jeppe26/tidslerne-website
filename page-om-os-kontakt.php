<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php
$OmOsTitel = get_field("om_os_titel");
$OmOsTekst = get_field("om_os_tekst");
$OmOsBillede = get_field("om_os_image");
$MedlemsBillede = get_field("medlems_billede");


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
<h2>Vi sætter vores medlemmer først</h2>
<p>Som medlem af kræftforeningen Tidslerne knytter der sig en række fordele, som du omgående kan drage fordel af efter at have tegnet et medlemskab.

    Medlemskab enten som patientmedlem eller støttemedlem, kan du tegne her, og når du har betalt dit kontingent har du adgang til vores medlemsportal.</p>
<button>Bliv medlem her</button>
</div>
</div>
</section>

<section class="kontakt">
<h2>Kontakt</h2>
<div class="kontaktContainer">

    <div class="map">
        <img src="images/map.jpg" alt="">
    </div>

    <div class="indbetalinger">
        <h3>Indbetaliger</h3>
        <h4>Medlemskontingent:</h4>
        <p>Reg. nr: 9570<br>Konto: 997 0118<br>IBAN kontonummer: DK1730000009970118<br>BIC (SWIFT-adresse) DABADKKK</p>
        <h4>Gaver & Donationer (gerne pr. MobilePay):</h4>
        <p>MobilePay: 211 600<br>eller<br>Danske Bank<br>Reg. nr: 9570<br>Konto: 1202 5041<br>IBAN kontonummer: DK2930000012025041<br>BIC (SWIFT-adresse) DABADKKK</p>
    </div>

    <div class="info">
        <h3>Kræftforeningen Tidslerne</h3>
        <h4>att.: Mai Nielsen, formand</h4>
        <div class="mail">
            <img src="" alt="">
            <p>sekretariat@tidslerne.dk</p>
        </div>
        <div class="phoneNr">
            <img src="" alt="">
            <p>+45 70 20 05 165</p>
        </div>
        <h4>HovedKontor Adresse:</h4>
        <p>Ådalsparken 29,<br>
            6710 Esbjerg V
            <br><br>
            T: 86 11 32 44<br>
            M: 40 15 90 11<br>
            CVR: 17420291</p>
    </div>
</div>

</section>


<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>