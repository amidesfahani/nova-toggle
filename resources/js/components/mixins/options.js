export default {
	computed: {
        trueLabel() {
            return (this.field.trueText != undefined) ? this.field.trueText : 'True'
        },
        falseLabel() {
            return (this.field.falseText != undefined) ? this.field.falseText : 'False'
        },
        labelConfig() {
            return {
                checked:  (this.field.show_true_label) ? this.trueLabel : null,
                unchecked: (this.field.show_false_label) ? this.falseLabel : null,
            }
        },
        width() {
            return (this.field.width != undefined) ? this.field.width : 60 //50
        },
        height() {
            return (this.field.height != undefined) ? this.field.height : 26 //22
        },
        trueColor() {
            return (this.field.true_color != undefined) ? this.field.true_color : 'var(--success)'
        },
        falseColor() {
            return (this.field.false_color != undefined) ? this.field.false_color : 'var(--60)'
        },
        colors() {
            return {
                checked: this.trueColor,
                unchecked: this.falseColor,
                disabled: '#CCCCCC'
            }
        },
        speed() {
            return (this.field.speed != undefined) ? this.field.speed : 300
        },
        sanitizedName() {
            return this.field.name.normalize('NFD').replace(/[\u0300-\u036f]/g, "")
        },
    },
}