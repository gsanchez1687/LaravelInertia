<template>
    <Head title="Home" />
    <Banner :banners="props.banners" />
    <Feature />
    <About />
    <Services />
    <Choose />
    <Insurance />
    <Counter />
    <Team />
    <Testimonials />
</template>

<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import Banner from './components/Banner.vue';
import Feature from './components/Feature.vue';
import About from './components/About.vue';
import Services from './components/Services.vue';
import Choose from './components/Choose.vue';
import Insurance from './components/Insurance.vue';
import Counter from './components/Counter.vue';
import Team from './components/Team.vue';
import Testimonials from './components/Testimonials.vue';

import { ref, onMounted } from 'vue';

// Define una interfaz para las props si estás usando TypeScript
interface Props {
  banners: Array<any>;
  config: Array<any>;
}

// Define las props
const props = defineProps<Props>();
</script>
