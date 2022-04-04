<template>
    <div>
      <div v-for="(contact, index) in contacts" :key="index">

          <list-contact
          :contact="contact"
          />

      </div>
    </div>
</template>

<script>
import ListContact from "./ListContact.vue"

export default {
    props: ['contacts'],
    components: {
        ListContact
    }
}
</script>

<style>



</style>