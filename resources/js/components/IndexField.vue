<template>
    <svg
        height="24"
        viewBox="0 0 200 24"
    >
        <path :d="field.value" />
    </svg>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
