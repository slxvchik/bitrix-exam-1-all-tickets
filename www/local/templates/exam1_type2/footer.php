<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
?>
</section></main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      <?=GetMessage('EXAM1_TYPE2_FOOTER_PHRASE');?>
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js");?>
  
  <!-- Template Main JS File -->
  <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/main.js");?>

</body>

</html>