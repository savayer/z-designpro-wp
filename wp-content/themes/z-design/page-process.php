<?php 
/**
 * Template Name: Process
 */
get_header();
include_once 'template-parts/process_svg.php';
$currentLang = wpm_get_language();
if ($currentLang === 'he') {
    $SVGs = $processSvgHe;
} else {
    $SVGs = $processSvg;
}
?>

<section class="process">
    <h1 class="process__title title">
        <?php echo $currentLang === 'he' ? 'תהליך:' : 'Process:'; ?>
    </h1>
    <div class="process__wrapper">
        <?php 
            $i = 0;
            
            foreach (get_field('process') as $process) : 
                if ($i > 0) {
                    $animationDelay = $i * 50;
                } else {
                    $animationDelay = 0;
                }
        ?>
                <div class="process__item p" data-aos="fade-up-mini" data-aos-delay="<?php echo $animationDelay; ?>">
                    <?php echo $SVGs[$i]; ?>
                    <div class="p__content">
                        <div class="p__title">
                            <?php echo $process['process_name']; ?>
                        </div>
                        <div class="p__description">
                            <?php echo $process['process_description']; ?>
                        </div>
                    </div>
                </div>
        <?php
            $i++;
            endforeach;
        ?>
    </div>

    <div class="process__title process__title--clients title">
        <?php echo $currentLang === 'he' ? 'בין הלקוחות:' : 'Our Clients:'; ?>
    </div>
    <div class="process__logos process__wrapper logos">
        <?php 
            $i = 0;
            
            foreach (get_field('desktop_logos') as $deskLogo) :
                if ($i > 0) {
                    $animationDelay = $i * 100;
                } else {
                    $animationDelay = 0;
                }
        ?>
            <figure class="logos__image desk" data-aos="fade-up-mini" data-aos-delay="<?php echo $animationDelay; ?>">
                <img src="<?php echo $deskLogo['desktop_logo_row'] ?>" alt="logo-row-<?php echo $i+1; ?>">
            </figure>
        <?php $i++; endforeach; ?>
                
        <?php
            $i = 0;
            foreach (get_field('mobile_logos') as $mobLogo) :
        ?>
            <figure class="logos__image mob" data-aos="fade-up-mini">
                <img src="<?php echo $mobLogo['mobile_logo_row'] ?>" alt="logo-mob-row-<?php echo $i+1; ?>">
            </figure>
        <?php $i++; endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>