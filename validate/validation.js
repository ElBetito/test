/**
 * Component for datepicker
 */
Vue.component('datepicker', {
	template: `
		<input type="text" name="birthdate" class="input" size="10" maxlength="10" placeholder="JJ.MM.AAAA" 
			v-bind:value="value"
			v-on:input="$emit('input', $event.target.value)"
		/>
	`,
	props: ['value'],
  mounted: function () {
		// activate the plugin when the component is mounted.
		$(this.$el).datepicker({
			changeMonth: true,
			changeYear: true,
			onClose: this.onClose
		});
	},
		methods: {
			// callback for when the selector popup is closed.
			onClose(date) {
				this.$emit('input', date)
			}
		},
		watch: {
			value(newVal) { $(this.el).datepicker('setDate', newVal); }
		}
});
vm = new Vue({
	el: '#app',
	data: {
		auth: [],
		errors: [],
		email: null,
		passwords: null,
		phone: null,
		birthdate: null
	},
	mounted() {
		this.Auth();
	},
	methods: {
		/**
		 * validation Form
		 */
		checkForm (e) {
			if (this.email && this.passwords && this.phone && this.birthdate) return true;
			this.errors = [];
			if (!this.email) {
				this.errors.push('Email required');
			} else if (!this.validEmail(this.email)) {
				this.errors.push('Valid email required');
			}
			if (!this.passwords) this.errors.push('Password required');
			if (!this.phone) this.errors.push('Phone required');
			if (!this.birthdate) this.errors.push('Birthdate required');
			if (!this.errors.length) return true;
			e.preventDefault();
		},
		validEmail (email) {
			const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		},
		/**
		 * Auth simulation (API)
		 */
		Auth() {
			axios.get('http://phpexam2.test/storage/auth.json') // Change the auth.json to restrict Auth
				.then((response) => {
					this.auth = response.data.user_data; //
				})
		}
	}
})