<template>
    <!--Main Slider Start-->
    <section class="main-slider clearfix">
                <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                    "effect": "fade",
                    "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                    "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                    },
                    "autoplay": {
                    "delay": 5000
                    }}'>
                    <div class="swiper-wrapper">
    
                        <div v-for="data in banners" class="swiper-slide">
                            <div class="image-layer" style="background-image: url('/public/images/banner/{{ data.image }}');"></div>
                            <!-- /.image-layer -->
    
                            <div class="main-slider-shape-1 float-bob-x">
                                <img src="public/images/images/shapes/main-slider-shape-1.png" alt="">
                            </div>
    
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div  class="main-slider__content">
                                            <h2 class="main-slider__title">{{ data.title }}</h2>
                                            <p class="main-slider__text">{{ data.description }}</p>
                                            <div class="main-slider__btn-box">
                                                <a target="_blank" :href="data.link" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- If we need navigation buttons -->
                    <div class="main-slider__nav">
                        <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                            <i class="icon-right-arrow"></i>
                        </div>
                        <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                            <i class="icon-right-arrow1"></i>
                        </div>
                    </div>
    
                </div>
    </section>
    <!--Main Slider End-->
</template>

<script setup lang="ts">
import { defineProps } from 'vue';

type propTypes = {
  banners: Array<any>;
};

defineProps<propTypes>();

</script>