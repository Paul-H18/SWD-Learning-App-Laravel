<template>
    <div class="navbar-wrapper">
        <nav>
            <div v-for="(item, index) in navigationItems" :key="index">
                <a href="#">{{ item.title}}</a>
            </div>
        </nav>
    </div>
</template>

<script setup>

const props = defineProps({
    logOutRoute: {
        required: true,
    },
});


const navigationItems = [
    {
        title: 'Home',
        path: '/',
    },
    {
        title: 'Kartensammlungen',
        path: '/',
    },
    {
        title: 'Kartensammlungen',
        path: '/',
    },
];

</script>

