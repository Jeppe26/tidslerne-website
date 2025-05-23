<footer>
    <?php 
    $FooterTitel = get_field("footer_titel");
    $FooterForeningTekst = get_field("footer_forening_tekst");
    $FooterFormandTitel = get_field("footer_formand_titel");
    $FooterForeningInfo = get_field("footer_forening_info");
    $FooterMail = get_field("footer_mail");
    $FooterMerchTitel = get_field("footer_merch_titel");
    $FooterMerchBillede = get_field("footer_merch_billede");
    $FooterCopyright = get_field("footer_copyright");
?>


    <p>&copy; <?php echo $Footer; ?></p>
</footer>
<footer>
  <div class="footer-content">
    <div class="footer-column">
      <h3><?php echo $FooterTitel?></h3>
      <p class="footer-left-text">
      <?php echo $FooterForeningTekst?>
      </p>
    </div>

    <div class="footer-column">
      <h3><?php echo $FooterFormandTitel?></h3>
      <address>
      <?php echo $FooterForeningInfo?>
        E: <a href="mailto:sekretariat@tidslerne.dk"><?php echo $FooterMail?></a>
      </address>
    </div>

    <div class="footer-column">
      <h3><?php echo $FooterMerchTitel?></h3>
      <img src="<?php echo esc_url($FooterMerchBillede["url"]) ?>" alt=""> class="merch-img">
    </div>
  </div>

  <div class="footer-bottom">
    <p><?php echo $FooterCopyright?></p>
  </div>
</footer>
</main>
</div>
<?php wp_footer(); ?>
</body>
</html>

