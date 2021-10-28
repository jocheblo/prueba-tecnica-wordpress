<footer></footer>
<!-- ScrollMagic -->
<script src="<?= bloginfo('template_url') ?>/js/ScrollMagic.min.js"></script>
<script src="<?= bloginfo('template_url') ?>/js/plugins/debug.addIndicators.min.js"></script>
<script src="<?= bloginfo('template_url') ?>/js/plugins/animation.gsap.min.js"></script>

<script>
    
/* Lottie */
var animation = bodymovin.loadAnimation({
    // animationData: { /* ... */ },
    container: document.querySelector('.slider-zone__flower'), // required
    path: '<?= bloginfo('template_url') ?>/js/flor.json', // required
    renderer: 'svg', // required
    loop: true, // optional
    autoplay: true, // optional
    name: "Demo Animation", // optional
  });
</script>

<?php wp_footer(); ?>
</body>
</html>