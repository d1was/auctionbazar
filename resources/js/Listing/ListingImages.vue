<template>
	<product-zoomer :base-images="images" :base-zoomer-options="options">
	</product-zoomer>
</template>

<script>

	export default {
		props: ['listing'],
		data(){
		return {
		'images': {
          'thumbs': [
            {
              'id': 1,
              'url': 'http://yoohooworld.com/images/vue-product-zoomer/images/thumbs/1.jpeg'
            },
            {
              'id': 2,
              'url': 'http://yoohooworld.com/images/vue-product-zoomer/images/thumbs/2.jpeg'
            }
          ],
          'normal_size': [
            {
              'id': 1,
              'url': 'http://yoohooworld.com/images/vue-product-zoomer/images/normal_size/1.jpeg'
            },
            {
              'id': 2,
              'url': 'http://yoohooworld.com/images/vue-product-zoomer/images/normal_size/2.jpeg'
            }
          ],
          'large_size': [
            {
              'id': 1,
              'url': 'http://yoohooworld.com/images/vue-product-zoomer/images/large_size/1.jpeg'
            },
            {
              'id': 2,
              'url': 'http://yoohooworld.com/images/vue-product-zoomer/images/large_size/2.jpeg'
            }
          ]
      },
			'options': {
        zoomFactor: 3,
        pane: "pane",
        hoverDelay: 300,
        namespace: "zoomer-top",
        move_by_click: false,
        scroll_items: 7,
        choosed_thumb_border_color: "#dd2c00",
        scroller_position: "top",
        zoomer_pane_position: "left"
      }
		}
		},
		mounted(){
			this.images = this.makeImage() ;
			console.table(this.images);
		},
		methods: {
			makeImage(){
				let images = 
						{				
						'normal_size': [
							{ id : this.listing.id + this.listing.photo_main, 'url' : this.listing.photo_main  },
							{ id : this.listing.id + this.listing.photo_1, 'url' : this.listing.photo_1},
							{ id : this.listing.id + this.listing.photo_2, 'url' :
							this.listing.photo_2},
							{ id : this.listing.id + this.listing.photo_3, 'url' : 'this.listing.photo_3'},
							{ id : this.listing.id + this.listing.photo_4, 'url' : this.listing.photo_4}

						]
					};

					return images;
					

				
			}
		},

	}
</script>