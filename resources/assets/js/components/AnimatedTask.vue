<template>
    <tile :position="position">
    <section class="github-file">
            <img :src="imageLink"  style="height: 100%; width: 100%">
        </section>
    </tile>
</template>

<script>
    import Tile from './atoms/Tile';

    export default {
        components: {
            Tile,
        },

        props: [ 'position','imageLink'],


    };
</script>
