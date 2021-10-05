export default {
    computed: {
        displayValue() {
            return this.value ? (this.field.trueText ? this.field.trueText :  this.__('Yes')) : (this.field.falseText ? this.field.falseText :  this.__('No'));
        }
    },

    methods: {
		async toggle() {
            this.value = !this.value
			return Nova.request().post(`/nova-vendor/nova-toggle/toggle/${this.resourceName}`, {
				value: this.value,
				fieldName: this.field.attribute,
				resourceId: this.resourceId
			})
			.then(() => {
				let message = this.value ? this.field.enableMessage : this.field.disableMessage;
				this.$toasted.show(message, {type: 'success'});
			}, (response) => {
				this.$toasted.show(response, { type: 'error' });
			})
        },
    }
}