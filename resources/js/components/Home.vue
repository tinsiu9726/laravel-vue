<template>
  <div class="content-wrap">
    <!---->
    <v-parallax
      height="400"
      src="https://i.pinimg.com/originals/be/cf/07/becf07d6e3fd679901a451f2d5d878a3.jpg"
    >
      <div>
        <div class="layout align-center column justify-center">
          <h1 class="display-4 font-weight-black text-xs-center">Contact Us</h1>
          <h2>Let us know how we can be better.</h2>
          <div><br /></div>
        </div>
      </div>
    </v-parallax>

    <br />

    <v-container>
      <v-row no-gutters>
        <v-col class="pa-4" cols="12" md="7">
            <p class="headline font-weight-thin">
              Whether you are looking for specific services in your area or
              provide services to the autism community we want to hear from you!
            </p>
            <p class="headline font-weight-thin">
              Our goal is to create the best online resource to find the right
              autism help and we can only do that with your help.
              <br />
              <br />Tell us how we're doing, how we can get better, or just say
              hi 👋
              <br />
              <br />Always Listening,
              <br />
              <strong>The Spectrum heart Team 💙</strong>
            </p>
        </v-col>
        <v-col cols="12" md="5">
          <div class="m-top v-card v-sheet theme--light elevation-2">
            <div class="v-card__title display-1 font-weight-thin">
              Drop us a note
            </div>
            <v-container>
              <v-form ref="form" v-model="valid" lazy-validation>
                <v-text-field
                  v-model="name"
                  :counter="10"
                  :rules="nameRules"
                  label="Name"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="email"
                  :rules="emailRules"
                  label="E-mail"
                  required
                ></v-text-field>

                <v-textarea
                  clearable
                  clear-icon="mdi-close-circle"
                  label="Write your message here!."
                  required
                ></v-textarea>

                <v-checkbox
                  v-model="checkbox"
                  :rules="[(v) => !!v || 'You must agree to continue!']"
                  label="Please check before send"
                  required
                ></v-checkbox>

                <v-btn
                  
                  color="success"
                  class="mr-4"
                  @click="validate"
                >
                  send
                </v-btn>

                <!--<v-btn color="warning" @click="resetValidation">
                Reset Validation
              </v-btn>-->
              </v-form>
            </v-container>
          </div>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
export default {
  data: () => ({
    valid: true,
    name: "",
    nameRules: [
      (v) => !!v || "Name is required",
      (v) => (v && v.length <= 10) || "Name must be less than 10 characters",
    ],
    email: "",
    emailRules: [
      (v) => !!v || "E-mail is required",
      (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
    ],
    checkbox: false,
  }),

  methods: {
    validate() {
      this.$refs.form.validate();
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    },
  },
};
</script>

<style>
.v-col {
  border: none;
  border-color: transparent;
}
.v-card {
  border: none;
  border-color: transparent;
}
</style>