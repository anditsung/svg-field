Nova.booting((Vue, router, store) => {
  Vue.component('index-svg-field', require('./components/IndexField'))
  Vue.component('detail-svg-field', require('./components/DetailField'))
  Vue.component('form-svg-field', require('./components/FormField'))
})
