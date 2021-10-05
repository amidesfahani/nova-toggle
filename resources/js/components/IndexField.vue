<template>
    <div v-if="field.inlineIndex" slot="field">
        <div class="inline-flex items-center">
            <div v-if="field.textOnIndex" class="flex-1 text-center py-2 m-1">{{ displayValue }}</div>
            <div class="flex-1 text-center py-2 m-1">
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
            </div>
        </div>
    </div>
    <div v-else>
        <div class="inline-flex items-center">
            <div class="flex-1 text-center py-2 m-1">
                <span
                    class="inline-block rounded-full w-2 h-2 mr-1"
                    :class="{ 'bg-success': field.value, 'bg-danger': !field.value }"
                    :style="bgColor">
                </span>
            </div>
            <div v-if="field.textOnIndex" class="flex-1 text-center py-2 m-1">
                {{ displayValue }}
            </div>
        </div>
    </div>

</template>

<script>
import InlineInit from './mixins/init'
import InlineMixin from './mixins/inline'
import Options from './mixins/options'

export default {
    mixins: [InlineInit, InlineMixin, Options],

    props: ['resourceName', 'field'],

    data: () => ({
        value: false,
    }),

    mounted() {
        this.value = this.field.value || false
    },

    computed: {
        trueValue() {
            return +this.checked
        },
        resourceId() {
            return this.$parent.resource.id.value;
        },
        bgColor() {
            return  'background-color:' + (this.value == true ? this.trueColor : this.falseColor) + ';'
        },
    },
}
</script>
