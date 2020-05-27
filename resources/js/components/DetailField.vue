<template>
    <panel-item :field="field">
        <template slot="value">
            <svg
                :width="field.width"
                :height="field.height"
                :viewBox="field.viewBox"
            >
                <path :d="field.value" />
            </svg>
        </template>
    </panel-item>

</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
