<?php 
/**
 * Template Name: Services
 */
get_header();
$currentLang = wpm_get_language();
?>

<section class="services">
    <div class="container">
        <h1 class="services__title title">            
            <?php echo $currentLang === 'he' ? 'השירותים שלנו:' : 'Our services:'; ?>            
        </h1>
        <div class="services__wrapper">
            <?php 
            $i = 0;            
            foreach (get_field('services') as $service) :
                if ($i > 0) {
                    $animationDelay = $i * 50;
                } else {
                    $animationDelay = 0;
                }
            ?>
                <div class="services__item service" data-aos="fade-up-mini" data-aos-delay="<?php echo $animationDelay; ?>">
                    <div class="service__image">
                        <img src="<?php echo $service['service_image']; ?>" 
                            alt="<?php echo $service['service_name']; ?> service">
                    </div>

                    <div class="service__content">
                        <div class="service__title">
                            <?php echo $service['service_name']; ?>
                        </div>
                        <div class="service__description">
                            <?php echo $service['service_description']; ?>
                        </div>
                    </div>
                </div>
            <?php
            $i++;
            endforeach;
            ?>                        
        </div>
    </div>
    </section>

<?php get_footer(); ?>