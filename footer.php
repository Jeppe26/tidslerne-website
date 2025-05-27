<?php 
    $frontpage_id = get_option('page_on_front');
    $FooterTitel = get_field("footer_titel", $frontpage_id);
    $FooterForeningTekst = get_field("footer_forening_tekst", $frontpage_id);
    $FooterFormandTitel = get_field("footer_formand_titel", $frontpage_id);
    $FooterForeningInfo = get_field("footer_forening_info", $frontpage_id);
    $FooterMail = get_field("footer_mail", $frontpage_id);
    $FooterMerchTitel = get_field("footer_merch_titel", $frontpage_id);
    $FooterMerchBillede = get_field("footer_merch_billede", $frontpage_id);
    $FooterCopyright = get_field("footer_copyright", $frontpage_id);
?>
  
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
      <a href="https://tojkurven.dk/?s=tidslerne&post_type=product"><img src="<?php echo esc_url($FooterMerchBillede["url"]) ?>" alt="<?php echo esc_attr($FooterMerchBillede["alt"]) ?>" class="merch-img"></a>
    </div>
    <div class="footer-bottom">
    <p><?php echo $FooterCopyright?></p>
  </div>
  </div>

  
</footer>
</main>
</div>
<?php wp_footer(); ?>
</body>
</html>

