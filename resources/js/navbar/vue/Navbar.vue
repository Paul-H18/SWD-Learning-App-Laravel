<template>
    <div class="navbar-wrapper">
        <nav>
            <div v-for="(item, index) in navigationItems" :key="index">
                <a :href="`${item.path}`">
                    <span class="navigation-item">
                        {{ item.title }}
                    </span>
                </a>
            </div>
        </nav>
    </div>
</template>

<script setup>


const navigationItems = [
    {
        title: 'Home',
        path: '/',
    },
    {
        title: 'Kartensammlung',
        path: '/cards',
    },
    {
        title: 'Logout',
        path: '/logout',
    },
];

</script>

