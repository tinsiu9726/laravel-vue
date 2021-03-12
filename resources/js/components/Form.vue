<template>
  <div class="content-wrap">
    <!---->
    <v-parallax dark :src="require('./src/barbatos.jpg')">
      <v-row align="center" justify="center">
        <v-col class="text-center" cols="12">
          <h1 class="display-1 font-weight-thin mb-4">Vuetify</h1>
          <h4 class="subheading">Build your application today!</h4>
        </v-col>
      </v-row>
    </v-parallax>

    <br />

    <v-container>
      <v-row justify="center">
        <v-col class="pa-4" cols="9" md="10">
          <v-card>
            <v-card-title
              class="headline font-weight-regular blue-grey white--text"
              pa="4"
              cols="12"
              md="8"
            >
              Personal information
            </v-card-title>
              
                <v-subheader class="pa-0"> Where do you live? </v-subheader>
                <v-card-text>
                  <v-autocomplete
                    v-model="model"
                    :hint="
                      !isEditing
                        ? 'Click the icon to edit'
                        : 'Click the icon to save'
                    "
                    :items="states"
                    :readonly="!isEditing"
                    :label="`State — ${isEditing ? 'Editable' : 'Readonly'}`"
                    persistent-hint
                    prepend-icon="mdi-city"
                  >
                    <template v-slot:append-outer>
                      <v-slide-x-reverse-transition mode="out-in">
                        <v-icon
                          :key="`icon-${isEditing}`"
                          :color="isEditing ? 'success' : 'info'"
                          @click="isEditing = !isEditing"
                          v-text="
                            isEditing
                              ? 'mdi-check-outline'
                              : 'mdi-circle-edit-outline'
                          "
                        ></v-icon>
                      </v-slide-x-reverse-transition>
                    </template>
                  </v-autocomplete>
                </v-card-text>
                
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

              </v-form>
            </v-container>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<!--<script>
  export default {
    data: () => ({
      valid: true,
      name: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => (v && v.length <= 10) || 'Name must be less than 10 characters',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
      select: null,
      items: [
        'Item 1',
        'Item 2',
        'Item 3',
        'Item 4',
      ],
      checkbox: false,
    }),

    methods: {
      validate () {
        this.$refs.form.validate()
      },
      reset () {
        this.$refs.form.reset()
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
    },
  }
</script>-->

<script>
export default {
  data() {
    return {
      isEditing: false,
      model: null,
      states: [
        "Alabama",
        "Alaska",
        "American Samoa",
        "Arizona",
        "Arkansas",
        "California",
        "Colorado",
        "Connecticut",
        "Delaware",
        "District of Columbia",
        "Federated States of Micronesia",
        "Florida",
        "Georgia",
        "Guam",
        "Hawaii",
        "Idaho",
        "Illinois",
        "Indiana",
        "Iowa",
        "Kansas",
        "Kentucky",
        "Louisiana",
        "Maine",
        "Marshall Islands",
        "Maryland",
        "Massachusetts",
        "Michigan",
        "Minnesota",
        "Mississippi",
        "Missouri",
        "Montana",
        "Nebraska",
        "Nevada",
        "New Hampshire",
        "New Jersey",
        "New Mexico",
        "New York",
        "North Carolina",
        "North Dakota",
        "Northern Mariana Islands",
        "Ohio",
        "Oklahoma",
        "Oregon",
        "Palau",
        "Pennsylvania",
        "Puerto Rico",
        "Rhode Island",
        "South Carolina",
        "South Dakota",
        "Tennessee",
        "Texas",
        "Utah",
        "Vermont",
        "Virgin Island",
        "Virginia",
        "Washington",
        "West Virginia",
        "Wisconsin",
        "Wyoming",
      ],
    };
  },
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
