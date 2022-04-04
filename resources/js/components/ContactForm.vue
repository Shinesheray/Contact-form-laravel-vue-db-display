<template>
    <div class="contactAdd">

        <form> <!-- Form starts here and is handled by the form validator.php file- I decided to use a php file as my html file due to the fact that I could not yet connect the html to php server yet -->
          
            <label for="name">Name:</label>
            <input type="text" maxlength="100" name="name" id="name" v-model="contact.name" required>
        <br>

            <label for="email">Email:</label>
            <input type="text" maxlength="100" name="email" id="email" v-model="contact.email" required> <!-- Always need to add required to prevent the page from rendering  -->

        <br> <!-- This is for the space breaks inbetween each element -->
                                                    
        <br>
        
            <label for="gender"> Gender:</label> <!-- the Gender radio table for the user to select from -->
            <input type="radio" name="radio" value="Female" v-model="contact.gender" required>Female
            <input type="radio" name="radio" value="Male" v-model="contact.gender" required>Male
            <input type="radio" name="radio" value="Other" v-model="contact.gender" required>Other
        <br>
        
        
        <br>
        
            <label for="content"> Content:</label> <!-- Text area table to add the adress of the user with plenty of space and a max length charaters of 100 -->
            <textarea name="content" rows="5" cols="40"  id="content" maxlength="100" v-model="contact.content" required></textarea>
            
            <button type="submit" @click="addContact()">Submit</button>
        </form>
        <!-- Form section closed -->

    </div>

</template>

<script>
export default {
    data: function(){
        return{
            //set the values to null to be able to accept input
            contact: {
                name: "",
                email: "",
                gender: "",
                content: ""
            }           
        } 
    },
    methods: {
        addContact(){
            
            // if there is no data provided do not execute
            if(this.contact.name == '' || this.contact.email == '' || this.contact.gender == ''  || this.contact.content == '' ) {
                return;
            }

            // else if there is data we post to the database the contact details of the user 
            axios.post('/api/contact/store', {
                contact: this.contact
            })
            .then(response => {
                if(response.status == 201){
                    this.contact.name = "";
                    this.contact.email = "";
                    this.contact.gender = "";
                    this.contact.content = "";
                }
                console.log(response);
            })
            .catch(error => {
                console.log(error);
            })
        }
    }
}
</script>