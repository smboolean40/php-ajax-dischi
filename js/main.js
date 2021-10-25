const app = new Vue({
	el: '#app',
	data: {
		albums: null,
		genres: null,
		genreSelected: ""
	},
	created() {
		axios.get('http://localhost/php-ajax-dischi/api/index.php',{
			params: {
			  action: "albums"
			}
		  }
		)
		.then((response) => {
			// handle success
			this.albums = response.data;
		})
		.catch(function (error) {
			// handle error
			console.log(error);
		});

		axios.get('http://localhost/php-ajax-dischi/api/index.php',{
			params: {
			  action: "genres"
			}
		  }
		)
		.then((response) => {
			// handle success
			this.genres = response.data;
		})
		.catch(function (error) {
			// handle error
			console.log(error);
		})
	},
	methods: {
		onGenreSelected() {
			// console.log(this.genreSelected);
			axios.get('http://localhost/php-ajax-dischi/api/index.php',{
				params: {
				  action: "filterGenre",
				  genre: this.genreSelected
				}
			  }
			)
			.then((response) => {
				// handle success
				this.albums = response.data;
			})
			.catch(function (error) {
				// handle error
				console.log(error);
			})
		}
	}
});
