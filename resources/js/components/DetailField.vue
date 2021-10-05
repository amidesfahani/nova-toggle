<template>
    <panel-item :field="field">
        <template v-if="field.inlineDetail">
            <p slot="value" class="text-90">
                <toggle-button
                    :id="sanitizedName"
                    :name="sanitizedName"
                    :value="value"
                    @change="toggle"
                    :labels="labelConfig"
                    :width="width"
                    :height="height"
                    :sync="true"
                    :color="colors"
                    :speed="speed"
                />
            </p>
        </template>
        <template v-else>
            <p slot="value" class="text-90">
                <span
                    class="inline-block rounded-full w-2 h-2 mr-1"
                    :class="{ 'bg-success': field.value, 'bg-danger': !field.value }"></span>
                <span>{{ displayValue }}</span>
            </p>
        </template>
    </panel-item>
</template>

<script>
import InlineInit from './mixins/init'
import InlineMixin from './mixins/inline'
import Options from './mixins/options'

export default {
    mixins: [InlineInit, InlineMixin, Options],

    props: ['resource', 'resourceName', 'resourceId', 'field'],

    data: () => ({
        value: false,
    }),

    mounted() {
        this.value = this.field.value || false
    },

    computed: {
        trueLabel() {
            return (this.field.true_label != undefined) ? this.field.true_label : null
        },

        falseLabel() {
            return (this.field.false_label != undefined) ? this.field.false_label : null
        },

        label() {
            return this.field.value == true ? this.trueLabel : this.falseLabel
        },
    },
}
</script>
