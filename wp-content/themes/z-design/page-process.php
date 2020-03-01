<?php 
/**
 * Template Name: Process
 */
get_header();
include_once 'template-parts/process_svg.php';
?>

<section class="process">
    <h1 class="process__title title">Process:</h1>
    <div class="process__wrapper">
        <?php 
            $i = 0;
            if ($i > 0) {
                $animationDelay = $i * 50;
            } else {
                $animationDelay = 0;
            }
            foreach (get_field('process') as $process) : ?>
                <div class="process__item p" data-aos="fade-up-mini" data-aos-delay="<?php echo $animationDelay; ?>">
                    <?php echo $processSvg[$i]; ?>
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

    <div class="process__title process__title--clients title">Our clients:</div>
    <div class="process__logos process__wrapper logos">
        <?php 
            $i = 0;
            if ($i > 0) {
                $animationDelay = $i * 100;
            } else {
                $animationDelay = 0;
            }
            foreach (get_field('desktop_logos') as $deskLogo) :
        ?>
            <figure class="logos__image desk" data-aos="fade-up-mini" data-aos-delay="<?php echo $animationDelay; ?>">
                <img src="<?php echo $deskLogo['desktop_logo_row'] ?>" alt="logo-<?php echo $i+1; ?>">
            </figure>
        <?php $i++; endforeach; ?>
                
        <?php
            $i = 0;
            foreach (get_field('mobile_logos') as $mobLogo) :
        ?>
            <figure class="logos__image mob" data-aos="fade-up-mini" data-aos-delay="<?php echo $animationDelay; ?>">
                <img src="<?php echo $mobLogo['mobile_logo_row'] ?>" alt="logo-<?php echo $i+1; ?>">
            </figure>
        <?php $i++; endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>