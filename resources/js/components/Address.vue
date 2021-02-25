<template>
    <v-carousel v-model="model">
      <v-carousel-item
        v-for="(item,i) in items"
        :key="i"
        :src="item.src"
      >
        <!--<v-sheet
          :color="color"
          height="100%"
          title
        >
          <v-row
            class="fill-height"
            align="center"
            justify="center"
          >
            <div class="display-3">
              Slide {{ i + 1 }}
            </div>
          </v-row>
        </v-sheet>-->
      </v-carousel-item>
    </v-carousel>
</template>

<script>
  export default {
    data () {
      return {
        items: [
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
          },  
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
          },
        ],
        model: 0,
      }
    },
  }
</script>

