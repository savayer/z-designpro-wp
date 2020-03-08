<?php 
/**
 * Template Name: Home
 */
get_header();
?>

<div id="app">
    <svg viewBox="0 0 226.8 37.9" style="display: none;">
        <symbol id="arc">
            <path style="fill:none;stroke-width:2;stroke-miterlimit:10;" class="st0"
                d="M225.2,36.4H36.4C17.2,36.4,1.6,20.8,1.6,1.5v0" />
        </symbol>
    </svg>
    <ul class="nav_works">
        <li class="nav_works__item" v-cloak :class="{ 'active-work': key === filter }"
            v-for="cat, key in categories" :key="key" @click="setActiveCategory(key)">
            {{ cat }}
        </li>
    </ul>

    <div class="overlay-project"></div>
    <div id="work_modal" class="work" :class="{ active: viewProject }">
        <div class="work__header work__header--desk_view">
            <div class="work__info">
                <span class="work__name">
                    {{ projectName }}
                </span>
                <span class="work__description work__description--desk">
                    {{ projectDescription }}
                </span>
                <span class="work__description work__description--mobile">
                    <div v-if="goToSite" class="work__mobile-view-site">
                        <a :href="goToSite" target="_blank" class="button button--mobile">
                            <span class="button__text">
                                Go to site
                            </span>
                            <span class="button__container">
                                <span class="button__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="18"
                                        viewBox="0 0 27 18">
                                        <g>
                                            <path
                                                d="M17.592.034L16.03 1.6l6.35 6.368H-.085v2.214H22.38l-6.35 6.368 1.56 1.565 9.02-9.04z" />
                                        </g>
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>
                    <span v-else>
                        {{ projectDescription }}
                    </span>
                </span>
            </div>
            <div class="work__view_site" v-if="goToSite">
                <a :href="goToSite" target="_blank" class="button button--white">
                    <span class="button__text">
                        Go to site
                    </span>
                    <span class="button__container">
                        <span class="button__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="18" viewBox="0 0 27 18">
                                <g>
                                    <path
                                        d="M17.592.034L16.03 1.6l6.35 6.368H-.085v2.214H22.38l-6.35 6.368 1.56 1.565 9.02-9.04z" />
                                </g>
                            </svg>
                        </span>
                    </span>
                </a>
            </div>
            <div class="work__navigation">
                <div class="work__arrows">
                    <span class="work__arrow work__prev" :class="{ 'disabled': disabledPrevArrow }"
                        @click="prevProject()">
                        <span>Prev</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" width="40" height="40"
                            viewBox="0 0 52 53">
                            <g>
                                <g class="svg_arrow__icon">
                                    <path fill="#fff"
                                        d="M26.219.781c14.204 0 25.718 11.515 25.718 25.719S40.423 52.219 26.22 52.219.499 40.704.499 26.5 12.016.781 26.22.781z" />
                                </g>
                                <g class="svg_arrow__chevron svg_arrow__chevron--left">
                                    <path fill="#030000"
                                        d="M31.42 36.843l-8.646-10.14 8.647-10.15-2.398-2.095-10.435 12.244 10.435 12.24z" />
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span class="work__arrow work__next" :class="{ 'disabled': disabledNextArrow }"
                        @click="nextProject()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 52 53">
                            <g>
                                <g class="svg_arrow__icon">
                                    <path fill="#fff"
                                        d="M25.781.781C39.985.781 51.5 12.296 51.5 26.5S39.985 52.219 25.78 52.219.062 40.704.062 26.5 11.577.781 25.782.781z" />
                                </g>
                                <g class="svg_arrow__chevron svg_arrow__chevron--right">
                                    <path fill="#030000"
                                        d="M21.178 16.566l8.646 10.14-8.646 10.15 2.397 2.095L34.01 26.707l-10.435-12.24z" />
                                </g>
                            </g>
                        </svg>
                        <span>Next</span>
                    </span>
                </div>
                <svg class="close_icon work__close" viewBox="0 0 42 50" @click="popupProjectToggle()">
                    <path class="close_icon__arc"
                        style="fill:none;stroke:#231f20;stroke-width:2;stroke-miterlimit:10"
                        d="M 0.58123819,5.8 C 4.7812382,2.8 9.9812382,1 15.581238,1 c 14.2,0 25.7,11.5 25.7,25.7 0,9.9 -5.6,18.5 -13.8,22.8" />
                    <line class="line1" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10"
                        x1="5.0812378" y1="16.800001" x2="25.58124" y2="37.299999" />
                    <line class="line2" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10"
                        x1="25.58124" y1="16.800001" x2="5.0812378" y2="37.299999" />
                </svg>
            </div>
        </div>
        <div class="work__body" :class="{'hide': hiddenBody}">
            <div v-for="item, index in projectMedia" :key="index">
                <img v-if="document.documentElement.clientWidth > 700"
                    v-lazy="item.work_image" lazy="loading" :alt="`${projectName} screen ${index+1}`">
                <img v-else v-lazy="item.work_image_lg" lazy="loading" :alt="`${projectName} screen ${index+1}`">
                <iframe v-if="item.youtube_link" :src="item.youtube_link" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>

            <div v-for="objMediaInfo, index in projectMediaAll" :key="index">
                <div class="work__project" :data-name="objMediaInfo.name"
                :data-site="objMediaInfo.site"
                    :data-description="objMediaInfo.description">
                    <div v-for="item, i in objMediaInfo.media" :key="i">
                        <img v-if="document.documentElement.clientWidth <= 440 && document.documentElement.clientWidth > 350"
                            v-lazy="item.work_image_md" lazy="loading" :alt="`${projectName} screen ${index+1}`">
                        <img v-else-if="document.documentElement.clientWidth < 350"
                            v-lazy="item.work_image_xs" lazy="loading" :alt="`${projectName} screen ${index+1}`">
                        <img v-else
                            v-lazy="item.work_image_lg" lazy="loading" :alt="`${projectName} screen ${index+1}`">
                        <iframe v-if="item.youtube_link" :src="item.youtube_link" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="detect_change_filter" :class="filter"></div>
    <div class="grid_wrapper">
        <section class="grid_works">
            <masonry :cols="{default: 3, 992: 2, 576: 1}" :column-class="'m-minus-top'">
                <div class="grid_works__item" v-for="(work, index) in filtered" :key="work.id">
                    <a href="#view_project" class="grid_works__link" @click.prevent="popupProjectToggle(index)">
                        <img v-if="document.documentElement.clientWidth > 500" :src="work.image" :alt="work.name">
                        <img v-else-if="document.documentElement.clientWidth <= 500 && document.documentElement.clientWidth > 400" 
                                :src="work.image_md" :alt="work.name">
                        <img v-else :src="work.image_xs" :alt="work.name">
                        
                        <div class="grid_works__hover">
                            <div class="grid_works__more">
                                <div class="grid_works__text">
                                    View project
                                </div>
                                <svg viewBox="0 0 226.8 37.9">
                                    <use xlink:href="#arc" /></svg>
                            </div>
                        </div>
                    </a>
                </div>
            </masonry>
        </section>
    </div>
</div>

<?php get_footer(); ?>