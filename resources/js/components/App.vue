<template>
<div>
    <div  class="contact-form-container">
       <div class="heading"> 
           <h2 id="title">Contact Form</h2>
           <contact-form />
       </div>
    </div>
    <contact-view :contacts="contacts" />
    </div>
</template>
<!--Handle all code from this main component App.vue-->
<script>
import ContactForm from './ContactForm.vue';
import ContactView from './ContactView.vue';
export default {
    components: {
        ContactForm,
        ContactView
    },
    data: function () {
        return {
            contacts:[]
        }
    },
    methods: {
        getList(){
            axios.get('/api/contacts')
            .then(response => {
                this.contacts = response.data
            })
            .catch(erorr => {
                console.log(error);
            })
        }
    },
    created(){
        this.getList();
    }
}
</script>

<style scoped>

.contact-form-container {
    width: 358px;
    margin: auto;
}

.heading{
    background: #e6e6e6;
    padding: 10px;
}

#title {
    text-align: center;
}



</style>