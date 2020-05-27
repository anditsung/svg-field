<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <div v-if="value" class="mb-2">
                <svg
                    :width="field.width"
                    :height="field.height"
                    :viewBox="field.viewBox"
                >
                    <path :d="value" />
                </svg>
            </div>
            <textarea
                class="w-full form-control form-input form-input-bordered py-3 h-auto"
                :id="field.attribute"
                :dusk="field.attribute"
                v-model="value"
                v-bind="extraAttributes"
            />
        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    computed: {
        defaultAttributes() {
            return {
                rows: this.field.rows,
                class: this.errorClasses,
                placeholder: this.field.name,
            }
        },

        extraAttributes() {
            const attrs = this.field.extraAttributes

            return {
                ...this.defaultAttributes,
                ...attrs,
            }
        },
    },
}
</script>
