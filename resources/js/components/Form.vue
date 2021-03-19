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

            <!--<v-card-text>
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
            </v-card-text>-->

            <v-container>
              <v-subheader class="pa-0">
                Please fill below questions
              </v-subheader>
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

                <v-radio-group>
                  Gender
                  <v-radio :label="`Male`" :value="1"></v-radio>
                  <v-radio :label="`Female`" :value="2"></v-radio>
                </v-radio-group>

                <v-select
                  :items="items"
                  label="How to know us?"
                  dense
                ></v-select>

                <v-textarea
                  clearable
                  clear-icon="mdi-close-circle"
                  label="What is your hobby?"
                  required
                ></v-textarea>

                <v-checkbox
                  v-model="checkbox"
                  :rules="[(v) => !!v || 'You must agree to continue!']"
                  label="Please click agree"
                  required
                ></v-checkbox>

                <v-btn color="success" class="mr-4" @click="validate">
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

<script>
export default {
  data() {
    return {
      radioGroup: 1,
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
    select: null,
    items: ["ad.", "Friends", "Website", "Others"],
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

